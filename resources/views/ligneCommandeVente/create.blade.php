@extends('layouts.app')
@section('content')
    <fieldset>
        <legend><h2>ADD a produits</h2></legend>
        
        <form class="actions"  action="{{route('ligneCommandeVente.store')}}" method="POST">
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
                <label for="">La commande : </label>
                <select name="commande_ventes_id" id="">
                    <option value=""></option>
                    @foreach($commandeVentes as $commandeVente)
                        <option value=" {{$commandeVente->id}} "> {{$commandeVente->id}} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">produit : </label>
                <select name="produit_id" id="">
                    <option value=""></option>
                    @foreach($produits as $produit)
                        <option value=" {{$produit->id}} "> {{$produit->libelle}} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">quantite : </label>
                <input type="number" name="qt" id="">
            </div>
            <div>
                <button type="submit" >ADD</button>
            </div>
        </form>
    </fieldset>
@endsection