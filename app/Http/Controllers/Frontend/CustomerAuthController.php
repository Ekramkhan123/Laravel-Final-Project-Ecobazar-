<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CustomerAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('customer.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('customer')->attempt($credentials, $request->remember)) {
            return redirect()->route('frontend.customer.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'fname'    => 'required|string|max:255',
            'lname'    => 'required|string|max:255',
            'email'    => 'required|email|unique:customers',
            'password' => 'required|confirmed|min:6',
        ]);

        $customer = Customer::create([
            'fname'    => $data['fname'],
            'lname'    => $data['lname'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::guard('customer')->login($customer);

        return redirect()->route('frontend.customer.dashboard');
    }


    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('frontend.index');
    }
}
