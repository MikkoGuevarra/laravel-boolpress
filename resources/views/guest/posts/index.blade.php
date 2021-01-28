@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>All Posts</h1>
                <ul>
                    @foreach ($posts as $post)
                        <li>
                            <a href="{{ route('guest.posts.show', ['slug' => $post->slug]) }}">
                                {{$post->title}}
                            </a>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
