@extends('layouts.master')
@section('content')
     <div class="row">       
          <div class="col-sm-4">    
               @foreach ($id as $i => $parametro)
               <img src=" {{ $parametro['poster']}}"style="height:400px"/>
               @endforeach  
          </div>      
          <div class="col-sm-8">       
          @foreach( $id as $i => $parametro)          
                <h1 style="min-height:45px;margin:5px 0 10px 0">                   
                    {{$parametro['title']}}
                </h1>      
                <div>
                    <h6>AÑO: {{$parametro['year']}}</h6>
                    <h6>DIRECTOR: {{$parametro['director']}}</h6>
                    <h6>SYNOPSIS: {{$parametro['synopsis']}}</h6>
                    <h6>ESTADO: 
                        @if ($parametro['rented'] == 1 )
                            Película Actualmente Alquilada
                        @else
                            Película Disponible
                        @endif
                    </h6>
                    <div>
                        <button type="button" class="btn btn-danger">Devolver Películas</button>
                        <a href="{{ url('/catalog/edit/{id}') }}">
                        <button type="button" class="btn btn-warning"><i class="fal fa-pencil-alt"></i> Editar Película</button>
                        </a>
                        <button type="button" class="btn btn-info"><i class="fas fa-chevron-circle-left"></i> Volver al listado</button>
                    </div>

                </div>             
            @endforeach
          </div> 
     </div>
@stop
