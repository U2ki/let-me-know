@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="w-100">
                <div class="card m-3">
                    <div class="card-header">{{$question->title}}</div>
                    <div class="card-body">
                        <form method="post" action="" class="needs-validation" id="myForm" name="myForm" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑴ : {{$question->q1}}</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control" name="q1" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.1.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑵ : {{$question->q2}}</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q2" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.2.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑶ : {{$question->q3}}</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q3" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.3.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑷ : {{$question->q4}}</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q4" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.4.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑸ : {{$question->q5}}</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q5" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.5.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3 float-right" type="submit">この内容で更新する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
