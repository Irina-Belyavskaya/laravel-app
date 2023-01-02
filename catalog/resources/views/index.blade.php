<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/index.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Computers</title>
</head>
<body>
    <div class="admin">
        <a href="admin" class="btn btn-dark">Администратор</a>
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
                        <tr scope="row">
                            <td>
                                <div>
                                    <input class="form-check-input checkbox-btn" type="checkbox" id="checkboxNoLabel" data-price="100">
                                </div>
                            </td>
                            <td>
                                Гарантийное обслуживание
                            </td>
                            <td>
                                1 год
                            </td>
                            <td>
                                100
                            </td>
                            <td>
                                BYN
                            </td>
                        </tr>
                        <tr scope="row">
                            <td>
                                <div>
                                    <input class="form-check-input checkbox-btn" type="checkbox" id="checkboxNoLabel" data-price="10">
                                </div>
                            </td>
                            <td>
                                Доставка
                            </td>
                            <td>
                                2 дня
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                BYN
                            </td>
                        </tr>
                        <tr scope="row">
                            <td>
                                <div>
                                    <input class="form-check-input checkbox-btn" type="checkbox" id="checkboxNoLabel" data-price="50">
                                </div>
                            </td>
                            <td>
                                Установка ОС
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                50
                            </td>
                            <td>
                                BYN
                            </td>
                        </tr>
                        <tr scope="row">
                            <td>
                                <div>
                                    <input class="form-check-input checkbox-btn" type="checkbox" id="checkboxNoLabel" data-price="50">
                                </div>
                            </td>
                            <td>
                                Настройка
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                50
                            </td>
                            <td>
                                BYN
                            </td>
                        </tr>
                    </table>
                    <p class="modal-total-price"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary close-modal" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>
