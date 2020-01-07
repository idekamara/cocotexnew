@extends('layout')
@section('corps_page')

<div class="container">
<div class="col-md-12" ><p><br /><h2>{{__('Veuillez saisir votre message après avoir renseigner tous les champs')}}</h2></p></div> 
  <form action="{{route('contacts.store')}}" method="POST">
     @csrf
     @method('post')
     <div class="col-md-12">
      <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Prénom *" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
  <div class="col-md-12">
    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Nom *" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="col-md-12">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre E-mail *" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="col-md-12">
  <div>
    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre Téléphone *" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div>
     <input id="adresse" type="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="Votre Domicile *" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
</div>
<div class="col-md-12">
    <textarea class="description" name="description" placeholder="votre message"></textarea>
</div>
<div class="col-md-12">
    <input type="submit" value="Envoyer">
  </div>
  </form>
</div>

@endsection
