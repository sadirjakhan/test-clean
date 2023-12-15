
<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">{{__('Tozalash')}}</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link">{{__("Mening sahifam")}}</a>
            <a href=" {{route('about') }}" class="nav-item nav-link">{{ __('Mening dostlarim')}}</a>
            <a href="{{route('service') }}" class="nav-item nav-link">{{__("Hizmat korsatish")}}</a>
            <a href="{{route('project') }}" class="nav-item nav-link">{{__("Loyha")}}</a>
            <a href="{{route('posts.index') }}" class="nav-item nav-link">{{__('Blok')}}</a>
            <a href="{{route('contact') }}" class="nav-item nav-link">{{__('Aloqa')}}</a>
        </div>

        @foreach ($all_locales as $locale )
 
        <a href="{{ route('locale.change', ['locale' => $locale])}}" class="btn btn-primary mr-3 d-none d-lg-block">


            {{ $locale }}


        </a>  

        @endforeach
        
        @auth
    <div>
        <a href="{{route('notifications.index')}}" class="btn btn-primary mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
              <span class="badge badge-light">{{auth()->user()->unreadNotifications()->count()}}</span>
              <span class="sr-only">Oqilmagan Habarlar</span>
        </a>
    </div>
    <div class="btn btn-primary mr-3 d-none d-lg-block">{{auth()->user()->name}} {{__('Onlayn')}}</div>
          
        <a href="{{route('posts.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">{{__('Yangi post')}}</a>
<form action="{{route('logout')}}" method="POST">
@csrf
<button class="btn btn-primary mr-3 d-none d-lg-block">{{__('Chiqish')}}</button>


</form>

        @else
        <a href="{{route('login')}}" class="btn btn-primary mr-3 d-none d-lg-block">{{__('Tizimga kirish')}}</a>
        @endauth
    </div>
</nav> 