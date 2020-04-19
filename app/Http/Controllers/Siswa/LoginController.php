<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        if (Auth::guard('siswa')->check()) {
            return redirect()->route('siswa.home');
        }

        return view('siswa.login');
    }

    public function login(Request $request)
    {
        $this->validator($request);

        $credentials = $request->except('_token');
        if (Auth::guard('siswa')->attempt(
            $credentials,
            $request->filled('remember'))) {
                return redirect()
                    ->intended(route('siswa.home'));
        }
        
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('siswa')->logout();
        return redirect()
            ->route('siswa.login');
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
            'nisn' => 'required|digits:10',
            'password' => 'required|string|min:4|max:255'
        ];

        $messages = [
            'email.exists' => 'Kredensial NISN/Password tidak dapat ditemukan'
        ];

        $request->validate($rules, $messages);
    }
}
