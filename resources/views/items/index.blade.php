@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid hero">

<div class="col-md-6 mx-auto">
    買い物メモに商品名と使い切るまでのおおよその日数を入力してメモを作りましょう！
    
    <a class="btn btn-primary btn-md" href="{{ route('item.create') }}">
        <i class="far fa-create"></i>＋買い物メモを作る
    </a>  
    @foreach ($items as $item)
    @if ($item->user_id === Auth::id())
        <div class="card-wrap">
            <div class="card mt-3">
                <div class="card-header">
                    {{ $item->days }}
                </div>
                <div class="card-body">
                    {{ $item->name }}
                    <div>
                        
                        <a class="btn btn-success btn-sm" href="{{ route('item.edit', ['id' => $item->id]) }}">
                            <i class="far fa-edit"></i>編集
                        </a>
                        <a class="btn btn-danger btn-sm" rel="nofollow" href="{{ route('item.delete', ['id' => $item->id]) }}">
                            <i class="far fa-trash-alt"></i>削除
                        </a>
                         
                    </div>
                </div>
            </div>   
        </div>
    @endif
    @endforeach



</div>
</div>
@endsection