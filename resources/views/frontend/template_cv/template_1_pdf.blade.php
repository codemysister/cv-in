<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
    <style>
       body{
        
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
       
       }

       .deskripsi, .pengalaman{
        text-align: justify;
       }
    </style>
</head>
  <body>
    <div class="container" id="canvas">
      
      <section class="data-pribadi">
        <div class="row">
            <div class="col-3 ">
                
                <img src="{{empty($foto) ? asset('frontend/images/irene.jpg') :  $foto->temporaryUrl() }}" alt="" class="rounded-circle" width="80%" height="50%">
            </div>
            <div class="col-9 ">
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
            <div class="col-9 pengalaman" >
               <h5>Pengalaman</h5>
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

<div id="out_image">

</div>
    
 
     
   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
    </script>
  </body>
</html>