@extends('layouts.app')

@section('content')
    <div class="col-md-6 mx-auto">
        <a class="btn btn-primary btn-md" href="{{ route('item.create') }}">
            <i class="far fa-create"></i>＋買い物メモを作る
        </a>  
        @foreach ($items as $item)
            <div class="card-wrap">
                <div class="card mt-3">
                    <div class="card-header">
                        {{ $item->days }}
                    </div>
                    <div class="card-body">
                        {{ $item->name }}
                    </div>
                </div>   
            </div>
        @endforeach
    </div>
@endsection