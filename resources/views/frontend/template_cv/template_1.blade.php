<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
  <body> -->
    <div class="container templates">
        <section class="data-pribadi">
            <div class="row">
                <div class="col-3 ">
        <img src="{{empty($foto) ? asset('frontend/images/irene.jpg') :  $foto->temporaryUrl() }}" alt="" class="rounded-circle" width="100%" height="40%">
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
                    <li>SMPN 9 Purwokerto</li>
                    <li>SMKN 1 Purwokerto</li>
                    <li>Institut Teknologi Telkom Purwokerto</li>
                   </ul>
                   <hr>
                   <h5>Skills</h5>
                   <ul>
                    <li>Google Analytics</li>
                    <li>Facebook Insights</li>
                    <li>Copywriting</li>
                    <li>Communication</li>
                   </ul>
                </div>
                <div class="col-9 pengalaman">
                   <h5>Pengalaman</h5>
                   <ul>
                    <li><b>Social Media Marketing ABC Management (Mar 2017 - Jul 2021)</b>
                    <p>Creating meaningful content for the viewers, raise followers to 50k in 5 months, increase engagement ratings by up to 30% in 2 months</p></li>
                    <li><b>Social Media Marketing XYZ Food Company</b>
                    <p>Responsible for selecting KOL, influencers, and celebrities to be the company's Brand Ambassador, Hold social media campaign to promote healthy eating, Brainstroming with the team for the company's advertisement and social media content</p></li>
                   </ul>
                   <hr>
                   <h5>Organization</h5>
                   <ul>
                    <li><b>Producer of PENTAS PANAS Teater (dec 2010)</b>
                    </li>
                    <li><b>Secretary of Nusa Indah Liliteracy Learning Group (Jul 2010 - Jul 2011)</b>
                    </li>
                   </ul>
                </div>
            </div>
            <hr>
        </section>
    </div>
   
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html> -->