@extends('layouts.skeleton')

@section('title','About')

@section('content')
<div class="main_resume">

    <div class="resume_desc">
        <h3 class="resume_desc_title">Je suis un Full Stack Developper</h3>
        <br>
    </div>
    <div class="resume_filiale">
        <p>Papa Laity NDIAYE</p>
        <p>Téléphone: +221774919731 / +2213913601</p>
        <p>Mail: pappalaity@gmail.com</p>

        <a href="https://github.com/PappaLaity"><img class="resume_filiale_ref" src="{{asset('images/icon_link/github.png')}}" alt="Papa Laity Ndiaye Github"></a>
        <a href="https://twitter.com/pappalaity"><img class="resume_filiale_ref" src="{{asset('images/icon_link/twitterl.png')}}" alt="Papa Laity Ndiaye Twitter"></a>
        <a href="https://web.facebook.com/laisco1/"> <img class="resume_filiale_ref" src="{{asset('images/icon_link/fb.png')}}" alt="Papa Laity Ndiaye Facebook"></a>
        <a href="https://www.linkedin.com/in/pappalaity/"><img class="resume_filiale_ref" src="{{asset('images/icon_link/linkedIn.png')}}" alt="Papa Laity Ndiaye LinkedIn"></a>

    </div>

    <div class="resume_domaines">
        <img class="img_profil" src="{{asset('images/dev.png')}}" alt="Papa laity Ndiaye Profil photo">
        <br>

    </div>
</div>
<br>
<hr>
<div class="main_what_I_do">

    <h3>Ce que je fais??</h3> <br>

    <nav class="nav nav-tabs">
        <a class="nav-item nav-link active ml-5 pl-5 pr-5" href="#p1" data-toggle="tab">
            WEB <img class="wid_item_ref" src="{{asset('images/icon_link/webbb.png')}}" alt="">
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p2" data-toggle="tab">
            MOBILE <img class="wid_item_ref" src="{{asset('images/icon_link/mob.jpeg')}}" alt="">
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p3" data-toggle="tab">
            DATA SCIENCE <img class="wid_item_ref" src="{{asset('images/icon_link/ia.png')}}" alt="">
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p4" data-toggle="tab">
            IOT <img class="wid_item_ref" src="{{asset('images/icon_link/wgh.png')}}" alt="">
        </a>
    </nav>
    <br>
    <div class="tab-content">
        <div class="tab-pane active" id="p1">WEB:</div>
        <div class="tab-pane" id="p2">Mobile:</div>
        <div class="tab-pane" id="p3">Data Science:</div>
        <div class="tab-pane" id="p4">IoT:</div>
    </div>

    <br>
    <hr>
    <br>
</div>



@endsection