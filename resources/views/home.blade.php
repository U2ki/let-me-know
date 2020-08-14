@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-100">
            <div class="float-right mx-3">
                <a href="/home/create" class="btn btn-outline-secondary active px-5" role="button" aria-pressed="true">新規登録</a>
            </div>
        </div>
        <div class="w-100">
            <div class="card m-3">
                <div class="card-header">過去の履歴</div>
                <div class="card-body">
                    ここに削除ボタンあると良いよね<br>
                    表示件数多そうだからそこをページネーションに<br>
                    登録情報の更新したいな
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">占った方の名前</th>
                                <th scope="col">占った方の好きな人の名前</th>
                                <th scope="col">日付</th>
                                <th scope="col">削除</th>
                            </tr>
                        </thead>
                        <tbody>
{{--                        @foreach ($fortunes as $fortune)--}}
                            <tr>
                                <th scope="row">{{-- $fortune_id++ --}}</th>
                                <td>{{-- $fortune->my_name --}}</td>
                                <td>{{-- $fortune->my_crush_name --}}</td>
                                <td>{{-- $fortune->updated_at --}}</td>
{{--                                <td>--}}
{{--                                    @include('modal_windows.modal_window',['my_name' => $fortune->my_name,--}}
{{--                                                                           'my_crush_name' => $fortune->my_crush_name,--}}
{{--                                                                           'function' => 'fix']--}}
{{--                                                                    ){{$fortune->my_crush_name}}--}}
{{--                                </td>--}}
                                <td>
{{--                                    @include('modal_windows.modal_window',[ 'id' => $fortune->id,--}}
{{--	                                                                        'my_name' => $fortune->my_name,--}}
{{--                                                                            'my_crush_name' => $fortune->my_crush_name--}}
{{--                                                                           ]--}}
{{--                                                                    )--}}
                                </td>
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
