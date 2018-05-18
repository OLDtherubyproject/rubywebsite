@extends('admin.default')

@section('page-header')
  Group <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['GroupController@store'],
        'files' => true
      ])
    !!}

    @include('admin.groups.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

