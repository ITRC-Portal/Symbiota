<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
        include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
        <header>
                <div class="top-wrapper">
                        <a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
                        <nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME; ?>!
					</div>
	                                <span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
                                        <span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<!-- <span class="button button-tertiary">
						<a onclick="window.location.href='#'">
							Contact Us
						</a>
					</span> -->
					<span class="button button-secondary">
						<a href="<?php echo $CLIENT_ROOT . "/profile/index.php?refurl=" . $_SERVER['SCRIPT_NAME'] . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/left_logo.png" alt="Symbiota logo">
					</div>
				</a>
				<div class="brand-name">
					<h1>International Taphonomy Reference Collection</h1>
					<!-- <h2>Redesigned by the Symbiota Support Hub</h2> -->
				</div>
			</div>
		</div>
                <div class="menu-wrapper">
                        <!-- Hamburger icon -->
                        <input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
                        <label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
                        <!-- Menu -->
                        <nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/misc/aboutproject.php">
							<?= $LANG['H_ABOUT_PROJECT'] ?>
						</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/partners.php">
									<?= $LANG['H_PARTNERS'] ?>
								</a>
							</li>
						</ul>
					<li>
						<a href="<?php echo $CLIENT_ROOT . $collectionSearchPage ?>">
							<?= $LANG['H_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank" rel="noopener noreferrer">
							<?= $LANG['H_MAP_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php">
							<?= $LANG['H_IMAGES'] ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer">
							<?= $LANG['H_HELP'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT; ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>

						<!-- Language toggle commented out
					<li>
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
							<option value="fr" <?php echo ($LANG_TAG=='fr'?'SELECTED':''); ?>>Français</option>
						</select>
					</li> -->
				</ul>
			</nav>
		</div>
	</header>
</div>
