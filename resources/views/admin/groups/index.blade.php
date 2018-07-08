@extends('admin.default')

@section('content')

@section('page-header')
    {{ trans('group.name.plural') }} <small>{{ trans('admin.manage') }}</small>
@endsection

<div class="mB-20">
    <a href="{{ route(ADMIN . '.groups.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
                <thead>
                    <tr>
                        <th>{{ trans('group.form.name') }}</th>
                        <th>Flags</th>
                        <th>{{ trans('group.form.access') }}</th>
                        <th>{{ trans('group.form.max_cp_items') }}</th>
                        <th>{{ trans('group.form.max_vip_entries') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>{{ trans('group.form.name') }}</th>
                        <th>Flags</th>
                        <th>{{ trans('group.form.access') }}</th>
                        <th>{{ trans('group.form.max_cp_items') }}</th>
                        <th>{{ trans('group.form.max_vip_entries') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.groups.show', $group->id) }}">{{ $group->name }}</a></td>
                            <td>{{ $group->flags }}</td>
                            <td>{{ $group->access }}</td>
                            <td>{{ $group->maxdepotitems }}</td>
                            <td>{{ $group->maxvipentries }}</td>
                            <td width="90px">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.groups.edit', $group->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.groups.destroy', $group->id), 
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