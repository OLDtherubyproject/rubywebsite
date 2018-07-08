@extends('admin.default')

@section('page-header')
  {{ trans('server.title') }} <small>{{ trans('admin.manage') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['SettingController@server_store'],
        'files' => true
      ])
    !!}

    @include('admin.settings.server_form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.save_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

