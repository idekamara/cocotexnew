@extends('layout')
@section('corps_page')
    <div><p><h2>{{__('Mise à jour de la Catégorie : '.$categories->name)}}</h2></p></div>
    <form action="{{route('updater_category',['id'=>$categories->id])}}" method="post">
        @csrf
        @method('patch')
        <div> <input type="text" name="name" class="form-control" placeholder="le nom de la Categorie" value="{{$categories->name}}"></div>
        <div><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$categories->description}}</textarea> </div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>
    </form>

@endsection
