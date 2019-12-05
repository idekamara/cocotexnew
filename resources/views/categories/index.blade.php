@extends('layout')
@section('corp_page')
<div class="container">

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
