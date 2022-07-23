
<?php 

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


$id = Auth::user()->id;
$user = User::where('id', "=", $id)->first();


?>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('My.Account') }}">
                            <i class="mdi mdi-home-variant-outline me-2"></i> Dashboard
                        </a>
                    </li>

                    
                    <?php if($user->role == 'Merchant'){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="Class" role="button">
                            <i class="mdi mdi-google-classroom me-2"></i>Class <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Class">
                            <a href="{{ route('mer.classAdd') }}" class="dropdown-item">Class Add</a>
                            <a href="{{ route('mer.classList') }}" class="dropdown-item">Class List</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="Request" role="button">
                                    Class Request <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="Request">
                                    <a href="{{ route('request.pending') }}" class="dropdown-item">Pending</a>
                                    <a href="{{ route('request.accept') }}" class="dropdown-item">Accept</a>
                                    <a href="{{ route('request.complete') }}" class="dropdown-item">Complete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if($user->role == 'User'){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button">
                            <i class="ri-apps-2-line me-2"></i>Orders <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="#" class="dropdown-item">Orders List</a>
                            <a href="#" class="dropdown-item">Orders History</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>