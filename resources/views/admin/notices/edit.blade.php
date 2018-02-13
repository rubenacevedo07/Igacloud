@extends('backpack::layout')

@section('before_styles') 
  <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        menubar: false,
        plugins: 'link',    
        language_url : '/js/es.js'
    }); 
  </script>
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Edicion de Noticias
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Editar Noticia</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="box-title">Editar la noticia <b>{{$notice->title}}</b></div>
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
    {!! Form::model($notice, ['route' => ['notices.update', $notice->id], 'method' => 'PUT', 'files'=> true ]) !!}
    
        {{ Form::label('title', 'Titulo:')}}
        {{ Form::text('title', null, ['class'=> 'form-control input-lg'])}}

        {{ Form::label('featured_image', 'Actualizar imagen',['class'=>'form-spacing-top'])}}
        {{ Form::file('featured_image') }}

        {{ Form::label('body', 'Noticia:', ['class'=>'form-spacing-top'])}}
        {{ Form::textarea('body', null, ['class' =>'form-control'])}}

        <div class="well">
          <div class="row">
            <div class="col-sm-6">
                {!! HTML::linkRoute('notices.show','Cancelar', array($notice->id), array('class'=>'btn btn-danger btn-block')) !!}
                
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
  {{ HTML::script('js/es.js') }}
  {{ HTML::script('js/select2.min.js') }}

@endsection
