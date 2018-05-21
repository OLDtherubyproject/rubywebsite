@extends('admin.default')

@section('page-header')
  Account <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['AccountController@store'],
        'files' => true
      ])
    !!}

    @include('admin.accounts.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

