@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>

        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p><a href="/profile/{{ $post->user->id }}" class="font-weight-bold"><span class="text-dark">{{ $post->user->username }}</span></a>{{$post->caption}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection