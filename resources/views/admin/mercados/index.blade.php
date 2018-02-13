@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Negocio
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Mi Negocio</li>
      </ol>
    </section>
@endsection


@section('content')
@can('edit-business')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Negocios</div>
                </div>
                 <div class="box-body">
                  <div class="col-xs-5">
                        <a href="{{ route('mercadoadmin.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Cargar Negocio</span></a>
                    </div>
                    <div class="col-xs-7">
                    @if (Session::has('success'))
                           <div class="alert alert-success" role="alert">
                              <strong>Perfecto!</strong> {{ Session::get('success') }}
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
                    
                </div>
                <div class="box-body">
                  <table class="table table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Logo</th>
                  <th>Descripcion</th>
                  <th>Actualizado</th>
                  <th></th>
                  <th></th>
              </thead>
              <tbody>
            
              @if( $mercados)
                @foreach ($mercados as $mercado)
                  <tr>
                    <td>{{ $mercado->id }}</td>
                    <td>{{ $mercado->mercado }}</td>
                    <td> 
                    
                    @if (! empty($mercado->logo))
                          <img class="thumbnail" src="{{ asset('uploads/'. $mercado->logo)}}">
                        @else
                          
                          <img class="thumbnail" src="{{ asset('uploads/notfound.png')}}">
                        @endif

                    </td>
                    <td>{{ substr(strip_tags($mercado->body), 0, 25)}} {{ strlen(strip_tags($mercado->descripcion)) > 50 ? "..." : "" }}</td>
                    <td>
                      @if($mercado->updated_at != null)
                      {{ $mercado->updated_at->diffForHumans() }}
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('mercadoadmin.show', $mercado->id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a  href="{{ route('mercadoadmin.edit', $mercado->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
              @else
               
                  <div class="alert alert-danger centeralert">
                    <p>No se han encontrado negocios cargados en la plataforma.</p>
                  </div>
                
              @endif
              </tbody>
            </table>
                <div class="well">
                  <div class="text-center">
                   @if( $mercados)
                    {!! $mercados->links(); !!}

                    @endif
                  </div>
                </div>
                </div>
            </div>

        </div>
    </div>
    @endcan 
@endsection
