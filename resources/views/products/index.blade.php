@extends('layout')
@section('corps_page')
    <div class="container">
        <div><p><h2 >{{__('Liste des Produits')}}</h2></p></div>
        <div><p><a href="{{route('products.create')}}" >Ajouter un Nouveau Produit </a></p></div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>          <th>Nom Produit</th>           <th>Prix Produit</th>           <th>Catégories</th>         <th>Description</th>        <th>Mettre à jour</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}} </td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td> {{ $product->category->name ?? '' }}</td>
                <td>{{$product->description}}</td>
                <td>
                    <p>
                        <a href="{{route('editer_produit',['id'=>$product->id])}}">Editer</a>
                    </p>
                </td>
            </tr>
        @endforeach
    </table>

@endsection


