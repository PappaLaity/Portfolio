@extends('userPages.homeSkeleton')

@section('header_navbar')
@parent
@endsection

@section('content')

<div class="join">    
    <div class="join_me">
        <div class="join_me_loc">
            
            <div class="join_me_adresse">
                <p> <em> Numero... Unite 6 Keur Massar, Dakar, Senegal.</em></p>
                <p><em>Universite Gaston Berger de Saint Louis.</em></p>
            </div>
            
            <div class="join_me_cart">
                <div id="mapid" style="width:50%;height:40%"></div>
            </div>
        </div>
        <div class="join_me_form">
            <form action="" method="post">
                <label for=""></label>
                <input type="text" placeholder="Name"> <br><br>
                <label for=""></label>
                <input type="email" placeholder="Email"><br><br>
                <label for=""></label>
                <textarea name="" id="" cols="40" rows="5"></textarea><br><br>
                <button type="submit">Send</button>
            </form>
        </div>
        
    </div>
</div>
<div></div>

@endsection

@section('footer')
@parent
@endsection