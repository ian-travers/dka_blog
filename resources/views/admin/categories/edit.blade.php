@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumbs')
        @slot('title') Редактирование категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <hr>

    <form class="" method="post" action="{{route('admin.category.update', $category)}}">
        <input type="hidden" name="_method" value="put">
        @csrf

        {{-- Form include --}}
        @include('admin.categories.partials.form')
    </form>

</div>

@endsection

