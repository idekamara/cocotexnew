@extends('layout')
@section('corps_page')
<br>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    
</div>
@endif
    <section class="cart_area pt-5">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Produit</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach(Cart::content() as $panier)
                         
                            <tr>
                                <td scope="col">
                                    <img src="{{$panier->options['image']}}" alt="{{$panier->name}}" width="50" height="60">
                                {{$panier->name}}</td>
                                <td scope="col">{{$panier->price}}</td>
                                <td scope="col">
                                    <select >
                                        <option value="" selected>{{$panier->qty}}</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </td>
                                <td scope="col">{{ number_format(($panier->price * $panier->qty),0,",",".") }} F CFA</td>
                                <td>
                                <form action="{{route('delete.carts', $panier->rowId)}}" method="post" onsubmit="return confirm('Voulez vous Supprimer {{$panier->name}} du panier ?');">
                                 @csrf @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" title="Annuller ce produit"><i class="fa fa-trash-o fa-sm"></i></button>
                                 </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="out_button_area">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="btn btn-primary" href="{{route('checkout')}}">Confirmer la commande</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
