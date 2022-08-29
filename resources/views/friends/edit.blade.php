@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <form method=post action={{ route('friends.update',$friend}} >
                       @csrf
                       <div>
                           <tr>
                               <td>
                                   {{ $friend->user_id }}
                               </td>
                               
                               <td>
                                   {{ $friend->game_title}}
                               </td>
                               
                               <td>
                                   {{ $friend->game_title}}
                               </td>
                               
                               <td>
                                   {{ $friend->message}}
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
                        
                        <td>
                            <select multiple name="game_title_id">
                            @foreach($game_all_titles as $id => $name)
                            <option value = "{{ $id }}" @if(in_array( $id , $game_title_ids)) selected @endif>
                                {{ $name }}
                                
                            </option>
                            @endforeach
                            </select>
                            
                        </td>
                           </tr>
                           
                           
                
                           
                       </div>
                       <input type=submit value="更新">
                       
                   </form>
            </div>
        </div>
    </div>
</div>
@endsection
