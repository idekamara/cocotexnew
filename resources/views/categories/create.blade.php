@extends('layout')
@section('corps_page')
    <div class="container">
        <div><p><h2>{{__('Entregistrement d\'une nouvelle Catégorie')}}</h2></p></div>
        <div><p><a href="{{route('categories.index')}}">{{__('Voir les Dernières Catégories Enregistrées')}}</a></p></div>

    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <form method="post" action="{{route('categories.store')}}">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nom de la Catégorie *">
            </div>
            <div>
                <textarea type="text" name="description" cols="30" rows="10" class="form-control" placeholder="Description de la Catégorie *"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
    </div>
@endsection
