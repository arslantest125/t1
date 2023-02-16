<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<?php 
include("./includes/system_essentials.php");
include("./includes/validators/validateLoggedUser.php");

?>

<?php include("./includes/validators/restrictDoctors.php"); ?>
<html lang="en">
<head>
<link rel="shortcut icon" href="assets/U.png">
	<title>UHeal</title>
	<?php include("./includes/metadata.php"); ?>
	<?php include("./includes/icons.php"); ?>
	<?php include("./includes/styling.php"); ?>



</head>
<body>
	<div class="main-wrapper">
		<?php include("./includes/header.php"); ?>
		<div class="container-fluid">  
		
		<br/><br/><br/><br/>
	
		<div class="row">

<div class="col-md-8 col-12 text-center mb-2">

<img class="" style="border-radius: 5px;" data-src="https://h7u5d3a4.stackpathcdn.com/assets/images/home-new/online-doctor.png" height="400" width="536" alt="online doctors" src="assets/img/24-7-doctor.jpg"/>
</div>

<div class="col-md-4 col-12 text-center" style="margin:110px 0px 0px -80px;">

	<p class="font-weight-bold mb-0 font-size-sm">Pakistan Best Service</p>

	<p class="mh font-size-xs">With Verified Hospitals</p>

	<p class="mh font-size-xs">Call Now For 24/7 Service</p>

	<!-- <p class="font-size-xs mb-2">Video Consultation | Online Prescription</p> -->

	<a href="https://web.whatsapp.com/send?phone=+92-3094626652&text&app_absent=0" target="_blank" class="btn btn-primary btn-lg btn-block semi-round" >Call Now</a>

</div>

</div>

<br/><br/><br/><br/>



</div>
</div>
<?php include("./includes/footer.php"); ?>

<?php include("./includes/scripting.php"); ?>
	
</body>

</html>