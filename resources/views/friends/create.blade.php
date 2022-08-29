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

                    <form method=post >
                        @csrf
                        <div class=form-group>
                            <label>
                                userID
                            </label>
                            <input type=text name="user_id">
                            <input type=text name="game_title">
                            <input type=text name="message">
                            
                            <select multiple name="game_title_id[]">
                                @foreach($game_all_titles as $id => $name)
                                <option value = "{{ $id }}">
                                    {{$name}}
                                </option>
                                @endforeach
                            </select>
                            </div>
                            <input type=submit value="入力">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
