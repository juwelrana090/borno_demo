<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;



class AuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login')
        ->withViewData(['title' => 'Account Login | BornoBangla.com']);
    }  
    
    public function register()
    {
        return Inertia::render('Auth/Register')
        ->withViewData(['title' => 'User Register | BornoBangla.com']);
    } 
    
    
    public function uLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return Redirect::route('home')->with('success', 'Login successfuly');
        }
        
        return Redirect::route('login')->with('error', 'Login details are not valid');
    }

      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'name' => ['required'],
            'phone' => ['required','unique:users'],
            'email' => ['required','unique:users'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $nowdate = date('d, F, Y g:i A');

        $user = User::create([
                    'name'      => $request->name,
                    'phone'     => $request->phone,
                    'email'     => $request->email,
                    'password'  => bcrypt($request->password),
                    'date_at'   => $nowdate,
                ]);

        return Redirect::route('home')->with('success', 'User registion successfuly...');
    } 
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
        return Inertia::render('Auth/Login');
    }
}