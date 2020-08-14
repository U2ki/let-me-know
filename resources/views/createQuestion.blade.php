@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="w-100">
                <div class="card m-3">
                    <div class="card-header">新規作成</div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label pr-1" for="text10">タイトル</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control" id="text10" required>
                                    <div class="invalid-feedback">
                                        Please enter question title.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label pr-1" for="text10">回答通知メール</label>
                                <div class="input-group col-sm-9">
                                    <div class="form-check form-check-inline p-2">
                                        <input class="form-check-input" type="radio" name="emailAvailability" value="yes">
                                        <label class="m-auto px-2">有</label>
                                    </div>
                                    <div class="form-check form-check-inline px-4">
                                        <input class="form-check-input" type="radio" name="emailAvailability" value="no" checked>
                                        <label class="m-auto px-2">無</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label pr-1" for="text10">質問 ⑴</label>
                                <div class="input-group col-sm-10">
                                    <input type="text" class="form-control" id="text10" required>
                                    <div class="invalid-feedback">
                                        Please enter question No.1.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
