@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">{{ trans('character.form.create') }}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">{{ trans('menu.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('accounts.show') }}">{{ trans('account.name.singular') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('character.form.create') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <form action="{{ route('characters.store') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">{{ trans('character.form.name') }}</label>
                            <input id="name" name="name" type="text" class="form-control">

                            @if ($errors->has('name'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::mySelect('sex', trans('character.form.gender'), [0 => trans('character.form.female'), 1 =>  trans('character.form.male')]) !!}

                            @if ($errors->has('sex'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('sex') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::mySelect('town_id', trans('town.name.singular'), $towns) !!}

                            @if ($errors->has('town_id'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('town_id') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-plus"></i> {{ trans('character.form.create') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection