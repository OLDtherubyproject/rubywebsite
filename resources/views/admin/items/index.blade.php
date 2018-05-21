@extends('admin.default')

@section('content')

@section('page-header')
    Items <small>{{ trans('admin.manage') }}</small>
@endsection

<div class="mB-20">
    <a href="{{ route(ADMIN . '.items.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>From ID</th>
                        <th>To ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>From ID</th>
                        <th>To ID</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.items.show', $item->id) }}">{{ $item->name }}</a></td>
                            <td><a href="{{ route(ADMIN . '.characters.show', $item->owner->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->fromid }}</td>
                            <td>{{ $item->toid }}</td>
                            <td width="90px">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.items.edit', $item->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.items.destroy', $item->id), 
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