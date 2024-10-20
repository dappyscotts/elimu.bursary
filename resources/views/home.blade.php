@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <!--login message disappearing after 3 seconds -->
                <div id="logged-in-message" class="alert alert-success" role="alert">
                    {{ __('You are logged in!') }}
                </div>

                <!--New navbar -->
                <nav class="navbar navbar-expand-lg  bg-transparent position-absolute"
                    style="margin-top:0px; right:0; width:auto;padding:10px;">
                    <ul class="navbar-nav  justify-content-around w-50  mx-auto">
                        <li class="nav-item">
                            <a class="nav-link-active" id="link1" href="{{ url('/cdf-bursary') }}"> C.D.F Bursary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-active" id="link2" href="{{ url('/others') }}">Others</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-active" id="link3" href="{{ url('/notify') }}">Notify Me</a>
                        </li>
                    </ul>
                </nav>
                <div class="centered-content">
                    <h1>Welcome to Elimu Bursary</h1>
                    <p>Your journey towards securing your future starts here! <br>
                        Apply for C.D.F bursary, also check out for links to other bursary programs.<br>
                        Remember to leave your number and email for updates on your bursary's status</p>
                </div>

            </div>
        </div>
    </div>

    <!-- javascript to hide the login message after 3 seconds -->
    <script>
        setTimeout(function() {
            document.getElementById('logged-in-message').style.display = 'none';
        }, 3000);
    </script>
@endsection


@section('styles')
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .nav-link-active {

            font-size: 18px;
            color: #20B2AA;
            text-decoration: none;
            font-weight: 1000;
            margin-left: 15px;
            text-align: center;
            line-height: 1px;

        }

        .centered-content {
            color: wheat;
            text-align: center;
            /* center text horizontally*/
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
                /*center text vertically*/

        }

        h1 {
            font-size: 3rem;
            /*custom font size for h1*/
        }

        p {
            font-size: 1.5rem;
            /*custom font size for p*/
        }
    </style>
@endsection
