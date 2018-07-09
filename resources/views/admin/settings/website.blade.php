@extends('admin.default')

@section('page-header')
  {{ trans('website.title') }} <small>{{ trans('admin.manage') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['SettingController@website_store'],
        'files' => true
      ])
    !!}

    @include('admin.settings.website_form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.save_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

