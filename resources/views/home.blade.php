@extends('layout.app')
@section('content')

    <style>
        header.masthead{
            padding-top: 10rem;
            background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("assets/img/bg1.svg");
            background-position: center;
            background-attachment: scroll;
            background-size: 100%;
            height:100%
        }
        .word{
            
            background:grey
            background-size:100%

            
        }
    </style>
    <body>
        <header class="masthead">
            <div class="container px-4 px-lg-1">
                <div class="row gx-4 gx-lg-1 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                       <img src="assets/img/logo.svg" alt="">
                        <hr class="divider" />
                    </div>
                    <div class="word col-lg-8 align-self-baseline">
                        <h2 class="text-white-75 mb-4" style="font-size:1.15rem;">Selamat datang di website sneakers local brand</h2>
                        <h2 class="mb-4" style="color:#FF0101;font-size:1.15rem;">Apa itu sneakers ?</h2>
                        <h2 class="mb-4 text-white-75 " style="font-size:1.15rem;">Sepatu sneakers adalah sepatu yang sebenarnya dirancang untuk olahraga. Seiring 
                            berkembangnya zaman, kini sneakers  juga sebagai sepatu yang bisa 
                            digunakan sehari-hari sebagai pelengkap fashion. </h2>
                        <h2 class="mb-4" style="color:#FF0101;font-size:1.15rem;">Sejak kapan sneakers dikenal ?</h2>
                        <h2 class="text-white-75 mb-4" style="font-size:1.15rem;">Sneakers mulai dikenal sejak akhir abad ke-18. Ketika itu orang-orang 
                            memakai sepatu bersol karet yang disebut Plimsolls, tetapi sepatu ini dirasakan sangat 
                            kasar untuk digunakan sebagai alas kaki.  Kemudian sekitar tahun 1892, 
                            U.S. Rubber Company datang dengan sepatu karet yang lebih nyaman dengan atasan kanvas, 
                            yang kemudian disebut Sneakers.  Di tahun 1917, sepatu Sneakers ini mulai diproduksi 
                            secara masal dan terus berkembang hingga saat ini.</h2>
                            <a class="my-4 btn btn-primary btn-xl" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </header>
    </body>
@endsection