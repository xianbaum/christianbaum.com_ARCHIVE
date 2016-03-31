<?php
function pheader() {
if(!isset($GLOBALS['back']))
  $GLOBALS['back'] = '';
if(!isset($GLOBALS['title']))
  $GLOBALS['title'] = 'Error';
echo '<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8"/>
    <title>'.$GLOBALS['title'].'</title>
    <link rel="stylesheet" href="'.$GLOBALS['back'].'theme2.css" type="text/css" />
    <!--[if lt IE 7]>
    <style type="text/css">
    #container {
    	       height: 100%;
	    p   }
    div#circle { height: 300px !important;
    	       width: 300px !important; }
    div#right {
    	      width: 600px !important;
	      height: 340px !important;
    }
    div#rightnocircle {
    	      width: 845px !important;
	      height: 340px !important;
    }
    </style>
    <![endif]-->
    <!--[if lte IE 7]>
    <style type="text/css">
    div#circle, div#right {
    	       display: inline;
	       zoom: 1;
	       }
    </style>
    <![endif]-->
  </head>
  <body><div id="container"> 
    <ul id="nav">
      <li><a href="'.$GLOBALS['back'].'index.php" class = "fleft">Home</a></li>
      <li><a href="'.$GLOBALS['back'].'about.php" class = "fleft">About</a></li>
      <li><a href="'.$GLOBALS['back'].'portfolio.php" class = "fleft">Portfolio</a></li>
      <li><a href="'.$GLOBALS['back'].'contact.php" class = "fleft" >Contact</a></li>
      <li><a href="https://github.com/xianbaum/" class = "fright" >GitHub</a></li>
      <li><a href="http://devblog.christianbaum.com" class="fright">Dev Blog</a></li>
    </ul>
    <div id="main">';
}

function pcircle( $image_url ) {
$GLOBALS['ncstring'] = '';
echo '<div id="circle"><img src = "'.$image_url.'" /></div>';
}

function pmain() {
      if(!isset($GLOBALS['ncstring']))
	$GLOBALS['ncstring'] = 'nocircle';
      echo '<div id="right'.$GLOBALS['ncstring'].'">
	   <div id = "header"><h1>'.$GLOBALS['title'].'</h1></div>
	   <div id = "article">';
}

function pfooter() {
echo '
	   </div>
      </div>
    </div>
    <div id = "footer">Christian Baum <a href="contact.php">Contact</a></div>
  </div></body>
</html>
';
}
?>
