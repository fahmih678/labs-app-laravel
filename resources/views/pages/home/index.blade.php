@extends('layouts.frontpage')
@section('title', 'Homepage')

@section('content')
    <div class="container">
        <!-- header -->
        <div class="homepage-layout">
            <div class="row">
                <div class="col-md-6 homepage-des-lay">
                    <div class="homepage-des">
                        <h2 class="homepage-title">
                            Peminjaman Ruang
                        </h2>
                        <p class="homepage-text">
                            Selamat Datang di website peminjaman ruang Universitas Sebelas Maret. Pinjam ruang dengan mudah
                            dan cepat!
                        </p>
                        <div class="homepage-btn-lay">
                            <a href="#" class="homepage-btn">Pinjam Ruang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 homepage-img-lay">
                    <div class="homepage-img">
                        <img src="{{ asset('img/homepage-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header -->

        <!-- Schedule -->
        <div class="schedule-page">
            <div class="schedule-top">
                <h1 class="schedule-title">Laboratory Usage Schedule</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="bar-layout">
                            <div class="drop-left">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle schedule-drop" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Friday, May,20. 2022
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-right">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle schedule-drop drop-stats" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Used
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Used</a></li>
                                        <li><a class="dropdown-item" href="#">Available</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4  ms-auto">
                        <div class="input-group">
                            <input class="form-control border-end-0 border rounded-pill" type="search" value="search"
                                id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"
                                    type="button">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="schedule-border">
            </div>
            <div class="schedule-content">
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-content-one">
                            <p class="schedule-content-title">Software Engineering</p>
                            <p class="schedule-content-status">Tersedia</p>
                            <p class="schedule-content-time-open">07.00</p>
                            <p class="schedule-content-to">To</p>
                            <p class="schedule-content-time-close">21.00</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-content-one">
                            <p class="schedule-content-title">Multimedia Studio</p>
                            <p class="schedule-content-status edit-status-2">Dipakai</p>
                            <p class="schedule-content-time-open">07.00</p>
                            <p class="schedule-content-to">To</p>
                            <p class="schedule-content-time-close">21.00</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-content-one">
                            <p class="schedule-content-title">Computer Network</p>
                            <p class="schedule-content-status edit-status-3">Tersedia</p>
                            <p class="schedule-content-time-open">07.00</p>
                            <p class="schedule-content-to">To</p>
                            <p class="schedule-content-time-close">21.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Schedule -->

        <!-- Room -->
        <div class="room-page">
            <h1 class="room-title-top">Daftar Ruangan</h1>
            <div class="row d-flex justify-content-between">
                @foreach ($labs as $lab)
                    <div class="col-md-4" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700"
                        data-aos-anchor-placement="top-bottom">
                        <div class="room-card">
                            <div class="card room-card-lay" style="width: 15rem;">
                                <p class="room-status">Tersedia</p>
                                <h6 class="room-title">{{ $lab->name }}</h6>
                                <h6 class="room-open">Buka 08.00 - 15.00</h6>
                                <img src="/img/room.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">{{ $lab->description }}</p>
                                    <h6><a href="#" class="room-book" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Details</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Detail modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Multimedia Studio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/homepage-img.jpg') }}" alt="" class="modal-img">
                                </div>
                                <div class="col-md-8">
                                    <p class="modal-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
                                        recusandae possimus minima dolorum mollitia, quisquam alias, harum ipsam magni,
                                        commodi sed eaque ea nesciunt temporibus aperiam quam asperiores illo consectetur
                                        vitae laboriosam repellendus rem qui quo. Consectetur aliquid voluptates deserunt
                                        autem ipsam quos ipsum enim quaerat excepturi. Soluta, consectetur nesciunt
                                        reiciendis nobis debitis atque sint ratione quam quos sit quisquam numquam
                                        praesentium? Porro pariatur voluptatibus officia unde blanditiis id autem!</p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="modal-facility mb-4">Facility</h6>
                                    <div class="col-md-3">
                                        <img src="/img/homepage-img.jpg" alt="" class="modal-img">
                                        <h6 class="text-center mt-2">10 Computers</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="/img/homepage-img.jpg" alt="" class="modal-img">
                                        <h6 class="text-center mt-2">5 Camera</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="/img/homepage-img.jpg" alt="" class="modal-img">
                                        <h6 class="text-center mt-2">2 Tripod</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="/img/homepage-img.jpg" alt="" class="modal-img">
                                        <h6 class="text-center mt-2">1 LCD</h6>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Room -->

        <!-- About -->
        <div class="about-page">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up-right" data-aos-duration="1300">
                    <h1 class="about-title">About Us</h1>
                    <hr class="about-border">
                </div>
                <div class="col-md-7" data-aos="fade-up-left" data-aos-duration="1300">
                    <h5 class="about-content-title">Website about labolatorium reservation</h5>
                    <p class="about-content-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis
                        consequuntur maiores sit commodi ipsam dolorem possimus, itaque expedita tenetur, ullam quam hic
                        facere, fugiat tempore repellat. Repudiandae beatae quia quos in iusto obcaecati voluptatum ipsam
                        quidem, commodi exercitationem ab tempore excepturi, quod doloremque alias rerum vel perferendis,
                        ipsum aliquid ut praesentium placeat quibusdam doloribus odio. Rem sint repudiandae consectetur
                        ducimus dolorem dicta quos possimus quis, quae amet maxime sequi ipsa!</p>
                    <p class="social-title">Need help? Contact us at</p>
                    <div class="social-email">
                        <a href="">
                            <img src="img/email.png" alt="">
                        </a>
                        <p class="social-email-des">pinjamruangptik@gmail.com</p>
                    </div>
                    <div class="social-wa">
                        <a href="">
                            <img src="img/whatsapp.png" alt="">
                        </a>
                        <p class="social-wa-des">081345632456</p>
                    </div>
                    <div class="social-insta">
                        <a href="">
                            <img src="img/insta.png" alt="">
                        </a>
                        <p class="social-insta-des">@pinjamruangptik</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of About -->
    </div>

    <!-- footer -->
    <div class="footer-page container-fluid">
        <div class="footer-top-lay">
            <ul class="footer-top">
                <li><a href=""><img src="/img/facebook.png" alt="" width="30"></a></li>
                <li><a href=""><img src="/img/twitter.png" alt="" width="30"></a></li>
                <li><a href=""><img src="/img/instagram.png" alt="" width="30"></a></li>
                <li><a href=""><img src="/img/youtube.png" alt="" width="30"></a></li>
                <li><a href=""><img src="/img/github.png" alt="" width="30"></a></li>
            </ul>
        </div>
        <div class="footer-bottom-lay">
            <p class="footer-bottom-des text-center">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
                consectetur facilis totam error? Sapiente, sequi aliquam culpa cupiditate facilis impedit a et similique non
                ad aut omnis velit quaerat laboriosam."</p>
        </div>
    </div>
    <!-- End of Footer -->
@endsection
