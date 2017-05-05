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
<body>
	<div class="container">
        <header>
            <h1>Digital BioLab Dashboard</h1>
            <h2>Build and manage your AP<sup>®</sup> Biology Knowledge</h2>
            <p>
                <a href="https://twitter.com/DigitalBioLab" class="twitter-follow-button" data-show-count="false">Follow @DigitalBioLab</a>
                {{-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> --}}
            </p>

        </header>
    	{{-- Yield any page main page content --}}
    	@yield('content')
    </div>
    
 	<footer>
        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 </p>
    </footer>

</body>
</html>