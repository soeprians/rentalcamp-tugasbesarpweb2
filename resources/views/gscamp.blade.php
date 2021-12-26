<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GS Rental Camp</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img class=""  src="assets/img/gsr3.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Daftar Barang </a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#about">About</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="#team">Pemilik</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('barang.index')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-secondary text-white text-center" style="background-image: url(assets/img/prau1.jpg);
        background-size: cover; ">
            <div class="container">
                <div class="masthead-subheading">Welcome To GS Outdoor Rental Camp!</div>
                <!--<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>-->
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Lihat Barang</a>
            </div>
        </header>
        <!-- Services-->
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Barang Yang Disewakan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="assets/img/portfolio/gs1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tenda Kap 4-5 Double Layer</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 45.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <img class="img-fluid" src="assets/img/portfolio/gs2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tenda Kap 4 Double Layer</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 40.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <img class="img-fluid" src="assets/img/portfolio/gs3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tenda Kap 2-3 Double Layer</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 30.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <img class="img-fluid" src="assets/img/portfolio/gs4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Carrier 55L</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 30.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <img class="img-fluid" src="assets/img/portfolio/gs5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sleeping Bag</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 8.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Nesting</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 10.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs7.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Flysheet</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 10.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs8.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Daypack</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 10.000</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs9.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hammock</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 10.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs10.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Matras</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 5.000</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item h-100 w-75">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="assets/img/portfolio/gs11.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Kompor Mini</div>
                                <div class="portfolio-caption-subheading text-muted">Rp. 8.000</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- About-->
        
        <!-- Team-->
        <section class="page-section " id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pemilik GS Rental Camp</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/pp022.jpg" alt="..." />
                            <h4>Galih Fatahilah</h4>
                            <p class="text-muted">Pemilik 1</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/pp011.jpg" alt="..." />
                            <h4>Ruri Pratama</h4>
                            <p class="text-muted">Pemilik 2</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5 bg-light">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto h-50 w-50" src="assets/img/logos/eiger1.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto h-75 w-75" src="assets/img/logos/consina2.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto h-100 w-100" src="assets/img/logos/arei3.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto h-50 w-50" src="assets/img/logos/tnf1.png" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer-->
        <footer class="footer py-4 bg-dark text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        Copyright &copy; GS Outdoor Rental Camp 2021
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <b>Bandung, West Java, IDN</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/js/scripts.js') }}"></script>
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
