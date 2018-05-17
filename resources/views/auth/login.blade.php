@extends('layouts.admin')

@section('content')

    <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
            <label for="login" class="text-normal text-dark">Login</label>
            <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required autofocus>

            @if ($errors->has('login'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('login') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="text-normal text-dark">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>

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
                <div class="peer">
                    <button class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
        <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
            <div class="peer">
                <a href="/register" class="btn btn-link">Create new account</a>
            </div>
        </div>
    </form>

@endsection
