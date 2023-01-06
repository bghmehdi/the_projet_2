@extends('layouts.app')
@section('content')
{{-- @vite(['resources/css/app.css']) --}}
<h2>Clients</h2>
                <form  action="{{url('/search')}}">
                  <input
                      name="query"
                      
                      type="search"
                      placeholder="Search with nom"
                      aria-label="Search"
                      list="lesnom"
                    />
                  <datalist id="lesnom">
                      @foreach ($allclients as $client)
                        <option value="{{ $client->nom }}"></option>
                      @endforeach
                    </datalist>
                </form>
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  {{-- {{ __('You are logged in!') }} --}}
                  @if($message = Session::get('success'))
                    <div class="text-success" role="alert">
                      {{$message}}
                    </div>
                  @endif
                  <a class="link" href=" {{route('clients.create')}} ">Add a client</a>
                  <table>
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>nom</th>
                            <th>prenom</th>
                            {{-- <th>ville</th> --}}
                            <th>actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($clients as $client)
                          <tr>
                            <th>{{ $client->id }}</th>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->prenom }}</td>
                            {{-- <td>{{ $client->ville }}</td> --}}
                            <td>
                            <div class="actions" style="display: inline-block"><a  href="{{ route('clients.edit', $client->id) }}">Modifier</a></div>
                            <div class="actions" style="display: inline-block"><a  href="{{ route('clients.show', $client->id) }}">show</a></div>
                            <form class="actions" style="display: inline-block" action="{{ route('clients.destroy', $client->id) }}" method="Post">
                              @csrf
                              @method('DELETE')
                              <button id="delete" onclick="return confirm('do u really want to delete this client?')" type="submit">Supprimer</button>
                            </form>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                  </table>
                  <div>
                    {{ $clients->links() }}
                  </div>
              

  

@endsection