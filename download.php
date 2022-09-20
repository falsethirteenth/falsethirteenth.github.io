<!doctype html>
<html lang="en-US">
<head>
<title>RPCS3 - Download</title>
<meta charset="utf-8">
<meta name="description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, download">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - Download" />
<meta property="og:description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration." />
<meta property="og:image" content="https://rpcs3.net/img/meta/mobile/1200.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://rpcs3.net" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RPCS3" />

<meta name="twitter:title" content="RPCS3 - Download">
<meta name="twitter:description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration.">
<meta name="twitter:image" content="https://rpcs3.net/img/meta/mobile/1200.png">
<meta name="twitter:site" content="@rpcs3">
<meta name="twitter:creator" content="@rpcs3">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
			</div>
		</div>
	</div>
			<div class='version-con-container'>
				<div class='version-img-container'>
					<div class='version-img-package'>
					</div>
				</div>
				<div>
				</div>
				<div>
					<div>
					</div>
					<div>
					</div>
					</div>
			</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>
