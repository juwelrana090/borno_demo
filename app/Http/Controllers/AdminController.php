<?php

namespace App\Http\Controllers;

use App\Models\Views;
use App\Models\Storages;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class AdminController extends Controller
{
    public function index()
    {
        $date1 = date('d, F, Y'); 
        $date2 = Date('d, F, Y', strtotime('-1 days'));
        $date3 = Date('d, F, Y', strtotime('-2 days'));
        $date4 = Date('d, F, Y', strtotime('-3 days'));
        $date5 = Date('d, F, Y', strtotime('-4 days'));
        $date6 = Date('d, F, Y', strtotime('-5 days'));
        $date7 = Date('d, F, Y', strtotime('-6 days'));

        $views1   = Views::where('date_at', "=", $date1)->get();
        $views2   = Views::whereIn('date_at', [$date1, $date2, $date3, $date4, $date5, $date6, $date7])->get();
        $totalvew = Views::get();

        return view('admin.dashboard', [
            'views'    => $views1,
            'day2viw'  => $views1->count(),
            'day7viw'  => $views2->count(),
            'totalvew' => $totalvew->count(),
        ]);
    }

    

}
