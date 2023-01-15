@extends('formLaptop')

@section('title','Change Laptop')

@section('route')
    {{ route('update') }}
@endsection

@section('name')
    {{ $computer->name }}
@endsection

@section('description')
    {{ $computer->description }}
@endsection

@section('producer')
    {{ $computer->producer }}
@endsection

@section('date')
    {{ $computer->date }}
@endsection

@section('price')
    {{ $computer->price }}
@endsection
