@extends('layout')
@section('corps_page')
    <div class="container">
        <form method="post" action="{{route('categories.store')}}">
        <div class="form-group">
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Valider</button>
        </div>
        </form>
    </div>
@endsection
