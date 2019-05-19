<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="cleartype" content="on">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="HandheldFriendly" content=True>
		<meta name="MobileOptimized" content=320>
		<title>FadeNav Example</title>
		<meta name="description" content="Source available at https://github.com/natamus/fadenav.">
		<!-- 1. Include CSS stylesheet (fadenav.css) -->
		<link rel="stylesheet" href="fadenav.css">
	</head>
	<body>
		<div style="width: 100%; height: 100%;">
			<?php
				// 2. Create array of navigation values.
				$fadenav = array("one", "two");

				// 3. Include PHP script (fadenav.php)
				include 'fadenav.php';
			?>
		</div>
	</body>
	<!-- 4. Include JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- 5. Include Javascript script (fadenav.js) -->
	<script type="text/javascript" src="fadenav.js"></script>
</html>