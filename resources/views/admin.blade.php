@extends('layouts.auth')

@section('content')
<div class="container authContainer">
    <div class="row fullHeight align-items-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif

            
        <h2>Welcome {{-- {{ Auth::user()->id}} --}}</h2>
    </div>
</div>
@endsection
