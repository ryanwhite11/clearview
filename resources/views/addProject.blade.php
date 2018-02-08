@extends('layouts.auth')

@section('content')
    <div class="row fullHeight align-items-center justify-content-center">
        <div class="col-12 addNewsCon">
        <form class="form-horizontal" method="POST" enctype='multipart/form-data' action="{{ url('admin/project/add/') }}">
        <a href="{{url('/admin')}}" class="back-to-home"><p>Back to home</p></a> 
        <h2>Add Project</h2>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="col-12 control-label">Title</label>

                <div class="col-12">
                    <input id="title" type="text" class="form-control" name="title" value="" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="col-12 control-label">Image</label>

                <div class="col-12">
                    <input id="image" type="file" class="form-control" name="image" required>
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
