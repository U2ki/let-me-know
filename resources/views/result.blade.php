@extends('layouts.layout')

@section('content')
    @if($result == 'error')
        <div class="m-b-md w-auto ">
            <h1 class="p-5"><span class="px-5" style="float: left; color: darkred;">ERROR: </span><span style="float: left">URLが異なります</span></h1>
        </div>
    @elseif($result == 'normally')
        <div class="m-b-md w-auto ">
            <h1 class="text-center p-5">回答を送信しました</h1>
            <div class="text-center p-3">
                <a class="btn btn-secondary btn-sm" href="/" role="button">ホームへ</a>
            </div>
        </div>
    @endif
@endsection
