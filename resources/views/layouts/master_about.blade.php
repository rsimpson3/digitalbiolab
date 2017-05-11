<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        {{-- Yield the title if it exists, otherwise default to 'The Digital Biolab' --}}
        @yield('title','The Digital Biolab')
    </title>
    <meta charset='utf-8'>
    <link href='/css/app.css' type='text/css' rel='stylesheet'/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>

    
    {{-- Yield any page specific CSS files or anything else you might want in the head --}}
    @yield('head')
    
</head>
<body id="about">
        <header >
            <article class="headimg">
                <div class="abt-group ">
                    <h1> @yield('title') <h1>
                    <h2>Build And Manage Your Biology Knowledge</h2>
                    <p>
                    
                    </p>
                </div>
            </article> 
        </header>
    	{{-- Yield any page main page content --}}
    	@yield('content')

    
 	<footer>
        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 
        <a href="https://www.pinterest.com/neotech03/hinton-scholars-ap-biology" alt='Hinton Pinterest Board'><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> 
        </p>
    </footer>

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>