@extends('site.default')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Login</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
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
                    <h2 class="text-uppercase">Login</h2>
                    <p class="lead">Don't have an account yet? <a href="{{ route('register') }}">Register</a></br><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                    <hr>
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Account Name</label>
                            <input id="name" name="name" type="text" class="form-control">

                            @if ($errors->has('name'))
                                <span class="form-text text-danger">
                                    <small>{{ $errors->first('name') }}</small>
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
                            <div class="peers ai-c jc-sb fxw-nw">
                                <div class="peer">
                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                        <input type="checkbox" id="remember" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember" class=" peers peer-greed js-sb ai-c">
                                            <span class="peer peer-greed">Remember Me</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection