<!DOCTYPE html>  <!-- html5 baby! -->
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<title>PL Starter Template</title>
<link rel="stylesheet" href="css/reset.css" />  <!-- uses 960 grid system - Learn more at http://960.gs -->
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/default.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  <!-- Link to hosted jQuery Library - Remove if necessary -->
<noscript>
<link rel="stylesheet" href="css/mobile.css" />
</noscript>
<script>
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: 'css/',

  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,

  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.css',
    '760px  to 980px  = 720.min.css',
    '980px  to 1280px = 960.min.css',
    '1280px to 1600px = 1200.min.css',
    '1600px to 1940px = 1560.min.css',
    '1940px to 2540px = 1920.min.css',
    '2540px           = 2520.min.css'
  ]
};
</script>
<script src="js/adapt.min.js"></script>
</head>
<body>
	<?php include("includes/header.php"); ?>  <!-- this pulls the header.php file from the includes folder -->
    <section class="mainGraphic"> <!-- I use a section tag to denote a new main section of the website. -->
        <div class="container_12 clearfix">  <!-- using a class of container_12 sets up a grid that is 960 pixels wide with 12 columns-->
        	<div class="grid_12">
                <img id="mainGraphicImg" class="cms-editable" src="http://placehold.it/940x200&text=Main+Graphic" alt="image">  <!-- This makes the main graphic editable. Make sure to use an unique ID and the class cms-editable but don't add any styles to it. Add another class if you want to style-->
            </div>
        </div>	
    </section>  
    <section class="callToAction">	
    	<div class="container_12 clearfix"> <!-- I add a clearfix class everytime I add a container_12 class. This clears all floats nested inside -->
        	<div class="grid_12">
                <a href="#" id="callToAction" class="cms-editable"><img src="http://placehold.it/940x80&text=Call+To+Action" alt="image"></a> <!-- always add an alt attribute -->
            </div>
        </div>	
    </section>
    
    
    <section class="highlights"> <!-- Again we have a new section of the site - By using section tag I add meaning to my code -->
    	<div class="container_12 clearfix">
        	<a id="hLink1" href="#" class="grid_4 cms-editable"> <!-- states that I want my content to be only 4 columns of the grid -->
            	<h2 id="hLinkTitle1" class="cms-editable-text">Magna Aliqua</h2> <!-- appending -text to the cms-editable tag uses a wysiwyg editor -->
            	<img src="http://placehold.it/300x100&text=Highlights+Image" alt="image">
                <p id="hLinkP1" class="cms-editable-text" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </a>
            <a href="#" class="grid_4">
            	<h2>Dolor Sit Amet</h2>
            	<img src="http://placehold.it/300x100&text=Highlights+Image" alt="image">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </a>
            <a href="#" class="grid_4">
            	<h2>Aliquip Ex Ea</h2>
            	<img src="http://placehold.it/300x100&text=Highlights+Image" alt="image">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </a>
        </div>	
    </section>
    <section class="gallery">  <!-- easy cheesy gallery -->
    	<div class="container_12 clearfix cms-editable-text" id="gallery">
        	<h2 class="grid_12">Gallery</h2>
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
            <img src="http://placehold.it/140&text=Image" class="grid_2" alt="image">
        </div>	<!-- Yes Yes I know this doesnt include any fancy lightbox stuff. But your a rockstar developer now, you add it. -->
    </section>
    <?php include("includes/footer.php"); ?>  <!-- I prefer to use includes for common areas of the site that are reused -->
</body>
</html>

<!----------------------------------
	
	PL Starter Theme by KJ Sampat
	kjsampat.com
	@kjsampat 
	
	-------------------------------->