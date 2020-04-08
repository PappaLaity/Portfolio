@extends('userPages.homeSkeleton')

@section('header_navbar')
@parent
@endsection


@section('content')
<div class="main_resume">

    <div class="resume_desc">
        <h3>Je suis un Full Stack Developper</h3>
        <p>
            Informaticien de Formation j'ai acqueri au fil
            du temps des competences en Developpement de part les projets de Classe
            et ceux personnels. Manifestant le désir d'apporter des solutions Tech a des problemes
            que l'on rencontre au jour le jour cela est devenu une passion ce qui m'en emmena là!!!
        </p>
        <br>
    </div>
    <div class="resume_filiale">
        <p>Papa Laity NDIAYE</p>
        <p>Téléphone: +221774919731</p>
        <p>Mail: pappalaity@gmail.com</p>
        <i><a href=""></a></i>
        <i><a href=""></a></i>
        <i><a href=""></a></i>
        Twitter -LinkedIn - Facebook - Github
    </div>

    <div class="resume_domaines">
        <!--<h4>Competences</h4>-->
        <li><h4>Web</h4><span class="bar"><span class="web"></span></span></li>
        <li><h4>Mobile</h4><span class="bar"><span class="mob"></span></span></li>        
        <li><h4>Data Science</h4><span class="bar"><span class="ds"></span></span></li>
        <li><h4>Solutions Iot</h4><span class="bar"><span class="iot"></span></span></li>
    </div>

</div>

<hr>
<div class="main_what_I_do">

    <h3>Ce que je fais??</h3> <br>

    <div class="wid_item">
        <h6>Web <i></i></h6>
        <p>Desc</p>
    </div>
    <div class="wid_item">
        <h6>Mobile<i></i></h6>
        <p>Desc</p>
    </div>
    <div class="wid_item">
        <h6>Data Science <i></i></h6>
        <p>Desc</p>
    </div>
    <div class="wid_item">
        <h6>Internet des Objets <i></i></h6>
        <p>Desc</p>
    </div>
    <hr>

    <div class="main_technologies">

        <div class="tech_framework">
            <h3>Technologies</h3>
            <div class="tech_fram_item">
                <img src="{{asset('img/angular.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/vue.jpeg')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/laravel.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/spring.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/flutter.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/android.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/ionic.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/mysql.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/cvbn.png')}}" alt="">
            </div>
            <div class="tech_fram_item">
                <img src="{{asset('img/mongo.jpeg')}}" alt="">
            </div>
        </div>
        <div class="tech_tools">
            <h3>Outils</h3>
            <div class="tech_tools_item">
                <p>Docker</p>
                <img src="" alt="">
            </div>
            <div class="tech_tools_item">
                <p>Visual Studio Code</p>
                <img src="" alt="">
            </div>
            <div class="tech_tools_item">
                <p>Intellij IDE</p>
                <img src="" alt="">
            </div>
            <div class="tech_tools_item">
                <p>Linux</p>
                <img src="" alt="">
            </div>
        </div>

    </div>

    <hr>
<!--
    <div class="main_colab">
        <div class="colab_item">
            <div class="colab_item_pic">
                <img src="" alt="">
                <p>Comptable</p>
            </div>
            <p>Desc</p>
        </div>
        <div class="colab_item">
            <div class="colab_item_pic">
                <img src="" alt="">
                <p>Juriste</p>
            </div>
            <p>Desc</p>
        </div>
        <div class="colab_item">
            <div class="colab_item_pic">
                <img src="" alt="">
                <p>Infographiste</p>
            </div>
            <p>Desc</p>
        </div>
        <div class="colab_item">
            <div class="colab_item_pic">
                <img src="" alt="">
                <p>Management Marketing Communication</p>
            </div>
            <p>Desc</p>
        </div>
    </div>-->
    <br>
    <a href='/contact' class="h__slogan--btn">Contactez Moi</a>
</div>
@endsection

@section('footer')
@parent
@endsection