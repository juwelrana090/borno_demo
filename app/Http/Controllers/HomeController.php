<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Classes;

class HomeController extends Controller
{
    public function index()
    {
        $classes = Classes::latest()->paginate(10);
        return Inertia::render('Home',[
            'classes' => $classes->map(function ($classes) {
                return [
                    'id' => $classes->id,
                    'image' => $classes->image,
                    'name' => $classes->name,
                    'subject' => $classes->class,
                    'price' => $classes->price,
                    'reting' => $classes->reting,
                ];
            })
        ])->withViewData(['title' => 'Borno Bangla | Online Admission']);
    }


    public function preparation()
    {
        return Inertia::render('Preparation')
        ->withViewData(['title' => 'Preparation | BornoBangla.com']);
    }

    public function studyAbroad()
    {
        return Inertia::render('StudyAbroad')
        ->withViewData(['title' => 'Study Abroad | BornoBangla.com']);
    }

    public function scholarship()
    {
        return Inertia::render('Scholarship')
        ->withViewData(['title' => 'Scholarship | BornoBangla.com']);
    }

    public function careerCoach()
    {
        return Inertia::render('CareerCoach')
        ->withViewData(['title' => 'Career Coach | BornoBangla.com']);
    }

    public function school()
    {
        return Inertia::render('School')
        ->withViewData(['title' => 'School | BornoBangla.com']);
    }

    public function collage()
    {
        return Inertia::render('Collage')
        ->withViewData(['title' => 'Collage | BornoBangla.com']);
    }

    public function university()
    {
        return Inertia::render('University')
        ->withViewData(['title' => 'University | BornoBangla.com']);
    }

    public function tutor()
    {
        $classes = Classes::latest()->paginate(10);
        return Inertia::render('Tutor',[
            'classes' => $classes->map(function ($classes) {
                return [
                    'id' => $classes->id,
                    'image' => $classes->image,
                    'name' => $classes->name,
                    'subject' => $classes->class,
                    'price' => $classes->price,
                    'reting' => $classes->reting,
                ];
            })
        ])->withViewData(['title' => 'Tutor | BornoBangla.com']);
    }

    public function tutorProfile()
    {
        return Inertia::render('Profiles/TutorProfile')
        ->withViewData(['title' => 'Tutor Profile | BornoBangla.com']);
    }




    public function jobs()
    {
        return Inertia::render('Jobs')
        ->withViewData(['title' => 'Jobs | BornoBangla.com']);
    }

    public function books()
    {
        return Inertia::render('Books')
        ->withViewData(['title' => 'Books | BornoBangla.com']);
    }










}
