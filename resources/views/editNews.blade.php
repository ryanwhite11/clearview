@extends('layouts.auth')

@section('content')
    <div class= fullHeight align-items-center justify-content-center">
        <div class="col-12 addNewsCon">
        <form class="form-horizontal" method="POST" enctype='multipart/form-data' action="{{ url('admin/news/edit/') }}">
           <a href="{{url('/admin')}}" class="back-to-home"><p>Back to home</p></a> 
            <h2>Edit News Article</h2>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $news->id }}">

            <div class="form-group">
                <label for="title" class="col-12 control-label">Title</label>

                <div class="col-12">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $news->title }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="subtitle" class="col-12 control-label">Subtitle (optional)</label>
                
                <div class="col-12">
                    <input id="subtitle" type="text" class="form-control" name="subtitle" value="{{ $news->subtitle }}">
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="image" class="col-12 control-label">Feature Image</label>
                <div class="col-12">
                    <input id="image" type="file" class="form-control" name="image" >
                    <p>Uploading an image will overwrite this current image.</p>
                    <img src="/{{$news->image}}" alt="{{$news->title}} Image" id="currentImg">
                </div>                    
            </div>

            <div class="form-group">
                <label for="content" class="col-12 control-label">Content</label>

                <div class="col-12">
                    <textarea id="content" class="form-control" name="content">{{$news->content }}</textarea> 
                </div>
            </div>

            

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Add News
                    </button>
                </div>
            
            </div>
        </form>
                
    </div>
<script src="{{ URL::to('/js/tinymce/tinymce.min.js') }}"></script>
<script>
     var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea",
         height : "300",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
    tinymce.init(editor_config);
</script>

@endsection
