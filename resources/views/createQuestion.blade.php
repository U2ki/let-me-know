@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="w-100">
                <div class="card m-3">
                    <div class="card-header">新規作成</div>
                    <div class="card-body">
                        <form method="post" action="" class="needs-validation" id="myForm" name="myForm" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">タイトル <span style="color: firebrick;">*</span></label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control" name="title" required>
                                    <div class="invalid-feedback">
                                        Please enter question title.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">回答通知メール</label>
                                <div class="input-group col-sm-9">
                                    <div class="form-check form-check-inline p-2">
                                        <input class="form-check-input" type="radio" name="emailAvailability" value="1">
                                        <label class="m-auto px-2">有</label>
                                    </div>
                                    <div class="form-check form-check-inline px-4">
                                        <input class="form-check-input" type="radio" name="emailAvailability" value="0" checked>
                                        <label class="m-auto px-2">無</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑴ <span style="color: firebrick;">*</span></label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control" name="q1" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.1.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑵</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q2">
                                    <div class="invalid-feedback">
                                        Please enter question No.2.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑶</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q3">
                                    <div class="invalid-feedback">
                                        Please enter question No.3.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑷</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q4">
                                    <div class="invalid-feedback">
                                        Please enter question No.4.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pr-1">質問 ⑸</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control w-100" name="q5">
                                    <div class="invalid-feedback">
                                        Please enter question No.5.
                                    </div>
                                </div>
                            </div>


                            {{-- addQuestion.jsを使った質問をプラスボタンで追加する用 --}}
{{--                            <div id="add-form" class="form-group">--}}
{{--                                <div class="unit">--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label for="inputEmail" class="col-sm-2 col-form-label pr-1" for="text10">質問 ⑴</label>--}}
{{--                                        <div class="input-group col-sm-10">--}}
{{--                                            <input type="text" class="form-control" id="text10" required>--}}
{{--                                            <div class="invalid-feedback" id="validation">--}}
{{--                                                Please enter question No.1.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="demo-minus input-group-append">--}}
{{--                                        <span class="btn btn-danger">-</span>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="demo-plus" class="btn btn-primary">+</div>--}}


{{--                            <div class="form-group row">--}}
{{--                                <label class="col-sm-2 col-form-label pr-1" for="text10">レイアウト</label>--}}
{{--                                <div class="input-group col-sm-9">--}}
{{--                                    <div class="form-check form-check-inline p-2">--}}
{{--                                        <input class="form-check-input" type="radio" name="layout" value="1" checked>--}}
{{--                                        <label class="m-auto px-2">1</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check form-check-inline px-4">--}}
{{--                                        <input class="form-check-input" type="radio" name="layout" value="2">--}}
{{--                                        <label class="m-auto px-2">2</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <button class="btn btn-primary mt-3 float-right" type="submit">この内容で作成</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
