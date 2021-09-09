@extends('layout')

@section('main')
<section id="slide-image" class="container p-0">
    <div id="carouselExampleIndicators" class="carousel slide bg-light" data-bs-ride="carousel"
        style="height: 500px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 500px;">
            <div class="carousel-item active h-100">
                <img src="https://www.99.co/blog/indonesia/wp-content/uploads/2021/03/Cara-Membuat-Keripik-Pisang.jpg"
                    class="h-100 w-100" style="object-fit: cover;" alt="image-1">
            </div>
            <div class="carousel-item h-100">
                <img src="https://bisnisukm.com/uploads/2019/10/ide-bisnis-keripik-pisang-aneka-rasa-untuk-ibu-rumah-tangga.jpg"
                    class="h-100 w-100" style="object-fit: cover;" alt="image-1">
            </div>
            <div class="carousel-item h-100">
                <img src="https://cdn-2.tstatic.net/batam/foto/bank/images/mustika-rasa-keripik-pisang_20180117_214521.jpg"
                    class="h-100 w-100" style="object-fit: cover;" alt="image-1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section id="kawan-peak-sang">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mb-5 mt-5 mb-md-7 mt-md-7">
                <h1 class="fw-semi-bold text-dark">Kawan <span class="text-warning">Peak Sang</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 px-0 text-center">
                <div class="px-0 ">
                    <img class="h-100 w-100" style="object-fit: cover;"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg9P7gJ1p4iCakR4Z5iLLHDx0GMNpa9gswMA&usqp=CAU"
                        alt="...">
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 px-0 text-center">
                <div class="px-0">
                    <img class="h-100 w-100" style="object-fit: cover;"
                        src="https://i.pinimg.com/originals/eb/5b/b2/eb5bb2a98636b7383427411816526792.gif" alt="...">
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 px-0 text-center">
                <div class="px-0">
                    <img class="h-100 w-100" style="object-fit: cover;" src="https://i.gifer.com/YXx.gif" alt="...">
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0 px-0 text-center">
                <div class="px-0">
                    <img class="h-100 w-100" style="object-fit: cover;"
                        src="https://a-static.besthdwallpaper.com/black-coffee-and-banana-in-yellow-background-wallpaper-2560x1440-60586_51.jpg"
                        alt="...">
                </div>
            </div>
        </div>
        <div class="row justify-content-center p-lg-5">
            <div class="col-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <button class="bg-warning border-0" style="border-radius: 50%; height: 125px; width: 125px;">Local Farmer</button>
            </div>
            <div class="col-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <button class="bg-warning border-0" style="border-radius: 50%; height: 125px; width: 125px;">Fast Response</button>
            </div>
            <div class="col-6 col-lg-3 text-center">
                <button class="bg-warning border-0" style="border-radius: 50%; height: 125px; width: 125px;">Delicious Guarantee</button>
            </div>
            <div class="col-6 col-lg-3 text-center">
                <button class="bg-warning border-0" style="border-radius: 50%; height: 125px; width: 125px;">Exclusive Offers</button>
            </div>
        </div>
    </div>
</section>
@endsection