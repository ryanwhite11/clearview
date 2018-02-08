@extends('layouts.auth')

@section('content')
<div class="container authContainer">
    <!-- <div class="row fullHeight align-items-center justify-content-center"> -->
 <!--        <div class="col-12 col-md-8 col-lg-6 col-xl-5"> -->
		@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
		@endif


		<div class="projectList">
			<h2>Projects</h2>
			<a href="{{url('/admin/project')}}"><h3 class="add">+ Add Project</h3></a>

			<div>
				<ul class="list">
					<li class="list-item">
						<p class="title">Project Title</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>

					<li>
						<p class="title">This is a Project title</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>

					<li>
						<p class="title">Project Title</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>
				</ul>
			</div>
		</div>



		<div class="projectList">
			<h2>News</h2>
			<a href="{{url('/admin/news')}}"><h3 class="add">+ Add News</h3></a>

			<div>
				<ul class="list">
					<li class="list-item">
						<p class="title">Article Title</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>

					<li>
						<p class="title">News Article</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>

					<li>
						<p class="title">Another News Title</p>
						<p class="date">Jan 4th 2018</p>
						<a href=""><h3 class="edit">Edit</h3></a>
						<a href=""><h3 class="delete">Delete</h3></a>
					</li>
				</ul>
			</div>
		</div>

</div>
@endsection
