<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('my.myDashboard');
    }

    // public function index()
    // {
    //     $users = User::all();
        
    //     return Inertia::render('Users', [
    //         'users' => $users->map(function ($user) {
    //             return [
    //                 'id' => $user->id,
    //                 'name' => $user->name,
    //                 'phone' => $user->phone,
    //                 'edit_url' => URL::route('users.edit', $user),
    //             ];
    //         }),
    //         'create_url' => URL::route('users.create'),
    //     ])->withViewData(['title' => 'User Crud Operations']);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'name' => ['required'],
            'phone' => ['required','unique:users'],
            'phone' => ['required','unique:users'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $nowdate = date('d, F, Y g:i A');

        $user = User::create([
                    'name'      => $request->name,
                    'phone'     => $request->phone,
                    'password'  => bcrypt($request->password),
                    'date_at'   => $nowdate,
                ]);

        return Inertia::render('Home',[
            'success' => 'User registion successfuly...',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return Inertia::render('Edit', [
            'id' => $user->id,
            'name' => $user->name,
            'phone' => $user->phone,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required'],
            'phone' => ['required','phone','unique:users'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);

        User::find($id)->update($request->all());
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
