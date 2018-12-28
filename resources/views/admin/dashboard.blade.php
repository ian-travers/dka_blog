@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="jumbotron">
                <button class="btn btn-primary">Категорий:&nbsp;
                    <span class="badge badge-light">0</span>
                </button>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <button class="btn btn-primary">Материалов:&nbsp;
                    <span class="badge badge-light">0</span>
                </button>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <button class="btn btn-primary">Пользователей:&nbsp;
                    <span class="badge badge-light">0</span>
                </button>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <button class="btn btn-primary">Сегодня посетили:&nbsp;
                    <span class="badge badge-light">0</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <a class="btn btn-block btn-lg btn-outline-secondary" href="{{route('admin.category.create')}}">Создать категорию</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item list-group-item-secondary">Категория первая</h4>
                <p class="list-group-item list-group-item-light">Кол-во материалов</p>
            </a>
        </div>
        <div class="col-6">
            <a class="btn btn-block btn-lg btn-outline-secondary" href="#">Создать материал</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item list-group-item-secondary">Материал первый</h4>
                <p class="list-group-item list-group-item-light">Категория</p>
            </a>
        </div>
    </div>
</div>
@endsection