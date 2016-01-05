<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="A free tool to generate Harvard style referencing. Simpy enter the name of author, title of article, date of publication etc and get Harvard style reference. Easy tool for Harvard style referencing." />
    <meta name="keywords" content="Harvard style referencing generator, Harvard referencing generator, Online Harvard style referencing generator, Online Harvard reference generator, Harvard referencing generator tool, online Harvard referencing generator tool, generate Harvard Referencing, referencing generating tool, Online reference generating tool" />
    <meta name="author" content="metatags generator">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <title>Harvard referencing generator. Harvard Referencing for Website.</title>
    <!-- Harvard referencing generator tool, Harvard referencing generator, online Harvard referencing generator -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/global.css" media="all" />
    <link rel="icon" href="images/nepal.ico" type="image/ico">
  </head>
  <body>
    <div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="http://www.kirans.com.np" target="_blank">
                <strong>Home</strong>
                </a>
                <a href="index.php">
                <strong>Go Back</strong>
                </a>
                <span class="right">
                    <a href="#"><img src="images/social/facebook.png"></a>
                    <a href="#"><img src="images/social/twitter.png"></a>
                    <a href="#"><img src="images/social/google.png"></a>
                    <a href="#"><img src="images/social/linkedin.png"></a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span>Harverd Referencing Generator Tool.</span> Easy way to generate refrencing in Harverd Style.</h1>
				<h2>Fill out all the details below and click on Generate reference! .</h2>
      </header>

<div  class="form">
<div class="result">
<table width="100%">
<tr>
<td>
<?php

error_reporting(0);
if (empty($_POST['name']) && empty($_POST['title']) && empty($_POST['website']) && empty($_POST['year']) 
	&& empty($_POST['url']) && empty($_POST['lvisit'])) {


		echo "";
		  


}

else{

$name = strip_tags($_POST['name']);
$title =strip_tags($_POST['title']);
$website =strip_tags ($_POST['website']);
$year = strip_tags($_POST['year']);
$url =strip_tags ($_POST['url']);
$lvisit = strip_tags($_POST['lvisit']);

echo "$name. ($year).<i>$title</i>. Available from: < $url >. Last Accessed : $lvisit";

}

?>
</td>
</tr>
</table>
</div>
<br>
        <form action="website.php" method="post" id="contactform"> 
    			<p class="contact"><label for="name">Author Name</label></p> 
    			<input id="name" name="name" placeholder="Enter Author name e.g. Smith, A" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="title">Article Title</label></p> 
    			<input id="email" name="title" placeholder="Article Title:" required="" type="text"> 
                
          <p class="contact"><label for="website">Name of Website</label></p> 
    			<input id="username" name="website" required="" tabindex="2" type="text" placeholder="Name of Website."> 
    			 
          <p class="contact"><label for="year">Year of Publication</label></p> 
    			<input type="number" id="password" name="year" placeholder="eg 2015"> 
            
          <p class="contact"><label for="url">Full URL</label></p> 
          <input id="phone" name="url" required="" type="text" placeholder="e.g. http://www.bbc.co.uk/news/99_43_33.htm">
          
          <p class="contact"><label for="lvisit">Date You Last Visited</label></p>
          <input id="name" name="lvisit" type="text" required=""placeholder="e.g. 12th Apr 2015">
          
          <br>
          
          <input class="buttom" name="submit" id="submit" tabindex="5" value="Generate reference!" type="submit"> 
          <input class="buttom" name="submit" id="submit" tabindex="5" value="Reset" type="reset"> 
   </form> 
</div>      
</div>

</body>
</html>