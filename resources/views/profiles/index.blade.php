@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fyhu2-1.fna.fbcdn.net/vp/ea3af6cea5a390588b00c6db656e4d93/5E4BB3BC/t51.2885-19/s150x150/18160560_1697126910580696_4272147984432496640_a.jpg?_nc_ht=instagram.fyhu2-1.fna.fbcdn.net"
                class="rounded-circle">
        </div>
        <div class="col-9 pl-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->name }}</h1>
                <a href="{{ url('/p/create') }}">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> folowing</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>

        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img alt="" src="/storage/{{ $post->image }}" title="{{ $post->caption }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>


</div>
@endsection
