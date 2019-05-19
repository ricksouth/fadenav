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
				// 2. Create an array of the navigation values.
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

	<!-- 6. (Optional) Process the navigation change -->
	<script>
		var randomized = 0;
		function processFadeNav(value) {
			var num = Math.floor((Math.random() * 100000) + 1);
			randomized = num;

			$.ajax({
				type: "POST",
				url: "/path/to/get.php",
				data: { 
					data : value
				},
				success: function(data) {
					if (num == randomized) {
						$("#id").html(data);
					}
				},
				error: function(data) {}
			});
		}
	</script>
</html>