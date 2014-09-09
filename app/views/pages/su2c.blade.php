@extends('layouts.cases')

@section('content')
<div class="header case su2c_spec" id="su2c_bg">
	<div class="inner_intro_text animated fadeInDown">
		<div class="row">
			<img src="{{ asset('img/su2c_logo.png') }}"  />
			<h6>Electronic Press Kit</h6>
			<h1>SU2C Launch 2014</h1>
			<p class="eight columns centered case_sub">
				Same day edits for one of the most fulfilling projects we've worked on. Interviews and conferences shot in the morning, footage edited for the evening news.  
			</p>
			<img class="su2c_asset" src="{{ asset('img/su2c_frame.png') }}"  />
		</div>
	</div>
</div>	  
<div class="about">
	<div class="row">
		<h2 class="add_line">About the Client</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center">
				By galvanizing the entertainment industry, SU2C has set out to generate awareness, educate the public on cancer prevention and help more people diagnosed with cancer become long-term survivors. The 2014 Launch Event was a showcase of all the celebrities that had joined the cause and interviews/press conferences that would air throughout Canada on local and national news channels. 
			</p>
		</div>
	</div>
</div>
<div class="cs_title concept hide_flow">
	<div class="row">
		<h2>Project Concept</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center add_line relative">
				This is a project we felt very strongly about. So we did it for free. We've all been affected by Cancer, one way or another. So this was our way of giving back. We promised the client same day edits that would be readily available for download by any media outlets who felt as strongly about the cause as we did. 
			</p>
		</div>
		<div class="twelve columns clock_holder alpha">
			<div class="clock_container">
				<img class="clock" src="{{ asset('img/clock.png') }}"  /> 
				<img class="shoot_bubble" src="{{ asset('img/arms.png') }}"  /> 
				<img class="edit_bubble animated rotateClock" src="{{ asset('img/second_hand.png') }}"  />
			</div> 
		</div>
	</div>
</div>
<div class="about" id="vid">
	<div class="row">
		<h2 class="add_line">Delivered Product</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center">
				We were able to cover both celebrity and conference footage of the SU2C Canada Launch and upload footage within a few hours for media outlet access. Footage was taken between 10am - Noon, and uploaded by 2:30pm for viewing.   
			</p>
			<div class="vimeo video">
				<iframe src="//player.vimeo.com/video/105662161?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>			
			</div>
		</div>
	</div>
</div>
<div class="cs_title">
	<div class="row">
		<h2>Campaign Results</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center add_line relative">
				SU2C received national coverage on over 180 major news stations across Canada. Our footage was used and reused and gathered over 4.8 Million impressions in under 72 hours. 
			</p>
		</div>
	</div>
</div>
@stop
