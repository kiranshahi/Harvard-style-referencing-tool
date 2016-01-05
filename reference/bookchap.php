<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="A free tool to generate Harvard style referencing. Simpy enter the name of author, title of article, date of publication etc and get Harvard style reference. Easy tool for Harvard style referencing." />
    <meta name="keywords" content="Harvard style referencing generator, Harvard referencing generator, Online Harvard style referencing generator, Online Harvard reference generator, Harvard referencing generator tool, online Harvard referencing generator tool, generate Harvard Referencing, referencing generating tool, Online reference generating tool" />
    <meta name="author" content="metatags generator">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <title>Harvard referencing generator. Harvard referencing for Chapter of Book.</title>
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
                <strong>
                Go Back
                </strong>
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
<table width="100%">
<tr>
<td>
<?php

error_reporting(0);
if (empty($_POST['authorName']) && empty($_POST['titleOfChapter']) && empty($_POST['titleOfBook']) && empty($_POST['editorsOfBook']) 
	&& empty($_POST['yearOfPublication']) && empty($_POST['placeOfPublication'])) {


		echo "";
		  


}

else{

$authorName = strip_tags($_POST['authorName']);
$titleOfChapter =strip_tags($_POST['titleOfChapter']);
$titleOfBook =strip_tags ($_POST['titleOfBook']);
$editorsOfBook = strip_tags($_POST['editorsOfBook']);
$yearOfPublication =strip_tags ($_POST['yearOfPublication']);
$placeOfPublication = strip_tags($_POST['placeOfPublication']);
$publisher = strip_tags($_POST['publisher']);
$edition = strip_tags($_POST['edition']);
$pageno = strip_tags($_POST['pageno']);

echo "<b>Reference for you:</b> <br />";
echo "$authorName. ($yearOfPublication). $titleOfChapter. In: $editorsOfBook <i>$titleOfBook</i>. $edition. $placeOfPublication: $publisher. $pageno";

}

?>
</td>
</tr>
</table>
</div>
<br>
        <form action="bookchap.php" method="post" id="contactform">
            <p class="contact"><label for="authorName">Author Name</label></p>
            <input name="authorName" placeholder="Enter Author name e.g. Smith, A" type="text">

            <p class="contact"><label for="titleOfChapter">Title of Chapter</label></p>
            <input name="titleOfChapter" required="" type="text">

            <p class="contact"><label for="titleOfBook">Title of Book</label></p>
            <input name="titleOfBook" required="" type="text">

            <p class="contact"><label for="editorsOfBook">Editors of Book</label></p>
            <input name="editorsOfBook" type="text" placeholder="eg Smith, A. and Peters, D.">

            <p class="contact"><label for="yearOfPublication">Year of Publication</label></p>
            <input name="yearOfPublication" required="" type="number" placeholder="Eg. 2015">

            <p class="contact"><label for="placeOfPublication">Place of Publication</label></p>
            <input name="placeOfPublication" type="text" required=""placeholder="Eg. Kathmandu">

            <p class="contact"><label for="publisher">Publisher</label></p>
            <input name="publisher" type="text" required="">

            <p class="contact"><label for="edition">Edition</label></p>
            <select name="edition">
                <option value="1st ed">1st Edition</option>
                <option value="2nd ed">2nd Edition</option>
                <option value="3rd ed">3rd Edition</option>
                <option value="4th ed">4th Edition</option>
                <option value="5th ed">5th Edition</option>
                <option value="6th ed">6th Edition</option>
                <option value="7th ed">7th Edition</option>
                <option value="8th ed">8th Edition</option>
                <option value="9th ed">9th Edition</option>
                <option value="10th ed">10th Edition</option>
                <option value="11th ed">11th Edition</option>
                <option value="12th ed">12th Edition</option>
                <option value="13th ed">13th Edition</option>
                <option value="14th ed">14th Edition</option>
                <option value="15th ed">15th Edition</option>
                <option value="16th ed">16th Edition</option>
                <option value="17th ed">17th Edition</option>
                <option value="18th ed">18th Edition</option>
                <option value="19th ed">19th Edition</option>
                <option value="20th ed">20th Edition</option>
            </select>
            <p class="contact"><label for="pageno">Pages</label></p>
            <input type="text" name="pageno" placeholder="e.g. p61-69">

            <input class="buttom" value="Generate reference!" type="submit"> 
            <input class="buttom" value="Reset" type="reset"> 	 
   </form> 
</div>      
</div>

</body>
</html>