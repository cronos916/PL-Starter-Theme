<!DOCTYPE html>  <!-- html5 baby! -->
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<title><?php // creates dynamic titles
  if (isset($pageTitle)) {
	echo $pageTitle;
  } else {
	echo "PL Starter Template";  //fallback title 
  }
?></title>
<link rel="stylesheet" href="css/reset.css" />  <!-- uses 960 grid system - Learn more at http://960.gs -->
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/default.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  <!-- Link to hosted jQuery Library - Remove if unnecessary -->
<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->
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
    '0px    to 760px  = 324.css',
    '760px  to 980px  = 720.min.css',
    '980px  to 1280px = 960.min.css',
    '1280px to 1600px = 1200.min.css',
    '1600px to 1940px = 1560.min.css',
    '1940px to 100000000002540px = 1920.min.css',
    //'2540px to        = 2520.min.css'
  ]
};
</script>
<script src="js/adapt.min.js"></script>

</head>
<body>
<div id="wrap">
	<div id="main">
        <!--<div class="pulldown">   CSS only pull down menu 
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <a href="http://cms.pagelime.com/CMS/Login.aspx">Login to PL</a>
                </div>
            </div>
        </div> -->
        <header>
            <div class="container_12 clearfix">
                <div class="grid_6 logo">PL Starter Template
                </div>
                <nav id="mainNav" class="cms-navigation grid_6 mainNav">  <!-- activates the Navigation Menu in PL -->
                    <ul>  <!-- use an unordered list to create navigation - Not p and br tags! -->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="content.php">Content</a></li>
                        <li><a href="#">Item 3</a></li>
                        <li><a href="#">Item 4</a></li>
                    </ul>
                </nav>
            </div>	
        </header>