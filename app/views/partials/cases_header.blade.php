<?php
for($i=0;$i< count($pages);$i++) {
	if($pages[$i]==$case) {
		if($i==0) {
			$prev = $pages[count($pages)-1];
		} else {
			$prev = $pages[$i-1];
		}
		if($i==count($pages)-1) {
			$next = $pages[0];
		} else {
			$next = $pages[$i+1];
		}
	}
}
?>
<div class="case_nav">
	<div class="controls">
		<div class="control_button animated fadeInRight" id="home"><a href="{{ URL::to('/') }}"><i class="icon-home"></i></a>
		</div>
		<div class="control_button animated fadeInRight" id="previous"><a href="{{URL::to($prev)}}"></a>
		</div> 
		<div class="control_button animated fadeInRight" id="next"><a href="{{URL::to($next)}}"></a>
		</div>
	</div>
</div>

