@extends('admin.layouts.master')

@section('title')
Imágenes
@endsection

@section('content')
    @foreach($directories as $directory)
        <div class="clearfix"></div>
        <div class="row">
            @include('admin.images.list', ['title' => $directory->title, 'name' => $directory->name, 'images' => $directory->images])
        </div>
    @endforeach
@endsection