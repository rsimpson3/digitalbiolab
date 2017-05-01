<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        {{-- Yield the title if it exists, otherwise default to 'The Digital Biolab' --}}
        @yield('title','The Digital Biolab')
    </title>
    <link href='/css/app.css' type='text/css' rel='stylesheet'>
    <meta charset='utf-8'>
</head>


<body>
	<div class="container">
		<header id="intro">
			<article>
				<div>
					<div > 
						<h1 class="display-4">The Digital Biolab</h1> 
					</div>
					<h2> Build and manage your AP<sup>®</sup> Biology Knowledge</h2>

				</div>
			</article>

			<nav id="nav">
	  			<div class="navbar">
					<div class="brand"><a href="#welcome"><span>Home</span></a></div>
	    				<ul>
	    					<li><a class="icon about" href="#about"><span>About</span></a></li>
	    					<li><a class="icon bigideas" href="#bigideas"><span>Big Ideas</span></a></li>
	    					<li><a class="icon wheelofvernier" href="#wheelofvernier"><span>Wheel of Vernier Game</span></a></li>
	    					<li><a class="icon inquiry" href="#inquiry"><span>Inquiry</span></a></li>
	    					<li><a class="icon labdata" href="#labdata"><span>Lab Data</span></a></li>
	    					<li><a class="icon login" href="#login"><span>Login</span></a></li>
	    				</ul>
	  			</div>
	  		</nav>
		</header> 
		<main id="wrapper">
	  		<!-- Big Ideas 4 quadrant viewer -->
	  		<div class="scene" id="bigideas">
	    		<article class="content">
					<section id="bigidea1">
						<h1 class="text-left">Big Idea</h1>
						<h2 class="text-left display-3">1</h2>
						<p>The process of evolution drives the diversity and unity of life.</p>
					</section>
		    		<section id="bigidea2">
		    			<h1 class="text-right">Big Idea</h1>
						<h2 class="text-right display-3">2</h2>
						<p>Biological systems utilize free energy and molecular building blocks to grow, to reproduce and to maintain dynamic homeostasis.</p>
		    		</section>
		    		<section id="bigidea3">
		    			<h1 class="text-left">Big Idea</h1>
						<h2 class="text-left display-3">3</h2>
						<p>Living systems store, retrieve, transmit and respond to information essential to life processes.</p>
		    		</section>
			    	<section id="bigidea4">
			    		<h1 class="text-right">Big Idea</h1>
						<h2 class="text-right display-3">4</h2>
						<p>Biological systems interact, and these systems and their interactions possess complex properties.</p>
			    	</section>
	    		</article>
	    	</div> <!-- Big Ideas Viewer-->

	  		<div class="container" id="intro">
	    		<article class="heading">
	    			<h1> My Understanding of Biology Standards </h1>
	    			<p> Use the interactive biology standards viewer to see the relationship of the four major Big Ideas grouped by <em>Enduring Understandings</em>. Under each Enduring Understanding are sub groups containing <em>Essential Knowledge Statements</em>. Each statement is preceeded by an assessment tile indicating your level of understanding. Tiles are white by default. Tiles become darker in color and borders become thicker as you demonstrate your understanding.  
					</p>
					<p> The Digital BioLab prototype is designed to help Hinton Scholar students manage their learning of AP<sup>®</sup> Biology. The mobile app takes advantage of student owned mobile devices. The prototype consists of a tablet optimized dashboard app and a mobile app that connects students to their data, peers and instructors.
					</p>
				</article> 
			</div> <!-- introduction -->
			<div class="container" id="Understandings">
				<article id="udsheader">
					<section id="bi-1-ud">
						<h1>1 Enduring Understandings</h1>
						<ul>
							<li >A. Change in the genetic makeup of a population over time is evolution.</li>
							<ul id="bi-1-ud-a">
								<li>Natural selection is a major mechanism of evolution.</li>
								<li>Natural selection acts on phenotypic variations in populations.</li>
								<li>Evolutionary change is also driven by random processes.</li>
								<li>Biological evolution is supported by scientific evidence from many disciplines, including mathematics.</li>
							</ul>
							<li>B. Organisms are linked by lines of descent from common ancestry.</li>
								<ul id="bi-1-ud-b">
									<li>Organisms share many conserved core processes and features that evolved and are widely distributed among organisms today.</li>
									<li>Phylogenetic trees and cladograms are graphical representations (models) of evolutionary history that can be tested.</li>
								</ul>
							<li>C. Life continues to evolve within a changing environment.</li>
								<ul id="bi-1-ud-c">
									<li>Speciation and extinction have occurred throughout the Earth’s history.</li>
									<li>Speciation may occur when two populations become reproductively isolated from each other.</li>
									<li>Populations of organisms continue to evolve.</li>
								</ul>
							<li>D. The origin of living systems is explained by natural processes.</li>
								<ul id="bi-1-ud-d">
									<li>There are several hypotheses about the natural origin of life on Earth, each with supporting scientific evidence.</li>
									<li>Scientific evidence from many different disciplines supports models of the origin of life.</li>
								</ul>
						</ul>
					</section>
				</article>


			</div> <!-- Understandings -->
	    </main>
		
		 <footer>
	        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 </p>
	    </footer>
	</div>  <!-- Container -->
</body>
</html>
