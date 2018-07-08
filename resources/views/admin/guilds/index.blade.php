@extends('admin.default')

@section('content')

@section('page-header')
    {{ trans('guild.name.plural') }} <small>{{ trans('admin.manage') }}</small>
@endsection

<div class="mB-20">
    <a href="{{ route(ADMIN . '.guilds.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>{{ trans('guild.form.name') }}</th>
                        <th>{{ trans('guild.form.owner') }}</th>
                        <th>{{ trans('guild.form.message_of_the_day') }}</th>
                        <th>{{ trans('guild.form.members') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>{{ trans('guild.form.name') }}</th>
                        <th>{{ trans('guild.form.owner') }}</th>
                        <th>{{ trans('guild.form.message_of_the_day') }}</th>
                        <th>{{ trans('guild.form.members') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($guilds as $guild)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.guilds.show', $guild->id) }}">{{ $guild->name }}</a></td>
                            <td><a href="{{ route(ADMIN . '.characters.show', $guild->owner->id) }}">{{ $guild->owner->name }}</a></td>
                            <td>{{ $guild->motd }}</td>
                            <td>{{ $guild->memberships->count() }}</td>
                            <td width="90px">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.guilds.edit', $guild->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.guilds.destroy', $guild->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}

                                            <button class="btn btn-danger btn-sm" title="{{ trans('admin.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection