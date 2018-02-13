@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Notificaciones Push
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Notificaciones</div>
                </div>
                 <div class="box-body">
                  <div class="col-xs-5">
                    @if($advise)
                      <span class="label label-warning label-danger">{{$advise}}</span>
                    @else
                        <a href="{{ route('push.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing">Nueva Notificación</a>
                    @endif
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
                  @if($pushes->count() > 0 )
                  <table class="table table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Notificacion</th>
                  <th>Contenido</th>            
                  <th>Creacion</th>
                  <th></th>
                  <th></th>
              </thead>
              <tbody>
              
                @foreach ($pushes as $push)
                  <tr>
                    <td>{{ $push->id }}</td>
                    <td>{{ $push->title }}</td>
                    <td>{{ $push->description }}</td>
                    <td>
                      <a href="{{ route('push.show', $push->id)}}" class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a  href="{{ route('push.edit', $push->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
             
              </tbody>
            </table>
                <div class="well">
                  <div class="text-center">
                    {!! $pushes->links(); !!}
                  </div>
                </div>
                 @else
                
                  <div class="alert alert-danger centeralert">
                    <p>No se han cargado notificaciones.</p>
                  </div>
                
              @endif

                
                </div>
            </div>
        </div>
    </div>
@endsection
