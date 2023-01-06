@extends('layouts.userapp')

@section('content')

                

                
                    <fieldset>
                        <legend><h2>{{ __('Login') }}</h2></legend>
                        <form class="actions" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email">{{ __('Email Address') }}</label>
                        
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </div>
                            <div>
                                <label for="password">{{ __('Password') }}</label>
                        
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </div>
                            <div>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="pt-3">
                                    <button type="submit">
                                        {{ __('Login') }}
                                    </button>
                                    {{-- @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
