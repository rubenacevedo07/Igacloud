@extends('backpack::layout')

@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection


@section('header')
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix')).'/mercadoadmin' }}">Mercados</a></li>
        <li class="active">Mostrar Negocio</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="box box-default">
           
                  <div class="container-center">
                    <div class="text-center">
                      @if(! empty($mercado->logo))
                    <img class="logo img-responsive" src="{{ asset('uploads/' . $mercado->logo )}}" />
                    @endif
                      <h1 class="text-center"> 
                        <b>{{ $mercado->mercado }}</b>
                      </h1>
                      
                    <hr>
                    <br>
                    
                    @if(! empty($mercado->imagen))
                    <img class="postimg img-responsive" src="{{ asset('uploads/' . $mercado->imagen )}}" />
                    @endif
                    </div>
                    <div class="contnot">
                      <p>{!! $mercado->descripcion !!}</p> 
                    </div>
                    <br>
                    @if(! empty($mercado->url_youtube))
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$mercado->url_youtube}}" id="show" name="show"></iframe>
                      </div>
                    @endif
                  </div>
                
              </div>
              </div>
              <div class="col-md-4 rightrow">
                 
                        <div class="row">
                         
                          <div class="clearfix"></div>
                     
                      </div>

                      <div class="row btn-spacing">
                        <div class="col-sm-6">
                          {!! HTML::linkRoute('mercadoadmin.edit','Editar mercado', array($mercado->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>

                        <div class="col-sm-6">
                          <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Eliminar</button>
                        </div>
                         <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Confirmar</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Desea eliminar este mercado?</p>
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    <div class="col-xs-6">
                                      {!! Form::open(['route' => ['mercadoadmin.destroy', $mercado->id], 'method' => 'DELETE']) !!}
                                    {{ Form::button('Eliminar', array('class'=>'btn btn-danger btn-block', 'type'=>'submit')) }}
                                  {!! Form::close() !!}

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                        <div class="clearfix"></div>
                        <div class="col-xs-12 btn-spacing">
                            {!! HTML::linkRoute('mercadoadmin.index','Todos las mercados',array($mercado->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>
                      </div>
                  
                </div>
            </div>
        
@endsection
