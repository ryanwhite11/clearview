<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clearview') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script> --}}
</head>
<body>
    <div id="app">
        <div class="container-fluid authContainer">
            <div class="row" id="topbar">

                <div id="headerLinks">
                     <a href="/"><p>View Site</p></a>
                     <a href="{{url('/logout')}}"><p>Logout</p></a>
                 </div>

                 <h2>Welcome, {{ Auth::user()->name }}</h2>
             </div>

               
                    @yield('content')

               
            </div>
            
        {{-- @include('partials.footer') --}}
        </div>
    </div>

    <!-- Scripts -->

    {{-- <script src="{{ asset('js/editor.js') }}"></script> --}}
 </body>
</html>
