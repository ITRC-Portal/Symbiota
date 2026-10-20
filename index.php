<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
        <title><?php echo $DEFAULT_TITLE; ?> Home</title>
        <?php
        include_once($SERVER_ROOT . '/includes/head.php');
        include_once($SERVER_ROOT . '/includes/googleanalytics.php');
        ?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>Este portal de datos se ha establecido para promover la colaboración... Reemplazar con texto introductorio en inglés</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour promouvoir la collaboration... Remplacer par le texte d'introduction en anglais</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>

			<div><h1>Welcome</h1></div>
			<div style=float:right>
				<img
				style="width:500px" float:right; margin: 0 0 10px 10px;
				src="<?= $CLIENT_ROOT ?>/images/layout/itrc_home_labels_7sec.gif"
				alt="Slideshow illustrating examples of taphonomic marks on bones">
			</div>
				<p>The International Taphonomy Reference Collection (ITRC) Portal provides specimen-based information on bone modifications that is designed to help paleobiologists, anthropologists, archaeologists, ecologists, and forensic scientists describe and interpret taphonomic evidence.</p>
				<p>Systems for managing specimen data often lack the structure necessary for documenting taphonomic information, and vocabulary used to describe taphonomic features varies among reference textbooks and across research disciplines. The ITRC Portal offers a standardized system for documenting taphonomic traits along with taxonomic, locality, and other curatorial information.</p>
				<p>The ITRC Portal is intended to serve as a venue for sharing taphonomic information across various scientific disciplines and to stimulate interest in visiting these collections at their host institutions.</p>
				<p>If you have collections of taphonomic interest, please consider adding them to the ITRC. Contact Kay Behrensmeyer (<a href="mailto:behrensa@si.edu">behrensa@si.edu</a>) or Jarod Hutson (<a href="mailto:HutsonJ@si.edu">HutsonJ@si.edu</a>) for more information.</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
