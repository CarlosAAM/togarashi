<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{ $directory->name }}</h2>
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
            <div class="row">
                @foreach($directory->files as $image)
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="https://drive.google.com/uc?id={{ $image->basename }}" alt="image" />
                                <div class="mask">
                                    <div class="tools tools-bottom">
                                      
                                        <form action="{{ route('admin.images.destroy', ['id' => $image->basename]) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Imagen {{$loop->iteration}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>