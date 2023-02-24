@extends('layouts.app')
@section('content')
    <fieldset>
        <legend><h2>ADD a produit</h2></legend>
        
        <form class="actions"  action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="">type  : </label>
                <select name="type_produits_id" id="">
                    <option value=""></option>
                    @foreach ($typeProduits as $typeProduit)
                        <option value=" {{$typeProduit->id}} "> {{$typeProduit->libelle}} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">prix : </label>
                <input type="text" name="prix" id="">
            </div>
            <div>
                <label for="">image : </label>
                <input type="file" name="image" id="">
            </div>
            <div>
                <label for="">quantite stock : </label>
                <input type="text" name="qtStock" id="">
            </div>
            <div>
                <button type="submit" >ADD</button>
            </div>
        </form>
    </fieldset>
@endsection