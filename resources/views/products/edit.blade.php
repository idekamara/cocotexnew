@extends('layout')
@section('corps_page')
<form action="{{route('updater_produit',['id'=>$product->id])}}" method="post">
    @csrf
    @method('patch')
    <div> <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name}}"></div>
    <div><input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$product->price}}"> </div>
    <div><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$product->description}}</textarea> </div>
    <div>
    <select name="category_id" id="category_id" class="form-control">
        < <option value=""></option>
        @foreach($categories as $key => $value)
            <option value="{{$key}}" {{ $key == $product->category_id ? 'selected="selected"':''}}>{{$value}}</option>
        @endforeach
    </select>
    </div>

    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

@endsection
