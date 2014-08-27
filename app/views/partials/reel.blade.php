<div class="none" id="reel_vid">
	<div class="logo_vid">
		<a href="{{ URL::to('/') }}"><img src="{{ asset('img/logo_dark_small.png') }}"  /></a>
	</div>
	<video id="demoreel">
		<source src="{{ asset('videos/reel.webmhd.webm') }}" type="video/webm;">
		<source src="{{ asset('videos/reel.mp4') }}" type="video/mp4;">
		<source src="{{ asset('videos/reel.oggtheora.ogv') }}" type="video/ogg;">
	</video>
	<div class="row">
		<div id="video-controls" class="ten columns centered">
			<div class="row">
				<div class="one column text-center">
					<a href="#" id="play-pause" class="play"><i class="icon-play"></i></a>
				</div>
				<div class="five columns alpha">
					<input type="range" id="seek-bar" value="0">
				</div>
				<div class="one column text-right">
					<a href="#" id="mute"><i class="icon-sound"></i></a>
				</div>
				<div class="three columns">
					<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
				</div>					
				<div class="one column text-center">
					<a href="#" id="full-screen"><i class="icon-resize-full"></i></a>
				</div>				
				<div class="one column text-center">
					<a href="{{ URL::to('/') }}"><i class="icon-home"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>