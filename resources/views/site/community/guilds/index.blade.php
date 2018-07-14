@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">{{ trans('guild.name.plural') }}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="index.html">{{ trans('menu.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ trans('menu.community') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('guild.name.plural') }}</li>
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
                        @foreach ($guilds as $guild)
                            <tr>
                                <td><a href="#">{{ $guild->name }}</a></td>
                                <td><a href="#">{{ $guild->owner->name }}</a></td>
                                <td>{{ $guild->motd }}</td>
                                <td>{{ $guild->memberships->count() }}</td>
                                @auth
                                    @if (auth()->user()->isGod())
                                        <td width="90px">
                                            <ul class="list-inline text-center">
                                                <li class="list-inline-item my-2 mx-0">
                                                    <a href="#" title="{{ trans('admin.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                                <li class="list-inline-item">
                                                
                                                        <button class="btn btn-danger btn-sm" title="{{ trans('admin.delete_title') }}"><i class="ti-trash"></i></button>
                                                        
                                                    {!! Form::close() !!}
                                                </li>
                                            </ul>
                                        </td>
                                    @endif
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection