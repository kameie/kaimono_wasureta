@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="text-center my-2">{{ __('買い物メモを作る') }}</h4></div>
                <div class="card-body">
            
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right">{{ __('日数') }}</label>

                            <div class="col-md-6">
                                <input id="days" type="days" class="form-control @error('days') is-invalid @enderror" name="days" value="{{ old('days') }}" required autocomplete="days" autofocus>
                    
                                @error('days')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>
                  <div class="col-md-6">
                  <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-primary">投稿する</button>
                </div>
            </form>
            </div>
            </div>
            </div>
        </div>
    </div>

@endsection