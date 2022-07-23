<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class PageController extends Controller
{
    public function affiliate()
    {
        return Inertia::render('Partners/Affiliate')
        ->withViewData(['title' => 'Affiliate Program | BornoBangla.com']);
    }

    public function partner()
    {
        return Inertia::render('Partners/Partner')
        ->withViewData(['title' => 'Partner directory | BornoBangla.com']);
    }

    public function membership()
    {
        return Inertia::render('Partners/Membership')
        ->withViewData(['title' => 'Membership | BornoBangla.com']);
    }

    public function promotions()
    {
        return Inertia::render('Partners/Promotions')
        ->withViewData(['title' => 'Ads Promotions | BornoBangla.com']);
    }

    public function about()
    {
        return Inertia::render('About/About')
        ->withViewData(['title' => 'About | BornoBangla.com']);
    }

    public function faq()
    {
        return Inertia::render('About/Faq')
        ->withViewData(['title' => 'FAQ | BornoBangla.com']);
    }

    public function terms()
    {
        return Inertia::render('About/Terms')
        ->withViewData(['title' => 'Terms and Conditions | BornoBangla.com']);
    }

    public function privacy()
    {
        return Inertia::render('About/Privacy')
        ->withViewData(['title' => 'Privacy Policy | BornoBangla.com']);
    }

    public function contact()
    {
        return Inertia::render('Help/Contact')
        ->withViewData(['title' => 'Contact US | BornoBangla.com']);
    }

    public function refund()
    {
        return Inertia::render('Help/Refund')
        ->withViewData(['title' => 'Refund Policy | BornoBangla.com']);
    }

    public function admission()
    {
        return Inertia::render('Help/AdmissionPolicy')
        ->withViewData(['title' => 'Admission Policy | BornoBangla.com']);
    }

    public function classView($id)
    {   $myid   = Auth::user()->id;
        $classes = Classes::where('id', "=", $id)->first();;
        return Inertia::render('classes/ClassView',[
            'classes' => [
                    'myid'    => $myid,
                    'id'      => $classes->id,
                    'user_id' => $classes->user_id,
                    'image'   => $classes->image,
                    'name'    => $classes->name,
                    'subject' => $classes->class,
                    'price'   => $classes->price,
                    'reting'  => $classes->reting,
                    'status'  => $classes->status,
                    'date_at' => $classes->date_at,
                ]
        ])->withViewData(['title' => 'Admission Policy | BornoBangla.com']);
    }






    

}
