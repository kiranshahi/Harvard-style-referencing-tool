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
  <title>Harvard referencing generator. Harvard Referencing for Journal.</title>
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
				<h2>Fill out all the details below and click on go</h2>
      </header>

<div  class="form">
<div class="result">
<?php

error_reporting(0);
if (empty($_POST['authorName']) && empty($_POST['titleOfArticle']) && empty($_POST['titleOfJournal']) && empty($_POST['yearOfPublication']) 
	&& empty($_POST['volume']) && empty($_POST['pageNo'])) {


		echo "";
		  


}

else{

$authorName = strip_tags($_POST['authorName']);
$titleOfArticle =strip_tags($_POST['titleOfArticle']);
$titleOfJournal =strip_tags ($_POST['titleOfJournal']);
$volume = strip_tags($_POST['volume']);
$yearOfPublication =strip_tags ($_POST['yearOfPublication']);
$part = strip_tags($_POST['part']);
$pageNo = strip_tags($_POST['pageNo']);

echo "<b>Reference for you:</b> <br />";
echo "$authorName. ($yearOfPublication). $titleOfArticle. <i>titleOfJournal</i>. $volume ($part), $pageNo.";

}

?>
</div>
<br>
        <form action="process.php" method="post" id="contactform"> 
    			<p class="contact"><label for="authorName">Author Name</label></p> 
    			<input name="authorName" placeholder="Enter Author name e.g. Smith, A" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="titleOfArticle">Title of Article</label></p> 
    			<input name="titleOfArticle" required="" type="text"> 
                
          <p class="contact"><label for="titleOfJournal">Title of Journal</label></p> 
    			<input name="titleOfJournal" required="" tabindex="2" type="text"> 
    			 
           <p class="contact"><label for="volume">Volume</label></p>
           <input name="volume" required="" type="number">
           
          <p class="contact"><label for="yearOfPublication">Year of Publication</label></p> 
    			<input name="yearOfPublication" type="number" placeholder="eg 2015"> 
            
          <p class="contact"><label for="url">Part</label></p> 
          <input name="part" required="" type="text" placeholder="e.g.3">
          
          <p class="contact"><label for="pageNo">Pages</label></p>
          <input name="pageNo" type="text" required=""placeholder="e.g. p61-69">
          
          <br>
          
          <input class="buttom" name="submit" id="submit" tabindex="5" value="Generate reference!" type="submit"> 
          <input class="buttom" name="submit" id="submit" tabindex="5" value="Reset" type="reset"> 	 
   </form> 
</div>      
</div>

</body>
</html>