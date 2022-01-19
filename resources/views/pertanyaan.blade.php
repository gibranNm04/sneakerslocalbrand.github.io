@extends('layout.app2')
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
</style>

    <body>
        <header class="masthead">
            <div class="container">
                <form action="{{ route('pertanyaan.store') }}" method="post">
                    @csrf  
                    <div class="row mb-2">
                        <div class="col">
                            <textarea style="width:100%; background:#C4C4C4; border-radius: 1rem;" rows="20" name="comment" id="comment" placeholder="Silahkan ajukan pertanyaan seputar sneakers..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="submit" class="btn btn-primary" value="Kirim Pertanyaan">
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </body>


@endsection

