@extends('layouts.app')

@section('content')
<div class="newsSingleCon">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6  offset-md-1 offset-lg-2 offset-xl-3">
                <div id="newsSingleInfo">
                    <h2 class="yellow">{{ $news->title }}</h2>
                    <h4>{{$news->subtitle}}</h4>
                    <p>{{ $news->created_at->format('F jS Y') }}</p>
                    
                </div>
                
                <div id="newsSingleBody">
                    {!! $news->content !!}
                </div>
                <div class="paginationLinks">
                    @if($previous)
                    <div id="previousCon">
                        <p>{{ $previous->title}}</p>
                        <div class="paginationDivider"></div>
                        <a href="{{ route( 'news', $previous ) }}">Previous article</a>
                    </div>
                    @endif

                    @if($next)
                    <div id="nextCon">
                        <p>{{ $next->title}}</p>
                        <div class="paginationDivider"></div>
                        <a href="{{ route( 'news', $next ) }}">Next article</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
    </div>

    <div>
        

    </div>
    
</div>

  



@endsection

    