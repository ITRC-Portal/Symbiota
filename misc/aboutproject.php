<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title>About Project</title>
		<?php
		include_once($SERVER_ROOT . '/includes/googleanalytics.php');
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<div>
			<a href="../index.php"><?php echo htmlspecialchars((isset($LANG['HOME'])?$LANG['HOME']:'Home'), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?></a> &gt;&gt;
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'About the Project'); ?></b>
		</div>

		<!-- This is inner text! -->

		<div role="main" id="innertext" style="margin:10px 20px">
			<h1 class="page-heading">About the International Taphonomy Reference Collection (ITRC) Portal</h1>
			<h2>Table of Contents</h5>
		</div>
		<div>
			<table style="max-width:100%; margin-left: auto; margin-right: auto; text-align: left;">
  				<tr>
				 	<th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center; font-size: 1.25rem;"><a href="<?php echo $CLIENT_ROOT; ?>/misc/itrccomponents.php" target="Components">Components of the International Taphonomy Reference Collection (ITRC) Portal</a></th>
 				 </tr>
				<tr>
				 	<th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center; font-size: 1.25rem;"><a href="<?php echo $CLIENT_ROOT; ?>/misc/itrcstructure.php" target="Structure">Structure of the International Taphonomy Reference Collection (ITRC) Portal</th>
 				 </tr>
				  <tr>
				 	<th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center; font-size: 1.25rem;"><a href="<?php echo $CLIENT_ROOT; ?>/misc/partners.php">Team Taphonomy</a></th>
				</tr>
			</table>

		</div>
	</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>