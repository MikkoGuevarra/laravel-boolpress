@extends('layouts.dashboard')

@section('content')
<div class="container">
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
                                <a href="#" class="btn btn-info">Details</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
