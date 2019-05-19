<?php
	function setFadeNav($identifier) {
		$num = 0;
		global $fadenav;
		if ($identifier == "before-two") {
			$num = count($fadenav) - 2;
		}
		else if ($identifier == "before-one") {
			$num = count($fadenav) - 1;
		}
		else if ($identifier == "after-one") {
			$num = 1;
		}
		else if ($identifier == "after-two") {
			$num = 2;	
		}
		if ($num > count($fadenav) - 1) {
			$num = count($fadenav) - 1;
		}
		else if ($num < 0) {
			$num = 0;
		}
		return ucwords($fadenav[$num]);
	}

	echo '<div class="fadenavwrapper">';
	echo '	<select class="navoptions" hidden>';
	foreach ($fadenav as $nav) { 
		echo "<option>" . $nav . "</option>";
	};
	echo '</select>';
	echo '	<p id="cat-before-two" class="smallest">' . setFadeNav("before-two") . '</p>';
	echo '	<p id="cat-before-one" class="smaller">' . setFadeNav("before-one") . '</p>';
	echo '	<p id="cat-active">' . setFadeNav("active") . '</p>';
	echo '	<p id="cat-after-one" class="smaller">' . setFadeNav("after-one") . '</p>';
	echo '	<p id="cat-after-two" class="smallest">' . setFadeNav("after-two") . '</p>';
	echo '</div>';
?>