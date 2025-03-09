<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if (session('active') == true) {
            return redirect()->route('home');
        }

        return view('index');
    }

    public function home()
    {
        if (session('active') == false) {
            return redirect()->route('index');
        }

        return view('home'); 
    }

    public function login()
    {
        if (session('active') == true) {
            return redirect()->route('home');
        }

        return view('login');
    }

    public function register()
    {
        if (session('active') == true) {
            return redirect()->route('home');
        }

        return view('register');
    }

    public function logining(Request $r)
    {
        try {
            $email = trim($r['email']);
            $user = UserModel::where('email', $email)->first();

            if (!$user || !Hash::check($r['password'], $user->password)) {
                return redirect()->route('index')->with('error', 'Login invalid!');
            }

            session()->put('active', true);
            session()->put('email', $user->email); 

            return redirect()->route('home')->with('msg', 'Logged in successfully!');
        } catch (\Exception $e) {
            //die($e);
            return redirect()->back()->with('error', 'An error occurred during login!' . $e);
        }
    }

    public function registering(Request $r)
    {
        try {
            $r['email'] = trim($r['email']);
            $r['password'] = trim($r['password']);

            $user = UserModel::where('email', $r['email'])->first();

            if ($user) {
                return redirect()->route('index')->with('warning', 'User already exists with this email!');
            }

            $r['password'] = Hash::make($r['password']);
            UserModel::create($r->all());

            session()->put('active', true);
            session()->put('email', $r['email']); 

            return redirect()->route('home')->with('msg', 'User registered successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred during registration!');
        }
    }

    public function logout()
    {
        try {
            session()->flush(); 
            return redirect()->route('index')->with('msg', 'Logged out successfully!');
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'An error occurred during logout!');
        }
    }
}