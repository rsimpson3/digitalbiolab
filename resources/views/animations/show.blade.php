<!DOCTYPE html>
<html>
<head>
	<title>Animate Test for TweenMax</title>
	<link rel="stylesheet" type="text/css" href="css/animate-test.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<h1>Test Animations</h1>

		<p>A bit on how this works: Animations use jQuery, TweenMax and ScrollMagic libraries. TweenMax and ScrollMagic are dependent on jQuery. The ScrollMagic plug-in (animation.gsap.js) is required to control TweenMax and ScrollMagic behaviors.</p>

		<h2>Icon Image Animation</h2>
		<p>Upon page load icon moves from right to left.</p>
		<div id="toplogo">
			<img class="logo" src="images/main/hinton_icon_online.jpg">
		</div>
		
		<p>Scroll down the page to trigger a change. The background color of the box should change as you scroll to the div containing the textbox.</p>

		<div id="down-arrow">
			<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
		</div>

		<div id="container">
		  	<div id="block">
		     Hi there !
		  	</div>
		</div> {{-- block container --}}
	</div> {{--main container --}}

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
	
	<script type="text/javascript" src="js/animateTest.js"></script>
</body>
</html>
