@extends('admin.default')

@section('page-header')
  Guild <small>{{ trans('admin.add_new_item') }}</small>
@stop

@section('content')
    {!! Form::open([
        'action' => ['GuildController@store'],
        'files' => true
      ])
    !!}

    @include('admin.guilds.form')

    <button type="submit" class="btn btn-primary">{{ trans('admin.add_button') }}</button>
    
  {!! Form::close() !!}
@stop