@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumbs')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <hr>

    <form class="" method="post" action="{{route('admin.category.store')}}">
        @csrf

        {{-- Form include --}}
        @include('admin.categories.partials.form')
    </form>

</div>

@endsection

