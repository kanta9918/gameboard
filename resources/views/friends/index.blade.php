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
                    <table>
                        <tr>
                            <th>
                                user ID
                            </th>
                            <th>
                                ゲームタイトル
                            </th>
                            <th>
                                メッセージ
                            </th>
                            <th>
                                日付
                            </th>
                            <th>
                                目的
                            </th>
                        </tr>
                    @foreach($friends as $friend)
                    <tr>
                        <td>
                        {{ $friend->user_id }}
                            
                        </td>
                        <td>
                            {{ $friend->game_title }}
                        </td>
                        <td>
                            {{ $friend->message }}
                        </td>
                        <td>
                            {{$friend->mark_dt }}
                        </td>
                        <td>
                            <?php
                            $purposes = explode(',',$friend->purpose);
                            $purposemasters = \App\PurposeMaster::all();
                            ?>
                            @foreach($purposemasters as $master)
                           <input type=checkbox @if(in_array($master->id,$purposes))checked @endif>
                           {{ \App\PurposeMaster::find($master->id)->name}}
                           
                            @endforeach
                        </td>
                    </tr>
                    
                    
                    
                    @endforeach
                    
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
