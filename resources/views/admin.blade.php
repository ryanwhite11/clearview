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
					@foreach($projects as $project)
					<li class="list-item">
						<p class="title">{{$project->title}}</p>
						<p class="date">{{$project->created_at}}</p>
						<a href="{{ url('admin/project/edit/'."$project->id") }}"><h3 class="edit">Edit</h3></a>
						<a href="{{ url('admin/project/delete/'."$project->id") }}"><h3 class="delete">Delete</h3></a>
					</li>
					@endforeach

				</ul>
			</div>
		</div>



		<div class="projectList">
			<h2>News</h2>
			<a href="{{url('/admin/news')}}"><h3 class="add">+ Add News</h3></a>

			<div>
				<ul class="list">
					@foreach($news as $article)
					<li class="list-item">
						<p class="title">{{$article->title}}</p>
						<p class="date">{{$article->created_at}}</p>
						<a href="{{ url('admin/news/edit/'."$article->id") }}"><h3 class="edit">Edit</h3></a>
						<a href="{{ url('admin/news/delete/'."$article->id") }}"><h3 class="delete">Delete</h3></a>
					</li>
					@endforeach
					
				</ul>
			</div>
		</div>

</div>
@endsection
