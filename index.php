	<?php $pageTitle = "PL Starter Template: Home"; include("includes/header.php"); ?>  <!-- this pulls the header.php file from the includes folder -->
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