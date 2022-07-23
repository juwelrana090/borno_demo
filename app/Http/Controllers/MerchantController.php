<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Views;
use App\Models\Classes;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class MerchantController extends Controller
{
    public function index()
    {
        return Inertia::render('Home')
        ->withViewData(['title' => 'Borno Bangla | Online Admission']);
    }

    public function class()
    {
        return Inertia::render('Home')
        ->withViewData(['title' => 'Borno Bangla | Online Admission']);
    }

    public function classAdd()
    {
        return view('merchant.classAdd');
    }

    public function classStore(Request $request)
    {
        $this->validate($request, [
            'user_id' => ['required'],
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'    => ['required'],
            'class'   => ['required'],
            'price'   => ['required'],
        ]);


        $image = time().'-'.$request->file('image')->getClientOriginalName(); 
        
        $request->image->move(public_path('images'), $image);
     
        $nowdate = date('d, F, Y g:i A');

        $class = Classes::create([
                    'user_id' => $request->user_id,
                    'image'   => $image,
                    'name'    => $request->name,
                    'class'   => $request->class,
                    'price'   => $request->price,
                    'status'  => 'Approved',
                    'date_at' => $nowdate,
                ]);

        return Redirect::route('mer.classList')->with('success', 'Class add successfuly...');
    }

    public function classList()
    {
        $classes = Classes::latest()->paginate(10);
        return view('merchant.classList', [
            'classes' => $classes,
        ]);
    }

    public function requestPending()
    {
        return view('merchant.requestPending');
    }

    public function requestAccept()
    {
        return view('merchant.requestAccept');
    }

    public function requestComplete()
    {
        return view('merchant.requestComplete');
    }

    public function application()
    {
        return view('merchant.application');
    }

    public function applly(Request $request)
    {
        $this->validate($request, [
            'user_id'       => ['required'],
            'name'          => ['required'],
            'phone'         => ['required'],
            'email'         => ['required'],
            'type'          => ['required'],
            'description'   => ['required'],
        ]);

        $nowdate = date('d, F, Y g:i A');

        $application = Application::create([
                    'user_id'     => $request->user_id,
                    'name'        => $request->name,
                    'phone'       => $request->phone,
                    'email'       => $request->email,
                    'type'        => $request->type,
                    'description' => $request->description,
                    'date_at'     => $nowdate,
                ]);

        return Redirect::route('My.Account')->with('success', 'Merchant application applly successfuly...');
    }

    /* Admin Merchant Start */
    
    public function List()
    {
        $users = User::latest()->where('role', "=", 'Merchant')->paginate(10);
        return view('admin.merchant.list', [
            'users' => $users,
        ]);
    }

    public function applications()
    {
        $applications = Application::latest()->paginate(10);
        return view('admin.merchant.applications', [
            'applications' => $applications,
        ]);
    }
    
    public function appliView($id)
    {
        $application = Application::where('id', "=", $id)->first();
        return view('admin.merchant.appliView', [
            'application' => $application,
        ]);
    }

    public function appUpdate(Request $request)
    {
        
        $this->validate($request, [
            'status'       => ['required'],
        ]);

        $nowdate = date('d, F, Y g:i A');

        if ($request->status == 'Approved') {
            $user = User::where('id', $request->user_id)->update([
                'role' => 'Merchant',
                'merchant' => '1',
                'merchant_type' => $request->type,
            ]);
        }

        $application = Application::where('id', $request->id)->update([
                    'status' => $request->status,
                ]);

        return Redirect::route('merchant.appliView', $request->id)->with('success', 'Merchant application update successfuly...');
    }

    /* Admin Merchant End */

}
