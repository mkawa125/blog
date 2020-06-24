@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="text-align:center">iCode cms</h4>
        </div>
        <div class="col-md-5"
             style="margin: 0 auto">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST"
                          action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email"
                                   class="col-md-12"><strong>Username or Email</strong></label>

                            <div class="col-md-12">
                                <input type="email"
                                       value="{{ old('email') }}"
                                       autocomplete="email"
                                       required
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       id="email"
                                       name="email"
                                       autofocus
                                       placeholder="username or email">

                                @if ($errors->has('email'))
                                <span class="help-block {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password"
                                           class="col-md-12">
                                        <strong>Password</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link"
                                       href="{{ route('password.request') }}">
                                        <strong>{{ __('Forgot Your Password?') }}</strong>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="password"
                                       required
                                       name="password"
                                       id="password"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       placeholder="Enter your password">


                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label"
                               for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div>
            </div>
        </div> --}}

        <div class="col-md-12">
            <div class="form-group">
                <button type="submit"
                        style="float:right"
                        class="btn btn-primary">
                    <strong>{{ __('Sign in') }}</strong>
                </button>


            </div>
        </div>

        </form>



    </div>

</div>

<div class="col-md-12"
     style="margin: 0 auto; border:1px solid silver; border-radius:6px; padding:15px; text-align:center">
    New to mentorship ? <a href="{{ route('register')}}">Create Account</a>
</div>
</div>
</div>
</div>
@endsection