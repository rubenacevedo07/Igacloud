@extends('backpack::layout')

@section('before_styles') 
  <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}">
  
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Edicion de Notificaciones
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Editar Notificación</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="box-title">Editar la notificación para volver a enviar</div>
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
    {!! Form::model($push, ['route' => ['push.update', $push->id], 'method' => 'PUT', 'files'=> true ]) !!}
    
        {{ Form::label('title', 'Titulo*') }}
        {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Actualizar título')) }}

        {{ Form::label('description', 'Contenido*') }}
        {{ Form::text('description',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000', 'placeholder' => 'Actualizar contenido')) }}

 
        <div class="well">
          <div class="row">
            <div class="col-sm-6">
                {!! HTML::linkRoute('push.show','Cancelar', array($push->id), array('class'=>'btn btn-danger btn-block')) !!}
                
                </div>

                <div class="col-sm-6">
                  {{ Form::submit('Guardar',['class'=>'btn btn-success btn-block']) }}
                </div>

          </div>

        </div>

      </div>

      {!! Form::close() !!}
                        
           
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {{ HTML::script('js/parsley.min.js') }}


@endsection
