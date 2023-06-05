@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code')
    <span class="text-danger fs-bold">404</span>
@endsection
@section('message', __('Not Found. Make sure the url is correct!'))
