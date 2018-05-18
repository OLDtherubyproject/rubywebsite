@extends('admin.default')

@section('content')

@section('page-header')
    {{ trans('character.name.plural') }} <small>{{ trans('character.manage') }}</small>
@endsection

<div class="mB-20">
    <a href="{{ route(ADMIN . '.characters.create') }}" class="btn btn-info">
        {{ trans('admin.add_button') }}
    </a>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
                <thead>
                    <tr>
                        <th>{{ trans('character.form.name') }}</th>
                        <th>{{ trans('character.form.account_name') }}</th>
                        <th>{{ trans('character.form.level') }}</th>
                        <th>{{ trans('character.form.experience') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>{{ trans('character.form.name') }}</th>
                        <th>{{ trans('character.form.account_name') }}</th>
                        <th>{{ trans('character.form.level') }}</th>
                        <th>{{ trans('character.form.experience') }}</th>
                        <th>{{ trans('admin.actions') }}</th>
                    </tr>
                </tfoot>
             
                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.characters.show', $character->id) }}">{{ $character->name }}</a></td>
                            <td><a href="{{ route(ADMIN . '.users.show', $character->account->id) }}">{{ $character->account->login }}</a></td>
                            <td>{{ $character->level }}</td>
                            <td>{{ $character->experience }}</td>
                            <td width="90px">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.characters.edit', $character->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.characters.destroy', $character->id), 
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