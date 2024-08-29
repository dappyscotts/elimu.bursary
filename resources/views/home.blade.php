<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Elimu.Bursary') }}</title>
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
</head>

<body>
    <header>
        <nav>

            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('cdf-bursary') }}">CDF Bursary</a>
            <a href="{{ route('others') }}">Others</a>
            <a href="{{ route('notify') }}">Notify Me</a>
            <a href="logout.php">logout </a>

        </nav>
    </header>


    <div class="content">
        <h1>Welcome to our application platform</h1>
        <p>Apply for Government bursary here
            Also check out for links to other bursary programs.<br>
            Remember to leave your number and email for updates on bursary status</p>
    </div>

    <footer>
        <div class="footer-left">
            <p>Contact: elimu@info.com</p>
            <p>
                <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/yourpage" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i></a>
            </p>
            <p>&copy; 2024 Elimu Bursary. All rights reserved.</p>
        </div>

    </footer>
</body>

</html>
