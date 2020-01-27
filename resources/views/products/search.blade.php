@extends('layout')
@section('corps_page')
<div>
<form action="{{route('resultats_search')}}" method="GET" >
     @csrf
     <br />
    <div class="row justify-content-between align-items-end">
        <div class="col-6 col-md-2 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
            <label><h5>Rechecher par Catégorie</h5></label>
                <select name="category_id" id="category_id">
                     <option hidden value="">Choisir une catégorie</option>
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}" >{{$value}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-6 col-md-2 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
            <label><h5>Produit Recherché</h5></label>
            <input type="text" name="nom" class="form-control mb-30"
            placeholder="Ex: pagne, chemise, ...">
        </div>
        
        <div class="col-12 col-md-3">
            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
        </div>
    </div>
</form>
@if(session()->has('info'))
    <div class="btn btn-success"><i class="fa fa-commenting fa-4x" aria-hidden="true"></i>
        <h5>{{ session('info') }}</h5>
    </div>
    @endif
</div>
@endsection