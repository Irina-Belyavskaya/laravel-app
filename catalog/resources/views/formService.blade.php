@extends('master')

@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/change.css') ?>">
@endsection

@section('title','Change Service')

@section('content')
    <h1>@yield('title')</h1>
    <form method="POST" action="@yield('route')" class="form-service">
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <textarea class="form-control-sm" name="name" id="name" rows="3" required>@yield('name')</textarea>
        </div>
        <div class="mb-3">
            <label for="term" class="form-label">Срок</label>
            <input type="text" class="form-control-sm" name="term" id="term" value="@yield('term')" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Стоимость</label>
            <input type="text" class="form-control-sm" name="price" id="price" value="@yield('price')" required>
        </div>
        <button type="submit" class="btn btn-primary btn-submit-service">Сохранить</button>
        @csrf
    </form>
@endsection
