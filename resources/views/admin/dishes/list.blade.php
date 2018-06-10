
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Lista de platillos</h2>
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
            <table class="table table-hover" id="dishes-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dishes as $dish)
                        <tr>
                            <th scope="row">{{ $dish->id }}</th>
                            <td>{{ $dish->name }}</td>
                            <td>{{ $dish->subcategory->category->name }} {{$dish->subcategory->name }}</td>
                            <td>${{ number_format($dish->price, 2)}}</td>
                            <td><a href="{{ route('admin.dishes.show', ['id' => $dish->id]) }}" class="btn btn-info">Ver</a></td>
                            <td><a href="{{ route('admin.dishes.edit', ['id' => $dish->id]) }}" class="btn btn-primary">Editar</a></td>
                            <td>
                                <form action="{{ route('admin.dishes.destroy', ['id' => $dish->id]) }}" method="POST">
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

@section('scripts')
    <script>        	
        $(document).ready(function() {
            $('#dishes-table').DataTable();
        } );
    </script>
@endsection