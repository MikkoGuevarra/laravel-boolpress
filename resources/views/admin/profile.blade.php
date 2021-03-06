@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your datas</div>

                <div class="card-body">
                    <dl class="">
                        <dt>Name</dt>
                        <dd>{{Auth::user()->name}}</dd>

                        <dt>Email</dt>
                        <dd>{{Auth::user()->email}}</dd>

                        <dt>API Token</dt>
                        @if (Auth::user()->api_token)
                            <dd>{{Auth::user()->api_token}}</dd>
                        @else
                            <form action="{{route('admin.generate_token')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary" name="button">Generate API Token</button>
                            </form>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
