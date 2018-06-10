
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Subcategorias de la categoria</h2>
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Platillos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->subcategories as $subcategory)
                            <tr>
                                <th scope="row">{{$subcategory->id}}</th>
                                <td>{{$subcategory->name}}</td>
                                <td>{{count($subcategory->dishes)}}</td>
                                <td><a href="{{route('admin.subcategories.edit', ['id' => $subcategory->id])}}" class="btn btn-primary">Editar</a></td>
                                <td>
                                    <form action="{{ route('admin.subcategories.destroy', ['id' => $subcategory->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
        </div>
    </div>
    