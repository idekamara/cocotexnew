@extends('layout')
@section('corps_page')
<br>
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
    
</div>
@endif

@if(session('danger'))
<div class="alert alert-danger">
    {{session('danger')}}
    
</div>
@endif
 <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100" id="fascination">
        <a href="/product/product/{{$product->id}}"><img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" style="width:100%; height: 170px">
        </a>
        <div class="card-body">
        <h4 class="card-title">
        <a href="/product/product/{{$product->id}}">{{$product->name}}</a>
        </h4>

        <h5>{{$product->price}} Fcfa</h5>
        <p class="card-text">{{$product->description}}</p>
        <p>
        <form action="{{route('add.carts')}}" method="POST" id="{{'product_'.$product->id}}" class="add-to-cart">
        @csrf
        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <button type="submit" class="btn btn-primary btn-sm" href="/produit/{{$product->id}}/show" title="Ajouter au panier">&nbsp;<i class="fa fa-shopping-cart fa-2x" aria-hidden="true">&nbsp;</i></button>
        </form>

        </p>
        </div>


        <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
        </div>
        </div>
        @endforeach

        </div>
@endsection