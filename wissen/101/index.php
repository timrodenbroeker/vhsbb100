
<?php 
	include("../components/header.php");
	include("../components/preloader.php"); 
	include("intro.php");
	echo '<div class="spacer" id="story"></div>';
	include("story.php"); 
	echo '<div class="spacer"></div>';
	echo '<hr>';
	echo '<div class="spacer"></div>';
	include("kurse.php"); 
	echo '<div class="spacer"></div>';
	echo '<hr>';
	echo '<div class="spacer"></div>';
	include("abspann.php");
	echo '<div class="spacer"></div>';
	include("logo.php"); 

	// include("ctas.php");
	// echo '<div class="spacer"></div>';
	include("../components/footer.php") 
?>
