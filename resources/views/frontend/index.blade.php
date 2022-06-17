@extends('frontend.master')
@section('content')

<section class="jumbotron">
    <div class="container">

            <div class="row mx-auto">
                <div class="col col-kiri">
                    <h1 class="">Buat CV Anda dengan praktis dan menarik</h1>
                    <p class="mt-2">Pilih template menarik sesuai keinginan Anda</p>
                    <button class="button-cv mt-2">Buat CV</button>
                </div>
                <div class="col">
                    <video width="600" height="600" autoplay muted loop>
                        <source src="{{asset('images/Resume.mp4')}}" type="video/mp4">
                      </video>
                </div>
            </div>
    </div>
</section>

<section class="testimonial">
    <div class="container">

            <div class="row">
                <div class="col ">
                
                </div>
                
            </div>
    </div>
</section>
@endsection