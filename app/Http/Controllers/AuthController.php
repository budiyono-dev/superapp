<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\OtpLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::validate($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->first();
            $otp = $this->generateOtp();
            // input to otp login table
            OtpLogin::create([
                'otp' => $otp,
                'user_id' => $user->id,
                'ip_address' => $request->ip(),
                'status' => 'UNUSED',
                'attempts' => 0,
            ]);

            session(['otp' => $otp, 'pre_auth_user_id' => $user->id]);
            $mailEnabled = Configuration::where('cfg_key', 'login_mail_enabled')->first();
            if (!is_null($mailEnabled) && $mailEnabled->cfg_value === '1') {
                Mail::raw('Your OTP is: '.$otp, function ($message) use ($request) {
                    $message->to($request->email)->subject('Your OTP Code');
                });
            }

            return redirect()->route('otp.form');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function showForgotForm()
    {
        return view('auth.forgot');
    }

    public function showOtpForm()
    {
        return view('auth.otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|digits:6']);
        $sOtp = session('otp');
        $userId = session('pre_auth_user_id');
        if (! $sOtp || ! $userId) {
            info("otp not found, userId: $userId");
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }
        $otp = OtpLogin::where('user_id', $userId)->latest()->first();
        if ($otp->status === 'USED') {
            info("otp already used, otp: $otp->id, userId: $userId");
            return back()->withErrors(['otp' => 'OTP expired']);
        }
        if ($otp->created_at->diffInSeconds(now()) > 300) {
            info("otp expired, otp: $otp->id, userId: $userId");
            $otp->update(['status' => 'EXPIRED']);

            return back()->withErrors(['otp' => 'OTP expired']);
        }
        if ($request->otp == $sOtp) {
            $otp->update(['status' => 'USED']);
            session()->forget(['otp', 'pre_auth_user_id']);
            Auth::loginUsingId($userId);

            return redirect('/');
        } else {
            info("otp mismatch, userId: $userId");
            $otp->update(['attempts' => 0]);
        }

        return back()->withErrors(['otp' => 'Invalid OTP']);
    }

    private function generateOtp(): string
    {
        $otp = '';
        for ($i = 0; $i < 6; $i++) {
            $otp .= rand(0, 9);
        }

        return $otp;
    }
}
