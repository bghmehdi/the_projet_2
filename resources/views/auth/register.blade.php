@extends('layouts.userapp')

@section('content')
                

                
                    <fieldset>
                        <legend><h2>{{ __('Register') }}</h2></legend>
                        <form class="actions" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <label for="name" >{{ __('Name') }}</label>
                        
                                    <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </div>
                            <div>
                                <label for="email" >{{ __('Email Address') }}</label>
                        
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </div>
                            <div>
                                <label for="password" >{{ __('Password') }}</label>
                        
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        
                            </div>
                            <div>
                                <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        
                                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                        
                            </div>
                            <div class="pt-3">
                                <div class="">
                                    <button type="submit">
                                        {{ __('Register') }}
                                    </button>
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
