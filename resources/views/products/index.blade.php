@extends('layout')
@section('corps_page')
    <div class="container">
        <div><p><h2 >{{__('Liste des Produits')}}</h2></p></div>
        <div><p><a href="{{route('products.create')}}"><input type="submit" class="btn btn-success" name="delete" value="+ Produit"></a></p></div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>          <th>Nom Produit</th>           <th>Prix Produit</th>           <th>Catégories</th>         <th>Description</th>        <th>Mettre à jour</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}} </td>
                <td><a href="/product/product/{{$product->id}}">{{$product->name}}</a> <img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50"></td>
                <td>{{$product->price}}</td>
                <td> {{ $product->category->name ?? '' }}</td>
                <td>{{$product->description}}</td>
                <td>
                    <p>
                        <a href="{{route('editer_produit',['id'=>$product->id])}}"><input type="submit" class="btn btn-success" name="delete" value="Editer"></a>
                    </p>

                    <form action="/product/product/{{$product->id}}" method="post">
                         @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                    </form>


                </td>

            </tr>
        @endforeach
    </table>

@endsection


