@extends('admin.layouts.master') 

@section('title') 
Categoria 
@endsection 

@section('content')

<div class="clearfix"></div>

<div class="row">

    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
        <div class="x_panel">
            <div class="x_content">  
                <img src="https://drive.google.com/uc?id={{ $category->image }}" alt="..." class="img-responsive">
                <h3 class="name text-center">{{$category->name}}</h3>

                <div class="row">
                    <form action="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
                        <a href="{{route('admin.categories.edit', ['id' => $category->id])}}" class="btn btn-primary pull-right">Editar</a>
                        <a href="javascript:history.back()" class="btn btn-info pull-right">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.subcategories.create')

    @include('admin.subcategories.list')
</div>



@endsection