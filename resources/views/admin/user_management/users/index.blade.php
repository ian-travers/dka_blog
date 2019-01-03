<?php
/**
 * @var \App\User $user
 * @var \App\User[] $users
 */
?>

@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumbs')
            @slot('title') Список пользователей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.user_management.user.create')}}" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>
            Создать пользователя
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th class="text-right">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')) {return true} else {return false}" action="{{route('admin.user_management.user.destroy', $user)}}" method="post">
                            @method('delete')
                            @csrf

                            <a class="btn btn-outline-dark" href="{{route('admin.user_management.user.edit', $user)}}"><i class="fa fa-edit"></i></a>
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
                        {{$users->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
@endsection



