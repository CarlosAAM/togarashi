@extends('admin.layouts.master')

@section('title')
Platillos
@endsection

@section('content')
    <div class="clearfix"></div>
    <div class="row">
        @include('admin.dishes.create')
    </div>

    <div class="clearfix"></div>
    <div class="row">
        @include('admin.dishes.list')
    </div>
@endsection