<div class="form-cv">
    @php
    $template_id = Session::get('template_id');
    @endphp
    <div class="row">
        
        
        <div class="col-md-6 pt-5 " >
            
            <div class="card card-data">
                <div class="card-header">
                    Data diri
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="fieldlabels">Upload Your Photo:</label>
                            <input type="file" class="form-control" name="foto" accept="image/*" wire:model="foto" value="{{ old('foto') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="fieldlabels">Nama: *</label>
                            <input type="text" class="form-control" maxlength="50" wire:model.debounce.150ms="nama" name="nama" value="{{ old('nama') }}" />
                        </div>
                    </div>
                    
                    <div class="row pt-2">
                        <div class="col">
                            <label class="fieldlabels">Deskripsi: *</label>
                            <textarea class="form-control" wire:model.debounce.150ms="deskripsi" id="deskripsi" cols="30" rows="5" maxlength="200" name="deskripsi" placeholder="" value="{{ old('deskripsi') }}"></textarea>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <label class="fieldlabels">Alamat: *</label>
                            <input type="text" class="form-control" maxlength="100" wire:model.debounce.150ms="alamat" name="alamat" value="{{ old('alamat') }}" />
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-4">
                            <label class="fieldlabels">Email: *</label>
                            <input type="email" class="form-control" maxlength="50" wire:model.debounce.150ms="email" name="email" value="{{ old('email') }}"/>
                        </div>
                        <div class="col-sm-4">
                            <label class="fieldlabels">Nomor Handphone: *</label>
                            <input type="text" class="form-control" wire:model.debounce.150ms="nomor_telp" name="nomor_telp"  value="{{ old('nomor_telp') }}" />
                        </div>
                        
                        @if($template->col_website)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Website *</label>
                            <input type="text" class="form-control" maxlength="50" wire:model.debounce.150ms="website" name="website" value="{{ old('website') }}"/>
                        </div>
                        @endif
                    </div>
                    
                    <div class="row pt-2">
                        
                        @if($template->col_linkedin)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Linked in: *</label>
                            <input type="text" class="form-control" wire:model.debounce.150ms="linkedin" name="linkedin" value="{{ old('linkedin') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_kota)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Kota: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="kota" name="kota" value="{{ old('kota') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_kodepos)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Kode Pos: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="kode_pos" name="kode_pos" value="{{ old('kode_pos') }}"/>
                        </div>
                        @endif
                        
                        @if($template->col_tanggal_lahir)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Tanggal lahir: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="tanggal_lahir" name="tanggal_lahir" id="datepicker" value="{{ old('tanggal_lahir') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_templat_lahir)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Tempat lahir: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_sim)
                        <div class="col-sm-4">
                            <label class="fieldlabels">SIM: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="sim" name="sim" value="{{ old('sim') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_jenis_kelamin)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Jenis Kelamin: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_kebangsaan)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Kebangsaan: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="kebangsaan" name="kebangsaan" value="{{ old('kebangsaan') }}" />
                        </div>
                        @endif
                        
                        @if($template->col_status_pernikahan)
                        <div class="col-sm-4">
                            <label class="fieldlabels">Status Pernikahan: *</label>
                            <input type="text" class="form-control"  wire:model.debounce.150ms="status_pernikahan" name="status_pernikahan" value="{{ old('status_pernikahan') }}" />
                        </div>
                        @endif
                    </div>
                    
                </div>
            </div>
            
            
            <div class="card mt-4 card-data">
                <div class="card-header">
                    Pendidikan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label class="fieldlabels">Nama sekolah: *</label>
                            <input type="text" wire:model.debounce.150ms="sekolah.0" class="form-control" name="sekolah[]" value="{{ old('pendidikan.0') }}" />
                        </div>
                        <div class="col-sm-2 p-2">
                            <label class="fieldlabels">Masuk: *</label>
                            <input type="number" wire:model.debounce.150ms="tahun_masuk_pendidikan.0"  class="form-control " name="tahun_masuk_pendidikan[]" placeholder="tahun" value="{{ old('tahun_masuk_pendidikan.0') }}" />
                        </div>
                        <div class="col-sm-2 p-2">
                            <label class="fieldlabels">Lulus: *</label>
                            <input type="number" wire:model.debounce.150ms="tahun_lulus_pendidikan.0" class="form-control " name="tahun_lulus_pendidikan[]" placeholder="tahun" value="{{ old('tahun_lulus_pendidikan.0') }}" />
                        </div>
                        <div class="col-sm-2 p-2">
                            <br>
                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add('pendidikan',{{$n_input_pendidikan}})">Tambah</button>
                            
                        </div>
                    </div>
                    
                    @foreach($input_pendidikan as $key => $value)
                    
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <input type="text" wire:model.lazy="sekolah.{{$value}}" class="form-control" name="sekolah[]" value='{{ old("sekolah.$value") }}' />
                        </div>
                        <div class="col-sm-2 p-2">
                            
                            <input type="number" wire:model.lazy="tahun_masuk_pendidikan.{{$value}}" class="form-control " name="tahun_masuk_pendidikan[]" value='{{ old("tahun_masuk_pendidikan.$value") }}' />
                        </div>
                        <div class="col-sm-2 p-2">
                            
                            <input type="number" wire:model.lazy="tahun_lulus_pendidikan.{{$value}}" class="form-control " name="tahun_lulus_pendidikan[]" value='{{ old("tahun_lulus_pendidikan.$value") }}' />
                        </div>
                        
                        <div class="col-sm-2 p-2">
                            
                            <button class="btn btn-danger btn-sm" wire:click.prevent="remove('pendidikan',{{$key}})">Reset</button>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="card mt-4 card-data">
                <div class="card-header">
                    Keahlian
                </div>
                <div class="card-body">
                    <div class="row pt-2">
                        <div class="col-sm-10">
                            <label class="fieldlabels">Nama Keahlian: *</label>
                            <input type="text" wire:model.debounce.150ms="nama_keahlian.0" class="form-control" name="nama_keahlian[]" value="{{ old('nama_keahlian.0') }}" />
                        </div>
                        <div class="col-sm-2">
                            <br>
                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add('keahlian',{{$n_input_keahlian}})">Tambah</button>
                        </div>
                    </div>
                    
                    @foreach($input_keahlian as $key => $value)
                    <div class="row pt-2">
                        <div class="col-sm-10">
                            <input type="text" wire:model.lazy="nama_keahlian.{{$value}}" class="form-control" name="nama_keahlian[]" value='{{ old("nama_keahlian.$value") }}'/>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-danger btn-sm" wire:click.prevent="remove('keahlian',{{$key}})">Reset</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> 
            
            <div class="card mt-4 card-data">
                <div class="card-header">
                    Pengalaman
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-sm-6 p-2">
                                    <label class="fieldlabels">Pengalaman Anda: *</label>
                                    <input type="text" wire:model.debounce.150ms="pengalaman.0" class="form-control" name="pengalaman[]" value="{{ old('pengalaman.0') }}"/>
                                </div>
                                <div class="col-sm-2 p-2">
                                    <label class="fieldlabels">Masuk: *</label>
                                    <input type="number" wire:model.debounce.150ms="tahun_masuk_pengalaman.0"  class="form-control " name="tahun_masuk_pengalaman[]" placeholder="tahun" value="{{ old('tahun_masuk_pengalaman.0') }}" />
                                </div>
                                <div class="col-sm-2 p-2">
                                    <label class="fieldlabels">Lulus: *</label>
                                    <input type="number" wire:model.debounce.150ms="tahun_selesai_pengalaman.0" class="form-control " name="tahun_selesai_pengalaman[]" placeholder="tahun" value="{{ old('tahun_selesai_pengalaman.0') }}"/>
                                </div>
                                <div class="col-sm-2 p-2">
                                    <br>
                                    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add('pengalaman',{{$n_input_pengalaman}})">Tambah</button>
                                    
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" wire:model.debounce.150ms="deskripsi_pengalaman.0" id="" cols="10" rows="2" maxlength="200" name="deskripsi_pengalaman[]" placeholder="deskripsi pengalaman" value="{{ old('deskripsi_pengalaman.0') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        
                        @foreach($input_pengalaman as $key => $value)
                        
                        <li class="mt-3">
                            <div class="row">
                                <div class="col-sm-6 p-2">
                                    <label class="fieldlabels">Pengalaman Anda: *</label>
                                    <input type="text" wire:model.lazy="pengalaman.{{$value}}" class="form-control" name="pengalaman[]" value='{{ old("pengalaman.$value") }}'/>
                                </div>
                                <div class="col-sm-2 p-2">
                                    <label class="fieldlabels">Masuk: *</label>
                                    <input type="number" wire:model.lazy="tahun_masuk_pengalaman.{{$value}}"  class="form-control " name="tahun_masuk_pengalaman[]" placeholder="tahun" value='{{ old("tahun_masuk_pengalaman.$value") }}' />
                                </div>
                                <div class="col-sm-2 p-2">
                                    <label class="fieldlabels">Lulus: *</label>
                                    <input type="number" wire:model.lazy="tahun_selesai_pengalaman.{{$value}}" class="form-control " name="tahun_selesai_pengalaman[]" placeholder="tahun" value='{{ old("tahun_selesai_pengalaman.$value") }}'/>
                                </div>
                                <div class="col-sm-2 p-2">
                                    <br>
                                    <button class="btn btn-danger btn-sm" wire:click.prevent="remove('pengalaman',{{$key}})">Reset</button>
                                    
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" wire:model.lazy="deskripsi_pengalaman.{{$value}}" id="deskripsi_pengalaman_{{$value}}" cols="10" rows="2" maxlength="200" name="deskripsi_pengalaman[]" placeholder="deskripsi pengalaman" value='{{ old("deskripsi_pengalaman.$value") }}'></textarea>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="card mt-4 card-data">
                <div class="card-header">
                    Organisasi
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <label class="fieldlabels">Nama organisasi / kepanitiaan: *</label>
                            <input type="text" wire:model.debounce.150ms="organisasi.0" class="form-control" name="organisasi[]" value="{{ old('organisasi.0') }}" />
                        </div>
                        <div class="col-sm-2 p-2">
                            <label class="fieldlabels">Masuk: *</label>
                            <input type="number" wire:model.debounce.150ms="tahun_masuk_organisasi.0"  class="form-control " name="tahun_masuk_organisasi[]" placeholder="tahun" value="{{ old('tahun_masuk_organisasi.0') }}"/>
                        </div>
                        <div class="col-sm-2 p-2">
                            <label class="fieldlabels">Lulus: *</label>
                            <input type="number" wire:model.debounce.150ms="tahun_selesai_organisasi.0" class="form-control " name="tahun_selesai_organisasi[]" placeholder="tahun" value="{{ old('tahun_selesai_organisasi.0') }}"/>
                        </div>
                        <div class="col-sm-2 p-2">
                            <br>
                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add('organisasi',{{$n_input_organisasi}})">Tambah</button>
                            
                        </div>
                    </div>
                    
                    @foreach($input_organisasi as $key => $value)
                    
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            <input type="text" wire:model.lazy="organisasi.{{$value}}" class="form-control" name="organisasi[]" value='{{ old("organisasi.$value") }}' />
                        </div>
                        <div class="col-sm-2 p-2">
                            
                            <input type="number" wire:model.lazy="tahun_masuk_organisasi.{{$value}}" class="form-control " name="tahun_masuk_organisasi[]" value='{{ old("tahun_masuk_organisasi.$value") }}' />
                        </div>
                        <div class="col-sm-2 p-2">
                            
                            <input type="number" wire:model.lazy="tahun_selesai_organisasi.{{$value}}" class="form-control " name="tahun_selesai_organisasi[]" value='{{ old("tahun_selesai_organisasi.$value") }}' />
                        </div>
                        
                        <div class="col-sm-2 p-2">
                            
                            <button class="btn btn-danger btn-sm" wire:click.prevent="remove('organisasi',{{$key}})">Reset</button>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="row mt-3">
                {{-- <button type="submit" style="background-color: #4ee428; font-family: 'Mitr', sans-serif; width: 50%; color: white; margin: 0 auto;" class="btn btn-download" id="download" onclick="generatePdf()">Save & Download</button> --}}
                <!-- Button trigger modal -->
                <button type="button" style="background-color: #4ee428; font-family: 'Mitr', sans-serif; width: 50%; color: white; margin: 0 auto;" class="btn btn-download" data-bs-toggle="modal" data-bs-target="#myModal" onclick="getPaymentChannels()">
                    Sava ke PDF
                </button>
                
            </div>
            
        </div>
        
        <div class="col-md-6 d-none d-md-block" >
            @php
            $path = "frontend.template_cv.template_{$template_id}";
            @endphp
            @include($path)
        </div>
    </div>
    
    <div class="row" id="out_image" hidden>
        <div class="container" style="width: 75%; margin: 0 3%" id="canvas10">
            @php
            $path = "frontend.template_cv.template_{$template_id}_pdf";
            @endphp
            @include($path)
        </div>
    </div>
    
    
    <p id="deva"></p>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pilih Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid ms-2">
                        <div class="row channel">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-payment" onclick="getDetailPayment()">Lanjut</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        
        function getPaymentChannels(){
            $('.channel').html('');
            
            $.ajax({
                url: "{{route('payment.channel')}}", 
                success: function(result){
                    
                    $.each(result, function(e, data){
                        $('.channel').append(
                        `<div class='col-sm-4 mb-3 p-1'>
                            <div>
                                <input class="form-check-input" type="radio" name='channel' id='input_channel' value='${data.code}'>
                                <img width='40%' height='40%'src='${data.icon_url}'>
                            </div>
                            
                        </div>`
                        );
                        
                        $('#myModal').show();
                        $('.channel').show();
                    });
                },
                error:function(err){
                    console.log(err);
                }
            });
        }
        
        // function callbackPayment(ref, amount, status){
            //     $('.channel').html('');
            
            //     $.ajax({
                //         url: "{{route('callback')}}",
                //         data: {reference : ref, total_amount : amount, status : status},
                //         headers: {"Content-Type": "application/json", "HTTP_X_CALLBACK_SIGNATURE" : "3db1cd2d553c37a14487eff18aa61892b3dd0c75407342b26740d13afb1b4bd6", "HTTP_X_CALLBACK_EVENT" : "payment_status"},
                //         type:"POST", 
                //         success: function(result){
                    //             console.log(result);
                    //             if(result.success){
                        //                 $('.channel').append(`
                        //                 <div class='col p-1'>
                            //                     <h1 style="color:green;">Pembayaran Berhasil</h1>
                            //                 </div>
                            //             `);
                            //             }
                            
                            
                            //         },
                            //         error:function(err){
                                //             console.log(err);
                                //         }
                                //     });
                                // }
                                
                                
                                
                                
                                function getDetailPayment(){
                                    let channel = $("input[name='channel']:checked").val();
                                    let nama = $("input[name='nama']").val();
                                    let email = $("input[name='email']").val();
                                    let alamat = $("input[name='alamat']").val();
                                    let nomor_telp = $("input[name='nomor_telp']").val();
                                    let kota = $("input[name='kota']").val();
                                    let kode_pos = $("input[name='kode_pos']").val();
                                    let tanggal_lahir = $("input[name='tanggal_lahir']").val();
                                    let tempat_lahir = $("input[name='tempat_lahir']").val();
                                    let sim = $("input[name='sim']").val();
                                    let jenis_kelamin = $("input[name='jenis_kelamin']").val();
                                    let kebangsaan = $("input[name='kebangsaan']").val();
                                    let status_pernikahan = $("input[name='status_pernikahan']").val();
                                    let status_pendidikan = $("input[name='status_pendidikan']").val();
                                    let linkedin = $("input[name='linkedin']").val();
                                    let deskripsi=$(`textarea#deskripsi`).val();
                                    let deskripsi_pengalaman=$(`textarea[name='deskripsi_pengalaman[]']`).map(function(){return $(this).val();}).get();
                                    let website = $("input[name='website']").val();
                                    let nama_keahlian = $("input[name='nama_keahlian[]']").map(function(){return $(this).val();}).get();
                                    let pengalaman = $("input[name='pengalaman[]']").map(function(){return $(this).val();}).get();
                                    let tahun_masuk_pengalaman = $("input[name='tahun_masuk_pengalaman[]']").map(function(){return $(this).val();}).get();
                                    let tahun_selesai_pengalaman = $("input[name='tahun_selesai_pengalaman[]']").map(function(){return $(this).val();}).get();
                                    let organisasi = $("input[name='organisasi[]']").map(function(){return $(this).val();}).get();
                                    let tahun_masuk_organisasi = $("input[name='tahun_masuk_organisasi[]']").map(function(){return $(this).val();}).get();
                                    let tahun_selesai_organisasi = $("input[name='tahun_selesai_organisasi[]']").map(function(){return $(this).val();}).get();
                                    let sekolah = $("input[name='sekolah[]']").map(function(){return $(this).val();}).get();
                                    let tahun_masuk_pendidikan = $("input[name='tahun_masuk_pendidikan[]']").map(function(){return $(this).val();}).get();
                                    let tahun_lulus_pendidikan = $("input[name='tahun_lulus_pendidikan[]']").map(function(){return $(this).val();}).get();
                                    
                                    let pendidikans = [];
                                    let pengalamans = [];
                                    let organisasis = [];
                                    
                                    
                                    for(i=0; i < sekolah.length; i++){
                                        let temp = {sekolah : sekolah[i], tahun_masuk : tahun_masuk_pendidikan[i], tahun_lulus : tahun_lulus_pendidikan[i]};
                                        pendidikans[i] = temp;
                                    }
                                    
                                    for(i=0; i < pengalaman.length; i++){
                                        let temp = {pengalaman : pengalaman[i],deskripsi : deskripsi_pengalaman[i], tahun_masuk : tahun_masuk_pengalaman[i], tahun_selesai : tahun_selesai_pengalaman[i]};
                                        pengalamans[i]= temp;
                                    }
                                    
                                    for(i=0; i < organisasi.length; i++){
                                        let temp = {nama_organisasi : organisasi[i], tahun_masuk : tahun_masuk_organisasi[i], tahun_selesai : tahun_selesai_organisasi[i]};
                                        organisasis[i]= temp;
                                    }
                                    
                                    $('.channel').html('');
                                    
                                    $.ajax({
                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                        url: "{{route('payment.detail')}}",
                                        type:"POST",
                                        data: { channel : channel,
                                            nama : nama,
                                            email : email,
                                            nomor_telp : nomor_telp,
                                            alamat : alamat,
                                            kota : kota,
                                            kode_pos : kode_pos,
                                            tanggal_lahir : tanggal_lahir,
                                            tempat_lahir : tempat_lahir,
                                            sim : sim,
                                            jenis_kelamin : jenis_kelamin,
                                            kebangsaan : kebangsaan,
                                            status_pernikahan : status_pernikahan,
                                            linkedin : linkedin,
                                            website : website,
                                            deskripsi : deskripsi,
                                            pendidikan : pendidikans,
                                            nama_keahlian : nama_keahlian,
                                            pengalaman : pengalamans,
                                            organisasi : organisasis
                                        },
                                        success: function(result){
                                            var tomorrow = new Date();
                                            tomorrow.setDate(tomorrow.getDate()+1);
                                            moment.locale('id');
                                            console.log(result);
                                            $.each(result.instructions, function(e, data){
                                                console.log(data);
                                            });
                                            $('.channel').append(
                                            `<div class='col-6 p-1'>
                                                <p style="text-muted">${(result.reference)}</p>
                                                <h1 style="color:green;">Rp.${(result.amount)}</h1>
                                                <p>Nama Customer : ${result.customer_name}</p>
                                                <p>Email : ${result.customer_email}</p>
                                                <p>Status : ${result.status}</p>
                                                <p>Batas Pembayaran : ${moment(tomorrow).format("dddd, MMMM Do YYYY, h:mm:ss a")}</p>
                                            </div>
                                            <div class='col-6 p-1 '>
                                                <div class="accordion instruksi" id="accordionExample">
                                                    
                                                </div>
                                            </div>
                                            `
                                            );
                                            
                                            $.each(result.instructions, function(e, data){
                                                $('.instruksi').append(
                                                `
                                                <div class="accordion-item ">
                                                    <h2 class="accordion-header" id="heading${e}">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${e}" aria-expanded="false" aria-controls="collapse${e}">
                                                            ${data.title}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse${e}" class="accordion-collapse collapse" aria-labelledby="heading${e}" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <ol class="list-group list-group-numbered instruksi${e}">
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>  
                                                
                                                `);
                                                
                                                
                                                $.each(data.steps, function(i, instruksi){
                                                    $(`.instruksi${e}`).append(`
                                                    <li class="list-group-item">${instruksi}</li>
                                                    `);
                                                });
                                                
                                                
                                            });
                                            $('#btn-payment').attr('onclick', '');
                                            $('#btn-payment').html('Download CV');
                                            $('#btn-payment').on('click', function(){
                                                generatePdf();
                                            });
                                        },
                                        error: function(err){
                                            console.log(err);
                                        }
                                    });
                                }
                                
                                function generatePdf(){
                                    
                                    $("#out_image").removeAttr("hidden"); 
                                    var imgData;
                                    
                                    
                                    html2canvas($('#out_image')[0]).then((canvas) => {
                                        
                                        imgData = canvas.toDataURL('image/png');
                                        
                                        // $("#out_image").append(canvas);
                                        var doc = new jsPDF('p', 'mm', 'a4');
                                        
                                        
                                        doc.addImage(imgData, 'PNG', 0, 5, 260, 180);
                                        
                                        
                                        doc.save('download.pdf');
                                        
                                        $("#out_image").hide(); 
                                    }
                                    )};
                                </script>
                            </div>
                            
                            
                            