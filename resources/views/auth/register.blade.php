@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Register</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Register</li>
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
                    <h2 class="text-uppercase">Register</h2>
                    <p class="lead">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    <hr>
                    <form action="{{ route('register') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Account Name</label>
                            <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}">
                        
                            @if ($errors->has('name'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('email') }}</small>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" class="form-control">

                            @if ($errors->has('password'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('password') }}</small>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Again</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection