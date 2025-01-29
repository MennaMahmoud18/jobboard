<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class AccountController extends Controller
{
    public function register()
    {
        return view('Account.register');
    }
    public function store(Request $request)
    {
    
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',  
        'phone_number' => 'required|string|max:20',
        'Age' => 'required|integer|min:18|max:100',
        'gender' => 'required|in:male,female',
        'role' => 'required|in:Admin,employee,Candidate',
        'password' => 'required|min:6|confirmed',
        'profile_image' => 'nullable|image|max:2048',
    ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('uploads', 'public');
        } else {
            $imagePath = 'job-board\job-board\storage\app\public\uploads\85oRw87phchMcENLvIF5hrlT77nvhodYYY94ke0C.jpg'; // الصورة الافتراضية
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'Age' => $validated['Age'],
            'gender' => $validated['gender'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
            'profile_image' => $imagePath,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10), 
        ]);

        return redirect()->route('Account.logins')->with('success', 'Registration successful! Please log in.');
    }
    public function login()
    {
        return view('Account.login'); 
    }
    
    public function submit(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

     
        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/profile'); 
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    
    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/logins'); 
    }

    
    

}