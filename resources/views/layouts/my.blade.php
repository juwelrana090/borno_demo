<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('custom')
    @include('includes.myhead')
</head>
<body data-topbar="dark" data-layout="horizontal">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        
    @include('includes.myHeader')
    @include('includes.myTopnav')

    @if(session()->has('success'))
        <script>
            Toastify({
                    text: '<?php echo session()->get('success') ?>',
                    className: 'info',
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity:'top',
                    position:'right',
                    stopOnFocus: true,
                    style: {
                        background: 'linear-gradient(to right, #00b09b, #96c93d)',
                    },
                    onClick: function(){} 
            }).showToast();
        </script>
    @endif

    @if(session()->has('error'))
        <script>
            Toastify({
                    text: '<?php echo session()->get('error') ?>',
                    className: 'info',
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity:'top',
                    position:'right',
                    stopOnFocus: true,
                    style: {
                        background: 'linear-gradient(to right, var(--bs-pink), var(--bs-danger))',
                    },
                    onClick: function(){} 
            }).showToast();
        </script>
    @endif

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
    @yield('content')
            </div>
        </div>
    </div>

    @include('includes.adminfooter')

    </div>
    <!-- END layout-wrapper -->

    @include('includes.adminrightbar')


    <!-- JAVASCRIPT -->
    <!-- <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script> -->
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts js -->
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('admin/assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script> -->
    <?php
    use App\Models\Views;

    $year = date('y');

    $date1  = "January, ".date('Y'); 
    $date2  = "February, ".date('Y');
    $date3  = "March, ".date('Y');
    $date4  = "April, ".date('Y');
    $date5  = "May, ".date('Y');
    $date6  = "June, ".date('Y');
    $date7  = "July, ".date('Y');
    $date8  = "August, ".date('Y');
    $date9  = "September, ".date('Y');
    $date10 = "October, ".date('Y');
    $date11 = "November, ".date('Y');
    $date12 = "December, ".date('Y');

    $January    = Views::where('date_at', 'like', "%{$date1}%")->get();
    $February   = Views::where('date_at', 'like', "%{$date2}%")->get();
    $March      = Views::where('date_at', 'like', "%{$date3}%")->get();
    $April      = Views::where('date_at', 'like', "%{$date4}%")->get();
    $May        = Views::where('date_at', 'like', "%{$date5}%")->get();
    $June       = Views::where('date_at', 'like', "%{$date6}%")->get();
    $July       = Views::where('date_at', 'like', "%{$date7}%")->get();
    $August     = Views::where('date_at', 'like', "%{$date8}%")->get();
    $September  = Views::where('date_at', 'like', "%{$date9}%")->get();
    $October    = Views::where('date_at', 'like', "%{$date10}%")->get();
    $November   = Views::where('date_at', 'like', "%{$date11}%")->get();
    $December   = Views::where('date_at', 'LIKE', "%{$date12}%")->get();

?>
    
    <script>

        var radialoptions = {
                    series:[72],
                    chart:{type:"radialBar",width:72,height:72,sparkline:{enabled:!0}},
                    dataLabels:{enabled:!1},
                    colors:["#0ab39c"],stroke:{lineCap:"round"},plotOptions:{radialBar:{hollow:{margin:0,size:"70%"},track:{margin:0},dataLabels:{name:{show:!1},value:{offsetY:5,show:!0}}}}
                },
            radialchart = new ApexCharts(document.querySelector("#radialchart-1"),radialoptions);
            radialchart.render();
            radialoptions = {
                    series:[45],
                    chart:{type:"radialBar",width:72,height:72,sparkline:{enabled:!0}},
                    dataLabels:{enabled:!1},
                    colors:["#0ab39c"],
                    stroke:{lineCap:"round"},
                    plotOptions:{
                        radialBar:{hollow:{margin:0,size:"70%"},track:{margin:0},dataLabels:{name:{show:!1},value:{offsetY:5,show:!0}}}
                    }
                };

            (radialchart = new ApexCharts(document.querySelector("#radialchart-2"),radialoptions)).render();
            radialoptions = {series:[54],chart:{type:"radialBar",width:72,height:72,sparkline:{enabled:!0}},dataLabels:{enabled:!1},colors:["#0ab39c"],stroke:{lineCap:"round"},plotOptions:{radialBar:{hollow:{margin:0,size:"70%"},track:{margin:0},dataLabels:{name:{show:!1},value:{offsetY:5,show:!0}}}}};
            
            (radialchart = new ApexCharts(document.querySelector("#radialchart-3"),radialoptions)).render();
            var options = { 
                series:[
                    {
                        name:"Views",
                        type:"column",
                        data:[
                                <?= $January->count(); ?>,
                                <?= $February->count(); ?>,
                                <?= $March->count(); ?>,
                                <?= $April->count(); ?>,
                                <?= $May->count(); ?>,
                                <?= $June->count(); ?>,
                                <?= $July->count(); ?>,
                                <?= $August->count(); ?>,
                                <?= $September->count(); ?>,
                                <?= $October->count(); ?>,
                                <?= $November->count(); ?>,
                                <?= $December->count(); ?>
                            ]
                    },
                    // {name:"Maintenance",type:"area",data:[44,55,41,42,22,43,21,41,56,27,43,27]},
                    // {name:"Profit",type:"line",data:[30,25,36,30,45,35,64,52,59,36,39,51]}
                ],
                chart:{height:350,type:"line",stacked:!1,toolbar:{show:!1}},
                stroke:{width:[0,1,1],dashArray:[0,0,5],curve:"smooth"},
                plotOptions:{bar:{columnWidth:"18%"}},
                legend:{show:!1},
                fill:{
                    opacity:[.85,.25,1],
                    gradient:{
                        inverseColors:!1,
                        shade:"light",
                        type:"vertical",
                        opacityFrom:.85,
                        opacityTo:.55,
                        stops:[0,100,100,100]
                    }
                },
                labels:["Jan <?= $year; ?>","Feb <?= $year; ?>","Mar <?= $year; ?>","Apr <?= $year; ?>","May <?= $year; ?>","Jun <?= $year; ?>","Jul <?= $year; ?>","Aug <?= $year; ?>","Sep <?= $year; ?>","Oct <?= $year; ?>","Nov <?= $year; ?>","Dec <?= $year; ?>"],
                markers:{size:0},
                colors:["#0bb197","#eff2f7","#ff3d60"]},
                chart = new ApexCharts(document.querySelector("#mixed-chart"),options);
                chart.render();
                options={chart:{height:350,type:"radialBar"},plotOptions:{radialBar:{hollow:{margin:10,size:"45%"},track:{show:!0,strokeWidth:"70%",margin:12},dataLabels:{name:{fontSize:"27px"},value:{fontSize:"20px"},total:{show:!0,label:"Total",formatter:function(a){return 341}}}}},series:[44,55,67],labels:["Facebook","Twitter","Instagram"],colors:["#099680","#4aa3ff","#5664d2"]};
                (chart = new ApexCharts(document.querySelector("#radialBar-chart"),options)).render(),$("#usa").vectorMap({
                    map:"usa_en",
                    enableZoom:!0,
                    showTooltip:!0,
                    selectedColor:null,
                    hoverColor:"#d3d8e2",
                    backgroundColor:"transparent",
                    color:"#e8ecf4",
                    borderColor:"#424242",
                    colors:{ca:"#d3d8e2",tx:"#d3d8e2",mt:"#d3d8e2",ny:"#d3d8e2"},
                    onRegionClick:function(a,e,r){a.preventDefault()}
                });
    </script>    

    <!-- <script src="{{ asset('admin/assets/js/app.js') }}"></script> -->

    
    <script>
        !function(n, base_url ){"use strict";function s(){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)"nav-item dropdown active"===e[t].parentElement.getAttribute("class")&&(e[t].parentElement.classList.remove("active"),e[t].nextElementSibling.classList.remove("show"))}function t(e){1==n("#light-mode-switch").prop("checked")&&"light-mode-switch"===e?(n("html").removeAttr("dir"),n("#dark-mode-switch").prop("checked",!1),n("#rtl-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ route('home') }}/admin/assets/css/bootstrap.min.css"),n("#app-style").attr("href","{{ route('home') }}/admin/assets/css/app.min.css"),sessionStorage.setItem("is_visited","light-mode-switch")):1==n("#dark-mode-switch").prop("checked")&&"dark-mode-switch"===e?(n("html").removeAttr("dir"),n("#light-mode-switch").prop("checked",!1),n("#rtl-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ route('home') }}/admin/assets/css/bootstrap-dark.min.css"),n("#app-style").attr("href","{{ route('home') }}/admin/assets/css/app-dark.min.css"),sessionStorage.setItem("is_visited","dark-mode-switch")):1==n("#rtl-mode-switch").prop("checked")&&"rtl-mode-switch"===e&&(n("#light-mode-switch").prop("checked",!1),n("#dark-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ route('home') }}/admin/assets/css/bootstrap-rtl.min.css"),n("#app-style").attr("href","{{ route('home') }}/admin/assets/css/app-rtl.min.css"),n("html").attr("dir","rtl"),sessionStorage.setItem("is_visited","rtl-mode-switch"))}function e(){document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement||(console.log("pressed"),n("body").removeClass("fullscreen-enable"))}var a;n("#side-menu").metisMenu(),n("#vertical-menu-btn").on("click",function(e){e.preventDefault(),n("body").toggleClass("sidebar-enable"),992<=n(window).width()?n("body").toggleClass("vertical-collpsed"):n("body").removeClass("vertical-collpsed")}),n("body,html").click(function(e){var t=n("#vertical-menu-btn");t.is(e.target)||0!==t.has(e.target).length||e.target.closest("div.vertical-menu")||n("body").removeClass("sidebar-enable")}),n("#sidebar-menu a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(n(this).addClass("active"),n(this).parent().addClass("mm-active"),n(this).parent().parent().addClass("mm-show"),n(this).parent().parent().prev().addClass("mm-active"),n(this).parent().parent().parent().addClass("mm-active"),n(this).parent().parent().parent().parent().addClass("mm-show"),n(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),n(".navbar-nav a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(n(this).addClass("active"),n(this).parent().addClass("active"),n(this).parent().parent().addClass("active"),n(this).parent().parent().parent().addClass("active"),n(this).parent().parent().parent().parent().addClass("active"),n(this).parent().parent().parent().parent().parent().addClass("active"))}),n(document).ready(function(){var e;0<n("#sidebar-menu").length&&0<n("#sidebar-menu .mm-active .active").length&&(300<(e=n("#sidebar-menu .mm-active .active").offset().top)&&(e-=300,n(".vertical-menu .simplebar-content-wrapper").animate({scrollTop:e},"slow")))}),n('[data-toggle="fullscreen"]').on("click",function(e){e.preventDefault(),n("body").toggleClass("fullscreen-enable"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}),document.addEventListener("fullscreenchange",e),document.addEventListener("webkitfullscreenchange",e),document.addEventListener("mozfullscreenchange",e),n(".right-bar-toggle").on("click",function(e){n("body").toggleClass("right-bar-enabled")}),n(document).on("click","body",function(e){0<n(e.target).closest(".right-bar-toggle, .right-bar").length||n("body").removeClass("right-bar-enabled")}),function(){if(document.getElementById("topnav-menu-content")){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)e[t].onclick=function(e){"#"===e.target.getAttribute("href")&&(e.target.parentElement.classList.toggle("active"),e.target.nextElementSibling.classList.toggle("show"))};window.addEventListener("resize",s)}}(),[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e){return new bootstrap.Tooltip(e)}),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e){return new bootstrap.Popover(e)}),n(window).on("load",function(){n("#status").fadeOut(),n("#preloader").delay(350).fadeOut("slow")}),window.sessionStorage&&((a=sessionStorage.getItem("is_visited"))?(n(".right-bar input:checkbox").prop("checked",!1),n("#"+a).prop("checked",!0),t(a)):sessionStorage.setItem("is_visited","light-mode-switch")),n("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change",function(e){t(e.target.id)}),Waves.init()}(jQuery);
    </script>
</body>
</html>
