@extends('errors.layout')
@section('content')
    <h1>403 Forbidden.</h1>
    <p>您沒有權限可以執行目前的動作喔！</p>
@endsection
@php
  $error_number = 403;
@endphp

@section('title')
  Forbidden.
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> or return to <a href='".url('')."'>our homepage</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection