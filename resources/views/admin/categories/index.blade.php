@extends('admin.layouts.app_admin')

@section('content')
<div class="container">

    @component('admin.components.breadcrumbs')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <hr>

    <a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">
        <i class="fa fa-plus-square"></i>
        Создать категорию
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
        @forelse($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href="{{route('admin.category.edit', ['id' => $category->id])}}">
                        <i class="d=fa fa-edit"></i>
                    </a>
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
                    {{$categories->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>

</div>
@endsection

