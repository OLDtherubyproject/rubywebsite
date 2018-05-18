@extends('admin.default')

@section('content')

@section('page-header')
    {{ trans('town.name.plural') }} <small>{{ trans('town.manage') }}</small>
@endsection

<div class="mB-20">
    <a href="{{ route(ADMIN . '.towns.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
                <thead>
                    <tr>
                        <th>{{ trans('town.form.name') }}</th>
                        <th>X</th>
                        <th>Y</th>
                        <th>Z</th>
                        <th>Actions</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>{{ trans('town.form.name') }}</th>
                        <th>X</th>
                        <th>Y</th>
                        <th>Z</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($towns as $town)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.towns.show', $town->id) }}">{{ $town->name }}</a></td>
                            <td>{{ $town->x }}</td>
                            <td>{{ $town->y }}</td>
                            <td>{{ $town->z }}</td>
                            <td width="90px">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.towns.edit', $town->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.towns.destroy', $town->id), 
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