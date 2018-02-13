@extends('backpack::layout')

@section('before_styles') 

{!! HTML::style('css/admin.css') !!}
  {!! HTML::style('css/parsley.css') !!}
  {!! HTML::style('css/select2.min.css') !!}
  
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        menubar: false,
        plugins: 'link',    
        language_url : '/js/es.js'
    }); 
  </script>
   <style>
          #map {
            margin-top: 10px;
            height: 250px;
          }
  </style>
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Edicion del Negocio
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Editar Negocio</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="box-title">Editar Negocio <b>{{$mercado->mercado}}</b></div>
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
    {!! Form::model($mercado, ['route' => ['mercadoadmin.update', $mercado->id], 'method' => 'PUT', 'files'=> true ]) !!}
    
                       
                        {{ Form::label('mercado', ' Nombre Mercado',array('class'=>'top10')) }}
                        {{ Form::text('mercado',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar nombre del emprendimiento')) }}

                        {{ Form::label('domicilio', ' Dirección', array('class'=>'top10')) }}
                        {{ Form::text('domicilio', null,array( 'id' =>'pac','class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Ingrese la dirección de su emprendimiento')) }}


                        <div id="map"></div>

                        {{ Form::hidden('latitud',null,array('id'=>'lat')) }}
                        {{ Form::hidden('longitud',null,array('id'=>'long')) }}

                        {{ Form::label('descripcion','Descripción',['class'=>'top10'] ) }}
                        {{ Form::textarea('descripcion',null, array('class' => 'form-control')) }}
                        
                
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                     <div class="well top10">
                        {{ Form::label('logo','Cargar logo', ['class'=>'top10'] ) }}
                        

                        @if (! empty($mercado->logo))
                          <img id="myimage" class="img-responsive contimg" src="{{ asset('uploads/'. $mercado->logo)}}">
                        @else
                          
                          <img id="myimage" class="img-responsive contimg" src="{{ asset('uploads/notfound.png')}}">
                        @endif
    

                        {{ Form::file('logo', ['onchange' => 'onFileSelected(event)']) }}
                     </div>
                     </div>
                     <div class="col-xs-12 col-sm-6">
                      <div class="well top10">
                        {{ Form::label('imagen','Cargar imagen', ['class'=>'top10'] ) }}
                        @if (! empty($mercado->imagen))
                          <img id="mysecond" class="img-responsive contimg" src="{{ asset('uploads/'. $mercado->imagen)}}">
                        @else
                          
                          <img id="mysecond" class="img-responsive contimg" src="{{ asset('uploads/notfound.png')}}">
                        @endif
                        
                        {{ Form::file('imagen', ['onchange' => 'onFileSelectedos(event)']) }}
                      </div>
                    </div>
                  </div>
                    <div class="row">
                          <div class="col-sm-6">
                              {{ Form::label('discount', ' % de Descuento',array('class'=>'top10')) }}
                              {{ Form::number('discount',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar porcentaje de descuento a otorgar')) }}
                          </div>
                          <div class="col-sm-6">
                              {{ Form::label('amountofpurchases', ' Puntos necesarios para descuento',array('class'=>'top10')) }}
                              {{ Form::number('amountofpurchases',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar cantidad de puntos a alcanzar para recibir descuento')) }}
                          </div>
                        </div> 
         
                    <div class="row">
                        <div class="col-xs-12">
                            {{ Form::label('visible', 'Visible/Aprobado : ', array('class'=>'top10')) }}
                            {{ Form::checkbox('visible',null, $mercado->visible) }}
                        </div>
                    </div>
                    {{ Form::submit('Actualizar', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}

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

  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>
  
  {{ HTML::script('js/imageviewer.js') }}
  <script type="text/javascript">
    
    var myLatLng = { lat: {{$mercado->latitud}}, lng: {{$mercado->longitud}} };  
      

  </script>
  <script src="{{asset('js/placesedit.js')}}"></script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&libraries=places&callback=initAutocomplete"
              async defer></script>

  
@endsection
