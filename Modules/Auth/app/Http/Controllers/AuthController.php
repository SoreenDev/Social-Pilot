<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Auth\Models\User;

class AuthController extends Controller
{
    public function registerPage(): View
    {
        return view('AdminDashboard.Auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
           DB::transaction(function () use ($request) {
               $user = User::create($request->validated());
               Auth::login($user);
           });
        }catch (\Exception $exception){
            logger($exception->getMessage());
            return redirect()->back()->with('error', __('auth.register.failed'));
        }
        return redirect('/')->with('success', __('auth.register.success'));
    }

    public function loginPage(): View
    {
        return view('AdminDashboard.Auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect()->intended('/')->with('success', __('auth.login.success'));
        }
        return redirect()->back()->with('error', __('auth.login.failed'));
    }
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerate();

        return redirect('/');
    }
}
