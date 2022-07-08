<div class="form-cv">
    @php
        $template_id = Session::get('template_id');
    @endphp
	<div class="row">
        
            
            <div class="col-md-6 pt-5 " >
                <form action="{{route('download.cv')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                <textarea class="form-control" wire:model.debounce.150ms="deskripsi" id="" cols="30" rows="5" maxlength="200" name="deskripsi" placeholder="" value="{{ old('deskripsi') }}"></textarea>
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
                            <input type="text" wire:model.debounce.150ms="nama_keahlian.0" class="form-control" name="nama_keahlian" value="{{ old('nama_keahlian.0') }}" />
                        </div>
                        <div class="col-sm-2">
                            <br>
                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add('keahlian',{{$n_input_keahlian}})">Tambah</button>
                        </div>
                    </div>
                    
                    @foreach($input_keahlian as $key => $value)
                    <div class="row pt-2">
                        <div class="col-sm-10">
                            <input type="text" wire:model.lazy="nama_keahlian.{{$value}}" class="form-control" name="nama_keahlian" value='{{ old("nama_keahlian.$value") }}'/>
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
                                    <textarea class="form-control" wire:model.lazy="deskripsi_pengalaman.{{$value}}" id="" cols="10" rows="2" maxlength="200" name="deskripsi_pengalaman[]" placeholder="deskripsi pengalaman" value='{{ old("deskripsi_pengalaman.$value") }}'></textarea>
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
                    <button type="submit" class="btn btn-download">Save & Download</button>
                </div>
            </form>           
            </div>
       
        <div class="col-md-6 d-none d-md-block">
            @php
                $path = "frontend.template_cv.template_{$template_id}";
            @endphp
            @include($path)
        </div>
	</div>
</div>


