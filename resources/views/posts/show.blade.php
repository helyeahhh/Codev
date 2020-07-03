@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <a href="{{url('/posts')}}" class="btn btn-default">Go Back</a>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-default pull-right margin-right-20">Edit</a>
            @endif
        @endif
        <h1>{{$post->title}}</h1>
        @if ((substr ($post->gallery, -4)) == '.png' || '.jpg' || '.PNG' || '.JPG')
            <img style="width: 100%" src="{{asset('/storage/galleries')}}/{{$post->gallery}}" alt="">
        @endif
        @if((substr ($post->gallery, -4)) == '.mp4')
            <video width="100%" controls>
                <source src="{{asset('/storage/galleries')}}/{{$post->gallery}}" type="video/mp4">
            </video>
        @endif
        <div class="margin-top-30 text">
            {!!$post->body!!}
        </div>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </div>
@endsection