@extends('layouts.app')

@section('content')
    <div class="w-auto p-5 text-center">
        <p>
            このURL作成者に占い内容をメールが送信しました。<br><br>
            あなたもURLを作成する  →
            <a class="btn btn-outline-secondary mx-3" href="{{ route('register') }}">{{ __('Register') }}</a>
        </p>
    </div>
@endsection
