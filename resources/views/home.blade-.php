@extends('layout')
@section('corps_page')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3" >
            <h4 class="my-4"><marque behavior="alternate" direction="" scrollamount="" height="" width="" > L'Élégance du Textile</marque></h4>

            <div id="menu">
                <div class="list-group">
                    <a href="#" class="list-group-item">Pagnes Africains</a>
                    <a href="#" class="list-group-item">Costumes Africains</a>
                    <a href="#" class="list-group-item">Chemises Tissees</a>
                    <a href="#" class="list-group-item">Chemises Patchees</a>
                    <a href="#" class="list-group-item">Bombers Woodin</a>
                    <a href="#" class="list-group-item">Chaussures Tissees</a>
                    <a href="#" class="list-group-item">Chaussures Woodin</a>
                    <a href="#" class="list-group-item">Produits Cosmetiques BIO</a>

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
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('shop/pa0.jpg')}}" style="width:900px;height:350px" alt="Pagnes Africains">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/ca0.jpg')}}" style="width:900px;height:350px" alt="Costumes Africains">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/ct1.jpg')}}" style="width:900px;height:350px" alt="Chemises Tissées">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/cp1.jpg')}}" style="width:900px;height:350px" alt="Chemises Patchées">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/bw0.jpg')}}" style="width:900px;height:350px" alt="Bombers Woodin">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/sh1.jpg')}}" style="width:900px;height:350px" alt="Chaussures Tissées">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/shc.jpg')}}" style="width:900px;height:350px" alt="Chaussures Woodin">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('shop/pc1.jpg')}}" style="width:900px;height:350px" alt="Chaussures Woodin">
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

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/w1.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Adoration de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/w5.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Fascination de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/w4.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Harmonie de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/ca12.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Costume Africain</a>
                            </h4>
                            <h5>45.99 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/ca8.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Costume Africain </a>
                            </h4>
                            <h5>45.99 €</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/ca10.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Costume Africain</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/shc.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Adoration de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/sha.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Fascination de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('shop/shb.jpg')}}" style=" width:253px; height: 145px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Harmonie de Woodin</a>
                            </h4>
                            <h5>25.99 €</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

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
