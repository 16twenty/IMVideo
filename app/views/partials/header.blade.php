<div class="nav_wrap animated fadeInDown">
	<div class="row navbar" gumby-fixed=".about" gumby-offset="150" id="nav1"> 
		<a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
		<h1 class="four columns logo">
			<a id="first" class="show" href="#">
				<img src="{{ asset('img/logo.png') }}"  />
			</a>
			<a id="second" class="noshow" href="#">
				<img src="{{ asset('img/logo_dark_small.png') }}"  />
			</a>
		</h1>
		<ul class="eight columns">
			<li><a href="#" id="about">About Us</a></li>
			<li><a href="#" id="work">Work</a></li>
			<li><a href="#" id="services">Services</a></li>
			<li><a href="#" id="contact">Contact</a></li>
		</ul>
	</div>
</div>
<div class="header">
	<div class="intro_text animated fadeInDown">
		<div class="row">
			<h1 class="add_line">Digital<br>Film Makers</h1>
			<p class="eight columns centered subtitle">
				Full service digital video production with a passion for performance marketing and solutions that inspire curiosity. 
			</p>
			<div class="eight columns centered">
				<div class="large default btn icon-right entypo icon-play big_screen">
					<a href="#" id="reel">Play Our Reel</a>
				</div>
				<div class="large default btn icon-right entypo icon-play small_screen">
					<a href="http://vimeo.com/83536881" target="_blank">Play Our Reel</a>
				</div>
			</div>
		</div>
	</div>
	 <div class="overlay"></div>
	<video autoplay loop muted id="video">
		<source src="{{ asset('videos/header.webmhd.webm') }}" type="video/webm;">
		<source src="{{ asset('videos/header.mp4') }}" type="video/mp4;">
		<source src="{{ asset('videos/header.oggtheora.ogv') }}" type="video/ogg;">
	</video> 
</div>
