@extends('layout')
@section('corps_page')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3" >
                <h4 class="my-3"><marquee  direction="" scrollamount="" height="" width="" > L'Élégance des Bombers CocoTex</marquee></h4>

                <div id="menu">
                    <div class="list-group">
                        <a href="{{route('products.pagnes')}}" class="list-group-item">Pagnes Africains</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.costumes')}}" class="list-group-item">Costumes Africains</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.chemises')}}" class="list-group-item">Chemises Africaines</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.bombers')}}" class="list-group-item">Bombers Africains</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.shoes')}}" class="list-group-item">Chaussures en Woodin</a>
                        <span class="sr-only">(current)</span>
                        <a href="#" class="list-group-item">HIJAB</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.biocos')}}" class="list-group-item">Bio Cosmetiques</a> 
                    </div>
                </div>


            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9 width:1000px height:400px" >
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" align="center">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bb1.jpg')}}" style="width:60%;height:350px"  alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb2.jpg')}}" style="width:60%;height:350px" align="" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb3.jpg')}}" style="width:60%;height:350px" alt="Chemises Tissées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb4.jpg')}}" style="width:60%;height:350px" alt="Chemises Patchées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb5.jpg')}}" style="width:60%;height:350px" alt="Bombers Woodin">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb6.jpg')}}" style="width:60%;height:350px" alt="Chaussures Tissées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb7.jpg')}}" style="width:60%;height:350px" alt="Chaussures Woodin">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bb8.jpg')}}" style="width:60%;height:350px" alt="Chaussures Woodin">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                     @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card h-100">
                            <a href="/product/product/{{$product->id}}"><img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" style="width:100%; height: 145px" ></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{$product->name}}</a>
                                </h4>
                                <h5>{{$product->price}} Fcfa</h5>
                                <p class="card-text">{{$product->description}}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
@endsection
