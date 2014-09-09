@extends('layouts.cases')

@section('content')
<div class="header case" id="posterjack_bg">
	<div class="inner_intro_text animated fadeInDown">
		<div class="row">
			<img src="{{ asset('img/posterjack_logo.png') }}"  />
			<h6>Promo Videos / Online Ad</h6>
			<h1>Frame per Minute</h1>
			<p class="eight columns centered case_sub">
				A series of 1 minute promotional videos to highlight the quality and craftsmanship POSTERJACK has become so well known for. 
			</p>
			<img class="posterjack_asset" src="{{ asset('img/posterjack_frame.png') }}"  />
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
				Posterjack is a Canadian online photo printing company, which serves the entire Canadian market from their Toronto location. They're a company made of people who love turning photos into artwork.
			</p>
		</div>
	</div>
</div>
<div class="cs_title">
	<div class="row">
		<h2>Project Concept</h2>
	</div>
	<div class="row concept">
		<div class="twelve columns">
			<p class="sub_subtext text-center add_line relative">
				Posterjack wanted a series of short promo videos to display online. The project's goal was to show potential customers the high quality work that goes into turning flat photos into display ready pieces of art.
			</p>
		</div>
		<div class="six columns alpha">
			<img class="wow fadeIn" src="{{ asset('img/before_posterjack.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/before2_posterjack.jpg') }}"  />
		</div>
		<div class="six columns">
			<img class="wow fadeIn" src="{{ asset('img/after_posterjack.jpg') }}"  />
			<img class="wow fadeIn" src="{{ asset('img/after2_posterjack.jpg') }}"  />
		</div>
	</div>
</div>
<div class="about">
	<div class="row">
		<h2 class="add_line">Delivered Product</h2>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p class="sub_subtext text-center">
				Our final deliverables were met with great enthusiasm! We were able to highlight the ease of use and craftsmanship Posterjack offers, by focusing our videos on the intricacies involved in turning a photo into a tactile piece of art, none of which the customer is aware of because of how simple Posterjack is to use.  
			</p>
			<div class="vimeo video">
				<iframe src="//player.vimeo.com/video/98242559?title=0&amp;byline=0&amp;portrait=0&amp;color=288d96" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
				Posterjack was so thrilled that we were able to produce a commercial quality product on time and on budget, that we were contact by their parent company in Germany to produce a commercial for their factory in Munich! Schnitzel anyone!?   
			</p>
		</div>
	</div>
</div>
@stop
