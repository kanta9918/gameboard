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

                    <form method=post  action = "{{ route('gametitles.update',$gametitle}}">
                        @csrf
                        <div class=form-group>
                            <label>
                                userID
                            </label>
                            <input type=text name="user_id" value = "{{ $gametitle -> user_id}}">
                            <input type=text name="game_title" value= "{{ $gametitle -> game_title}}">
                            <input type=text name="category" value="{{ $gametitle -> category }}">
                            
                            
                            </div>
                            <input type=submit value="入力">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
