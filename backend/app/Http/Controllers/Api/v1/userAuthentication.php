<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Registartion;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class userAuthentication extends Controller
{
    public function RegistartionOtp(Registartion $request)
    {
        $validation = $request->validated();
        $validation['password'] = Hash::make($validation['password']);
        $otp = rand(100000, 999999);
        $cacheKey = 'otp_' . $validation['email'];
        
        Cache::put($cacheKey, [
            'userData' => $validation,
            'otp' => $otp
        ], now()->addMinutes(10));
        Mail::to($validation['email'])->send(new OtpMail($otp));
        
        return response()->json([
            'success' => true,
            'message' => 'Otp send to your email'
        ], 200);
    }
    public function verify(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6'
        ]);

        $cacheKey = 'otp_' . $validation['email'];
        if(!Cache::has($cacheKey)){
            return response()->json([
                'success' => false,
                'message' => 'OTP expired or invalid email.'
            ], 400);
        }

        $cachedData = Cache::get($cacheKey);
        if((string)$cachedData['otp'] !== (string)$validation['otp']){
            return response()->json([
                'success' => false,
                'message' => 'Invalid OTP.'
            ], 400);    
        }

        $user = User::create($cachedData['userData']);
        Cache::forget($cacheKey);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'token' => $token,
            'user' => $user 
        ], 200);    
    }
}