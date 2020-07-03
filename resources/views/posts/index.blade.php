@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        
        <div class="well">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 col-sm-6">
                        <div class="text-center">
                            @if((substr ($post->gallery, -4)) == '.mp4')
                            <video width="100%" height="170px">
                                <source src="{{asset('/storage/galleries')}}/{{$post->gallery}}" type="video/mp4">
                                </video>
                            @endif
                            @if ((substr ($post->gallery, -4)) == '.png' || '.jpg' || '.PNG' || '.JPG')
                                <img style="width: 100%; height: 200px" src="{{asset('/storage/galleries')}}/{{$post->gallery}}" alt="">
                            @endif
                        </div>
                        <div class="margin-bottom-50">
                            <h3 class="title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <p>{!!$post->body!!}</p>
                            <small><b>{{$post->user->name}}</b> - {{$post->created_at}}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection