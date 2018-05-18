@extends('admin.default')

@section('page-header')
  Website Settings <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['SettingController@website_store'],
        'files' => true
      ])
    !!}

    @include('admin.settings.website_form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

