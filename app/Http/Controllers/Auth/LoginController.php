<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
 class LoginController extends Controller
{
    use AuthenticatesUsers;
     
    // Redirect to the desired location after successful login
    protected function redirectTo()
    {
        return '/dashboard'; // Replace with the desired URL
    }

    // Display the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Validate the login credentials
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
            // Define the username field
            public function username()
            {
                return 'email'; // Replace with the desired username field (e.g., 'username')
            }
}
