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
	<div class="container main-header">
		<header id="intro">
			<article>
				<div>
					<div > 
						<h1 class="display-4">The Digital Biolab</h1> 
					</div>
					<h2> Build and manage your AP<sup>®</sup> Biology Knowledge</h2>

				</div>
			</article>

			<ul class="nav nav-pills flex-column flex-sm-row">
				<li class="nav-item"><a  class="nav-link active" href="#home"><span>Home</span></a> </li>
				<li class="nav-item"><a  class="nav-link" href="/about"><span>About</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="#bigideas"><span>Big Ideas</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="http://p4.digitalbiolab.me"><span>Wheel of Vernier Game</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="http://digitalbiolab.businesscatalyst.com/inquiry.html"><span>Inquiry</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="/gallery-1"><span>Lab Data 1</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="/gallery-2"><span>Lab Data 2</span></a></li>
				<li class="nav-item"><a  class="nav-link" href="/login"><span>Login</span></a></li>
			</ul>
		</header> 
	</div>  {{-- Container header --}}
		<main>
	  		<div class="container">
				<div class="row"> 
					<div class="col-6"> 
				  		<div class="row" id="bigideas"> 
				  		<!-- Big Ideas 4 quadrant viewer -->
							<section class="col-6" id="bigidea1">		
								<h1 class="float-left"> Big<br>Idea</h1>
								<h2 class="display-3">1</h2>
								<p><strong>The process of evolution drives the diversity and unity of life.</strong></p>
							</section>
				    		<section class="col-6" id="bigidea2">
					    			<h1 class="float-right">Big<br>Idea</h1>
									<h2 class="display-3 text-right">2</h2>
									<p><strong> Biological systems utilize free energy and molecular building blocks to grow, to reproduce and to maintain dynamic homeostasis.</strong></p>	
				    		</section>
				    		<div class="w-100"></div>  
				    		<section class="col-6" id="bigidea3">
				    			<h1 class="float-left">Big<br>Idea</h1>
								<h2 class="display-3">3</h2>
								<p><strong>Living systems store, retrieve, transmit and respond to information essential to life processes.</strong></p>
				    		</section>
					    	<section  class="col-6" id="bigidea4">
					    		<h1 class="float-right">Big<br>Idea</h1>
								<h2 class="display-3 text-right">4</h2>
								<p><strong>Biological systems interact, and these systems and their interactions possess complex properties.</strong></p>
					    	</section>
					    </div> <!-- row Big Ideas-->
					</div> 
			   	<!-- Big Ideas Viewer-->
		  		<div class="col-6" id="intro">
			    		<article class="heading">
			    			<h1> My Understanding of Biology Standards </h1>
			    			<p> Use the interactive biology standards viewer to see the relationship of the four major Big Ideas grouped by <em>Enduring Understandings</em>. Under each Enduring Understanding are sub groups containing <em>Essential Knowledge Statements</em>. Each statement is preceeded by an assessment tile indicating your level of understanding. Tiles are white by default. Tiles become darker in color and borders become thicker as you demonstrate your understanding.  
							</p>
						</article> 
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
					</div> <!-- introduction -->
				</div> <!-- main row container -->
			</div> <!-- main container -->
	    </main>
		
		 <footer>
	        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 </p>
	    </footer>
	
</body>
</html>
