@extends('admin.default')

@section('page-header')
  Account <small>{{ trans('admin.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
        'action' => ['AccountController@update', $item->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.accounts.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

