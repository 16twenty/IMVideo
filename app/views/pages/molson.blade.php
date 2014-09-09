@extends('layouts.cases')

@section('content')
<div class="header case" id="molson_bg">
	<div class="inner_intro_text animated fadeInDown">
		<div class="row">
			<img src="{{ asset('img/molson_logo_invert.png') }}"  />
			<h6>Viral Video Campaign</h6>
			<h1>Canthem</h1>
			<p class="eight columns centered case_sub">
				An immensely successful viral video campaign of the Canadian National Anthem being played on Molson Beer Products. 
			</p>
			<img class="molson_asset" src="{{ asset('img/molson_frame.png') }}"  />
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
				Everyone knows Molson. At least everyone in Canada does. They are the quintessential "Canadian Lager"; the first thing that anyone thinks of when referring to our national beverage. So how does a brand like Molson continue to be ubiquitous? By letting our imaginations run wild, all in the name of getting hamm...err..patriotic? 
			</p>
		</div>
	</div>
</div>
<div class="cs_title">
	<div class="row">
		<h2>Project Concept</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center relative add_line">
				Make instruments out of Molson Beer Products. Film ourselves playing said instruments. Release on Official Molson YouTube Channel. Rack up the views. 
			</p>
		</div>
		<div class="six columns alpha top_space">
			<img class="wow fadeIn" src="{{ asset('img/molson1.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/molson2.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/molson4.jpg') }}"  />
		</div>
		<div class="six columns top_space">
			<img class="wow fadeIn" src="{{ asset('img/molson5.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/molson6.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/molson7.jpg') }}"  />
		</div>
	</div>
</div>
<div class="about" id="vid">
	<div class="row">
		<h2>Delivered Product</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center relative add_line">
				We had a blast with this one. Not only did we get to shoot something that had the potential virality of chicken pox at a One Direction concert, we got to star in it too!
			</p>
			<div class="vimeo video">
				<iframe src="//player.vimeo.com/video/44813686?title=0&amp;byline=0&amp;portrait=0&amp;color=a62121" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
				Over 1 Million views on YouTube. Shared by many global news media outlets and Canadian Celebrities including Nathan Fillion. Featured as a 90 second commercial on CBC/CTV and TSN during the 2012 London Olympics. Won 2013 Art Directors Award for Directing and Editing. 
			</p>
		</div>
	</div>
</div>
@stop
