@extends('layout')
@section('corps_page')

    
    <div class="container">
        <div><p><h2 >{{__('Liste des utilisateurs')}}</h2></p></div>
        <div><p><a class="btn btn-success" href="{{route('register')}}" title="Ajouter un utilisateur">
            <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i>&nbsp;Utilisateur</i></a></p></div>
    @if(session()->has('info'))
    <div class="btn btn-success"><i class="fa fa-commenting" aria-hidden="true"></i>
        {{ session('info') }}
    </div>
    @endif
    </div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>          <th>Nom</th>           <th>Email</th>           <th>Profil</th>               <th>Mettre à jour</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td> {{$user->id}} </td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td> {{$user->roles}}</td>
                <td>
                    
                        <a class="btn btn-primary btn-sm" href="{{route('editer_user',['id'=>$user->id])}}" title="Modifier l'utilisateur">

                            <i class="fa fa-cog">&nbsp;Modifier</i></a>
                    

                    <form action="/contacts/user/{{$user->id}}" method="post" onsubmit="return confirm('Voulez vous Supprimer l\'utilisateur: {{$user->name}} ?');">
                         @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer l'utilisateur"><i class="fa fa-trash-o fa-sm">&nbsp;Supprimer</i></button>
                      </form>


                </td>

            </tr>
        @endforeach
    </table>

@endsection

