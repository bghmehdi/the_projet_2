@extends('layouts.app')
@section('content')
    <fieldset>
        <legend><h2>ADD a type produits</h2></legend>
        
        <form class="actions"  action="{{route('typeProduits.store')}}" method="POST">
            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @csrf
            <div>
                <label for="">libelle : </label>
                <input type="text" name="libelle" id="">
            </div>
            <div>
                <button type="submit" >ADD</button>
            </div>
        </form>
    </fieldset>
@endsection