@extends('layout')
@section('corps_page')

<div class="container">
    <div><p><h2>{{__('Entregistrement d\'un nouveau produit')}}</h2></p></div>
    <div><p><a href="{{route('products.index')}}">{{__('Voir les Derniers Produits Enregistrés')}}</a></p></div>
    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" name="name"  placeholder="le nom du produit *">
            </div>
            <div>
                <input type="text" name="price" placeholder="Le prix du produit *">
            </div>
            <div>
                <textarea name="description" class="descript" cols="110" rows="10" id="description" placeholder="Description du produit"></textarea>
            </div>

            <div>
                <select name="category_id" id="category_id" placeholder="La catégorie">
                    <option hidden >Choisir une Catégorie</option>
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
                <div><input type="file" name="product_image"></div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection
