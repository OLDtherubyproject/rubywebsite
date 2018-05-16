@extends('admin.default')

@section('page-header')
  Character <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($character, [
        'action' => ['CharacterController@update', $character->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.characters.form')

    <button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

