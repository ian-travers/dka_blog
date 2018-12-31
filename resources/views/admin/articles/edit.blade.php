@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumbs')
            @slot('title') Редактирование новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <form class="" method="post" action="{{route('admin.article.update', $article)}}">
            <input type="hidden" name="_method" value="put">
            @csrf

            {{-- Form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>

    </div>

@endsection



