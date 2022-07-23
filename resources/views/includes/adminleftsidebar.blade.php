<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="mdi mdi-home-variant-outline"></i>
                        <!-- <span class="badge rounded-pill bg-primary float-end">3</span> -->
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-box-multiple"></i>
                        <span>Merchant</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('merchant.applications') }}">Application</a></li>
                        <li><a href="{{ route('merchant.list') }}">Merchant List</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-book-open-page-variant-outline"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Country</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-google-ads"></i>
                        <span>Ads Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Ads</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-notification-clear-all"></i>
                        <span>Notification</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Manage Notis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-cog-outline"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('setting.index') }}">Manage Setting</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-group"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.add') }}">Add User</a></li>
                        <li><a href="{{ route('user.index') }}">Users Manage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('logout.signOut') }}" class="waves-effect">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
                        <span  class="me-1 text-danger">Logout</span>
                    </a>
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->