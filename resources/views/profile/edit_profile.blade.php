@extends('layouts.app')
@section('content') 

              <div class="card-header">{{ __('Profile Information') }}</div>
              
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="link" href="{{route('profile.index')}}">back to profile</a>
                  </li>
                </ul>
                
                <p>
                  {{ __("Update your account's profile information and email address.") }}
                </p>
                <form class="actions" action="{{route('profile.update', auth()->id())}}" method="post">
                  
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="mb-3">
                      <label for="" >name</label>
                      <input type="text" name="name"  id="" placeholder="name" value="{{auth()->user()->name}}">
                    </div>
                    @error('name')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="mb-3">
                      <label for="" >email</label>
                      <input type="email" name="email"  id="" placeholder="email" value="{{auth()->user()->email}}">
                    </div>
                    @error('email')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                      <label for="" >password</label>
                      <input type="password" name="password"  id="" placeholder="password">
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div>
                      <button type="submit"><i class="fa-solid fa-pen"></i> save</button>
                    </div>
                  </form>
                




    
@endsection