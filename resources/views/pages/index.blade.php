@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1><b>Teddius Maingi</b></h1>
                <div style="float:right">
                    <a href="{{ route('download') }}"  target="_blank" class="btn btn-outline-primary ml-4 mt-4"><i class="mdi mdi-cloud-download"></i> View Resume</a> <br> 
                </div>

                <h2><b>Web Developer</b></h2> <br>

                <div style="padding-left: 15%">
                    <p><i class="mdi mdi-email"></i>&nbsp; maingi.teddius@thetag.co.ke </p>
                    <p><i class="mdi mdi-card-account-phone"></i>&nbsp; +254795615409</p>
                    <p><i class="mdi mdi-map-marker"></i>&nbsp; Nairobi, Kenya</p>
                
                    <a href="https://github.com/DeogratiousT" target="_blank"><i class="mdi mdi-github mdi-18px"></i></a>&nbsp; &nbsp;
                    <a href="https://stackoverflow.com/users/12396215/teddius" target="_blank"><i class="mdi mdi-stack-overflow mdi-18px"></i></a>&nbsp; &nbsp;
                    <a href="https://twitter.com/Teddius2" target="_blank"><i class="mdi mdi-twitter mdi-18px"></i></a> &nbsp; &nbsp;
                    <a href="https://www.facebook.com/teddy.maingi.1" target="_blank"><i class="mdi mdi-facebook mdi-18px"></i></a> &nbsp; &nbsp;
                    <a href="https://www.instagram.com/teddius_maingi/" target="_blank"><i class="mdi mdi-instagram mdi-18px"></i></a>&nbsp; &nbsp;
                </div>
                    
                <br>
                <div>
                    <img src="myfiles/images/programmer.jpeg" class="center" alt="TEDDY" style="width:70%; height:60%;">                    

                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="myfiles/images/ted.jpg" class="center" alt="TEDDY" style="width:50%; height:50%; border:20px #ccc; border-style:ridge; border-radius:50%;">

                <h2><br>About Me</h2>
                <p>I am a web developer based in Nairobi Kenya. <br>
                i have rich experience in design and customization of websites. <br>
                My strengths are in: </p>
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>HTML</button>
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>CSS</button>
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>BOOTSTRAP</button>
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>JAVASCRIPT</button>             
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>PHP</button>
                <button class="btn btn-outline-primary btn-sm mt-2" disabled>LARAVEL</button>
            </div>
        </div>
    </div>
@endsection