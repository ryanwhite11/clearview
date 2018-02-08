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
        <div class="container authContainer">
            <div class="row">
                <div class="col-12 col-md-3 sidebar">
                    @include('auth.sidebar')

                </div>
                <div class="col-12 col-md-9">
                    @yield('content')

                </div>
            </div>
            
        {{-- @include('partials.footer') --}}
        </div>
    </div>

    <!-- Scripts -->

    {{-- <script src="{{ asset('js/editor.js') }}"></script> --}}
 </body>
</html>
