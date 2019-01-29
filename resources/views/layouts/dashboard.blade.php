<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || The business manager   </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 {{--  Company form property      --}}    
    <link href="{{asset('dashboard-setup-form/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('dashboard-setup-form/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('dashboard-setup-form/css/main.css')}}" rel="stylesheet" media="all">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
   

</head>

<body class="adminbody">
    <div id="main">
        @include('components/common/header')
        @if(Auth::user()->type == "project-manager")
            @include('components/company/sidebar')
        @elseif(Auth::user()->type == "employee")
            @include('components/employee/sidebar')
        @endif
        <div class="content-page">
            <div class="content">
                @if(Auth::user()->type == "project-manager" && Auth::user()->company_id == null)
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @include('components/company/form')
                            </div>
                        </div>
                    </div>
                @elseif(Auth::user()->type == "project-manager" && Auth::user()->company_id !=null)
                    @yield('company-dashboard-contents')
                @elseif(Auth::user()->type == "employee")
                    @yield('employee-dashboard-contents')    
                @endif  
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="{{asset('js/pikeadmin.js')}}"></script>
    <script src="{{asset('dashboard-setup-form/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('dashboard-setup-form/js/global.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    {{--  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />  --}}

    @yield('custom-scripts')

</body>

</html>