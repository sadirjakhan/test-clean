<x-layotus.main>
    <x-slot:title>
        Xabarnoma
    </x-slot:title>


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h1 class="section-title mb-3">Xabarnoma</h1>
                </div>
            </div>
            @foreach ($notifications as $notification)
                <div class=" border mb-5 p-4 rounded">
                    <div class="position-relative mb-4">
                        {{-- <img class="img-fluid rounded w-100"src="https://trashbox.ru/ifiles/666648_39cb34_wallpaper_51/standartnye-oboi-iz-vseh-versij-android-84.jpg" --}}
                       @if ($notification->read_at == null)
                       <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">New</h4>

                    </div>
                       @endif
                       
                    </div>
                         @auth
                        <div class="d-flex mb-2">
                            <a class="text-danger text-uppercase font-weight-medium"
                                href="">{{ $notification->data['created_at']}}</a>
                        </div>
                     
                        @endauth
            
                    <h5 class="font-weight-medium mb-2">{{ $notification->data['title' ]}}</h5>
                <p class="mb-4">{{ 'Yangi post yaratildi . id:' . $notification->data['id'] }}</p>
                    <a class="btn btn-sm btn-primary py-2"
                        href="{{ route ('notifications.read', ['notification' => $notification->id])}}">Oqish</a>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
    </div>
    <!-- Blog End -->

</x-layotus.main>
