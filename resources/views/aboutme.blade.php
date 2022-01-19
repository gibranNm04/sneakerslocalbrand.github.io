@extends('layout.app3')
@section('content')

    <style>
        header.masthead{
            padding-top: 10%;
            padding-bottom: 55%;
            background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("assets/img/bg3.svg");
            background-position: center;
            background-attachment: scroll;
            background-size: 100%;
        }
        .word{
            
            background:#C4C4C4
            background-size:100%
        }
        .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
        transition: all .3s;
        background-color:#C4C4C4;
        color:black;
        border:none;
        } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}      .kartu {
        width: 70%;
        height: 100%;
        margin: 0 auto;
        margin-top: 70px;
    transition: all .3s;
    background-color:#C4C4C4;
    color:white;
    border:none;
      } 
      .foto {
        padding: 20px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
}
.biodata {
    margin-top: 30px;
}
        }
        
    </style>
    <body>
        <header class="masthead">
        <div style="padding-bottom:0" class="section-title" data-aos="fade-up">
        </div>
        <div class="container"data-aos="fade-right" style="margin-bottom:1%;">
  <div class="mb-6 card kartu">
    <div  class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="assets/img/foto.svg" class="img-thumbnail" alt="" width="300" height="auto">
      </div>
      </div>
      <div style="color:black" class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table height="120%" width="120%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px;margin-top: 11%; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">NAMA</td>
                <td width="2%">:</td>
                <td>Gibran Nasrizal Masacgi</td>
            </tr>
          <tr>
              <td class="textt">TTL</td>
                <td>:</td>
                <td>Grobogan, 04 Maret 2002</td>
            </tr>
          <tr>
              <td class="textt">STATUS</td>
                <td>:</td>
                <td>MAHASISWA</td>
            </tr>
          <tr>
              <td class="textt">UNIVERSITAS</td>
                <td>:</td>
                <td>Universitas Dian Nuswantoro</td>
          </tr>
          <tr>
              <td class="textt">PRODI</td>
                <td>:</td>
                <td>Teknik Informatika S1</td>
          </tr>
          
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
      <p style="padding-left:4%;padding-right:3%;color:black;">Sneakers-localbrand adalah web portal yang menyajikan Informasi-informasi mengenai seputar dunia sneakers local brand.</p>
      <p style="padding-left:4%;padding-right:3%;color:black;">Saya mengawali menulis dan mengumpulkan seluruh informasi ini karena sebelumnya 
        sangat jarang website dengan informasi sneakers dalam bahasa Indonesia. 
        Padahal para penggemar sneakers di berbagai daerah di Indonesia semakin banyak. 
        Semakin kesini banyak komunitas-komunitas yang muncul dengan membawa kesamaan hobi yaitu sneakers.
      </p>
    </div>
  </div>
</div>

                                
        </header>
    </body>
@endsection