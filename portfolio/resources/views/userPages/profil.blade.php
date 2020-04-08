@extends('userPages.homeSkeleton')

@section('header_navbar')
@parent
@endsection

@section('content')

<div class="myself">
    <div class="myself_intro">
        <div class="myself_desc">
            <div class="desc_filiale">
                <h1>Papa Laity Ndiaye</h1>
                <p>Mails: pappalaity@gmail.com / ndiaye.papa-laity@ugb.edu.sn <br>
                    Numero: +221774919731 <br>
                    Adresse:U6 keur Massar Dakar Senegal / Universite Gaston Berger de Saint Louis <br>
                    <i></i> linkedIn - <i></i> Github</p>
            </div>
            <div class="desc_pic">
                <img src="{{asset('img/i6.jpg')}}" alt="">
            </div>
            <div class="desc_profession">
                <ul>
                    <li>PHD researcher on Computer Science <br> Gaston Berger University</li>
                    <li>Software and Data Management Engineer</li>
                </ul>
            </div>
            <div class="desc_lang">
                Francais:&nbsp;&nbsp; <span class="ok"></span><span class="ok"></span><span class="ok"></span class="ok"><span class="ok"></span><span></span><br>
                Anglais:   &nbsp;&nbsp;&nbsp; <span class="ok"></span><span class="ok"></span><span class="ok"></span><span></span><span></span><br>
                Wolof:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="ok"></span><span class="ok"></span><span class="ok"></span><span class="ok"></span><span class="ok"></span><br>
            </div>
        </div>
    </div>

    <div class="myself_others">

        <div class="myself_others_exp">
            <h2>EXPERIENCE</h2>
            <p>Software Engineer Internship on <a href="">Institut de Recherche pour le Developpement</a> IRD <br>
                &nbsp;&nbsp;<i> </i> Avril 2019 - Octobre 2019 &nbsp;&nbsp;&nbsp; <i></i> Campus IRD-HANN Dakar
            </p>
            <p>Marketing Management leadership Internship on Risk Innovation Social Enterprenership (RISE) <br>
                &nbsp;&nbsp;<i></i> Septembre 2017 &nbsp;&nbsp;&nbsp; <i></i> RISE Pompier Dakar
            </p>
        </div>

        <div class="myself_others_skils">
            <h2>SKILLS</h2>

            <div class="tech_fram_item">
                <img src="{{asset('img/js.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/php.png')}}" alt="">
            </div>

            <!--<ul>
                            <li>JavaScript</li>
                            <li>JAVA</li>
                            <li>PHP</li>
                            <li>Dart</li>
                            <li>MySQL</li>
                            <li>Python</li>
                            <li>C</li>
                            <li>C++</li>
                        </ul>-->
        </div>
        <div class="myself_others_diplomes">
            <h2>EDUCATION</h2>
            <p>Master on Data Management & Software Engineer <br>&nbsp;&nbsp; Gaston Berger University .. 2020
                <br> &nbsp;&nbsp;Topic Thesis:...
            </p>
            <p>
                Certification <a href="">Google Analytics</a>
            </p>
            <p>
                Bachelor On Information System <br>&nbsp;&nbsp; Gaston Berger University -- 2017
            </p>
            <p>
                Baccalaureat Serie S1 <br>&nbsp;&nbsp; Nouveau lycee de Kaolack -- 2014
            </p>

        </div>
        <div class="myself_others_hobbies">
            <h2>HOBBIES</h2>
            <ul>
                <li>Actions Sociales</li>
                <li>Prestations de Services</li>
                <li>Natation - BasketBall</li>
            </ul>
        </div>
    </div>

</div>


<div></div>

@endsection

@section('footer')
@parent
@endsection