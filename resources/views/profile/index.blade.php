@extends('layouts.app')
@section('content')
<style>
  .delete {
    background-color:rgba(255, 255, 255, 0);
    border: none;
    padding-inline-start:0px; 
  }
</style>

<h2>{{ __('Profile Information') }}</h2>

<p>
{{ __("this is your profile") }}
</p>
<div>

    @if (session('status'))
    <div class="text-success mb-2" role="alert">
      {{ session('status') }}
    </div>
    @endif
  <ul class="nav flex-column">
    <li>
      <a class="link ps-0" href="{{route('profile.edit', auth()->id())}}">Edit Profile</a>
    </li>
    <li>
      <a class="link ps-0" href="{{route('password.edit', auth()->id())}}">change password</a>
    </li>
    <li>
      <form action="{{ route('profile.destroy',auth()->id())}}) }}" method="Post">
        @csrf
        @method('DELETE')
        <button style="text-decoration: underline" class="link text-danger delete" onclick="return confirm('do u really want to delete this user?')" type="submit"> {{ __('Delete Account') }}</button>
      </form>
    </li>
  </ul>

</div>
@endsection