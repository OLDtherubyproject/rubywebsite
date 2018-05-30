@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Create Character</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('accounts.show') }}">Account</a></li>
                    <li class="breadcrumb-item active">Create Character</li>
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
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control">

                            @if ($errors->has('name'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::mySelect('sex', 'Sex', [0 => "Female", 1 => "Male"]) !!}

                            @if ($errors->has('sex'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('sex') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            {!! Form::mySelect('town_id', 'Town', $towns) !!}

                            @if ($errors->has('town_id'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('town_id') }}</small>
                                </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-plus"></i> Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection