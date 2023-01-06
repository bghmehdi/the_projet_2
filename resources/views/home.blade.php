@extends('layouts.app')

@section('content')

                <fieldset>
                    <legend>
                        <h2>{{ __('home') }}</h2>
                    </legend>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            You are logged in! <br>
                            enjoy playing with the sun in the clouds <br>
                            and you are the one and only Admin, be happy
                        </div>
                </fieldset>
@endsection
