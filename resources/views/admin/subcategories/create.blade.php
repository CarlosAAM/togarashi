<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar una subcategoría de esta categoría</h2>
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
            <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.subcategories.store')}}">
                {{ csrf_field() }}
                <input type="hidden" name="category_id" value="{{$category->id}}">

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required">*</span></label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required>
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reiniciar</button>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>