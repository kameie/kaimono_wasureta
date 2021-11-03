@extends('layouts.app')

@section('content')






<div class="col-md-6 mx-auto">



    
    
    <a class="btn btn-md" href="{{ route('item.create') }}">
        <i class="far fa-create"></i>買い物メモを作る
</a>  

<div class="text-wrap text-white" style="width:50rem;">買い物メモに物の名前と使い切るまでのおおよその日数を入力してメモを作りましょう！</div>


    @foreach ($items as $item)
    @if ($item->user_id === Auth::id())
    <div class="card-columns">
        <div class="card mt-3">
                <div class="card-header">
                    {{ $item->days }}日
                </div>
                <div class="card-body">
                    {{ $item->name }}
                    </div>
                        
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
    @endif
    @endforeach




</div>
@endsection