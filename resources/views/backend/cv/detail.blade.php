@extends('backend.index')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Profile</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Extra</li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- Main content -->
<section class="content">

  <div class="row">
      <div class="col-12 col-lg-5 col-xl-4">
          
          <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
              <div class="flexbox px-20 pt-20">
                <label class="toggler toggler-danger text-white">
                  <input type="checkbox">
                  <i class="fa fa-heart"></i>
                </label>
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                  </div>
                </div>
              </div>

              <div class="box-body text-center pb-50">
                <a href="#">
                  <img class="" src="{{asset($cv->foto)}}" alt="">
                </a>
                <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$cv->nama_depan}} {{$cv->nama_belakang}}</a></h4>
                <span><i class="fa fa-map-marker w-20"></i>{{$cv->kota}}</span>
              </div>

              {{-- <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
                <li>
                    @if ($cv->status_bayar == 0)
                    <span class="opacity-60">Belum bayar</span>
                    @endif
                </li>
                
              </ul> --}}
            </div>				

          <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">            
              <div class="row">
                <div class="col-12">
                    <div>
                        <p>Email :<span class="text-gray pl-10">{{$cv->email}}</span> </p>
                        <p>Nomor :<span class="text-gray pl-10">{{$cv->nomor_telp}}</span></p>
                        <p>Alamat :<span class="text-gray pl-10">{{$cv->alamat}}</span></p>
                        <p>Tanggal lahir :<span class="text-gray pl-10">{{$cv->tanggal_lahir}}</span></p>
                        <p>Tempat lahir :<span class="text-gray pl-10">{{$cv->tempat_lahir}}</span></p>
                        <p>Jenis Kelamin :<span class="text-gray pl-10">{{$cv->jenis_kelamin}}</span></p>
                        <p>Kota :<span class="text-gray pl-10">{{$cv->kota}}</span></p>
                        <p>Kode Pos :<span class="text-gray pl-10">{{$cv->kode_pos}}</span></p>
                        <p>SIM :<span class="text-gray pl-10">{{$cv->sim}}</span></p>
                        <p>Kebangsaan :<span class="text-gray pl-10">{{$cv->kebangsaan}}</span></p>
                        <p>Status Pernikahan :<span class="text-gray pl-10">{{$cv->status_pernikahan}}</span></p>
                        <p>Linkedin :<span class="text-gray pl-10">{{$cv->linkedin}}</span></p>
                        <p>Website :<span class="text-gray pl-10">{{$cv->website}}</span></p>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- /.box-body -->
          </div>

         

      </div>
      <div class="col-12 col-lg-7 col-xl-8">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Single column</h4>
            </div>
            <div class="box-body">
                <div class="timeline timeline-single-column timeline-single-full-column">
                    <div class="timeline-item timeline-item-arrow-sm">
                        <div class="timeline-point timeline-point-primary">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="timeline-event">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Pendidikan</h5>
                                </div>
                                <div class="panel-body">
                                    
                                    @foreach ($cv->pendidikans as $pendidikan)
                                    <ul>
                                        @php
                                            $tanggal_mulai = Carbon\Carbon::create($pendidikan->tanggal_mulai);
                                            $tanggal_akhir = Carbon\Carbon::create($pendidikan->tanggal_selesai);  
                                        @endphp    
                                        <li class="mb-4">
                                            <span style="font-weight: 900">{{ $pendidikan->sekolah }}</span> ({{ $tanggal_mulai->format('Y') }} - {{$tanggal_akhir->format('Y')}} )
                                             <hr>

                                            {{ $pendidikan->deskripsi }}
                                        </li>
                                    </ul>    
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item-arrow-sm">
                        <div class="timeline-point timeline-point-primary">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <div class="timeline-event">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Pengalaman</h5>
                                </div>
                                <div class="panel-body">
                                    
                                    @foreach ($cv->pengalamans as $pengalaman)
                                    <ul>
                                        @php
                                            $tanggal_mulai = Carbon\Carbon::create($pengalaman->tanggal_mulai);
                                            $tanggal_akhir = Carbon\Carbon::create($pengalaman->tanggal_selesai);  
                                        @endphp    
                                        <li class="mb-4">
                                            <span style="font-weight: 900">{{ $pengalaman->nama }}</span> ({{ $tanggal_mulai->format('Y') }} - {{$tanggal_akhir->format('Y')}} )
                                             <hr>

                                            {{ $pengalaman->deskripsi }}
                                        </li>
                                    </ul>    
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item-arrow-sm">
                        <div class="timeline-point timeline-point-primary">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <div class="timeline-event">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Keahlian</h5>
                                </div>
                                <div class="panel-body">
                                    
                                    @foreach ($cv->keahlians as $keahlian)
                                    <ul>    
                                        <li class="mb-4">
                                            <span style="font-weight: 900">{{ $keahlian->keahlian }}</span> ({{ $keahlian->lama }} tahun / 
                                            {{ $keahlian->level }} )
                                        </li>
                                    </ul>    
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item-arrow-sm">
                        <div class="timeline-point timeline-point-primary">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <div class="timeline-event">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Hobi</h5>
                                </div>
                                <div class="panel-body">
                                    
                                    @foreach ($cv->hobis as $hobi)
                                    <ul>    
                                        <li class="mb-4">
                                            <span style="font-weight: 900">{{ $hobi->hobi }}</span> 
                                        </li>
                                    </ul>    
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>                
        </div>
            
            <!-- /.box-body -->
          </div>
    </div>			  
  </div>
  <!-- /.row -->

</section>
@endsection