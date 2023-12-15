
    <x-layotus.main>
<x-slot:title>
    Bosh Dasturchi
</x-slot:title>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">{{__('Tozalash xizmatlari')}}</h5>
                            <h1 class="display-3 text-white mb-md-4">{{__('Tozalashda eng yaxshi sifatli yechim')}}</h1>
                            <a href="" class="btn btn-primary">{{__('Iqtibos olish')}}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">{{__('Tozalash xizmatlari')}}</h5>
                            <h1 class="display-3 text-white mb-md-4">{{__('Yuqori professional tozalash xizmatlari')}}</h1>
                            <a href="" class="btn btn-primary">{{__('Iqtibos olish')}}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">{{__('Tozalash xizmatlari')}}</h5>
                            <h1 class="display-3 text-white mb-md-4">{{__('Tajribali va tajribali tozalovchilar')}}</h1>
                            <a href="" class="btn btn-primary">{{__('Iqtibos olish')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">{{__('Bizning ofisimiz')}}</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">{{__('Bizga elektron pochta')}}</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">{{__('Bizga qongiroq qiling')}}</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">{{__('Yillik Tajriba')}}</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Biz haqimizda bilib oling')}}</h6>
                    <h1 class="mb-4 section-title">{{__('Biz eng yaxshi tozalash xizmatlarini taqdim etamiz')}}</h1>
                    <h5 class="text-muted font-weight-normal mb-3">{{__('Biz sizning va uyingizning tozaligiga qayguramiz')}}</h5>
                    <p>{{__('Biznin ish rejamiz 1-qoyda:Hech qanday qoyda yoq ')}}</p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">{{__('Batafsil malumot')}}</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">{{__('Videoni ijro etish')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Bizning xizmatlar')}}</h6>
                    <h1 class="mb-4 section-title text-white">{{__('Siz uchun ajoyib tozalash xizmatlari')}}</h1>
                    <p class="text-white">{{__('Bizning jamoamizga qoshiling')}}</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">{{__('Boshqa xizmatlar')}}</a>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-hotel"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">{{__('Uy tozalash')}}</h5>
                            <img src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-city"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">{{__('Derazalarni tozalash')}}</h5>
                            <img src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-spa"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">{{__('Gilam tozalash')}}</h5>
                            <img src="img/blog-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"></h6>
                    <h1 class="mb-4 section-title">
                        {{__('Tozalash sanoatida 25 yillik tajriba')}}</h1>
                    <p class="mb-4">{{('Bizga ozingizga ishongandek ishoning biz uchun birinchi orinda sifatli ish')}}</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">{{__('Bizning tozalovchilarimiz')}}</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">{{__('Baxtli mijozlar')}}</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">{{__('Bajarilgan loyihalar')}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">{{__('Loyiha nomi')}}</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Jamoamiz bilan tanishing')}}</h6>
                    <h1 class="section-title mb-3">{{__('Yuqori tajribali tozalovchilarimiz bilan tanishing')}}</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">{{__('Bizning sahifalarimiz korib bahramand boling')}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">{{__('Toliq ism')}}</h5>
                                <p class="text-white m-0">
                                    {{__('Belgilanish')}}</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">{{__('Toliq ism')}}</h5>
                                <p class="text-white m-0">{{__('Belgilanish')}}</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">{{__('Toliq ism')}}</h5>
                                <p class="text-white m-0">{{__('Belgilanish')}}</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">{{__('Toliq ism')}}</h5>
                                <p class="text-white m-0">{{__('Belgilanish')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Guvohnoma')}}</h6>
                    <h1 class="section-title text-white mb-5">{{__('Bizning mijozlarimiz nima deyishadi')}}</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">{{__('Mijoz nomi')}}</h5>
                                    <i>{{__('Kasb-hunar')}}</i>
                                </div>
                            </div>
                            <p>{{__('Bizning sahifalarimiz korib bahramand boling')}}</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">{{__('Mijoz nomi')}}</h5>
                                    <i>{{__('Kasb-hunar')}}</i>
                                </div>
                            </div>
                            <p>{{__('Bizning sahifalarimiz korib bahramand boling')}}</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">{{__('Mijoz nomi')}}</h5>
                                    <i>{{__('Kasb-hunar')}}</i>
                                </div>
                            </div>
                            <p>{{__('Bizning sahifalarimiz korib bahramand boling')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Eng songgi blog')}}</h6>
                    <h1 class="section-title mb-3">{{('Bizning blog postimizdagi songgi maqolalar')}}</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">{{__('Bizning sahifalarimiz korib bahramand boling')}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/blog-1.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">{{__('Yanvar')}}</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Yaratuvchi')}}</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Tozalash')}}</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">{{__('Bizning shior sifat oliy nav')}}</h5>
                    <p class="mb-4">{{('Bizning maqsadimiz sizning uyingizni osoishtaligi')}}</p>
                    <a class="btn btn-sm btn-primary py-2" href="">{{__('Koproq oqish')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/blog-2.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">{{__('Yanvar')}}</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Yaratuvchi')}}</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Tozalash')}}</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">{{__('Bizning shior sifat oliy nav')}}</h5>
                    <p class="mb-4">{{('Bizning maqsadimiz sizning uyingizni osoishtaligi')}}</p>
                    <a class="btn btn-sm btn-primary py-2" href="">{{__('Koproq oqish')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/blog-3.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">{{__('Yanvar')}}</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Yaratuvchi')}}</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{__('Tozalash')}}</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">{{__('Bizning shior sifat oliy nav')}}</h5>
                    <p class="mb-4">{{('Bizning maqsadimiz sizning uyingizni osoishtaligi')}}</p>
                    <a class="btn btn-sm btn-primary py-2" href="">{{__('Koproq oqish')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    </x-layotus.main>





   