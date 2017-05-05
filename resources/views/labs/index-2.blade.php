@extends('layouts.master_infopages')

@section('title')
    Lab Image Gallery 2
@stop

@section('head')
	<link rel="stylesheet"  href="css/lightgallery.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- jQuery Gallery Plugin -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/lightgallery.js"></script>
	<script src="js/lg-thumbnail.min.js"></script>
	<script src="js/lg-fullscreen.min.js"></script>
	<script src="js/lg-video.min.js"></script>
	<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
	
	<script type="text/javascript">
		// $('#srcset').lightGallery(); 
	    $(document).ready(function() {
	        $("#srcset").lightGallery({
				hideControlOnEnd:true,
				mode: 'lg-fade',
				vimeoThumbSize:'thumbnail_large',
				//desc:true,
				//caption:true,
				});
			});
	</script>

@stop

@section('content')	
	<main>
		<div class="container gallery-2">
		<h1>Digital Lab Data Gallery</h1>
			<div id="srcset">
				<a href="images/microscopy/low-res/1obryant_lab4jan2114_wenping_320px.jpg" data-srcset="images/microscopy/low-res/1obryant_lab4jan2114_wenping_320px.jpg 320w, images/microscopy/mid-res/1obryant_lab4jan2114_wenping_640px.jpg 640w, images/microscopy/hi-res/1obryant_lab4jan2114_wenping_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw">
				<img src="images/microscopy/thumb/1obryant_lab4jan2114_wenping_thumb.jpg"/>
				</a>

				<a href="images/microscopy/low-res/2obryant_lab4jan2114_shayla_320px.jpg" data-srcset="images/microscopy/low-res/2obryant_lab4jan2114_shayla_320px.jpg 320w, images/microscopy/mid-res/2obryant_lab4jan2114_shayla_640px.jpg 640w, images/microscopy/hi-res/2obryant_lab4jan2114_shayla_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw">
				<img src="images/microscopy/thumb/2obryant_lab4jan2114_shayla_thumb.jpg"/>
				</a>

				<a href="images/microscopy/low-res/7obryant_lab4jan2114_jarlin_320px.jpg" data-srcset="images/microscopy/low-res/7obryant_lab4jan2114_jarlin_320px.jpg 320w, images/microscopy/mid-res/7obryant_lab4jan2114_jarlin_640px.jpg 640w, images/microscopy/hi-res/7obryant_lab4jan2114_jarlin_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw">
				<img src="images/microscopy/thumb/7obryant_lab4jan2114_jarlin_thumb.jpg"/>
				</a>
				
				<a href="images/microscopy/low-res/algerian_ivy_steven_x10_jan1515_320px.jpg" data-srcset="images/microscopy/low-res/algerian_ivy_steven_x10_jan1515_320px.jpg 320w, images/microscopy/mid-res/algerian_ivy_steven_x10_jan1515_640px.jpg 640w, images/microscopy/hi-res/algerian_ivy_steven_x10_jan1515_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw"> 
				<img src="images/microscopy/thumb/algerian_ivy_steven_x10_jan1515_thumb.jpg"/>
				</a>

				<a href="images/microscopy/low-res/bla_lab4_jan1614_chelsey1_320px.jpg" data-srcset="images/microscopy/
				low-res/bla_lab4_jan1614_chelsey1_320px.jpg 320w, images/microscopy/mid-res/bla_lab4_jan1614_chelsey1_640px.jpg 640w, images/microscopy/hi-res/bla_lab4_jan1614_chelsey1_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw"> 
				<img src="images/microscopy/thumb/bla_lab4_jan1614_chelsey1_thumb.jpg" /> 
				</a>

				<a href="images/microscopy/low-res/bla_lab4_jan1614_chelsey2_320px.jpg" data-srcset="images/microscopy/
				low-res/bla_lab4_jan1614_chelsey2_320px.jpg 320w, images/microscopy/mid-res/bla_lab4_jan1614_chelsey2_640px.jpg 640w, images/microscopy/hi-res/bla_lab4_jan1614_chelsey2_1280px.jpg 1280w" data-sizes="(min-width: 40em) 80vw, 100vw">
				<img src="images/microscopy/thumb/bla_lab4_jan1614_chelsey2_thumb.jpg" /> 
				</a>
			


			{{-- 	<li data-title="Guard cells" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/bla_lab4_jan1614_peebt_320px.jpg" data-src="images/microscopy/hi-res/bla_lab4_jan1614_peebt_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/bla_lab4_jan1614_peebt_thumb.jpg" /> </a> </li>

				<li data-title="Ficus plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/ficus_plnt_cells_cici_kennedy_320px.jpg" data-src="images/microscopy/hi-res/ficus_plnt_cells_cici_kennedy_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/ficus_plnt_cells_cici_kennedy_thumb.jpg" /> </a> </li>

				<li data-title="Ivy Algerian Green plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_algivy_bla_LQ203_320px.jpg" data-src="images/microscopy/hi-res/microscopy_algivy_bla_LQ203_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_algivy_bla_LQ203_thumb.jpg" /> </a> </li>

				<li data-title="Ivy Algerian Green plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_algivy_bla_LQ205b_320px.jpg" data-src="images/microscopy/hi-res/microscopy_algivy_bla_LQ205b_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_algivy_bla_LQ205b_thumb.jpg" /> </a> </li>

				<li data-title="Bush bean stomata" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_bushb_bla_LQ202_320px.jpg" data-src="images/microscopy/hi-res/microscopy_bushb_bla_LQ202_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_bushb_bla_LQ202_thumb.jpg" /> </a> </li>

				<li data-title="Red Bull plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_redbull_bla_LQ102_320px.jpg" data-src="images/microscopy/hi-res/microscopy_redbull_bla_LQ102_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_redbull_bla_LQ102_thumb.jpg" /> </a> </li>

				<li data-title="Red Bull plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_redbull_bla_none_320px.jpg" data-src="images/microscopy/hi-res/microscopy_redbull_bla_none_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_redbull_bla_none_thumb.jpg" /> </a> </li>

				<li data-title="Rex Begonia plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_rexbegonia2_OB-LQ201_320px.jpg" data-src="images/microscopy/hi-res/microscopy_rexbegonia2_OB-LQ201_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_rexbegonia2_OB-LQ201_thumb.jpg" /> </a> </li>

				<li data-title="Silver Satin plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_silversatin_bla_LQ105_320px.jpg" data-src="images/microscopy/hi-res/microscopy_silversatin_bla_LQ105_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_silversatin_bla_LQ105_thumb.jpg" /> </a> </li>

				<li data-title="Silver Satin plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/microscopy_silversatin_bla_LQ107_320px.jpg" data-src="images/microscopy/hi-res/microscopy_silversatin_bla_LQ107_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/microscopy_silversatin_bla_LQ107_thumb.jpg" /> </a> </li>

				<li data-title="Ivy plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/techbos_lab4_jan814_stoma_320px.jpg" data-src="images/microscopy/hi-res/techbos_lab4_jan814_stoma_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/techbos_lab4_jan814_stoma_thumb.jpg" /> </a> </li>

				<li data-title="Unknown plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/microscopy/low-res/unknown_plant_bla_tsungai_jan1515_320px.jpg" data-src="images/microscopy/hi-res/unknown_plant_bla_tsungai_jan1515_1280px.jpg"> <a href="#"> <img src="images/microscopy/thumb/unknown_plant_bla_tsungai_jan1515_thumb.jpg" /> </a> </li>

				<li data-title="Ivy plant" data-desc="ExoLabs microscopy image" data-responsive-src="images/data/bla_cellresp_crickets_michael_grp_121213_320px.jpg" data-src="images/data/bla_cellresp_crickets_michael_grp_121213_640px.jpg"> <a href="#"> <img src="images/data/bla_cellresp_crickets_michael_grp_121213_thumb.jpg" /> </a> </li>

				<li data-title="" data-desc="Vernier Labquest sensor data" data-responsive-src="images/data/bla_cellresp_peas_michael_grp_121213_320px.jpg" data-src="images/data/bla_cellresp_peas_michael_grp_121213_640px.jpg"> <a href="#"> <img src="images/data/bla_cellresp_peas_michael_grp_121213_thumb.jpg" /> </a> </li>

				<li data-title="Cricket respiration" data-desc="Vernier Labquest sensor data" data-responsive-src="images/data/bla_cellresp_peas&worms_jenny_grp_121213_320px.jpg" data-src="images/data/bla_cellresp_peas&worms_jenny_grp_121213_640px.jpg"> <a href="#"> <img src="images/data/bla_cellresp_peas&worms_jenny_grp_121213_thumb.jpg" /> </a> </li>

				<li data-title="Germinated peas, cold variable" data-desc="Vernier Labquest sensor data" data-responsive-src="images/data/bla_cellresp_peas&worms_martinez_grp_121213_320px.jpg" data-src="images/data/bla_cellresp_peas&worms_martinez_grp_121213_640px.jpg"> <a href="#"> <img src="images/data/bla_cellresp_peas&worms_martinez_grp_121213_thumb.jpg" /> </a> </li>

				<li data-title="Germinated peas cold & mealworms" data-desc="Vernier Labquest sensor data" data-responsive-src="images/data/bla_cellresp_peas&worms_tepbe_grp_121213_320px.jpg" data-src="images/data/bla_cellresp_peas&worms_tepbe_grp_121213_640px.jpg"> <a href="#"> <img src="images/data/bla_cellresp_peas&worms_tepbe_grp_121213_thumb.jpg" /> </a> </li>


				<li data-title="Unlabeled data" data-desc="Vernier Labquest sensor data" data-responsive-src="images/data/lab3_graph_summer_obryant_320px.jpg" data-src="images/data/lab3_graph_summer_obryant_640px.jpg"> <a href="#"> <img src="images/data/lab3_graph_summer_obryant_thumb.jpg" /> </a> </li>

				<li data-title="Alaska pea germination time-lapse video" data-desc="ExoLabs camera system" data-responsive-src="http://vimeo.com/79254683" data-src="http://vimeo.com/79254683"> <a href="#"> <img src="images/data/cell_resp_beans_vimeo_thumb.jpg" /> </a> </li> --}}
				
				<a href="http://vimeo.com/82036793" >
				<img src="images/data/mungbean_germ_vimeo_thumb.jpg" /> 
				</a>

				{{-- <li data-title="Mung bean germination time-lapse with CO2 and temperature overlay" data-desc="Vernier Labquest sensor & ExoLabs camera setup" data-responsive-src="http://vimeo.com/82036793" data-src="http://vimeo.com/82036793"> <a href="#"> <img src="images/data/mungbean_germ_vimeo_thumb.jpg"/> </a> </li> --}}
			</div>
		</div>

	</main>
@stop
