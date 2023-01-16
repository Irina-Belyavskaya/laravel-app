@extends('master')

@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/change.css') ?>">
@endsection

@section('content')
    <h1>@yield('title')</h1>
    <form method="POST" action="@yield('route')" class="form-laptop">
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <textarea class="form-control-sm" name="name" id="name" rows="3" required>@yield('name')</textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <input type="text" class="form-control-sm" name="description" id="description" value="@yield('description')" required>
        </div>
        <div class="mb-3">
            <label for="producer" class="form-label">Производитель</label>
            <input type="text" class="form-control-sm" name="producer" id="producer" value="@yield('producer')" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Дата выпуска</label>
            <input type="text" class="form-control-sm" name="date" id="date" value="@yield('date')" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Стоимость</label>
            <input type="text" class="form-control-sm" name="price" id="price" value="@yield('price')" required>
        </div>
        @yield('hidden data')
        <button type="submit" class="btn btn-primary btn-submit-laptop">Сохранить</button>
        @csrf
    </form>
    <script src="{{ URL::asset('js/validation.js') }}"></script>
@endsection
