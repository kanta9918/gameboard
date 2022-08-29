{"filter":false,"title":"index.blade.php","tooltip":"/gameboard/resources/views/gamestrategies/index.blade.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":0,"column":0},"end":{"row":73,"column":0},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">Dashboard</div>","","                <div class=\"card-body\">","                    @if (session('status'))","                        <div class=\"alert alert-success\" role=\"alert\">","                            {{ session('status') }}","                        </div>","                    @endif","                    <table>","                        <tr>","                            <th>","                                user ID","                            </th>","                            <th>","                                ゲームタイトル","                            </th>","                            <th>","                                メッセージ","                            </th>","                            <th>","                                日付","                            </th>","                            <th>","                                目的","                            </th>","                        </tr>","                    @foreach($friends as $friend)","                    <tr>","                        <td>","                        {{ $friend->user_id }}","                            ","                        </td>","                        <td>","                            {{ $friend->game_title }}","                        </td>","                        <td>","                            {{ $friend->message }}","                        </td>","                        <td>","                            {{$friend->mark_dt }}","                        </td>","                        <td>","                            <?php","                            $purposes = explode(',',$friend->purpose);","                            $purposemasters = \\App\\PurposeMaster::all();","                            ?>","                            @foreach($purposemasters as $master)","                           <input type=checkbox @if(in_array($master->id,$purposes))checked @endif>","                           {{ \\App\\PurposeMaster::find($master->id)->name}}","                           ","                            @endforeach","                        </td>","                    </tr>","                    ","                    ","                    ","                    @endforeach","                    ","                        ","                    </table>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":1}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"remove","lines":[">"],"id":2},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"remove","lines":["h"]},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"remove","lines":["t"]},{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"remove","lines":["/"]},{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"remove","lines":["<"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":28},"action":"remove","lines":["    "]},{"start":{"row":31,"column":20},"end":{"row":31,"column":24},"action":"remove","lines":["    "]},{"start":{"row":31,"column":16},"end":{"row":31,"column":20},"action":"remove","lines":["    "]},{"start":{"row":31,"column":12},"end":{"row":31,"column":16},"action":"remove","lines":["    "]},{"start":{"row":31,"column":8},"end":{"row":31,"column":12},"action":"remove","lines":["    "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"remove","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"remove","lines":["    "]},{"start":{"row":30,"column":34},"end":{"row":31,"column":0},"action":"remove","lines":["",""]},{"start":{"row":30,"column":33},"end":{"row":30,"column":34},"action":"remove","lines":["的"]},{"start":{"row":30,"column":32},"end":{"row":30,"column":33},"action":"remove","lines":["目"]}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":32},"action":"remove","lines":["    "],"id":3},{"start":{"row":30,"column":24},"end":{"row":30,"column":28},"action":"remove","lines":["    "]},{"start":{"row":30,"column":20},"end":{"row":30,"column":24},"action":"remove","lines":["    "]},{"start":{"row":30,"column":16},"end":{"row":30,"column":20},"action":"remove","lines":["    "]},{"start":{"row":30,"column":12},"end":{"row":30,"column":16},"action":"remove","lines":["    "]},{"start":{"row":30,"column":8},"end":{"row":30,"column":12},"action":"remove","lines":["    "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "]},{"start":{"row":29,"column":32},"end":{"row":30,"column":0},"action":"remove","lines":["",""]},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"remove","lines":[">"]},{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"remove","lines":["t"],"id":4},{"start":{"row":29,"column":28},"end":{"row":29,"column":29},"action":"remove","lines":["<"]}],[{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"remove","lines":["s"],"id":5},{"start":{"row":31,"column":35},"end":{"row":31,"column":36},"action":"remove","lines":["d"]},{"start":{"row":31,"column":34},"end":{"row":31,"column":35},"action":"remove","lines":["n"]},{"start":{"row":31,"column":33},"end":{"row":31,"column":34},"action":"remove","lines":["e"]},{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"remove","lines":["i"]},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"remove","lines":["r"]},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"remove","lines":["f"]}],[{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"insert","lines":["s"],"id":6},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"insert","lines":["t"]},{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"insert","lines":["r"]},{"start":{"row":31,"column":33},"end":{"row":31,"column":34},"action":"insert","lines":["a"]},{"start":{"row":31,"column":34},"end":{"row":31,"column":35},"action":"insert","lines":["t"]},{"start":{"row":31,"column":35},"end":{"row":31,"column":36},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"insert","lines":["g"],"id":7},{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"insert","lines":["e"]},{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"insert","lines":["i"]},{"start":{"row":31,"column":39},"end":{"row":31,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":31,"column":39},"end":{"row":31,"column":40},"action":"remove","lines":["s"],"id":8},{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"remove","lines":["i"]},{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"remove","lines":["e"]}],[{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"insert","lines":["i"],"id":9},{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"insert","lines":["e"]},{"start":{"row":31,"column":39},"end":{"row":31,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":31,"column":50},"end":{"row":31,"column":51},"action":"remove","lines":["d"],"id":10},{"start":{"row":31,"column":49},"end":{"row":31,"column":50},"action":"remove","lines":["n"]},{"start":{"row":31,"column":48},"end":{"row":31,"column":49},"action":"remove","lines":["e"]},{"start":{"row":31,"column":47},"end":{"row":31,"column":48},"action":"remove","lines":["i"]},{"start":{"row":31,"column":46},"end":{"row":31,"column":47},"action":"remove","lines":["r"]},{"start":{"row":31,"column":45},"end":{"row":31,"column":46},"action":"remove","lines":["f"]}],[{"start":{"row":31,"column":45},"end":{"row":31,"column":46},"action":"insert","lines":["s"],"id":11},{"start":{"row":31,"column":46},"end":{"row":31,"column":47},"action":"insert","lines":["t"]},{"start":{"row":31,"column":47},"end":{"row":31,"column":48},"action":"insert","lines":["r"]},{"start":{"row":31,"column":48},"end":{"row":31,"column":49},"action":"insert","lines":["a"]},{"start":{"row":31,"column":49},"end":{"row":31,"column":50},"action":"insert","lines":["t"]},{"start":{"row":31,"column":50},"end":{"row":31,"column":51},"action":"insert","lines":["e"]},{"start":{"row":31,"column":51},"end":{"row":31,"column":52},"action":"insert","lines":["g"]}],[{"start":{"row":31,"column":52},"end":{"row":31,"column":53},"action":"insert","lines":["y"],"id":12}],[{"start":{"row":34,"column":33},"end":{"row":34,"column":34},"action":"remove","lines":["d"],"id":13},{"start":{"row":34,"column":32},"end":{"row":34,"column":33},"action":"remove","lines":["n"]},{"start":{"row":34,"column":31},"end":{"row":34,"column":32},"action":"remove","lines":["e"]},{"start":{"row":34,"column":30},"end":{"row":34,"column":31},"action":"remove","lines":["i"]},{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"remove","lines":["r"]},{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"remove","lines":["f"]}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["s"],"id":14},{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"insert","lines":["t"]},{"start":{"row":34,"column":30},"end":{"row":34,"column":31},"action":"insert","lines":["r"]},{"start":{"row":34,"column":31},"end":{"row":34,"column":32},"action":"insert","lines":["a"]},{"start":{"row":34,"column":32},"end":{"row":34,"column":33},"action":"insert","lines":["t"]},{"start":{"row":34,"column":33},"end":{"row":34,"column":34},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":34},"end":{"row":34,"column":35},"action":"insert","lines":["g"],"id":15},{"start":{"row":34,"column":35},"end":{"row":34,"column":36},"action":"insert","lines":["y"]}],[{"start":{"row":38,"column":37},"end":{"row":38,"column":38},"action":"remove","lines":["d"],"id":16},{"start":{"row":38,"column":36},"end":{"row":38,"column":37},"action":"remove","lines":["n"]},{"start":{"row":38,"column":35},"end":{"row":38,"column":36},"action":"remove","lines":["e"]},{"start":{"row":38,"column":34},"end":{"row":38,"column":35},"action":"remove","lines":["i"]},{"start":{"row":38,"column":33},"end":{"row":38,"column":34},"action":"remove","lines":["r"]},{"start":{"row":38,"column":32},"end":{"row":38,"column":33},"action":"remove","lines":["f"]}],[{"start":{"row":38,"column":32},"end":{"row":38,"column":33},"action":"insert","lines":["s"],"id":17},{"start":{"row":38,"column":33},"end":{"row":38,"column":34},"action":"insert","lines":["t"]},{"start":{"row":38,"column":34},"end":{"row":38,"column":35},"action":"insert","lines":["r"]},{"start":{"row":38,"column":35},"end":{"row":38,"column":36},"action":"insert","lines":["a"]},{"start":{"row":38,"column":36},"end":{"row":38,"column":37},"action":"insert","lines":["t"]},{"start":{"row":38,"column":37},"end":{"row":38,"column":38},"action":"insert","lines":["e"]},{"start":{"row":38,"column":38},"end":{"row":38,"column":39},"action":"insert","lines":["g"]}],[{"start":{"row":38,"column":39},"end":{"row":38,"column":40},"action":"insert","lines":["y"],"id":18}],[{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"remove","lines":["d"],"id":19},{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"remove","lines":["n"]},{"start":{"row":41,"column":35},"end":{"row":41,"column":36},"action":"remove","lines":["e"]},{"start":{"row":41,"column":34},"end":{"row":41,"column":35},"action":"remove","lines":["i"]},{"start":{"row":41,"column":33},"end":{"row":41,"column":34},"action":"remove","lines":["r"]},{"start":{"row":41,"column":32},"end":{"row":41,"column":33},"action":"remove","lines":["f"]}],[{"start":{"row":41,"column":32},"end":{"row":41,"column":33},"action":"insert","lines":["s"],"id":20},{"start":{"row":41,"column":33},"end":{"row":41,"column":34},"action":"insert","lines":["t"]},{"start":{"row":41,"column":34},"end":{"row":41,"column":35},"action":"insert","lines":["r"]},{"start":{"row":41,"column":35},"end":{"row":41,"column":36},"action":"insert","lines":["a"]},{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"insert","lines":["t"]},{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"insert","lines":["e"]},{"start":{"row":41,"column":38},"end":{"row":41,"column":39},"action":"insert","lines":["g"]}],[{"start":{"row":41,"column":39},"end":{"row":41,"column":40},"action":"insert","lines":["y"],"id":21}],[{"start":{"row":44,"column":36},"end":{"row":44,"column":37},"action":"remove","lines":["d"],"id":22},{"start":{"row":44,"column":35},"end":{"row":44,"column":36},"action":"remove","lines":["n"]},{"start":{"row":44,"column":34},"end":{"row":44,"column":35},"action":"remove","lines":["e"]},{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"remove","lines":["i"]},{"start":{"row":44,"column":32},"end":{"row":44,"column":33},"action":"remove","lines":["r"]},{"start":{"row":44,"column":31},"end":{"row":44,"column":32},"action":"remove","lines":["f"]}],[{"start":{"row":44,"column":31},"end":{"row":44,"column":32},"action":"insert","lines":["s"],"id":23},{"start":{"row":44,"column":32},"end":{"row":44,"column":33},"action":"insert","lines":["t"]},{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"insert","lines":["r"]},{"start":{"row":44,"column":34},"end":{"row":44,"column":35},"action":"insert","lines":["a"]},{"start":{"row":44,"column":35},"end":{"row":44,"column":36},"action":"insert","lines":["t"]},{"start":{"row":44,"column":36},"end":{"row":44,"column":37},"action":"insert","lines":["e"]},{"start":{"row":44,"column":37},"end":{"row":44,"column":38},"action":"insert","lines":["g"]},{"start":{"row":44,"column":38},"end":{"row":44,"column":39},"action":"insert","lines":["y"]}],[{"start":{"row":46,"column":25},"end":{"row":55,"column":39},"action":"remove","lines":["td>","                            <?php","                            $purposes = explode(',',$friend->purpose);","                            $purposemasters = \\App\\PurposeMaster::all();","                            ?>","                            @foreach($purposemasters as $master)","                           <input type=checkbox @if(in_array($master->id,$purposes))checked @endif>","                           {{ \\App\\PurposeMaster::find($master->id)->name}}","                           ","                            @endforeach"],"id":24},{"start":{"row":46,"column":24},"end":{"row":46,"column":25},"action":"remove","lines":["<"]}],[{"start":{"row":47,"column":28},"end":{"row":47,"column":29},"action":"remove","lines":[">"],"id":25},{"start":{"row":47,"column":27},"end":{"row":47,"column":28},"action":"remove","lines":["d"]},{"start":{"row":47,"column":26},"end":{"row":47,"column":27},"action":"remove","lines":["t"]},{"start":{"row":47,"column":25},"end":{"row":47,"column":26},"action":"remove","lines":["/"]},{"start":{"row":47,"column":24},"end":{"row":47,"column":25},"action":"remove","lines":["<"]},{"start":{"row":47,"column":20},"end":{"row":47,"column":24},"action":"remove","lines":["    "]}],[{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"remove","lines":[">"],"id":26},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"remove","lines":["h"]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"remove","lines":["t"]},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"remove","lines":["/"]},{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"remove","lines":["<"]},{"start":{"row":22,"column":24},"end":{"row":22,"column":28},"action":"remove","lines":["    "]},{"start":{"row":22,"column":20},"end":{"row":22,"column":24},"action":"remove","lines":["    "]},{"start":{"row":22,"column":16},"end":{"row":22,"column":20},"action":"remove","lines":["    "]},{"start":{"row":22,"column":12},"end":{"row":22,"column":16},"action":"remove","lines":["    "]},{"start":{"row":22,"column":8},"end":{"row":22,"column":12},"action":"remove","lines":["    "]},{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":39},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"remove","lines":["ル"]},{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"remove","lines":["ト"]},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"remove","lines":["イ"]}],[{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"remove","lines":["タ"],"id":27},{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"remove","lines":["ム"]},{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"remove","lines":["ー"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"remove","lines":["ゲ"]}],[{"start":{"row":21,"column":28},"end":{"row":21,"column":32},"action":"remove","lines":["    "],"id":28},{"start":{"row":21,"column":24},"end":{"row":21,"column":28},"action":"remove","lines":["    "]},{"start":{"row":21,"column":20},"end":{"row":21,"column":24},"action":"remove","lines":["    "]},{"start":{"row":21,"column":16},"end":{"row":21,"column":20},"action":"remove","lines":["    "]},{"start":{"row":21,"column":12},"end":{"row":21,"column":16},"action":"remove","lines":["    "]},{"start":{"row":21,"column":8},"end":{"row":21,"column":12},"action":"remove","lines":["    "]},{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"remove","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":32},"end":{"row":21,"column":0},"action":"remove","lines":["",""]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":[">"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["h"]}],[{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"remove","lines":["t"],"id":29},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"remove","lines":["<"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":28},"action":"remove","lines":["    "]}],[{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"insert","lines":["g"],"id":30},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["a"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["m"]},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":29,"column":34},"end":{"row":29,"column":34},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1661604367020,"hash":"31cfcc3b0a1fef11812bf8e8d12b900d78eee133"}