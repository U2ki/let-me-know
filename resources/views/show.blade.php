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
                <div class="card-header">質問[" {{$question->title}} "]に来た回答</div>
                <div class="card-body">
                    表示件数多そうだからそこをページネーションにしたい、、、<br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php $id = 0; ?>
                                <th>#</th>
                                <th scope="col">{{$question->q1}}</th>
                                @if($question->q2 != NULL)
                                <th scope="col">{{$question->q2}}</th>
                                @endif
                                @if($question->q3 != NULL)
                                <th scope="col">{{$question->q3}}</th>
                                @endif
                                @if($question->q4 != NULL)
                                <th scope="col">{{$question->q4}}</th>
                                @endif
                                @if($question->q5 != NULL)
                                <th scope="col">{{$question->q5}}</th>
                                @endif
                                <th scope="col">回答日</th>
                                <th scope="col">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($answers as $answer)
                            <tr>
                                <th scope="row">{{++$id}}</th>
                                <td> {{ $answer->a1 }} </td>
                                @if($question->q2 != NULL)
                                <td> {{ $answer->a2 }} </td>
                                @endif
                                @if($question->q3 != NULL)
                                    <td> {{ $answer->a3 }} </td>
                                @endif
                                @if($question->q4 != NULL)
                                    <td> {{ $answer->a4 }} </td>
                                @endif
                                @if($question->q5 != NULL)
                                    <td> {{ $answer->a5 }} </td>
                                @endif
                                <td> {{ $answer->created_at->format('Y/m/d') }} </td>
                                <td>
                                    <form method="post" action="/home/{{$question->url}}/delete/{{$answer->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input type="submit" value="削除" class="btn btn-secondary btn-sm" onclick='return confirm("本当に削除致しますか？");'>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
