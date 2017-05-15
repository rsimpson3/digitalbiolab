<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        {{-- Yield the title if it exists, otherwise default to 'The Digital Biolab' --}}
        @yield('title','The Digital Biolab')
    </title>
    <meta charset='utf-8'>
    <link href='/css/app.css' type='text/css' rel='stylesheet'/>

    
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

    
 	 @include ('partials.footer')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script> --}}

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>