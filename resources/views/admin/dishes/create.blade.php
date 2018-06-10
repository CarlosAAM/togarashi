<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar platillo</h2>
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
            <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.dishes.store')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre
                        <span class="required">*</span>
                    </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Descripción
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" rows="3" name="description" placeholder='Escribe sobre el platillo...'></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Precio
                        <span class="required">*</span>
                    </label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" step=".5" min="5" max="10000" value="5" id="price" name="price" class="form-control col-md-7 col-xs-12"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subcategory_id">Subcategoria</label>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_group form-control" id="subcategory_id" name="subcategory_id">
                            @foreach($categories as $category)
                            <optgroup label="{{ $category->name }}">
                                @foreach($category->subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $category->name }} {{ $subcategory->name }}</option>
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>
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