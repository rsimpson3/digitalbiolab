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

    
 	<footer>
        <p>©2017 Robert Simpson • Digital BioLab Prototype • Harvard Medical School • DGMD E599 • ver4 
        <a href="https://www.pinterest.com/neotech03/hinton-scholars-ap-biology" alt='Hinton Pinterest Board'><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> 
        </p>
    </footer>

    <!-- jQuery Gallery Plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script type="text/javascript" src="js/lg-thumbnail.js"></script>
    <script type="text/javascript" src="js/lg-fullscreen.min.js"></script>
    <script type="text/javascript" src="js/lg-video.min.js"></script>
    <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        // $('#srcset').lightGallery(); 
        $(document).ready(function() {
            $("#srcset").lightGallery({
                hideControlOnEnd:true,
                mode: 'lg-fade',
                //loadVimeoThumbnail: true,
                // vimeoThumbSize:'thumbnail_small',
                //desc:true,
                //caption:true,
                });
            });
    </script>
</body>
</html>