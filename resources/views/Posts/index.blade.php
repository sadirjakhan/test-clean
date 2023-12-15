<x-layotus.main>
    <x-slot:title>
        Blog
    </x-slot:title>

    <!-- Page Header Start -->

    <x-page-star>
        {{__('Blok')}}
    </x-page-star>

    <!-- Page Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Eng songgi blog')}}</h6>
                    <h1 class="section-title mb-3">{{__('Oxirgi xabar')}}</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">{{__('Bizning sahifalarimiz korib bahramand boling')}}</h4>
                </div>
            </div>




            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100"src="https://trashbox.ru/ifiles/666648_39cb34_wallpaper_51/standartnye-oboi-iz-vseh-versij-android-84.jpg"
                                alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">{{__('Yanvar')}}</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            @foreach ($post->tags as $tak)
                                <a class="text-secondary text-uppercase font-weight-medium"
                                    href="">{{ $tak->name }}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach
                        </div>
                        @auth
                            <div class="d-flex mb-2">
                                <a class="text-danger text-uppercase font-weight-medium"
                                    href="">{{ $post->category->name }}</a>




                            </div>


                                
                                    
                                @canany(['update',  'delete'], $post)
                                <div class="row mb-4">
                                    <a class="btn btn-sm btn-outline-primary"
                                        href="{{ route('posts.edit', ['post' => $post->id]) }}">{{__('Togirlash')}}</a>
                                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST"
                                        onsubmit="return confirm ('Вы действительно хотите удалить?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" href=>
                                         {{__('  Ochirish')}}
                                        </button>

                                    </form>
                                </div>
                            @endcanany
                        @endauth



                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{( $post->short_content) }}</p>
                        <a class="btn btn-sm btn-primary py-2"
                            href="{{ route('posts.show', ['post' => $post->id]) }}">{{__('Oqish')}}</a>
                    </div>
                @endforeach
                {{-- {{ $posts->links() }}  --}}
            </div>
        </div>
    </div>
    <!-- Blog End -->

</x-layotus.main>
