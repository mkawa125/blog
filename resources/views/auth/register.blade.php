@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5"
             style="margin: 0 auto">
            <div class="card">
                <div class="card-header"
                     style="text-align:center">
                    <strong>Create Account</strong>
                </div>

                <div class="card-body">
                    <form method="POST"
                          action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name"
                                   class="col-md-12">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name"
                                       type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autocomplete="name"
                                       placeholder="name"
                                       autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"
                                   class="col-md-12">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email"
                                       type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="email address"
                                       required
                                       autocomplete="email">


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password"
                                   class="col-md-12">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password"
                                       type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password"
                                       placeholder="password"
                                       required
                                       autocomplete="new-password">


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"
                                   class="col-md-12">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm"
                                       type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="password"
                                       required
                                       autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit"
                                        class="btn btn-block btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12"
                 style="text-align:center">
                Already have an account ? <a href="{{ route('login')}}">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection