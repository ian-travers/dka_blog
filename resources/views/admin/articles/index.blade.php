@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumbs')
            @slot('title') Список новостей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.article.create')}}" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>
            Создать новость
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Наименование</th>
                <th>Публикация</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')) {return true} else {return false}" action="{{route('admin.article.destroy', $article)}}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            @csrf

                            <a class="btn btn-outline-dark" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Данные не найдены</td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination float-right">
                        {{$articles->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
@endsection

