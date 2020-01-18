@extends('layout')
@section('corps_page')
    <!-- Page Content -->
  
    <div class="container">

        <div class="row">

            <div class="col-lg-3" >
                <h4 class="my-4"><marquee behavior="alternate" direction="" scrollamount="" height="" width="" > L'Élégance du Textile</marquee></h4>
               
                <div id="menu">
                        <div class="list-group">
                        <h5><a href="{{route('products.pagnes')}}" class="list-group-item">Pagnes Africains</a>
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
                        <a href="{{route('products.biocos')}}" class="list-group-item">Bio Cosmetiques</a> </h5>
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
                            <img class="d-block img-fluid" src="{{asset('shop/cht11.jpg')}}" style="width:900px;height:350px" alt="Chemises Tissées">
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
                            
                            <!--slider small woodin -->
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/w1.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w01.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w2.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('products.pagnes')}}#adoration">Adoration de Woodin</a>
                            </h4>
                            <h5>16000 F CFA</h5>
                            <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <!--/slider small -->
                    <!--slider small woodin fascination-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t10.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t11.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t14.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('products.pagnes')}}#fascination">Woodin 2 Tons</a>
                                </h4>
                                <h5>16000 F CFA</h5>
                                <p class="card-text">Pagne Africain de qualité supérieure, 100% coton<br> Produit en Afrique. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                    <!--/slider small harmonie-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t13.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t12.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/w2t16.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                               <a href="{{route('products.pagnes')}}#fascination">Fascination de Woodin</a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/cap1.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cap2.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cap4.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.costumes')}}#Africains">Costume Africain</a>
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
                            <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/ca11.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/ca12.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/ca04.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.costumes')}}#Africains">Costume Africain </a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/ca01.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/ca02.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/ca03.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.costumes')}}#Africains">Costume Africain</a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/cht10.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cht11.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cht1.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.chemises')}}#Tissées">Chemise Tissée</a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/cht22.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cht15.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cht16.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.chemises')}}#Tissées">Chemise Tissée </a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/cp2.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cp12.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/cp6.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.chemises')}}#Patchées">Chemise Patchée</a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bw0.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bw1.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bw3.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.bombers')}}#Hommes">Bomber Homme</a>
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
                             <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bw2.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bw4.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bw5.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.bombers')}}#Hommes">Bomber Femme</a>
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
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/sh10.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/sh01.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/sh02.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.shoes')}}#Femmes">Sandale Femme</a>
                                </h4>
                                <h5>7000 F CFA</h5>
                                <p class="card-text">Chaussure pour Femme, 100% Woodin<br> Pointure 42 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/sha.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/sh03.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/shb.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.shoes')}}#Hommes">Sandale Homme</a>
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
                            <a href="#"><img class="card-img-top" src="{{asset('shop/sh1.jpg')}}" style=" width:100%; height: 145px" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.shoes')}}#Enfants">Sandale en Bogolan</a>
                                </h4>
                                <h5>7000 F CFA</h5>
                                <p class="card-text">Chaussure pour Homme, 100% Woodin<br> Pointure 44 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="card h-100">
                       <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bc5.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc10.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc7.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.biocos')}}#Beures">Beure de Karité Bio</a>
                                </h4>
                                <h5>2500 F CFA</h5>
                                <p class="card-text"> pour les soins de corp et des cheveux pour toute la Famille, 100% Bio<br>Existe en Karité Miel, Karité Citron, Karité Aloévera </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bc4.jpg')}}" style=" width:100%; height: 145px" alt="Pagnes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc6.jpg')}}" style=" width:100%; height: 145px" alt="Costumes Africains">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc13.jpg')}}" style=" width:100%; height: 145px" alt="Chemises Tissées">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.biocos')}}#Savons">Savon Karité Bio</a>
                                </h4>
                                <h5>1000 F CFA</h5>
                                <p class="card-text">pour les soins de corp et des cheveux pour toute la Famille, 100% Bio<br>Existe en Karité Argile verte, Karité Miel, Karité Henné</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div id="carouselSmallIndicators" class="carousel slide my-" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselSmallIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselSmallIndicators" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('shop/bc3.jpg')}}" style=" width:100%; height: 145px" alt="Huile Moringa">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc14.jpg')}}" style=" width:100%; height: 145px" alt="Huile Baobab">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('shop/bc14.jpg')}}" style=" width:100%; height: 145px" alt="Huile Neem">
                        </div>
                        </div>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('products.biocos')}}#Huiles">Huile V. N. Bio</a>
                                </h4>
                                <h5>1500 F CFA</h5>
                                <p class="card-text">Huile Végétale Naturelle Bio à base de<br> Moringa, Boabab, Neem, ...,<br> Idéal pour vos soins et Beauté visage, corps, cheveux, ...  </p>
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
