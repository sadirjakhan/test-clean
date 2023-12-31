<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Sadrijahon sdfgh'}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="/preconnect" href="https://fonts.gstatic.com">
    <link href="/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
{{-- @vite('resources/css/app.css', 'resources/js/app.js') --}}


</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">{{__('Tozalash')}}</h1>
                </a>
            </div>

            

            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small class="m-0 display-4 text-primary"></small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small> </small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    <x-navbar> </x-navbar>
            </div>
        </div>
    </div>
    <!-- Header End -->


    {{ $slot }}




       <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">{{__('Tozalash')}}</h1>
                </a>
                <p>{{__('Bizning tozalash eng sifatli ishlardan bittasi')}}</p>
                <h5 class="font-weight-semi-bold text-white mb-2">{{__('Ish vaqti:')}}</h5>
                <p class="mb-1">
                    {{__('Dushanba - Shanba, 8:00 - 17:00')}}</p>
                <p class="mb-0">
                    {{__('Yakshanba: yopiq')}}</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">
                    {{__('Aloqa qiling')}}</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{__('123 kocha,Nyu-York, AQSh')}}</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>                                                                                                                                                                                                                                                     
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">                           
              
                
              
              
              
                <h4 class="font-weight-semi-bold text-primary mb-4">{{__(' Tez havolalar')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>  {{__('Uy')}}</a>                          
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>{{__('Biz haqimizda')}}</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>  {{__('Bizning xizmatlar')}}</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>  {{__('Bizning loyihalarimiz')}}</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>  {{__('Biz bilan boglanish')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">{{__('Axborot byulleteni')}}</h4>
                <p>{{__('Biz sizni uyingizga osoishtalik va tinchlik olib kelamiz')}}</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="{{__('Sizning elektron manzilingiz')}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">{{__('Royxatdan otish')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">{{__('Saytingiz nomi')}}</a>{{__('. Barcha huquqlar himoyalangan. tomonidan ishlab chiqilgan')}} <a href="https://htmlcodex.com">{{__('HTML kodeksi')}}</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">{{__('Maxfiylik')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">{{__('Shartlar')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">{{__('Tez-tez soraladigan savollar')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">{{__('Yordam')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->



     <!-- Back to Top -->
     <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/isotope/isotope.pkgd.min.js"></script>
     <script src="lib/lightbox/js/lightbox.min.js"></script>
 
     <!-- Contact Javascript File -->
     <script src="mail/jqBootstrapValidation.min.js"></script>
     <script src="mail/contact.js"></script>
 
     <!-- Template Javascript -->
     <script src="js/main.js"></script>
 </body>
 
 </html>
  
