@extends('admin.layouts.master')

@section('title')
Editar subcategoría
@endsection

@section('content')
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Editar subcategoría</h2>
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
                    <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.subcategories.update', ['id' => $subcategory->id])}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre<span class="required">*</span></label>
        
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="{{$subcategory->name}}" required>
                            </div>
                        </div>
        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a href="javascript:history.back()" class="btn btn-info">Regresar</a>
                                <button class="btn btn-primary" type="reset">Reiniciar</button>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection