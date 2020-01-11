@extends('layout')
@section('corps_page')

    
    <div class="container">
        <div><p><h2 >{{__('Liste des Produits')}}</h2></p></div>
        <div><p><a class="btn btn-success" href="{{route('products.create')}}" title="Ajouter un produit">
            <i class="fa fa-plus-circle" aria-hidden="true">&nbsp;Produit</i></a></p></div>
    @if(session()->has('info'))
    <div class="btn btn-success"><i class="fa fa-commenting fa-2x" aria-hidden="true"></i>
        {{ session('info') }}
    </div>
    @endif
    </div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>          <th>Nom Produit</th>           <th>Prix</th>           <th>Catégories</th>         <th>Description</th>        <th>Mettre à jour</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}} </td>
                <td><a href="/product/product/{{$product->id}}">{{$product->name}}</a> <img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50" height="60"></td>
                <td>{{$product->price}}</td>
                <td> {{ $product->category->name ?? '' }}</td>
                <td>{!!$product->description!!}</td>
                <td>
                    
                        <a class="btn btn-primary btn-sm" href="{{route('editer_produit',['id'=>$product->id])}}" title="Modifier le produit">

                            <i class="fa fa-cog">&nbsp;Modifier</i></a>
                    

                    <form action="/product/product/{{$product->id}}" method="post" onsubmit="return confirm('Voulez vous Supprimer le produit: {{$product->name}} ?');">
                         @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer le produit"><i class="fa fa-trash-o fa-sm">&nbsp;Supprimer</i></button>
                       <!-- <input type="submit" class="btn btn-danger btn-sm" name="delete" value="Supprimer"> -->
                    </form>


                </td>

            </tr>
        @endforeach
    </table>

@endsection

