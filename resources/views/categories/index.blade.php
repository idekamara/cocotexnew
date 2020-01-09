@extends('layout')
@section('corps_page')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script defer>
   let form = document.getElementById("category_form");
   form.addEventListener('submit', function (e) {
       e.preventDefault();
       let donnees_formulaire = $(this).serialize();
       $.ajax({
           type: "POST",
           url: '/ajout_category',
           data: donnees_formulaire,
           success: function(data){
               alert("Category ajoutée");
               console.log(donnees_formulaire);
               $("#category_table").append(`<tr> <td>#</td> <td> ${data.data.name} </td> <td> <div class="row justify-content-end"> <div class="col"><a href="/categories/${data.data.id}/edit" class="btn btn-primary">Editer</a></div> <form class="col" action="/categories/${data.data.id}" method="post"> <input type="hidden" name="_token" value="{{@csrf_token()}}"> <input type="hidden" name="_method" value="delete">                            <button type="submit" class="btn btn-danger">Suppimer</button> </form> </div> </td> </tr>`);
               $('#add_category').modal('hide');
           }
       });
   })
</script>

<div class="container">
        <div>
        <p><h2>{{__('Liste des Catégories de produits')}}</h2></p>
        </div>
        <div><p><a href="{{route('categories.create')}}" >Ajouter une Nouvelle Categorie </a></p></div>
    </div>
<div>
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
                        <a class="btn btn-primary btn-sm" href="{{route('editer_category',['id'=>$category->id])}}" title="Modifier la Catégorie"><i class="fa fa-cog">&nbsp;Modifier</i></a>
                    </p>
                    <form action="/category/category/{{$category->id}}" method="post" onsubmit="return confirm('Voulez vous Supprimer la Catégorie : {{$category->name}} ?');">
                         @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer la Catégorie"><i class="fa fa-trash-o fa-sm">&nbsp;Supprimer</i></button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
</div>

<div>
<a href="{{route('categories.create')}}" >Ajouter une Nouvelle Categorie </a>
</div>

@endsection
