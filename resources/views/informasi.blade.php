@extends('layout.app1')
@section('content')

    <style>
        header.masthead{
            padding-top: 10rem;
            background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("assets/img/bg2.svg");
            background-position: center;
            background-attachment: scroll;
            background-size: 100%;
            height:100%
        }
        .word{
            
            background:#C4C4C4
            background-size:100%

            
        }
    </style>
    <body>
        <header class="masthead mb-2">
          <div class="lesson-wrapper">
            <div class="container">
              <div class="row mb-2">
                <div class="col mb-2">
                  <h2 style="color: white">Beberapa sneakers local brand yang cukup terkenal saat ini.</h2>
                </div>
              </div>
              <div class="card-body" style="background:#C4C4C4;">
                <div class="row">
                  <div class="col-lg-3">
                    <img style="margin-left:3%;margin-top:3%;margin-bottom:3%;"src="assets/img/model1.svg">
                  </div>
                  <div class="col-lg-8 offset-lg-1">
                    <h2>Compass</h2>
                    <p>Sepatu Compass merupakan brand asal Bandung yang awalnya Sepatu 
                      Compass ini merupakan brand Gazelle Sport yang berdiri pada tahun 1988 oleh 
                      Alm. Kahar Setiadi dibawah naungan PT. Kompas Mas. Lalu pada tahun 1998 didirikanlah 
                      Sepatu Compass oleh anaknya yaitu Bapak Ir. Kahar Gunawan, MM. Namun, 
                      baru setahun terakhir ini nama Compass mulai menggaung setelah melakukan rebranding.
                      Untuk kalian yang ingin membei sepatu ini, langsung cek aja ke instragramnya : @sepatucompass
                      </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <img style="margin-left:3%;margin-top:3%;margin-bottom:3%;"src="assets/img/model2.svg">
                  </div>
                  <div class="col-lg-8 offset-lg-1">
                    <h2>Patrobas</h2>
                    <p>Patrobas berdiri sejak tahun 2014, brand ini merupakan sepatu lokal asal
                      Indonesia yang dibuat di Tangerang Selatan dan memiliki logo “PB” pada sepatunya.
                      Yang mana merupakan singkatan dari “price” dan “benefit”.  Brand ini juga 
                      dibandrol dengan harga yang terjangkau. Filosofi “Price and Benefit” 
                      tersebut kami terjemahkan menjadi logo berinisial P & B, dan juga lengkungan 
                      stripe logo Patrobas. Untuk kalian yang ingin membei sepatu ini, langsung cek aja 
                      ke instragramnya : @patrobas.id
                      </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <img style="margin-left:3%;margin-top:3%;margin-bottom:3%;"src="assets/img/model3.svg">
                  </div>
                  <div class="col-lg-8 offset-lg-1">
                    <h2>Ventela</h2>
                    <p>Brand yang berasal dari bandung ini mulai beroperasi pada tahun 2017, 
                      yang didirikan oleh seorang pengusaha bernama William Ventela. 
                      Brand sepatu lokal yang memproduksi sepatu sneaker dengan harga yang relatif 
                      murah namun memiliki build quality yang bagus. Ventela telah menyediakan 
                      beragam model sepatu yang identik dengan penampilan casual dan sporty. 
                      Untuk kalian yang ingin membei sepatu ini, langsung cek aja ke instragramnya : 
                      @ventelashoes
                      </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <img style="margin-left:3%;margin-top:3%;margin-bottom:3%;"src="assets/img/model4.svg">
                  </div>
                  <div class="col-lg-8 offset-lg-1">
                    <h2>Brodo</h2>
                    <p>Produk sepatu ini dikembangkan oleh Yukka Harlanda dan rekannya Uta. Brodo berdiri 
                      sejak tahun 2010, CEO Brodo sekarang menceritakan betapa sulitnya mencari sepatu ukuran 46
                      kepada temannya Uta. Dengan latar belakang pendidikan teknik mereka menganalisis masalah
                      yang mereka hadapi. Ternyata, walaupun Indonesia mempunyai sumber daya material
                      yang bagus, pengrajin sepatu yang handal, namun mereka tidak pernah melihat brand
                      sepatu lokal yang bisa bersaing distandar internasional.
                      Untuk kalian yang ingin membeli
                      sepatu ini, langsung cek aja ke instragramnya : @bro.do
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
    </body>
@endsection