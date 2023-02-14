@extends('layout.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
        インデックスページ
@endsection

@section('content')
    <p>ここがコンテンツの本文です。</p>
    <p>Controller Value!!<br>'message' = {{$message}}</p>
    <p>ViewComposer Value!!<br>'view_message' = {{$view_message}}</p>

    <!-- @component('components.message')
        @slot('msg_title')
        CAUTION!!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です
        @endslot

    @endcomponent -->
@endsection

@section('footer')
copyright 2017 takaya
@endsection
