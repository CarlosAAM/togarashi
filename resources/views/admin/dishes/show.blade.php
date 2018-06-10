@extends('admin.layouts.master') @section('title') Platillo @endsection @section('content')
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $dish->name }}</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <br />
                <ul class="messages">
                    <li>
                        <div class="message_wrapper">
                            <h4 class="heading">Categoria</h4>
                            <blockquote class="message">{{ $dish->subcategory->category->name }}</blockquote>
                            <br />
                        </div>
                    </li>
                    <li>
                        <div class="message_wrapper">
                            <h4 class="heading">Subcategoria</h4>
                            <blockquote class="message">{{ $dish->subcategory->name }}</blockquote>
                            <br />
                        </div>
                    </li>
                    <li>
                        <div class="message_wrapper">
                            <h4 class="heading">Descripción</h4>
                            <blockquote class="message">{{ $dish->description }}</blockquote>
                            <br />
                        </div>
                    </li>

                    <li>
                        <div class="message_wrapper">
                            <h4 class="heading">Precio</h4>
                            <blockquote class="message">${{ number_format($dish->price, 2) }}</blockquote>
                            <br />
                        </div>
                    </li>
                </ul>
                <!-- end recent activity -->

                <div class="row">
                    <form action="{{ route('admin.dishes.destroy', ['id' => $dish->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        
                        <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
                        <a href="{{route('admin.dishes.edit', ['id' => $dish->id])}}" class="btn btn-primary pull-right">Editar</a>
                        <a href="javascript:history.back()" class="btn btn-info pull-right">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection