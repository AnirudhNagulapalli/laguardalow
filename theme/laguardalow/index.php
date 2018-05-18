<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>laguardia.low</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/styleHomePage.css" rel="stylesheet">

    <!-- Custom font for this template -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">    


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Custom code for using Nivo slider -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="<?php echo get_bloginfo('template_directory'); ?>/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/nivo-slider/themes/laguardalowSlider/laguardalowSlider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
    <!-- <link rel="stylesheet" href="style.css" type="text/css" media="screen" /> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
		<?php get_header(); ?>
    
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-1.9.0.min.js"></script>
	  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.nivo.slider.js"></script>
	  <!-- <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js"></script> -->
	  <script type="text/javascript">
	  $(window).load(function() {
      $('#slider').nivoSlider({ 
		    effect: 'fade',                 // Specify sets like: 'fold,fade,sliceDown' 
		    slices: 15,                       // For slice animations 
		    boxCols: 8,                       // For box animations 
		    boxRows: 4,                       // For box animations 
		    animSpeed: 500,                   // Slide transition speed 
		    pauseTime: 3000,                  // How long each slide will show 
		    startSlide: 0,                    // Set starting Slide (0 index) 
		    directionNav: true,               // Next & Prev navigation 
		    controlNav: true,                 // 1,2,3... navigation 
		    controlNavThumbs: false,          // Use thumbnails for Control Nav 
		    pauseOnHover: true,               // Stop animation while hovering 
		    manualAdvance: false,             // Force manual transitions 
		    prevText: 'Prev',                 // Prev directionNav text 
		    nextText: 'Next',                 // Next directionNav text 
		    randomStart: false,               // Start on a random slide 
		    beforeChange: function(){},       // Triggers before a slide transition 
		    afterChange: function(){},        // Triggers after a slide transition 
		    slideshowEnd: function(){},       // Triggers after all slides have been shown 
		    lastSlide: function(){},          // Triggers when last slide is shown 
		    afterLoad: function(){}           // Triggers when slider has loaded 
			});
			// $('').nivoCaption({ 
		 //    // effect: 'fade',                 // Specify sets like: 'fold,fade,sliceDown' 

			// });
	  });
	 //  $(document).ready(function(){
		//   $('.nivoCaption'
		// });

		// $(window).load(function() {
		// 	function myMove() {
		//     var elem = document.getElementByClassName("nivo-caption"); 
		//     var pos = 0;
		//     var id = setInterval(frame, 5);
		//     function frame() {
		//         if (pos == 165) {
		//             clearInterval(id);
		//         } else {
		//             pos++; 
		//             elem.style.bottom = pos + 'px'; 
		//         }
		//     }
		// 	}
		// });
	  </script>
  </body>
</html>
    
