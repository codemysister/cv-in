@extends('frontend.master')
@section('content')

<section class="jumbotron">
    <div class="container">
        
        <div class="row mx-auto" >
            <div class="col col-kiri" data-aos="fade-right">
                <h1 class="">Buat CV Anda dengan praktis dan menarik</h1>
                <p class="mt-2">Pilih template menarik sesuai keinginan Anda</p>
                <button class="button-cv mt-2"><a style="text-decoration: none; color:white;" href="{{route('template.pilih')}}">Buat CV</a></button>
            </div>
            <div class="col" data-aos="fade-left">
                <video width="600" height="600" autoplay muted loop>
                    <source src="{{asset('images/Resume.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    
    <section id="layanan" class="testimonial" data-aos="fade-up">
        <div class="container">
            
            <div class="row text-center mt-5">
                <h2 class="heading-testimonial">Keunggulan Layanan Kami</h2>
                <hr style=" border: 2px solid rgb(185, 123, 8);
                border-radius: 5px;">
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card card-testimonial" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title">Praktis</h5>
                            <p class="card-text ">Pembuatan CV yang mudah dan cepat, pilih template CV yang Anda inginkan, isi data CV, dan dapatkan CV Anda</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-testimonial" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title">Membuka Peluang Bagi Anda</h5>
                            <p class="card-text">Dengan CV yang professional itu akan menjadi modal bagi Anda untuk membuka peluang sebesar-besarnya agar ketika Anda melamar pekerjaan</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-testimonial" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title">Template CV Menarik</h5>
                            <p class="card-text">Kami menyediakan banyak template CV yang sudah siap pakai dan tentunya menarik, pilih template CV sesuai keinginan Anda!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="tips" class="tips mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <h2 class="heading-tips">Tips & Trik Membuat CV</h2>
                <hr style=" border: 2px solid rgb(185, 123, 8);
                border-radius: 5px;">
            </div>
            <div class="row">
                
                <div class="col-sm-7 ">
                    <div class="row">
                        <div class="col-6">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/omEw-hQHnec">
                            </iframe>
                        </div>
                        <div class="col-6">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7gJig3ODgjA">
                            </iframe>
                        </div>
                        
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/aPQj4cLdu9U">
                            </iframe>
                        </div>
                        <div class="col-6">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/eJb_qtm8P20">
                            </iframe>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/q0_L4dZSwSo">
                    </iframe>
                </div>
                
                
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row p-5">
                <div class="col-md-4">
                    <h5 class="heading-footer">Layanan</h5>
                    <p>Buat CV</p>
                    <p>Request Template CV</p>
                    <p>Cek Skor CV</p>
                </div>
                <div class="col-md-4">
                    <h5 class="heading-footer">Dukungan</h5>
                    <p>Tentang Kami</p>
                    <p>Kontak</p>
                    <p>FAQ</p>
                </div>
                <div class="col-md-4">
                    <h5 class="heading-footer">CV-in</h5>
                    <p>Pernyataan Privasi dan Cookie</p>
                    <p>Syarat dan Ketentuan</p>
                    <p>Biaya</p>
                </div>
            </div>
        </div>

        <div class="row text-mute text-center">
            <p>2022 © CV-in</p>
        </div>
    </footer>
    @endsection