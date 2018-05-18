@extends('admin.default')

@section('page-header')
  Server Settings <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['SettingController@server_store'],
        'files' => true
      ])
    !!}

    @include('admin.settings.server_form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

