@extends('layouts.app')
@section('content')
<h2>clients</h2>
                <form   action="{{url('/search')}}">
                  <input
                      name="query"
                     
                      type="search"
                      placeholder="Search with nom"
                      aria-label="Search"
                      list="lesnom"
                  />
                  {{-- <datalist id="lesnom">
                      @foreach ($clients as $client)
                        <option value="{{ $client->nom }}"></option>
                      @endforeach
                    </datalist> --}}
                  {{-- <button class="btn btn-primary" type="submit">search</button> --}}
                </form>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif
                <div >
                  <a class="link" href="{{route('clients.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                </div>
                  {{-- {{ __('You are logged in!') }} --}}
                  <table class="">
                      <thead>
                          <tr>
                            <th >ID</th>
                            <th >nom</th>
                            <th >prenom</th>
                            <th >actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($clients as $client)
                          <tr>
                            <th>{{ $client->id }}</th>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->prenom }}</td>
                            <td>
                            <div class="actions" style="display: inline-block"><a href="{{ route('clients.edit', $client->id) }}">Modifier</a></div>
                            <div class="actions" style="display: inline-block"><a href="{{ route('clients.show', $client->id) }}">show</a>
                            <form class="actions" style="display: inline-block" action="{{ route('clients.destroy', $client->id) }}" method="Post">
                              @csrf
                              @method('DELETE')
                              <button onclick="return confirm('do u really want to delete this client?')" type="submit">Supprimer</button>
                            </form>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                  </table>
                  
              
          
@endsection