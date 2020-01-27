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
                    
                        <a class="btn btn-primary btn-sm" href="{{route('editer_produit',['id'=>$product->id])}}" title="Acheter">

                            <i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;Commander</i></a>
                </td>

            </tr>
        @endforeach
    </table>
    @endsection