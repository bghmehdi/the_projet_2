@extends('layouts.app')
@section('content') 

              <div class="card-header">{{ __('Profile Information') }}</div>
              
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="link" href="{{route('profile.index')}}">back to profile</a>
                  </li>
                </ul>
                
                <p>
                  {{ __("Change your password.") }}
                </p>
                <form class="actions" action="{{route('password.update')}}" id="change_password_form" method="post">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                        {{ __('Profile Updated') }}
                      </div>
                  @endif
                    @csrf
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    {{-- <input type="hidden" name="_method" value="put"> --}}
                    @if ( $errors->any() )
                              <div class="alert alert-danger pb-0">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif  
                    <div >
                      <label for="" >email</label>
                      <input type="email" name="email"  id="" placeholder="email" value="{{auth()->user()->email}}">
                    </div>
                    @error('email')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div >
                      <label for="" >old password</label>
                      <input type="password" name="old_password"  id="" placeholder="old password">
                    </div>
                    @error('old_password')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div >
                      <label for="" >new password</label>
                      <input type="password" name="new_password"  id="" placeholder="new password">
                    </div>
                    @error('new_password')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div >
                      <label for="" >confirm password</label>
                      <input type="password" name="confirm_password"  id="" placeholder="confirm password">
                      @error('confirm_password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div>
                      <button type="submit">save</button>
                    </div>
                </form>
                  </div>
                </div>
            </div>
        </div>
      </div>




    
@endsection