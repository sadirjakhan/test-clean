<x-layotus.main>
    <x-slot:title>
        Service
    </x-slot:title>
    

     <!-- Page Header Start -->
    <x-page-star>
        {{__('Hizmat korsatish')}}
    </x-page-star>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Bizning xizmatlar')}}</h6>
                    <h1 class="mb-4 section-title">{{__('Siz uchun ajoyib tozalash xizmatlari')}}</h1>
                    <p>{{__('Bizning jamoamizga qoshiling')}}</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">{{__('Boshqa xizmatlar')}}</a>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-hotel"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">{{__('Uy tozalash')}}</h5>
                            <img src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-city"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">{{__('Derazalarni tozalash')}}</h5>
                            <img src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-light rounded overflow-hidden pt-4">
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


    <!-- Contact Info Start -->
    <div class="container-fluid py-5 contact-info">
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
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Guvohnoma')}}</h6>
                    <h1 class="section-title mb-5">{{__('Bizning mijozlarimiz nima deyishadi')}}</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                                <div class="ml-3">
                                    <h5>{{__('Mijoz nomi')}}</h5>
                                    <i>{{__('Kasb-hunar')}}</i>
                                </div>
                            </div>
                            <p>{{__('Bizning sahifalarimiz korib bahramand boling')}}</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                                <div class="ml-3">
                                    <h5>{{__('Mijoz nomi')}}</h5>
                                    <i>{{__('Kasb-hunar')}}</i>
                                </div>
                            </div>
                            <p>{{__('Bizning sahifalarimiz korib bahramand boling')}}</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                                <div class="ml-3">
                                    <h5>{{__('Mijoz nomi')}}</h5>
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
</x-layotus.main>