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
                                ジャンル
                            </th>
                            
                        </tr>
                        
                    
                    
                    
                    @endforeach
                    
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
