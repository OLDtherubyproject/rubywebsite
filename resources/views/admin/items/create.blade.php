@extends('admin.default')

@section('page-header')
  Item <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['ItemController@store'],
        'files' => true
      ])
    !!}

    @include('admin.items.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

