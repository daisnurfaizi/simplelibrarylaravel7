@extends('frontend.templates.default')

@section('content')
<div class="container">
    <div class="row">
        <h3>Register</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <input type="text" name="name" class="@error('name') invalid
                @enderror" value="{{old('name')}}">
                <label for="">Name</label>
                @error('name')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" class="@error('email') invalid
                @enderror" value="{{old('name')}}">
                <label for="">email</label>
                @error('email')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" class="@error('password') invalid
                @enderror" value="">
                <label for="">Password</label>
                @error('password')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password_confirmation" class="@error('password_confirmation') invalid
                @enderror" value="">
                <label for="">Confirm Password</label>
                @error('password_confirmation')
                    <span class="helper-text" data-error="{{$message}}"></span>
                @enderror
            </div>
            <div class="input field right">
                <input type="submit" value="Register" class="waves-effect waves-light btn red accent-1">
            </div>
    </form>
    </div>
</div>

@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}