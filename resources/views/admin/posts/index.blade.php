@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-6 justify-content-end">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-info">Create New Post</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id}}</td>
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->slug}}</td>
                            <td>
                                <a href="{{route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-info">Details</a>
                                <a href="{{route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
