@extends('layouts.app')
@section('content')
    <h1>POSTS</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
             <div class="card mt-2">
                 <h3><a href="/posts/{{$post->id}}">{{ $post->title }} </a></h3>
                 <p>{!! $post->body !!}</p>
                 <small>Written on{{ $post->created_at }} by {{ $post->user->name }}</small>
             </div>
        @endforeach
        {{ $posts->links() }}
    @else
    <p> no Post found </p>
    @endif
@endsection
