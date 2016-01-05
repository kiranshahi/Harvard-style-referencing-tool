<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="A free tool to generate Harvard style referencing. Simpy enter the name of author, title of article, date of publication etc and get Harvard style reference. Easy tool for Harvard style referencing." />
	<meta name="keywords" content="Harvard style referencing generator, Harvard referencing generator, Online Harvard style referencing generator, Online Harvard reference generator, Harvard referencing generator tool, online Harvard referencing generator tool, generate Harvard Referencing, referencing generating tool, Online reference generating tool" />
	<meta name="author" content="metatags generator">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 days">
	<title>Harvard referencing generator. Harvard referencing for Email.</title>
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
                    <a href="#"><img src="images/social/facebook.png" title="Kiran on Facebook"></a>
                    <a href="#"><img src="images/social/twitter.png" title="Kiran on Twitter"></a>
                    <a href="#"><img src="images/social/google.png" title="Kiran on Google Plus"></a>
                    <a href="#"><img src="images/social/linkedin.png" title="Kiran on Linkedin"></a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span>Harverd Referencing Generator Tool.</span> Easy way to generate refrencing in Harverd Style.</h1>
				<h2>Fill out all the details below and click on go</h2>
      </header>

<div  class="form">
<div class="result">
<?php

error_reporting(0);
if (empty($_POST['authorName']) && empty($_POST['title']) && empty($_POST['date']) && empty($_POST['email']) 
	) {


		echo "";
		  


}

else{

$authorName = strip_tags($_POST['authorName']);
$title =strip_tags($_POST['title']);
$date =strip_tags ($_POST['date']);
$email = strip_tags($_POST['email']);

echo "<b>Reference for you:</b> <br />";
echo "$authorName. $email. $title. $date";

}

?>
</div>
<br>
        <form action="email.php" method="post" id="contactform"> 
    			<p class="contact"><label for="authorName">Author Name</label></p> 
    			<input name="authorName" placeholder="Enter Author name e.g. Smith, A" type="text" required=""> 
    			 
    			<p class="contact"><label for="title">Subject Line</label></p> 
    			<input name="title" required="" type="text"> 
          
          		<p class="contact"><label for="date">Date of Email received</label></p>
          		<input name="date" type="text" required=""placeholder="e.g. 12th Apr 2015">

          		<p class="contact"><label for="email">E-mail address</label></p> 
    			<input name="email" required="" type="email" placeholder="something@yourdomain.com">
          
          		<br>
          
          		<input class="buttom" name="submit" id="submit" tabindex="5" value="Generate reference!" type="submit"> 
          		<input class="buttom" name="submit" id="submit" tabindex="5" value="Reset" type="reset"> 	 
   </form> 
</div>      
</div>
</body>
</html>