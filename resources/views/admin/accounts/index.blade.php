@extends('admin.default')

@section('page-header')
    {{ trans('account.name.plural') }} <small>{{ trans('account.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <a href="{{ route(ADMIN . '.accounts.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
                <thead>
                    <tr>
                        <th>{{ trans('account.form.name') }}</th>
                        <th>Email</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>{{ trans('account.form.name')}}</th>
                        <th>Email</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.accounts.edit', $item->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.accounts.edit', $item->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.accounts.destroy', $item->id), 
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