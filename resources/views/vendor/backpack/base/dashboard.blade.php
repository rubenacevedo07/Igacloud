@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
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
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{asset('/uploads/1489543076.jpg')}}" alt="...">
                          <div class="caption">
                            <h3>Paso 1: Cargue su negocio</h3>
                            <p></p>
                            <p><a href="{{ url('admin/mercadoadmin') }}" class="btn btn-primary" role="button">Acceder</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{asset('/uploads/1489544663logo.jpg')}}" alt="...">
                          <div class="caption">
                            <h3>Paso 2: Cree y edite sus noticias/promociones</h3>
                            <p>...</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{asset('/uploads/push.jpg')}}" alt="...">
                          <div class="caption">
                            <h3>Paso 3: Envíe notificaciones a sus clientes</h3>
                            <p>...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
