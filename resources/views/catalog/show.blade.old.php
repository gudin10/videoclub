@section('content')
     <div class="row">       
          <div class="col-sm-4">    

               @foreach ($id as $i => $pelicula)
               <img src=" {{ $pelicula['poster']}}"style="height:400px"/>
              
               @endforeach  
          </div>      
          <div class="col-sm-8">           
          <div class="col-sm-8">           
          @foreach( $id as $i => $pelicula)          
                <h1 style="min-height:45px;margin:5px 0 10px 0">                   
                    {{$pelicula['title']}}
                </h1>      
                <div>
                    <h6>AÑO: {{$pelicula['year']}}</h6>
                    <h6>DIRECTOR: {{$pelicula['director']}}</h6>
                    <h6>SYNOPSIS: {{$pelicula['synopsis']}}</h6>
                    <h6>ESTADO: 
                        @if ($pelicula['rented'] == 1 )
                            LA Película Se Encuentra Actualmente Alquilada
                        @else
                            La Película Esta Disponible
                        @endif
                    </h6>
                    <div>
                        <button type="button" class="btn btn-danger">Devolver Películas</button>
                        <button type="button" class="btn btn-warning">Editar Película</button>
                        <button type="button" class="btn btn-info">Volver al listado</button>
                    </div>

                </div>             
            @endforeach
          </div> 
     </div>
@stop