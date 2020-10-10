@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-100">
            <div class="float-left mx-3">
                <a href="/home" class="btn btn-outline-dark active px-4" role="button" aria-pressed="true"><< 戻る</a>
            </div>
        </div>
        <div class="w-100">
            <div class="card m-3">
                <div class="card-header">質問に来た回答</div>
                <div class="card-body">
                    表示件数多そうだからそこをページネーションにしたい、、、<br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
{{--                                <th>回答</th>--}}
{{--                                <th scope="col">質問タイトル</th>--}}
{{--                                <th scope="col">作成日</th>--}}
{{--                                <th scope="col">編集</th>--}}
{{--                                <th scope="col">削除</th>--}}
                            </tr>
                        </thead>
                        <tbody>
{{--                        @foreach ($questions as $questions)--}}
{{--                            <tr>--}}
{{--                                <th scope="row">回答数</th>--}}
{{--                                <td> {{ $questions->title }} </td>--}}
{{--                                <td> {{ $questions->created_at->format('Y/m/d') }} </td>--}}
{{--                                <td>--}}
{{--                                    <a class="btn btn-outline-dark btn-sm" href="/home/edit/{{$questions->id}}" role="button">編集</a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <form method="post" action="/home/delete/{{$questions->id}}">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('delete') }}--}}
{{--                                        <input type="submit" value="削除" class="btn btn-secondary btn-sm" onclick='return confirm("本当に削除致しますか？");'>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
