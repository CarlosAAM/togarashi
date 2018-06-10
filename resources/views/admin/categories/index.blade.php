@extends('admin.layouts.master')

@section('title')
Categorias
@endsection

@section('content')
    <div class="clearfix"></div>
    <div class="row">
        @include('admin.categories.create')
    </div>

    <div class="clearfix"></div>
    <div class="row">
        @include('admin.categories.list')
    </div>
@endsection