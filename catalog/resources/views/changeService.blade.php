@extends('formService')

@section('title','Change Service')

@section('route')
    {{ route('create') }}
@endsection

@section('name')
    {{ $service->name }}
@endsection

@section('term')
    {{ $service->term }}
@endsection

@section('price')
    {{ $service->price }}
@endsection
