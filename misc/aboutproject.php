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
			<h2 class="page-heading" style="font-size: 1.5rem;">Components of the International Taphonomy Reference Collection (ITRC) Portal</h1>
				<p>The ITRC currently includes partner collections maintained by the Smithsonian's National Museum of Natural History and the National Museums of Kenya.</p>

			<h2 class="page-heading" style="font-size: 1.5rem;">Smithsonian Paleobiology</h2>
			<ul>	
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
</ul>
			<h2 class="page-heading" style="font-size: 1.5rem;">National Museums of Kenya - Osteology</h2>
			<ul>
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
			</ul>

			<h2 class="page-heading" style="font-size: 1.5rem;">National Museums of Kenya - Paleontology</h2>
				<ul>
					<li>
					Taphonomically controlled fossil assemblages collected by Kay Behrensmeyer
					</li>
				</ul>
			
			<h2 class="page-heading" style="font-size: 1.5rem;">Structure of the International Taphonomy Reference Collection (ITRC) Portal</h2>
				<p>In the ITRC Portal, bone modification features and damage patterns are called “Traits.” The structure of the traits list is adapted from the “Atlas of Taphonomic Identifications” by Yolanda Fernández-Jalvo and Peter Andrews. We follow their lead in separating <strong>objective descriptions (features)</strong> from <strong>subjective interpretations (agents)</strong> of taphonomic modifications. Traits are grouped into six categories:</p>
				<ul style="padding-left: 40px;">
					<li>Discoloration</li>
					<li>Distinct Marks</li>
					<li>Surface Damage</li>
					<li>Fracture Features</li>
					<li>Other</li>
					<li>Weathering Stage</li>
				</ul>
				<p style="font-size:75%;">Fernández-Jalvo, Y. and Andrews, P., 2016. Atlas of Taphonomic Identifications: 1001+ Images of Fossil and Recent Mammal Bone Modification. Springer, Dordrecht.</p>
				<img style="max-width:80%; display:block; margin-left:auto; margin-right:auto;" src="<?= $CLIENT_ROOT ?>/images/layout/About_Ambo2010ZebraSkeleton.jpg">
		</div>

		<div>	
		<h2 class="page-heading" style="font-size: 1.5rem;">Team Taphonomy</h2>
			<img style="max-width:100%" src="<?= $CLIENT_ROOT ?>/images/layout/About_NMK_NMNHGroupphoto.jpg">
				<table style="max-width:100%; margin-left: auto; margin-right: auto; text-align: left;">
  				<tr>
				 	<th style="padding: 2px; border-bottom: 2px solid #000; vertical-align: center; text-align: center">National Museums<br>of Kenya</th>
					 <th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center"></th>
					 <th style="padding: 2px; border-bottom: 2px solid #000; vertical-align: top; text-align: center">National Museums<br>of Kenya<br><i>Paleontology</i></th>
					 <th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center"></th>
					 <th style="padding: 2px; border-bottom: 2px solid #000; vertical-align: top; text-align: center">National Museums<br>of Kenya<br><i>Osteology</i></th>
					 <th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center"></th>
					<th style="padding: 2px; border-bottom: 2px solid #000; vertical-align: top; text-align: center">Smithsonian<br>National Museum<br>of Natural History</th>
					<th style="padding: 15px; border-bottom: 0px solid #000; vertical-align: center; text-align: center"></th>
					<th style="padding: 2px; border-bottom: 2px solid #000; vertical-align: center; text-align: center">Advisors</th>
 				 </tr>
  				<tr>
				  	<td style="padding: 3px;">Stephen Maikweki</td>
					<td></td>
					<td style="padding: 3px;">Samuel Ngui Muteti</td>
					<td></td>
					<td style="padding: 3px;">Ogeto Mwebi</td>
					<td></td>
					<td style="padding: 3px;">Kay Behrensmeyer</td>
					<td></td>
					<td style="padding: 3px;">Jean-Philip Brugal</td>
  				</tr>
  				<tr>
				  	<td style="padding: 3px;"></td>
					<td></td>
				  	<td style="padding: 3px;">Rose Nyaboke</td>
					<td></td>
				  	<td style="padding: 3px;">Esther Nguta</td>
					<td></td>
					<td style="padding: 3px;">Jarod Hutson</td>
					<td></td>
					<td style="padding: 3px;">Gary Haynes</td>
  				</tr>
  				<tr>
				  	<td style="padding: 3px;"></td>
					<td></td>
				  	<td style="padding: 3px;">Patrick Nyaga</td>
					<td></td>
				  	<td style="padding: 3px;">Ben Nyakundi</td>
					<td></td>
					<td style="padding: 3px;">Holly Little</td>
					<td></td>
					<td style="padding: 3px;">Diane Gifford-Gonzalez</td>
  				</tr>
  				<tr>
				  <td style="padding: 3px;"></td>
				  <td></td>
				  <td style="padding: 3px;">Cecilia Kanyua</td>
					<td></td>
				  	<td style="padding: 3px;">Veronicah Onduso</td>
					<td></td>
					<td style="padding: 3px;">Briana Pobiner</td>
					<td></td>
					<td style="padding: 3px;">María A. Gutiérrez</td>
					<td></td>
  				</tr>
  				<tr>
				  	<td style="padding: 3px;"></td>
					<td></td>
				  	<td style="padding: 3px;">Beatrice Otebo</td>
					<td></td>
				  	<td style="padding: 3px;">Hezekiah Obwang'i</td>
					<td style="padding: 3px;"></td>
					<td style="padding: 3px;"></td>
  				</tr>
  				<tr>
				    <td style="padding: 3px;"></td>
					<td></td>
				  	<td style="padding: 3px;">Justice Paul</td>
					<td></td>
				  	<td style="padding: 3px;">Joseph Rumoky</td>
					<td style="padding: 3px;"></td>
					<td style="padding: 3px;"></td>
  				</tr>
			</table>

		</div>
	</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>