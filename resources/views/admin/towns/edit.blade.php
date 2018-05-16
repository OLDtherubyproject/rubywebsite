@extends('admin.default')

@section('page-header')
  Town <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($town, [
        'action' => ['TownController@update', $town->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.towns.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

