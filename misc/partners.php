<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title>Team Taphonomy</title>
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
			<a href="../index.php"><?php echo htmlspecialchars((isset($LANG['HOME'])?$LANG['HOME']:'Home'), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?></a> &gt;&gt;
			<b>Team Taphonomy</b>
		</div>

		<!-- This is inner text! -->
		<div role="main" id="innertext" style="margin:10px 20px">
			<h1 class="page-heading">Team Taphonomy</h1>
		</div>	
		
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
		
		</main>
			<?php
			include($SERVER_ROOT.'/includes/footer.php');
			?>
		</body>
</html>