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
			<h2 class="page-heading">Components of the International Taphonomy Reference Collection (ITRC) Portal</h2>
				<p>The ITRC currently includes partner collections maintained by the Smithsonian's National Museum of Natural History and the National Museums of Kenya.</p>
			
			<h2 class="page-heading">Smithsonian Paleobiology</h2>
				<li>
					Taphonomy reference examples collected by Kay Behrensmeyer and Briana Pobiner
				</li>
				<li>
					Bone weathering time series (Amboseli National Park, Kenya) collected by Kay Behrensmeyer
				</li>
				<li>
					River-transported bones (North America) collected by Kay Behrensmeyer
				</li>
				<li>
					Dassanetch habitation locale food refuse (East Turkana, Kenya) collected by Diane Gifford-Gonzalez
				</li>
				<li>
					Carnivore damaged  prey skeletons (North America, Zimbabwe) collected by Gary Haynes
				</li>
			
				<h2 class="page-heading">National Museums of Kenya - Osteology</h2>
				<li>
					Individual carnivore kills collected by Titus Adhola
				</li>
				<li>
					Hyena den bone assemblages collected by Ogeto Mwebi, Julian Kerbis Peterhans, and James Pokines
				</li>
				<li>
					Spotted hyena den bone assemblage collected by Andrew Hill and Kay Behrensmeyer
				</li>
				<li>
					Owl pellet assemblages collected by Veronicah Onduso and Ogeto Mwebi
				</li>
				<li>
					Bone weathering time series (Amboseli National Park, Kenya) collected by Kay Behrensmeyer
				</li>
				<li>
					Taphonomy reference examples collected by Kay Behrensmeyer, Andrew Hill, and Stanley Ambrose
				</li>
				<li>
					Crowned eagle bone accumulations collected by Washington Wachira and Job Kibii
				</li>

			<h2 class="page-heading">National Museums of Kenya - Paleontology</h2>
				<li>
					Taphonomically controlled fossil assemblages collected by Kay Behrensmeyer
				</li>
			
			<h2 class="page-heading">Structure of the International Taphonomy Reference Collection (ITRC) Portal</h2>
				<p>In the ITRC Portal, bone modification features and damage patterns are called “Traits.” The structure of the traits list is adapted from the “Atlas of Taphonomic Identifications” by Yolanda Fernández-Jalvo and Peter Andrews. We follow their lead in separating <strong>objective descriptions (features)</strong> from <strong>subjective interpretations (agents)</strong> of taphonomic modifications. Traits are grouped into six categories:</p>
					<li>Discoloration</li>
					<li>Distinct Marks</li>
					<li>Surface Damage</li>
					<li>Fracture Features</li>
					<li>Other</li>
					<li>Weathering Stage</li>
				<p style="font-size:75%;">Fernández-Jalvo, Y. and Andrews, P., 2016. Atlas of Taphonomic Identifications: 1001+ Images of Fossil and Recent Mammal Bone Modification. Springer, Dordrecht.</p>
		</div>
		<div>
				<img style="max-width:100%" src="<?= $CLIENT_ROOT ?>/images/layout/About_NMK_NMNHGroupphoto.jpg">
		</div>	
		<div>	
				<h2 class="page-heading">Team Taphonomy</h2>
				<table>
  				<tr>
    				<th>National Museums<br>of Kenya</th>
    				<th>Smithsonian<br>National Museum of<br>Natural History</th>
    				<th>Advisors</th>
 				 </tr>
  				<tr>
					<td>Stephen Maikweki</td>
					<td>Kay Behrensmeyer</td>
					<td>Jean-Philip Brugal</td>
  				</tr>
  				<tr>
					<td>Samuel Muteti</td>
					<td>Jarod Hutson</td>
					<td>Gary Haynes</td>
  				</tr>
  				<tr>
					<td>Ogeto Mwebi</td>
					<td>Holly Little</td>
					<td>Diane Gifford-Gonzalez</td>
  				</tr>
  				<tr>
					<td>Esther Nguta</td>
					<td>Briana Pobiner</td>
					<td>María A. Gutiérrez</td>
  				</tr>
  				<tr>
					<td>Rose Nyaboke</td>
					<td></td>
					<td></td>
  				</tr>
  				<tr>
					<td>Patrick Nyaga</td>
					<td></td>
					<td></td>
  				</tr>
  				<tr>
					<td>Ben Nyakundi</td>
					<td></td>
					<td></td>
  				</tr>
  				<tr>
					<td>Veronicah Onduso</td>
					<td></td>
					<td></td>
  				</tr>
			</table>

		</div>
	</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>