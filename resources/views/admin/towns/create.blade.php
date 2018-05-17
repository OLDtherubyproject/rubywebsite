@extends('admin.default')

@section('page-header')
  Town <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['TownController@store'],
        'files' => true
      ])
    !!}

    @include('admin.towns.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

