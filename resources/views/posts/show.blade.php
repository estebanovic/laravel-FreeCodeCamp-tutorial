@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-height: 40px;">
                    </div>
                    <div>
                        <a href="/profile/{{ $post->user->id }}" class="font-weight-bold"><span class="text-dark">{{ $post->user->username }}</span></a>
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>
                <hr>
                <p><a href="/profile/{{ $post->user->id }}" class="font-weight-bold"><span class="text-dark">{{ $post->user->username }}</span></a>{{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection