@extends('layouts/index-layout', ['title' => 'Home'])

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="{{ asset('img/categories/acceuil1.jpg')}}">
                    <div class="categories__text">
                        <h1 class="text-white">Coquine</h1>
                        <p></p>
                        <a href="#" class="text-white">Contactez-maintenant</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/acceuil2.jpg')}}">
                            <div class="categories__text">
                                <h4 style="color: #f53076;">Ronde et géante</h4>
                                <p></p>
                                <a style="color: #f53076;" href="#">Flashez</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/acceuil3.jpg')}}">
                            <div class="categories__text">
                                <h4 style="color: #f53076;">Kid’s fashion</h4>
                                <p></p>
                                <a style="color: #f53076;" href="#">Flashez</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/acceuil4.jpg')}}">
                            <div class="categories__text">
                                <h4 style="color: #f53076;">Skini</h4>
                                <p></p>
                                <a style="color: #f53076;" href="#">Flashez</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/acceuil5.jpg')}}">
                            <div class="categories__text">
                                <h4 style="color: #f53076;">Brune et élégante</h4>
                                <p></p>
                                <a style="color: #f53076;" href="#">Flashez</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- how working Begin -->
<section class="services spad" id="howworking">
    <div class="container">
        <center><h4 class="mb-4">Comment ça marche ?</h4></center>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-user"></i>
                    <h6>S'inscrire</h6>
                    <p>Remplir le formulaire d'inscription. Une inscription fiable, sécurisée, anonyme et cryptée. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-lock"></i>
                    <h6>Se connecter</h6>
                    <p>Connexion sécurisée et anonyme. Ne jamais donner ses coordonnées à autrui.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>S'abonner</h6>
                    <p>Cliquez sur le boutton d'abonnment puis abonnez-vous. De belles surprises vous attendent.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-eye"></i>
                    <h6>Faire un choix + Conversation + Rendez-vous</h6>
                    <p>Possibilité de choisir son profil préférable pour échanger.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  End -->

<!-- about Begin -->
<section class="product spad" id="apropos">
    <div class="container">
        <center><h4 class="mb-4">A propos</h4></center>
        <p>
            Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir. Que cela soit occasionnellement ou pour la vie. Notre site privilégie la qualité de vos rencontres!

            Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir. Que cela soit occasionnellement ou pour la vie. Notre site privilégie la qualité de vos rencontres!
        </p>
        <p>
            Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir. Que cela soit occasionnellement ou pour la vie. Notre site privilégie la qualité de vos rencontres!

            Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir. Que cela soit occasionnellement ou pour la vie. Notre site privilégie la qualité de vos rencontres!
        </p>
    </div>
</section>
<!-- Product Section End -->

<!-- comment Begin -->
<section class="banner set-bg" data-setbg="{{ asset('img/banner/banner1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <h3>Commentaires</h3>
                            
                            <a href="#">Nom du client</a>
                            <p>Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir.</p>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <h3>Commentaires</h3>
                            
                            <a href="#">Nom du client</a>
                            <p>Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir.</p>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <h3>Commentaires</h3>
                            
                            <a href="#">Nom du client</a>
                            <p>Nom de la plateforme est une plateforme qui, par ses services permet à toute personne ayant envie de rencontrer de belles jeunes femmes pour partager ou passer de bons moments de plaisir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  End -->

<!-- Wife pictures -->
<div class="instagram mt-5" id="dochoice">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta1.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta2.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta3.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta4.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta1.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta2.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End -->
@stop