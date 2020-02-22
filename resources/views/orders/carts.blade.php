@extends('layout')
@section('corps_page')

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
                        @foreach($cart as $panier)
                            <tr>
                                <td scope="col">
                                    <img src="{{$panier['image'] ? asset($panier['image']) : asset('uploads/images/default.png')}}" alt="{{$panier['name']}}" width="50" height="60">
                                {{$panier['name']}}</td>
                                <td scope="col">{{$panier['price']}}</td>
                                <td scope="col">
                                    <select><option value="">{{$panier['quantite']}}</option>
                                            <option>2</option>
                                            <option>3</option>
                                    </select>
                                </td>
                                <td scope="col">{{$panier['total']}}F CFA</td>
                                <td>
    <form action="{{route('delete.carts', $panier['id'])}}" method="post" onsubmit="return confirm('Voulez vous Supprimer le produit: {{$panier['name']}} ?');">
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
