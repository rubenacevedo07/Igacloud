@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Clientes
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Clientes</div>
                </div>
                 <div class="box-body">
                  <div class="col-xs-5">
                    @if(! $clients)
                      <span class="label label-warning label-danger">
                        Primero proceda a cargar su negocio 
                      </span>
                    @else
                     
                    @endif
                    </div>
                    <div class="col-xs-7">
                    @if (Session::has('success'))
                           <div class="alert alert-success" role="alert">
                              <strong>Excelente!</strong> {{ Session::get('success') }}
                            </div>

                    @endif
                    @if (count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                              <strong>Errores:</strong>
                              <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach  
                              </ul>
                            </div>
                    @endif
                    </div>
                    
                  </div>
                    
            <div class="box-body">
              @if($clients)
                  <table class="table table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Puntos</th>
                  <th>Acciones</th>
            
              </thead>
              <tbody>
              
                @foreach($clients as $id => $client)

                  <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>
                      <img height="25px" src="{{ asset('uploads/' . $client->image )}}" class="thumbnail" style="margin-bottom:0px;">
                    </td>
                    <td>{{ $client->points }}</td>
                    <td>
                      <!--
                      <a href="{{ route('clients.show', $client->id)}}" class="btn btn-default btn-xs">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>
                      <a  href="{{ route('clients.edit', $client->id)}}" class="btn btn-default btn-xs">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </a>
                    -->
                      <button  type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#model-{{ $id }}">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                      </button>
                      <button  type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#models-{{ $id }}">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                      </button>
                      
                    </td>
                  </tr>
                      <div id="model-{{ $id }}" class="modal fade" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Agregar puntos a <br> <b>{{$client->name}}</b> </h4>
                                </div>
                                <div class="modal-body">
                                 
                                      {!! Form::open(['url' => ['admin/addpoints'], 'method' => 'POST']) !!}

                                          {{ Form::hidden('id', $client->id) }}

                                          {{ Form::label('puntos', 'Añadir puntos *') }}
                                          {{ Form::number('puntos',null, array('class' => 'form-control', 'min' =>0 ,'required' => '', 'maxlength' =>'20', 'placeholder' => 'Elija cantidad de puntos')) }}
          
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    <div class="col-xs-6">
                                    {{ Form::button('Añadir puntos', array('class'=>'btn btn-success btn-block', 'type'=>'submit')) }}
                                  {!! Form::close() !!}

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div id="models-{{ $id }}" class="modal fade" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Quitar puntos a <br> <b>{{$client->name}}</b> </h4>
                                </div>
                                <div class="modal-body">
                                 
                                      {!! Form::open(['url' => ['admin/quitpoints'], 'method' => 'POST']) !!}

                                          {{ Form::hidden('id', $client->id) }}

                                          {{ Form::label('points', 'Quitar puntos *') }}
                                          {{ Form::number('points',null, array('class' => 'form-control', 'min' =>0 ,  'required' => '', 'maxlength' =>'20', 'placeholder' => 'Elija cantidad de puntos a quitar')) }}
          
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    <div class="col-xs-6">
                                    {{ Form::button('Quitar puntos', array('class'=>'btn btn-danger btn-block', 'type'=>'submit')) }}
                                  {!! Form::close() !!}

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                @endforeach
              
              </tbody>
            </table>
            @if($clients->links())
                <div class="well">
                  
                  
                  <div class="text-center">
                    {!! $clients->links(); !!}
                  </div>

                  

                </div>
            @endif
              @else
                
                  <div class="alert alert-danger centeralert">
                    <p>No hay clientes registrados en la aplicación.</p>
                  </div>
                
              @endif
                </div>
            </div>
            
        </div>
    </div>
@endsection
