<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title>Structure</title>
		<?php
		include_once($SERVER_ROOT . '/includes/googleanalytics.php');
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
		<main id="innertext">
		<div>
			<a href="<?php echo htmlspecialchars($CLIENT_ROOT, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/index.php">Home</a> &gt;&gt;
			<b>Structure</b>
		</div>

		<!-- This is inner text! -->

		<div role="main" id="innertext" style="margin:10px 20px">
			<h1 class="page-heading">Structure of the International Taphonomy Reference Collection (ITRC) Portal</h1>
		
			<p>In the ITRC Portal, bone modification features and damage patterns are called “Traits.” The structure of the traits list is adapted from the “Atlas of Taphonomic Identifications” by Yolanda Fernández-Jalvo and Peter Andrews. We follow their lead in separating <strong>objective descriptions (features)</strong> from <strong>subjective interpretations (agents)</strong> of taphonomic modifications. Traits are grouped into six categories:
			</p>
				<ul style="padding-left: 50px;">
					<li style="padding: 3px;">Discoloration</li>
					<li style="padding: 3px;">Distinct Marks</li>
					<li style="padding: 3px;">Surface Damage</li>
					<li style="padding: 3px;">Fracture Features</li>
					<li style="padding: 3px;">Other</li>
					<li style="padding: 3px;">Weathering Stage</li>
				</ul>
			<p style="font-size:75%;">Fernández-Jalvo, Y. and Andrews, P., 2016. Atlas of Taphonomic Identifications: 1001+ Images of Fossil and Recent Mammal Bone Modification. Springer, Dordrecht.
			</p>
		
			<img style="max-width:100%; display:block; margin-left:auto; margin-right:auto;" src="<?= $CLIENT_ROOT ?>/images/layout/About_Ambo2010ZebraSkeleton.jpg">
	</div>
	</div>
	</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
