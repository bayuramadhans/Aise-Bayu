<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('/css/bootstrap-4.css') }}">
    <link rel="stylesheet" href="{{ url('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ url('/css/responsive.css') }}">
    <script src="{{ url('/js/modernizr.js') }}" charset="utf-8"></script>
     @yield("link")
</head>

<body>
    <nav id="cd-vertical-nav">
		<ul>
			<li>
				<a href="#section1" data-number="1">
					<span class="cd-dot"></span>
					<span class="cd-label">Home</span>
				</a>
			</li>
			<li>
				<a href="#section2" data-number="2">
					<span class="cd-dot"></span>
					<span class="cd-label">Perkenalan</span>
				</a>
			</li>
			<li>
				<a href="#section3" data-number="3">
					<span class="cd-dot"></span>
					<span class="cd-label">Timeline</span>
				</a>
			</li>
			<li>
				<a href="#section4" data-number="4">
					<span class="cd-dot"></span>
					<span class="cd-label">S&K</span>
				</a>
			</li>
			<li>
				<a href="#section5" data-number="5">
					<span class="cd-dot"></span>
					<span class="cd-label">Haidah</span>
				</a>
			</li>
			<li>
				<a href="#section6" data-number="6">
					<span class="cd-dot"></span>
					<span class="cd-label">Gallery</span>
				</a>
			</li>
			<li>
				<a href="#section7" data-number="7">
					<span class="cd-dot"></span>
					<span class="cd-label">Login/Register</span>
				</a>
			</li>
		</ul>
	</nav>
    <a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>
    @yield("content")
    <footer class="footer-distributed">
        <div class="footer-left">
            <p class="footer-about">
                <span>Address</span> Jl. Dokter Ir. Haji Soekarno, Mulyorejo, Sukolilo, Mulyorejo, Kota SBY, Jawa Timur 60115
            </p>
            <br>
            <p class="footer-about"><span>Contacts</span></p>
            <p class="footer-about"> <a href=https://line.me/en/><img src="img/line.png" width=" 20px" height="  20px"> @aise2018</a>
            </p>
            <p class="footer-about"> <a href=mailto:aise2018@gmail.com><img src="img/gmail.png" width="  20px" height="  20px"> aise2018@gmail.com</a></p>
            <p class="footer-about"> <a href=https://instagram.com/><img src="img/ig.png" width="    20px" height="  20px"> aise2018</a>
            </p>
        </div>
        <div class="footer-center">
        </div>
        <div class="footer-right">
            <div>
                <p>Tentang AISE</p>
            </div>
            <div>
                <<p><span>Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.</span></p>
            </div>
        </div>
    </footer>
    <div class="copy">
        <p class="footer-copy">AISE &copy; 2018</p>
    </div>
</body>
    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/layout.js') }}" charset="utf-8"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 3000
            })
        });
    </script>
    @yield("script")
</html>
