@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method=post>
                        @csrf
                        <div class="form-group">
                            <label>
                                user ID
                            </label>
                            <input type=text name = "user_id" >
                            <input type=text name = "message">
                            <input type=submit value="送信">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
