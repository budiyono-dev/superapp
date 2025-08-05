<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;
use App\Models\User;

class AuthEndpointsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_login_form_displays()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200)->assertSee('Login');
    }

    public function test_register_form_displays()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200)->assertSee('Register');
    }

    public function test_forgot_password_form_displays()
    {
        $response = $this->get(route('password.request'));
        $response->assertStatus(200)->assertSee('Forgot Password');
    }

    public function test_otp_form_displays()
    {
        $response = $this->get(route('otp.form'));
        $response->assertStatus(200)->assertSee('OTP');
    }

    public function test_register_creates_user_and_sends_otp()
    {
        Notification::fake();
        $data = [
            'name' => 'Test User',
            'email' => $this->faker->unique()->safeEmail(),
            'password' => 'password',
            'password_confirmation' => 'password',
        ];
        $response = $this->post(route('register'), $data);
        $response->assertRedirect(route('otp.form'));
        $this->assertDatabaseHas('users', ['email' => $data['email']]);
    }

    public function test_login_with_valid_credentials_redirects_to_otp()
    {
        $user = User::factory()->create(['password' => bcrypt('password')]);
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $response->assertRedirect(route('otp.form'));
    }

    public function test_login_with_invalid_credentials_fails()
    {
        $response = $this->post(route('login'), [
            'email' => 'wrong@example.com',
            'password' => 'wrongpassword',
        ]);
        $response->assertSessionHasErrors('email');
    }

    public function test_logout_logs_out_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->post(route('logout'));
        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_forgot_password_sends_otp()
    {
        Notification::fake();
        $user = User::factory()->create();
        $response = $this->post(route('password.email'), ['email' => $user->email]);
        $response->assertRedirect(route('otp.form'));
    }

    public function test_otp_verification_with_valid_otp()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        session(['otp' => '123456']);
        $response = $this->post(route('otp.verify'), ['otp' => '123456']);
        $response->assertRedirect('/');
    }

    public function test_otp_verification_with_invalid_otp()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        session(['otp' => '123456']);
        $response = $this->post(route('otp.verify'), ['otp' => '654321']);
        $response->assertSessionHasErrors('otp');
    }
}
