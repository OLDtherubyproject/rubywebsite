@extends('admin.default')

@section('page-header')
  Character <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['CharacterController@store'],
        'files' => true
      ])
    !!}

    @include('admin.characters.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

