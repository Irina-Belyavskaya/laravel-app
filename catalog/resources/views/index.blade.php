@extends('master')

@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/index.css') ?>">
@endsection

@section('title','Computers')

@section('content')
    <div class="admin">
        <a href="{{ route('admin') }}" class="btn btn-dark">Администратор</a>
    </div>
    <h1>Выбери свой ноутбук!</h1>
    <div class="wrapper">
        @foreach($computers as $computer)
            <div class="card">
                <div class="card-body">
                    <h3>{{ $computer->name }}</h3>
                    <p><span class="bold">Описание:</span> {{ $computer->description }}</p>
                    <p><span class="bold">Производитель:</span> {{ $computer->producer }}</p>
                    <p><span class="bold">Дата выпуска:</span> {{ $computer->date }}</p>
                    <p><span class="bold">Цена:</span> {{ $computer->price }} BYN</p>
                    <a href="#" class="btn btn-primary show-computer" data-bs-toggle="modal" data-bs-target="#modal"
                       data-name="{{ $computer->name }}"
                       data-description="{{ $computer->description }}"
                       data-producer="{{ $computer->producer }}"
                       data-date="{{ $computer->date }}"
                       data-price="{{ $computer->price }}"
                    >Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-description"></p>
                    <p class="modal-producer"></p>
                    <p class="modal-date"></p>
                    <p class="modal-price" data-price=""></p>
                    <p>Дополнительные услуги:</p>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Название услуги</th>
                            <th scope="col">Сроки</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        @foreach($services as $service)
                        <tr scope="row">
                            <td>
                                <div>
                                    <input class="form-check-input checkbox-btn" type="checkbox" id="checkboxNoLabel" data-price="{{ $service->price }}">
                                </div>
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
                                BYN
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <p class="modal-total-price"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary close-modal" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/calculateSum.js') }}"></script>
@endsection

