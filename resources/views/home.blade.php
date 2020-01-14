@extends('layout')
@section('corps_page')
    <!-- Page Content -->
  
    <div class="container">

        <div class="row">

            <div class="col-lg-3" >
                <h4 class="my-4"><marquee behavior="alternate" direction="" scrollamount="" height="" width="" > L'Élégance du Textile</marquee></h4>
               
                <div id="menu">
                        <div class="list-group">
                        <a href="{{route('products.pagnes')}}" class="list-group-item">Pagnes Africains</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.costumes')}}" class="list-group-item">Costumes Africains</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.chemises')}}" class="list-group-item">Chemises Africaines</a>
                        <span class="sr-only">(current)</span>
                        <a href="{{route('products.bombers')}}" class="list-group-item">Bombers en Woodin</a>
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
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/pa0.jpg')}}" style="width:900px;height:350px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/ca0.jpg')}}" style="width:900px;height:350px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cht12.jpg')}}" style="width:900px;height:350px" alt="Chemises Tissées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cp5.jpg')}}" style="width:900px;height:350px" alt="Chemises Patchées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bw3.jpg')}}" style="width:900px;height:350px" alt="Bombers Woodin">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/shc.jpg')}}" style="width:900px;height:350px" alt="Chaussures Tissées">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/jb0.jpeg')}}" style="width:900px;height:350px" alt="Chaussures Woodin">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc0.jpg')}}" style="width:900px;height:350px" alt="Chaussures Woodin">
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
                            <a href="#"><img class="card-img-top" src="{{asset('shop/w1.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Adoration de Woodin</a>
                                </h4>
                                <h5>16000 F CFA</h5>
                                <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/w5.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Fascination de Woodin</a>
                                </h4>
                                <h5>16000 F CFA</h5>
                                <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/w4.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Harmonie de Woodin</a>
                                </h4>
                                <h5>16000 F CFA</h5>
                                <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/ca12.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Costume Africain</a>
                                </h4>
                                <h5>35000 F CFA</h5>
                                <p class="card-text">Tenue pour Homme en 2 pièces, Tissu fil à fil, 100% coton, travaille avec du pagne tissé au tour du cou et des manches</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/ca8.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Costume Africain </a>
                                </h4>
                                <h5>35000 F CFA</h5>
                                <p class="card-text">Tenue pour Homme en 2 pièces, Tissu Super Cent Anglais, 100% coton, travaille avec du pagne tissé au tour du cou et des manches</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/ca10.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Costume Africain</a>
                                </h4>
                                <h5>35000 F CFA</h5>
                                <p class="card-text">Tenue pour Homme en 2 pièces, Tissu Super Cent Anglais, 100% coton, travaille avec du pagne tissé au tour du cou et des manches</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/cht20.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Chemise Tissée</a>
                                </h4>
                                <h5>15000 F CFA</h5>
                                <p class="card-text">Chemise pour Homme manche courte tissu 100% Coton, taille L / 40, design fait avec du pagne tissé </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/cht13.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Chemise Tissée </a>
                                </h4>
                                <h5>15000 F CFA</h5>
                                <p class="card-text">Chemise pour Homme manche courte tissu 100% Coton, taille L / 40, design fait avec du pagne tissé </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/cp2.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Chemise Patchée</a>
                                </h4>
                                <h5>20000 F CFA</h5>
                                <p class="card-text">Chemise pour Homme à 80% woodin et 20% conton sur les manches taille XL / 42 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/bw3.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Bomber Homme</a>
                                </h4>
                                <h5>20000 F CFA</h5>
                                <p class="card-text">Bombers pour Homme, 100% Woodin, taille XL / 42 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/bw2.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Bomber Femme</a>
                                </h4>
                                <h5>20000 F CFA</h5>
                                <p class="card-text">Bombers pour Femme, 100% Woodin, taille L / 40 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/bb11.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Bomber Pour Enfant</a>
                                </h4>
                                <h5>15000 F CFA</h5>
                                <p class="card-text">Bombers pour Enfant</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/shc.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Sandale en Bogolan</a>
                                </h4>
                                <h5>7000 F CFA</h5>
                                <p class="card-text">Chaussure pour Homme, 100% Woodin<br> Pointure 42 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/sha.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Sandale en Bogolan</a>
                                </h4>
                                <h5>7000 F CFA</h5>
                                <p class="card-text">Chaussure pour Homme, 100% Woodin<br> Pointure 43 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('shop/shb.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Sandale en Bogolan</a>
                                </h4>
                                <h5>7000 F CFA</h5>
                                <p class="card-text">Chaussure pour Homme, 100% Woodin<br> Pointure 44 </p>
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
