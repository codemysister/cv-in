
    <div class="container templates" >
        <section class="data-pribadi">
            <div class="row">
                <div class="col-3 ">
        <img src="{{empty($foto) ? asset('frontend/images/irene.jpg') :  $foto->temporaryUrl() }}" alt="" class="rounded-circle" width="100%" height="50%">
                </div>
                <div class="col-9">
                    <h3>{{empty($nama) ? 'Irene': $nama}}</h3>
                    <p class="deskripsi">{{empty($deskripsi) ? "A creative and organized professional with 7 + years experience in Social Media Marketing. Experienced at copywriting and proficient at using analytical tools. Have a great interest in the latest social media's best practice and new technology": $deskripsi}}</p>
                    <p>Address : {{empty($alamat) ? 'Cilandak No. 19, South Jakarta': $alamat}}</p>
                    <p>Email  : {{empty($email) ? 'irene@gmail.com': $email}}</p>
                    <p>Number : {{empty($nomor_telp) ? '087717124721': $nomor_telp}}</p>  
                </div>
            </div>
            <hr>
        </section>

        <section class="data-pribadi">
            <div class="row">
                <div class="col-3" >
                   <h5>Education</h5>
                   <ul>
                    
                    @foreach($sekolah as $key => $value)
                    <li class="{{$value != "" ? 'd-blok' : 'd-none'}}">{{$value}} {{$value != "" ? "(".$tahun_masuk_pendidikan[$key]. "-" .$tahun_lulus_pendidikan[$key]. ")" : ""}}  
                    </li>
                    
                    @endforeach
                   </ul>
                   <hr>


                   <h5>Skills</h5>
                   <ul>
                    @foreach($nama_keahlian as $key => $value)
                    <li class="{{$value != "" ? 'd-blok' : 'd-none'}}">{{$value}}</li>
                    @endforeach
                   </ul>
                </div>
                <div class="col-9 pengalaman">
                   <h5>Experience</h5>
                   <ul>
                    @foreach($pengalaman as $key => $value)
                        <li class="{{$value != "" ? 'd-blok' : 'd-none'}}"><b>{{$value}} {{$value != "" ? "(".$tahun_masuk_pengalaman[$key]. "-" .$tahun_selesai_pengalaman[$key]. ")" : ""}}</b>
                        <p>{{$deskripsi_pengalaman[$key]}}</p></li>
                        
                    @endforeach
                    </ul>
                   <hr>
                   <h5>Organization</h5>
                   <ul>
                    @foreach($organisasi as $key => $value)
                    <li class="{{$value != "" ? 'd-blok' : 'd-none'}}"><b>{{$value}} {{$value != "" ? "(".$tahun_masuk_organisasi[$key]. "-" .$tahun_selesai_organisasi[$key]. ")" : ""}}</b>
                    </li>
                    @endforeach
                   </ul>
                </div>
            </div>
            <hr>
        </section>
    </div>
   