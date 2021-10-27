@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.changelog.com/uploads/icons/news_sources/Qo/icon_small.png?v=63680075631" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="http://www.{{ $user->profile->url}}">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://picsum.photos/600?random=1" class="w-100"></div>
        <div class="col-4"><img src="https://picsum.photos/600?random=2" class="w-100"></div>
        <div class="col-4"><img src="https://picsum.photos/600?random=3" class="w-100"></div>
    </div>
</div>
@endsection
