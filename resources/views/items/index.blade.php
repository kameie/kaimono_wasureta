@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-10">        
            <div class="row">
                <div class="col text-center mb-4">
                <a class="btn btn-md" href="{{ route('item.create') }}"><i class="far fa-create"></i>買い物メモを作る</a>
                 
                @guest       
                <div class="col text-center mt-4">
       <img src="img/スクリーンショット 2021-11-05 22.37.30.png"></div>
                @endguest
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">        
            <div class="row">   
    @foreach ($items as $item)
    @if ($item->user_id === Auth::id()) 
            <div class="col-md-4">
    <div class="card mb-3">
            <div class="card-header text-center">
                    {{ $item->days }}日 
                     <div class="text-right">
                        <a class="btnorigin btn-outline-success btn-sm" href="{{ route('item.edit', ['id' => $item->id]) }}">
                            <i class="far fa-edit"></i>編集
                        </a>
                        <a class="btnorigin btn-outline-danger btn-sm" rel="nofollow" href="{{ route('item.delete', ['id' => $item->id]) }}">
                            <i class="far fa-trash-alt"></i>削除
                        </a>
                </div>
                </div>
                <div class="card-body text-center">
                    {{ $item->name }}
                    </div>
                </div>
                </div>
    @endif
    @endforeach
</div>
</div>
</div>
</div>
@endsection