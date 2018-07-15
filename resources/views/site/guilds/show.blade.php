@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-4">
                <h1 class="h2">{{ trans('guild.name.plural') }}</h1>
            </div>
            <div class="col-md-8">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="index.html">{{ trans('menu.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ trans('menu.community') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('guilds') }}">{{ trans('guild.name.plural') }}</a></li>
                    <li class="breadcrumb-item active">{{ $guild->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered my-4" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>{{ trans('guild.form.name') }}</th>
                            <th>{{ trans('guild.form.owner') }}</th>
                            <th>{{ trans('guild.form.message_of_the_day') }}</th>
                            <th>{{ trans('guild.form.members') }}</th>
                            @auth
                                @if (auth()->user()->isGod())
                                    <th>{{ trans('admin.actions') }}</th>
                                @endif
                            @endauth
                        </tr>
                    </thead>
                
                    <tfoot>
                        <tr>
                            <th>{{ trans('guild.form.name') }}</th>
                            <th>{{ trans('guild.form.owner') }}</th>
                            <th>{{ trans('guild.form.message_of_the_day') }}</th>
                            <th>{{ trans('guild.form.members') }}</th>
                            @auth
                                @if (auth()->user()->isGod())
                                    <th>{{ trans('admin.actions') }}</th>
                                @endif
                            @endauth
                        </tr>
                    </tfoot>
                
                    <tbody>
                        <tr>
                            <td>{{ $guild->name }}</td>
                            <td><a href="#">{{ $guild->owner->name }}</a></td>
                            <td>{{ $guild->motd }}</td>
                            <td>{{ $guild->memberships->count() }}</td>
                            @auth
                                @if (auth()->user()->isGod())
                                    <td width="90px">
                                        <ul class="list-inline text-center">
                                            <li class="list-inline-item my-2 mx-0">
                                                <a href="{{ route(ADMIN . '.guilds.edit', $guild->id) }}" title="{{ trans('admin.edit_title') }}" class="btn btn-info btn-sm">
                                                    <span class="ti-pencil"></span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                {!! Form::open([
                                                    'class'=>'delete',
                                                    'url'  => route(ADMIN . '.guilds.destroy', $guild->id), 
                                                    'method' => 'DELETE',
                                                    ]) 
                                                !!}
                                                    <button class="btn btn-danger btn-sm" title="{{ trans('admin.delete_title') }}">
                                                        <i class="ti-trash"></i>
                                                    </button>
                                                {!! Form::close() !!}
                                            </li>
                                        </ul>
                                    </td>
                                @endif
                            @endauth
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection