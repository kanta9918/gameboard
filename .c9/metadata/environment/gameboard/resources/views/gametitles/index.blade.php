{"filter":false,"title":"index.blade.php","tooltip":"/gameboard/resources/views/gametitles/index.blade.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":0,"column":0},"end":{"row":73,"column":0},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">Dashboard</div>","","                <div class=\"card-body\">","                    @if (session('status'))","                        <div class=\"alert alert-success\" role=\"alert\">","                            {{ session('status') }}","                        </div>","                    @endif","                    <table>","                        <tr>","                            <th>","                                user ID","                            </th>","                            <th>","                                ゲームタイトル","                            </th>","                            <th>","                                メッセージ","                            </th>","                            <th>","                                日付","                            </th>","                            <th>","                                目的","                            </th>","                        </tr>","                    @foreach($friends as $friend)","                    <tr>","                        <td>","                        {{ $friend->user_id }}","                            ","                        </td>","                        <td>","                            {{ $friend->game_title }}","                        </td>","                        <td>","                            {{ $friend->message }}","                        </td>","                        <td>","                            {{$friend->mark_dt }}","                        </td>","                        <td>","                            <?php","                            $purposes = explode(',',$friend->purpose);","                            $purposemasters = \\App\\PurposeMaster::all();","                            ?>","                            @foreach($purposemasters as $master)","                           <input type=checkbox @if(in_array($master->id,$purposes))checked @endif>","                           {{ \\App\\PurposeMaster::find($master->id)->name}}","                           ","                            @endforeach","                        </td>","                    </tr>","                    ","                    ","                    ","                    @endforeach","                    ","                        ","                    </table>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":1}],[{"start":{"row":33,"column":36},"end":{"row":33,"column":37},"action":"remove","lines":["s"],"id":2},{"start":{"row":33,"column":35},"end":{"row":33,"column":36},"action":"remove","lines":["d"]},{"start":{"row":33,"column":34},"end":{"row":33,"column":35},"action":"remove","lines":["n"]},{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"remove","lines":["e"]},{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"remove","lines":["i"]},{"start":{"row":33,"column":31},"end":{"row":33,"column":32},"action":"remove","lines":["r"]},{"start":{"row":33,"column":30},"end":{"row":33,"column":31},"action":"remove","lines":["f"]}],[{"start":{"row":33,"column":30},"end":{"row":33,"column":31},"action":"insert","lines":["g"],"id":3},{"start":{"row":33,"column":31},"end":{"row":33,"column":32},"action":"insert","lines":["a"]},{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"insert","lines":["m"]},{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"insert","lines":["e"]},{"start":{"row":33,"column":34},"end":{"row":33,"column":35},"action":"insert","lines":["t"]}],[{"start":{"row":33,"column":35},"end":{"row":33,"column":36},"action":"insert","lines":["i"],"id":4},{"start":{"row":33,"column":36},"end":{"row":33,"column":37},"action":"insert","lines":["t"]},{"start":{"row":33,"column":37},"end":{"row":33,"column":38},"action":"insert","lines":["l"]},{"start":{"row":33,"column":38},"end":{"row":33,"column":39},"action":"insert","lines":["e"]},{"start":{"row":33,"column":39},"end":{"row":33,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"remove","lines":["d"],"id":5},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["n"]},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["e"]},{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"remove","lines":["i"]},{"start":{"row":33,"column":46},"end":{"row":33,"column":47},"action":"remove","lines":["r"]},{"start":{"row":33,"column":45},"end":{"row":33,"column":46},"action":"remove","lines":["f"]}],[{"start":{"row":33,"column":45},"end":{"row":33,"column":46},"action":"insert","lines":["g"],"id":6},{"start":{"row":33,"column":46},"end":{"row":33,"column":47},"action":"insert","lines":["a"]},{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":["m"]},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["e"]},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["t"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["a"]}],[{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"remove","lines":["a"],"id":7}],[{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["i"],"id":8},{"start":{"row":33,"column":51},"end":{"row":33,"column":52},"action":"insert","lines":["t"]},{"start":{"row":33,"column":52},"end":{"row":33,"column":53},"action":"insert","lines":["l"]},{"start":{"row":33,"column":53},"end":{"row":33,"column":54},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":33},"end":{"row":36,"column":34},"action":"remove","lines":["d"],"id":9},{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"remove","lines":["n"]},{"start":{"row":36,"column":31},"end":{"row":36,"column":32},"action":"remove","lines":["e"]},{"start":{"row":36,"column":30},"end":{"row":36,"column":31},"action":"remove","lines":["i"]},{"start":{"row":36,"column":29},"end":{"row":36,"column":30},"action":"remove","lines":["r"]},{"start":{"row":36,"column":28},"end":{"row":36,"column":29},"action":"remove","lines":["f"]}],[{"start":{"row":36,"column":28},"end":{"row":36,"column":29},"action":"insert","lines":["g"],"id":10},{"start":{"row":36,"column":29},"end":{"row":36,"column":30},"action":"insert","lines":["a"]},{"start":{"row":36,"column":30},"end":{"row":36,"column":31},"action":"insert","lines":["m"]},{"start":{"row":36,"column":31},"end":{"row":36,"column":32},"action":"insert","lines":["e"]},{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"insert","lines":["t"]},{"start":{"row":36,"column":33},"end":{"row":36,"column":34},"action":"insert","lines":["i"]},{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"insert","lines":["t"]},{"start":{"row":36,"column":35},"end":{"row":36,"column":36},"action":"insert","lines":["l"]},{"start":{"row":36,"column":36},"end":{"row":36,"column":37},"action":"insert","lines":["e"]}],[{"start":{"row":35,"column":24},"end":{"row":38,"column":29},"action":"remove","lines":["<td>","                        {{ $gametitle->user_id }}","                            ","                        </td>"],"id":11}],[{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"remove","lines":["d"],"id":12},{"start":{"row":37,"column":36},"end":{"row":37,"column":37},"action":"remove","lines":["n"]},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"remove","lines":["e"]},{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"remove","lines":["i"]},{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"remove","lines":["r"]},{"start":{"row":37,"column":32},"end":{"row":37,"column":33},"action":"remove","lines":["f"]}],[{"start":{"row":37,"column":32},"end":{"row":37,"column":33},"action":"insert","lines":["g"],"id":13},{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"insert","lines":["a"]},{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"insert","lines":["m"]},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"insert","lines":["e"]},{"start":{"row":37,"column":36},"end":{"row":37,"column":37},"action":"insert","lines":["t"]},{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"insert","lines":["i"]},{"start":{"row":37,"column":38},"end":{"row":37,"column":39},"action":"insert","lines":["t"]},{"start":{"row":37,"column":39},"end":{"row":37,"column":40},"action":"insert","lines":["l"]},{"start":{"row":37,"column":40},"end":{"row":37,"column":41},"action":"insert","lines":["e"]}],[{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"remove","lines":["d"],"id":14},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"remove","lines":["n"]},{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"remove","lines":["e"]},{"start":{"row":40,"column":34},"end":{"row":40,"column":35},"action":"remove","lines":["i"]},{"start":{"row":40,"column":33},"end":{"row":40,"column":34},"action":"remove","lines":["r"]},{"start":{"row":40,"column":32},"end":{"row":40,"column":33},"action":"remove","lines":["f"]}],[{"start":{"row":40,"column":32},"end":{"row":40,"column":33},"action":"insert","lines":["g"],"id":15},{"start":{"row":40,"column":33},"end":{"row":40,"column":34},"action":"insert","lines":["a"]},{"start":{"row":40,"column":34},"end":{"row":40,"column":35},"action":"insert","lines":["m"]},{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["e"]},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"insert","lines":["t"]},{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"insert","lines":["i"]},{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"insert","lines":["t"]},{"start":{"row":40,"column":39},"end":{"row":40,"column":40},"action":"insert","lines":["l"]},{"start":{"row":40,"column":40},"end":{"row":40,"column":41},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"remove","lines":["d"],"id":16},{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"remove","lines":["n"]},{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"remove","lines":["e"]},{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"remove","lines":["i"]},{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"remove","lines":["r"]},{"start":{"row":43,"column":31},"end":{"row":43,"column":32},"action":"remove","lines":["f"]}],[{"start":{"row":43,"column":31},"end":{"row":43,"column":32},"action":"insert","lines":["g"],"id":17},{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"insert","lines":["a"]},{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"insert","lines":["m"]},{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"insert","lines":["e"]},{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"insert","lines":["t"]},{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"insert","lines":["i"]},{"start":{"row":43,"column":37},"end":{"row":43,"column":38},"action":"insert","lines":["t"]},{"start":{"row":43,"column":38},"end":{"row":43,"column":39},"action":"insert","lines":["l"]},{"start":{"row":43,"column":39},"end":{"row":43,"column":40},"action":"insert","lines":["e"]}],[{"start":{"row":46,"column":28},"end":{"row":54,"column":39},"action":"remove","lines":["<?php","                            $purposes = explode(',',$friend->purpose);","                            $purposemasters = \\App\\PurposeMaster::all();","                            ?>","                            @foreach($purposemasters as $master)","                           <input type=checkbox @if(in_array($master->id,$purposes))checked @endif>","                           {{ \\App\\PurposeMaster::find($master->id)->name}}","                           ","                            @endforeach"],"id":18}],[{"start":{"row":45,"column":24},"end":{"row":47,"column":29},"action":"remove","lines":["<td>","                            ","                        </td>"],"id":19}],[{"start":{"row":43,"column":48},"end":{"row":43,"column":49},"action":"remove","lines":["t"],"id":20},{"start":{"row":43,"column":47},"end":{"row":43,"column":48},"action":"remove","lines":["d"]},{"start":{"row":43,"column":46},"end":{"row":43,"column":47},"action":"remove","lines":["_"]},{"start":{"row":43,"column":45},"end":{"row":43,"column":46},"action":"remove","lines":["k"]},{"start":{"row":43,"column":44},"end":{"row":43,"column":45},"action":"remove","lines":["r"]},{"start":{"row":43,"column":43},"end":{"row":43,"column":44},"action":"remove","lines":["a"]}],[{"start":{"row":43,"column":42},"end":{"row":43,"column":43},"action":"remove","lines":["m"],"id":21}],[{"start":{"row":43,"column":42},"end":{"row":43,"column":43},"action":"insert","lines":["c"],"id":22},{"start":{"row":43,"column":43},"end":{"row":43,"column":44},"action":"insert","lines":["a"]},{"start":{"row":43,"column":44},"end":{"row":43,"column":45},"action":"insert","lines":["t"]},{"start":{"row":43,"column":45},"end":{"row":43,"column":46},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":46},"end":{"row":43,"column":47},"action":"insert","lines":["g"],"id":23},{"start":{"row":43,"column":47},"end":{"row":43,"column":48},"action":"insert","lines":["o"]},{"start":{"row":43,"column":48},"end":{"row":43,"column":49},"action":"insert","lines":["r"]},{"start":{"row":43,"column":49},"end":{"row":43,"column":50},"action":"insert","lines":["y"]}],[{"start":{"row":29,"column":28},"end":{"row":31,"column":33},"action":"remove","lines":["<th>","                                目的","                            </th>"],"id":24}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"remove","lines":["付"],"id":25},{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"remove","lines":["日"]}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":36},"action":"insert","lines":["ジャンル"],"id":26}],[{"start":{"row":37,"column":24},"end":{"row":39,"column":29},"action":"remove","lines":["<td>","                            {{ $gametitle->message }}","                        </td>"],"id":27},{"start":{"row":37,"column":20},"end":{"row":37,"column":24},"action":"remove","lines":["    "]}],[{"start":{"row":31,"column":19},"end":{"row":42,"column":25},"action":"remove","lines":[" @foreach($gametitles as $gametitle)","                    <tr>","                        ","                        <td>","                            {{ $gametitle->game_title }}","                        </td>","                    ","                        <td>","                            {{$gametitle->category }}","                        </td>","                        ","                    </tr>"],"id":28}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":[" "],"id":29}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":24},"action":"insert","lines":["    "],"id":30}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":31,"column":24},"end":{"row":31,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1661604372446,"hash":"03638c2a8e19acd693d914491088bd5d388e6fe6"}