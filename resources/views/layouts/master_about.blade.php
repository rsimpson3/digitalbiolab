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
                    <h1>About The Digital BioLab</h1>
                    <h2>Build And Manage Your Biology Knowledge</h2>
                    <p>
                    
                    </p>
                </div>
            </article> 
        </header>
    	{{-- Yield any page main page content --}}
    	@yield('content')

    
 	<footer>
        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 </p>
    </footer>

</body>
</html>