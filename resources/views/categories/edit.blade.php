@extends('layout')
@section('corps_page')
    <form action="{{route('editer_category',['$categories->id'])}}" method="post">
        @csrf
        @method('patch')
        <div> <input type="text" name="name" class="form-control" placeholder="le nom de la Categorie" value="{{$categories->name}}"></div>
        <div><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$categories->description}}</textarea> </div>
        <div>
            <select name="category_id" id="category_id" class="form-control">
                < <option value=""></option>
                @foreach($categories as $key => $value)
                    <option value="{{$key}}" {{ $key == $categories->category_id ? 'selected="selected"':''}}>{{$value}}</option>
                @endforeach
            </select>
        </div>

        <div> <button class="btn btn-primary">Enregistrer</button> </div>
    </form>

@endsection
