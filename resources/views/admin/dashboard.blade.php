@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">Категорий:&nbsp;
                        <span class="badge badge-light">{{$count_categories}}</span>
                    </button>
                </div>
            </div>
            <div class="col-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">Материалов:&nbsp;
                        <span class="badge badge-light">{{$count_articles}}</span>
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
                @foreach($categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                        <h4 class="list-group-item list-group-item-secondary">{{$category->title}}</h4>
                        <p class="list-group-item list-group-item-light">{{$category->articles()->count()}}</p>
                    </a>
                @endforeach

            </div>
            <div class="col-6">
                <a class="btn btn-block btn-lg btn-outline-secondary" href="#">Создать материал</a>
                @foreach($articles as $article)
                    <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                        <h4 class="list-group-item list-group-item-secondary">{{$article->title}}</h4>
                        <p class="list-group-item list-group-item-light">{{$article->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection