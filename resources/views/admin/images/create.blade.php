<div class="row">
    <br />
    <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.images.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="name" value="{{$name}}">

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