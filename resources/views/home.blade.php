@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-100">
            <div class="float-right mx-3">
                <a href="/home/create" class="btn btn-outline-dark active px-5" role="button" aria-pressed="true">質問を作成</a>
            </div>
        </div>
        <div class="w-100">
            <div class="card m-3">
                <div class="card-header">過去に作成した質問</div>
                <div class="card-body">
{{--                    表示件数多そうだからそこをページネーションにしたい、、、<br>--}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
	                            <?php $count = 0; ?>
                                <th>回答</th>
                                <th scope="col">質問タイトル</th>
                                <th scope="col">URL</th>
                                <th scope="col">作成日</th>
                                <th scope="col">編集</th>
                                <th scope="col">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($questions as $questions)
                            <tr>
                                <th scope="row">
                                    <a class="btn btn-light btn-sm" href="/home/{{$questions->url}}" role="button">{{$ans_count[$count]}}件</a>
                                </th>
                                <td> {{ $questions->title }} </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="targetID">{{ request()->fullUrl() }}/ans/{{ $questions->url }}</div>
                                        <button id="btnCopy" data-selector=".targetID" style="border: initial;"><p class="m-n1"><i class="far fa-copy fa-fw"></i></p></button>
                                    </div>
                                </td>
                                <td> {{ $questions->created_at->format('Y/m/d') }} </td>
                                <td>
                                    <a class="btn btn-outline-dark btn-sm" href="/home/edit/{{$questions->id}}" role="button">編集</a>
                                </td>
                                <td>
                                    <form method="post" action="/home/delete/{{$questions->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input type="submit" value="削除" class="btn btn-secondary btn-sm" onclick='return confirm("本当に削除致しますか？");'>
                                    </form>
                                </td>
                            </tr>
                            <?php $count++ ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
