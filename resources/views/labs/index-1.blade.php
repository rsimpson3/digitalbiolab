@extends('layouts.master_infopages')

@section('title')
    Lab Image Gallery 1
@stop

@section('head')
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script src="js/grids.min.js"></script>
@stop

@section('content')	
	<div class="container">
		<main class="gallery-1">
			<h1>Digital BioLab Students </h1>
			<div class="row ">
				<div class="col-6-sm">
					<figure>
					<img srcset="images/main/digital_biolab-1_320px.jpg 320w, 
					images/main/digital_biolab-1_640px.jpg 640w,
					images/main/digital_biolab-1_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-1_320px.jpg" alt="Student uses mobile device to respond to question." />
					<figcaption>Mobile assessment</figcaption>
					</figure>
					<figure>
					<img srcset="images/main/digital_biolab-2_320px.jpg 320w, 
					images/main/digital_biolab-2_640px.jpg 640w,
					images/main/digital_biolab-2_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-2_320px.jpg" alt="Students use probeware sensors in biology lab." />
					<figcaption>Digital probeware</figcaption>
					</figure>
					<figure>
					<img srcset="images/main/digital_biolab-3_320px.jpg 320w, 
					images/main/digital_biolab-3_640px.jpg 640w,
					images/main/digital_biolab-3_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-3_320px.jpg" alt="Student uses digital microscopy setup with tablet in biology lab." />
					<figcaption>Digital microscopy</figcaption>
					</figure>
				</div>
				<div class="col-6-sm">
					<figure>
					<img srcset="images/main/digital_biolab-4_320px.jpg 320w, 
					images/main/digital_biolab-4_640px.jpg 640w,
					images/main/digital_biolab-4_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-4_320px.jpg" alt="Collaborative microscope" />
					<figcaption>Collaborative microscope</figcaption>
					</figure>
					<figure>
					<img srcset="images/main/digital_biolab-5_320px.jpg 320w, 
					images/main/digital_biolab-5_640px.jpg 640w,
					images/main/digital_biolab-5_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-5_320px.jpg" alt="High-tech biology equipment" />
					<figcaption>High-tech biology equipment</figcaption>
					</figure>
					<figure>
					<img srcset="images/main/digital_biolab-6_320px.jpg 320w, 
					images/main/digital_biolab-6_640px.jpg 640w,
					images/main/digital_biolab-6_1280px.jpg 1280w" 
					sizes="(min-width: 36em) 33.3vw, 100vw"
					src="images/main/digital_biolab-6_320px.jpg" alt="Assess student understanding" />
					<figcaption>Assess student understanding</figcaption>
					</figure>
				</div>
			</div>
		</main>	
	</div>
@stop
