@extends('layout')
@section('corps_page')
<div class="container">
    <div class="container">
        <div><p><h2 >{{__('Liste des Catégories de produits')}}</h2></p></div>
        <div><p><a href="{{route('categories.create')}}" >Ajouter une Nouvelle Categorie </a></p></div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>          <th>Nom Categorie</th>                <th>Description</th>        <th>Mettre à jour</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td> {{$category->id}} </td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <p>
                        <a href="{{route('editer_category',['id'=>$category->id])}}">Editer</a>
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<div>
<a href="{{route('categories.create')}}" >Ajouter une Nouvelle Categorie </a>
</div>

@endsection
