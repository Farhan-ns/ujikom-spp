<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->guard('admin')->check()) {
            return view('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        
        $this->validator($request);

        $credentials = $request->except('_token');

        if (auth()->guard('admin')->attempt(
            $credentials,
            $request->filled('remember'))) {
                return redirect()
                    ->intended(route('admin.dashboard'));
        }

        return $this->loginFailed();
    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect(route('admin.login'));
    }

    public function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Sign In gagal, coba lagi');
    }

    public function validator(Request $request)
    {
        $rules = [
            'username' => 'required|min:5|max:255',
            'password' => 'required|string|min:4|max:255',
        ];

        $messages = [
            'username.required' => 'Harap isi field username'
        ];

        $request->validate($rules, $messages);
    }
}
