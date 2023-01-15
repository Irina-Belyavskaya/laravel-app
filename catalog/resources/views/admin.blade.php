@extends('master')

@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('title','Admin')

@section('content')
    <div class="user">
        <a href="{{ route('index') }}" class="btn btn-dark">Пользователь</a>
    </div>
    <h1>Страница администратора</h1>
    <h2>Ноутбуки</h2>
    <div class="wrap-btn">
        <a href="{{ route('add','laptop') }}" class="btn btn-primary btn-add-laptop mb-2" role="button"><span>Добавить ноутбук</span></a>
    </div>
    <table class="table table-sm table-dark table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название ноутбука</th>
            <th scope="col">Описание</th>
            <th scope="col">Производитель</th>
            <th scope="col">Дата выпуска</th>
            <th scope="col">Стоимость</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach($computers as $computer)
        <tr scope="row">
            <td>
                {{ $computer->id }}
            </td>
            <td>
                {{ $computer->name }}
            </td>
            <td>
                {{ $computer->description }}
            </td>
            <td>
                {{ $computer->producer }}
            </td>
            <td>
                {{ $computer->date }}
            </td>
            <td>
                {{ $computer->price }}
            </td>
            <td>
                <div class="options">
                    <a class="btn btn-primary delete-btn-laptop mb-1" data-id="{{ $computer->id }}"><span>Удалить</span></a>
                    <a class="btn btn-primary change-btn-laptop" data-id="{{ $computer->id }}"><span>Изменить</span></a>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <h2>Услуги</h2>
    <div class="wrap-btn">
        <a href="{{ route('add','service') }}" class="btn btn-primary btn-add-service mb-2" role="button"><span>Добавить услугу</span></a>
    </div>
    <table class="table table-sm table-dark table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название услуги</th>
            <th scope="col">Срок</th>
            <th scope="col">Стоимость</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach($services as $service)
            <tr scope="row">
                <td>
                    {{ $service->id }}
                </td>
                <td>
                    {{ $service->name }}
                </td>
                <td>
                    {{ $service->term }}
                </td>
                <td>
                    {{ $service->price }}
                </td>
                <td>
                    <div class="options">
                        <a class="btn btn-primary delete-btn-service" data-id="{{ $service->id }}"><span>Удалить</span></a>
                        <a class="btn btn-primary change-btn-service" data-id="{{ $service->id }}"><span>Изменить</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <form class="hidden-form" method="POST">
        <input type="text" name="id" id="hiddenId" hidden>
        <input type="text" name="name" id="name" hidden>
        @csrf
    </form>
    <script src="{{ URL::asset('js/delete.js') }}"></script>
    <script src="{{ URL::asset('js/change.js') }}"></script>
@endsection
