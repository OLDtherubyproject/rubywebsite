@extends('admin.default')

@section('page-header')
  Guild <small>{{ trans('admin.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($guild, [
        'action' => ['GuildController@update', $guild->id],
        'method' => 'put', 
        'files' => true
      ])
    !!}

    @include('admin.guilds.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.edit_button') }}</button>
    
  {!! Form::close() !!}
  

@stop

