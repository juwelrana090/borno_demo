<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/preparation', [HomeController::class, 'preparation'])->name('preparation'); 
Route::get('/study-abroad', [HomeController::class, 'studyAbroad'])->name('studyAbroad'); 
Route::get('/scholarship', [HomeController::class, 'scholarship'])->name('scholarship'); 
Route::get('/career-coach', [HomeController::class, 'careerCoach'])->name('careerCoach'); 
Route::get('/school', [HomeController::class, 'school'])->name('school'); 
Route::get('/collage', [HomeController::class, 'collage'])->name('collage'); 
Route::get('/university', [HomeController::class, 'university'])->name('university'); 

Route::get('/tutor', [HomeController::class, 'tutor'])->name('tutor'); 
Route::get('/tutor/profile', [HomeController::class, 'tutorProfile'])->name('tutorProfile'); 

Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs'); 
Route::get('/books', [HomeController::class, 'books'])->name('books'); 

Route::get('/affiliate-program', [PageController::class, 'affiliate'])->name('affiliate'); 
Route::get('/partner-directory', [PageController::class, 'partner'])->name('partner'); 
Route::get('/membership', [PageController::class, 'membership'])->name('membership'); 
Route::get('/ads-promotions', [PageController::class, 'promotions'])->name('promotions'); 
Route::get('/about-us', [PageController::class, 'about'])->name('about'); 
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact'); 
Route::get('/faq', [PageController::class, 'faq'])->name('faq'); 
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms'); 
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy'); 
Route::get('/refund-policy', [PageController::class, 'refund'])->name('refund'); 
Route::get('/admission-policy', [PageController::class, 'admission'])->name('admissionPolicy'); 


Route::get('class-view/{id}', [PageController::class, 'classView'])->name('classView'); 





Route::get('/login', [AuthController::class, 'index'])->name('login'); 
Route::post('/login', [AuthController::class, 'uLogin'])->name('login.uLogin');  
Route::get('/logout', [AuthController::class, 'signOut'])->name('logout.signOut');  

Route::get('/register', [AuthController::class, 'register'])->name('register'); 
Route::post('/register', [AuthController::class, 'create'])->name('register.create'); 

Route::resource('users', UserController::class);


Route::group(['prefix' => 'my-account', 'middleware' => ['auth']],  function () 
{
    Route::get('/', [UserController::class, 'index'])->name('My.Account'); 
    Route::get('/merchant-application', [MerchantController::class, 'application'])->name('application'); 
    Route::post('/application', [MerchantController::class, 'applly'])->name('mer.applly'); 

    Route::get('/class-add', [MerchantController::class, 'classAdd'])->name('mer.classAdd'); 
    Route::post('/classAdd', [MerchantController::class, 'classStore'])->name('mer.classStore'); 
    Route::get('/class-list', [MerchantController::class, 'classList'])->name('mer.classList'); 
    Route::get('/request-pending', [MerchantController::class, 'requestPending'])->name('request.pending'); 
    Route::get('/request-accept', [MerchantController::class, 'requestAccept'])->name('request.accept'); 
    Route::get('/request-complete', [MerchantController::class, 'requestComplete'])->name('request.complete'); 
    
    Route::group( [ 'prefix' => 'user'],  function () 
    {
        Route::get('/', [UserController::class, 'index'])->name('user.index'); 
        Route::get('/add', [UserController::class, 'add'])->name('user.add'); 
        Route::post('/create', [UserController::class, 'create'])->name('user.create'); 
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('user.update');
        Route::post('/pchange', [UserController::class, 'pchange'])->name('user.pchange');
        Route::get('delete/{user}', [UserController::class, 'delete'])->name('user.delete'); 
    });

});

Route::group(['prefix' => 'badmin', 'middleware' => ['auth','isAdmin']],  function () 
{
    Route::get('/', [AdminController::class, 'index'])->name('admin.index'); 
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); 

    Route::group( [ 'prefix' => 'merchant'],  function () 
    {
        Route::get('/', [MerchantController::class, 'list'])->name('merchant.list'); 
        Route::get('/applications', [MerchantController::class, 'applications'])->name('merchant.applications'); 
        Route::get('/applications/{id}', [MerchantController::class, 'appliView'])->name('merchant.appliView'); 
        Route::post('/app-update', [MerchantController::class, 'appUpdate'])->name('merchant.appUpdate');

        Route::get('/add', [MerchantController::class, 'index'])->name('merchant.add'); 
        Route::post('/create', [MerchantController::class, 'create'])->name('merchant.create'); 
        Route::get('/edit/{id}', [MerchantController::class, 'edit'])->name('merchant.edit');
        Route::post('/update', [MerchantController::class, 'update'])->name('merchant.update');
        Route::get('delete/{mirror}', [MerchantController::class, 'delete'])->name('merchant.delete'); 
    });

    Route::group( [ 'prefix' => 'page'],  function () 
    {
        Route::get('/', [PagesController::class, 'index'])->name('page.index'); 
        Route::get('/add', [PagesController::class, 'index'])->name('page.add'); 
        Route::post('/create', [PagesController::class, 'create'])->name('page.create'); 
        Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('page.edit');
        Route::post('/update', [PagesController::class, 'update'])->name('page.update');
        Route::get('delete/{mirror}', [PagesController::class, 'delete'])->name('page.delete'); 
    });
    
    Route::group( [ 'prefix' => 'ads'],  function () 
    {
        Route::get('/', [AdsController::class, 'index'])->name('ads.index'); 
        Route::get('/add', [AdsController::class, 'index'])->name('ads.add'); 
        Route::post('/create', [AdsController::class, 'create'])->name('ads.create'); 
        Route::get('/edit/{id}', [AdsController::class, 'edit'])->name('ads.edit');
        Route::post('/update', [AdsController::class, 'update'])->name('ads.update');
        Route::get('delete/{page}', [AdsController::class, 'delete'])->name('ads.delete'); 
    });

    Route::group( [ 'prefix' => 'notis'],  function () 
    {
        Route::get('/', [NotificationController::class, 'index'])->name('notis.index'); 
        Route::get('/add', [NotificationController::class, 'index'])->name('notis.add'); 
        Route::post('/create', [NotificationController::class, 'create'])->name('notis.create'); 
        Route::get('/edit/{id}', [NotificationController::class, 'edit'])->name('notis.edit');
        Route::post('/update', [NotificationController::class, 'update'])->name('notis.update');
        Route::get('delete/{notification}', [NotificationController::class, 'delete'])->name('notis.delete'); 
    });
    
    Route::group( [ 'prefix' => 'setting'],  function () 
    {
        Route::get('/', [SettingsController::class, 'index'])->name('setting.index'); 
        Route::get('/add', [SettingsController::class, 'index'])->name('setting.add'); 
        Route::post('/create', [SettingsController::class, 'create'])->name('setting.create'); 
        Route::get('/edit/{id}', [SettingsController::class, 'edit'])->name('setting.edit');
        Route::post('/update', [SettingsController::class, 'update'])->name('setting.update');
        Route::post('/updateStorag', [SettingsController::class, 'updateStorag'])->name('setting.updateStorag');
        Route::get('delete/{setting}', [SettingsController::class, 'delete'])->name('setting.delete'); 
        Route::get('/license', [SettingsController::class, 'license'])->name('setting.license'); 
        Route::post('/updateLicense', [SettingsController::class, 'updateLicense'])->name('setting.updateLicense');
        Route::post('/LicenseGenerator', [SettingsController::class, 'LicenseGenerator'])->name('setting.LicenseGenerator');
        
    });
    
    Route::group( [ 'prefix' => 'user'],  function () 
    {
        Route::get('/', [UserController::class, 'index'])->name('user.index'); 
        Route::get('/add', [UserController::class, 'add'])->name('user.add'); 
        Route::post('/create', [UserController::class, 'create'])->name('user.create'); 
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/update', [UserController::class, 'update'])->name('user.update');
        Route::post('/pchange', [UserController::class, 'pchange'])->name('user.pchange');
        Route::get('delete/{user}', [UserController::class, 'delete'])->name('user.delete'); 
    });

});
