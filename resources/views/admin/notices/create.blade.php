@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}
{!! HTML::style('css/select2.min.css') !!}


  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  
  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
    menubar: false,
    plugins: 'link code',
    statusbar: false,
    language_url : '/js/es.js'
  }); 

  </script>
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Crear noticia
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Crear Noticia</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">

            <div class="box box-default">
                <div class="box-header with-border">
                @if ($errors->any())
                   @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
                  
    {!! Form::open(array('route' => 'notices.store', 'data-parsley-validate' => '', 'files' => true)) !!}

        {{ Form::label('title', 'Titulo Noticia *') }}
        {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar Titulo Noticia')) }}

        {{ Form::label('featured_image','Cargar imagen', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::file('featured_image') }}

        {{ Form::label('body','Cuerpo noticia *',['class'=>'btn-h1-spacing'] ) }}
        {{ Form::textarea('body',null, array('class' => 'form-control')) }}

        {{ Form::submit('Subir Noticia', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}
    {!! Form::close() !!}

                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {!! HTML::script('js/parsley.min.js') !!}
  {!! HTML::script('js/es.js') !!}
  {!! HTML::script('js/select2.min.js') !!}

  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();


  </script>

@endsection