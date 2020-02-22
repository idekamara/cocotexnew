@extends('layout')
@section('corps_page')
<div><p><h2>{{__('Résultats de recherche pour : '.$nom_prod)}}</h2></p></div>
    <table class="table table-striped">
        <tr>
            <th>code</th>          <th>Nom Produit</th>           <th>Prix</th>           <th>Catégories</th>         <th>Description</th>        <th>Ajouter au panier</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> # </td>
                <td><a href="/product/product/{{$product->id}}" title="voir détails">{{$product->name}}</a> <img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50" height="60"></td>
                <td>{{$product->price}}</td>
                <td> {{ $product->category->name ?? '' }}</td>
                <td>{!!$product->description!!}</td>
                <td>
                <form action="{{route('add.carts')}}" method="POST" id="{{'product_'.$product->id}}" class="add-to-cart">
                    @csrf
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button type="submit" class="btn btn-primary btn-fancy" href="/produit/{{$product->id}}/show">Ajouter au panier</button>
                </form>
                </td>

            </tr>
        @endforeach
    </table>
    @endsection 