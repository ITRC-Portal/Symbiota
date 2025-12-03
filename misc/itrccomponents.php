<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title>Components</title>
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
			<b>Components</b>
		</div>

		<!-- This is inner text! -->

		<div role="main" id="innertext" style="margin:10px 20px">
			<h1 class="page-heading">Components of the International Taphonomy Reference Collection (ITRC) Portal</h1>
		
			<p>The ITRC currently includes partner collections maintained by the Smithsonian's National Museum of Natural History and the National Museums of Kenya.
			</p>
			
			<h2 class="page-heading" style="font-size: 1.5rem;">Smithsonian Paleobiology</h2>
			<ul>	
				<li style="padding: 3px;">
					Taphonomy reference examples collected by Kay Behrensmeyer and Briana Pobiner
				</li>
				<li style="padding: 3px;">
					Bone weathering time series (Amboseli National Park, Kenya) collected by Kay Behrensmeyer
				</li>
				<li style="padding: 3px;">
					River-transported bones (North America) collected by Kay Behrensmeyer
				</li>
				<li style="padding: 3px;">
					Dassanetch habitation locale food refuse (East Turkana, Kenya) collected by Diane Gifford-Gonzalez
				</li>
				<li style="padding: 3px;">
					Carnivore damaged  prey skeletons (North America, Zimbabwe) collected by Gary Haynes
				</li>
			</ul>
			
			<h2 class="page-heading" style="font-size: 1.5rem;">National Museums of Kenya - Osteology</h2>
			<ul>
				<li style="padding: 3px;">
					Individual carnivore kills collected by Titus Adhola
				</li>
				<li style="padding: 3px;">
					Hyena den bone assemblages collected by Ogeto Mwebi, Julian Kerbis Peterhans, and James Pokines
				</li>
				<li style="padding: 3px;">
					Spotted hyena den bone assemblage collected by Andrew Hill and Kay Behrensmeyer
				</li>
				<li style="padding: 3px;">
					Owl pellet assemblages collected by Veronicah Onduso and Ogeto Mwebi
				</li>
				<li style="padding: 3px;">
					Bone weathering time series (Amboseli National Park, Kenya) collected by Kay Behrensmeyer
				</li>
				<li style="padding: 3px;">
					Taphonomy reference examples collected by Kay Behrensmeyer, Andrew Hill, and Stanley Ambrose
				</li>
				<li style="padding: 3px;">
					Crowned eagle bone accumulations collected by Washington Wachira and Job Kibii
				</li>
			</ul>

			<h2 class="page-heading" style="font-size: 1.5rem;">National Museums of Kenya - Paleontology</h2>
				<ul>
					<li style="padding: 3px;">
					Taphonomically controlled fossil assemblages collected by Kay Behrensmeyer
					</li>
				</ul>
		</div>
		</div>
	</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
