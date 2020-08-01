@extends('layouts.default')

@section('content')
    <div class="title m-b-md w-auto">
        <span class="moji">恋愛占い</span>
    </div>
    <div class="w-auto border p-5">
        <form method="post" action="">
            {{ csrf_field() }}
            <div class="row">
                <div class="col m-4">
                    <label for="myNameInput">自分の名前</label>
                    <input type="text" class="form-control px-5" name="myName">
                </div>
                <div class="col m-4">
                    <label for="myCrushInput">占いたい人の名前</label>
                    <input type="text" class="form-control px-5" name="myCrush">
                </div>
            </div>
            <button type="reset" class="btn btn-secondary m-5">リセット</button>
            <button type="submit" class="btn btn-primary m-5 px-4">占う</button>

    </div>
@endsection
