@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>日数</label>
                    <input type="text" class="form-control" placeholder="ここに日数を入力して下さい" name="days">
                </div>
                <div class="form-group">
                  <label>名前</label>
                  <input type="text" class="form-control" placeholder="ここに名前を入力して下さい" name="name">
                </div>
                <button type="submit" class="btn btn-primary">投稿する</button>
            </form>
        </div>
    </div>
</div>
@endsection