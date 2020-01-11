@extends('layout')
@section('corps_page')
<div><p><h2>{{__('Mise à jour du user : '.$users->name)}}</h2></p></div>
<form action="{{route('updater_user',['id'=>$users->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div> <input type="text" name="name" class="form-control" placeholder="le nom du user" value="{{$users->name}}"></div>
    <div><input type="text" name="email" class="form-control" placeholder="Le email du user" value="{{$users->email}}"> </div>
    <div><input type="text" name="role" class="form-control" placeholder="Le role du user" value="{{$users->roles}}"></div>
    <div>
   
    
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

@endsection
