@extends('layouts.auth')

@section('content')
    <div class="fullHeight align-items-center justify-content-center">
        <div class="col-12 addNewsCon">
        <form class="form-horizontal" method="POST" enctype='multipart/form-data' action="{{ url('admin/project/edit/') }}">
           <a href="{{url('/admin')}}" class="back-to-home"><p>Back to home</p></a> 
            <h2>Edit Project Article</h2>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $project->id }}">

            <div class="form-group">
                <label for="title" class="col-12 control-label">Title</label>

                <div class="col-12">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $project->title }}" required>
                </div>
            </div>

            
            
            <div class="form-group">
                <label for="image" class="col-12 control-label">Feature Image</label>
                <div class="col-12">
                    <input id="image" type="file" class="form-control" name="image" >
                    <p>Uploading an image will overwrite this current image.</p>
                    <img src="/{{$project->image}}" alt="{{$project->title}} Image" id="currentImg">
                </div>                    
            </div>
            

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Add Project
                    </button>
                </div>
            
            </div>
        </form>
                
    </div>
@endsection
