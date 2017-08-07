@extends('layouts.default')

@section('title', '主页')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在看到的是
      <a href="https://fsdhub.com/books/laravel-essential-training-5.1">
        Laravel 入门教程
      </a> 的示例项目主页。
    </p>
        <a class="btn btn-lg btn-succedd" href="{{ route('signup') }}" role="button">现在注册</a>
  </div>
@stop
