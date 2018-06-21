<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar imagen</h2>
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
            <p>Agrega imágenes a la sección de la página principal que prefieras.</p>
            <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.images.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir">Sección</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_group form-control" id="dir" name="dir">
                            @foreach($directories as $directory)
                                <option value="{{ $directory->path }}">{{ $directory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Imagen
                        <span class="required">*</span>
                    </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="image" accept=".jpg, .jpeg, .png" name="image" class="form-control col-md-7 col-xs-12" required>
                    </div>
                </div>

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