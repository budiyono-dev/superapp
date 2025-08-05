<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\OtpLogin;
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

        if (Auth::attempt($request->only('email', 'password')))
        {
            $otp = rand(100000, 999999);
            // input to otp login table
            OtpLogin::create([
                'otp' => $otp,
                'user_id' => Auth::id(),
                'ip_address' => $request->ip(),
                'status' => 'UNUSED',
                'attempts' => 0,
            ]);

            session(['otp' => $otp]);
            Mail::raw('Your OTP is: ' . $otp, function ($message) use ($request) {
                $message->to($request->email)->subject('Your OTP Code');
            });
            return redirect()->route('otp.form');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
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
        if (!$sOtp) {
            back()->withErrors(['otp' => 'Invalid OTP']);
        }
        $otp = OtpLogin::where('user_id', Auth::id())
                ->where('otp', $request->otp)
                ->firstOrFail();
        if ($request->otp == $sOtp) {
            $otp->update(['status' => 'USED']);
            session()->forget('otp');
            return redirect('/');
        } else {
            $otp->update(['attempts' => 0]);
        }
        return back()->withErrors(['otp' => 'Invalid OTP']);
    }
}
