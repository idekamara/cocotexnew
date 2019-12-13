@extends("layout")

@section("corps_page")
<div class="container">
<figcaption><img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="100%"></figcaption>
</div>
@endsection