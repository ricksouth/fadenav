var ok = { "escape" : 27 };
var ak = { "left" : 37, "right" : 39 };

var startnav = 0;
var activenav = 0;
var hidden = false;
var navoptions = [];

$(document).ready(function(e) { 
	$(".fadenavwrapper .navoptions option").each(function() {
		navoptions.push($(this).val());
	});
	window.to = setTimeout(function(){ 
		centerCategoryMenu();
	}, 0);
});
$(document).keydown(function(e) { 
	if (Object.values(ak).indexOf(e.which) > -1 || e.which == ok['escape']) {
		if (e.which == ak['left']) {
			activenav--;
			if (activenav < 0) {
				activenav = navoptions.length - 1;
			}
		}
		else if (e.which == ak['right']) {
			activenav++;
			if (activenav > (navoptions.length - 1)) {
				activenav = 0;
			}
		}
		else if (e.which == ok['escape']) {
			if (activenav == startnav) {
				return;
			}
			activenav = startnav;
		}
		else {
			return;
		}

		updateFadeNav(activenav);
	}
	else {
		if (shifted) {
			checkNavOptions(e.which);
		}
	}
});

function checkNavOptions(keycode) {
	var key = String.fromCharCode(keycode).toLowerCase();

	var i = 0;
	navoptions.forEach(function(r) {
		if (key == r[0] && i != activenav) {
			console.log(r);
			updateFadeNav(i);
			return false;
		}
		i++;
	});
}

function updateFadeNav(navi, setviacode=false) {
	console.log(0, i);
	var i = navi - 2;
	if (i < 0) {
		if (navoptions.length == 1) {
			i = 0
		}
		else {
			i = navoptions.length + i;
		}
	}
	console.log(1, i);

	$(".fadenavwrapper p").each(function(e) {
		console.log(2, i);
		if (i > (navoptions.length - 1)) {
			i = 0;
		}
		console.log(3, i);

		var title = navoptions[i].charAt(0).toUpperCase() + navoptions[i].slice(1).toLowerCase();
		$(this).text(title);
		i++;
	});

	activenav = navi;
	centerCategoryMenu();

	if (typeof processFadeNav == 'function' && !setviacode) {
		processFadeNav($("#cat-active").text());

		if (!$("body").hasClass("hidepointer")) {
			$("body").addClass("hidepointer");
		}
		hidden = true;
	}
}

function centerCategoryMenu() {
	var spanwidth = $(".fadenavwrapper #cat-before-two").width() + $(".fadenavwrapper #cat-before-one").width() + ($(".fadenavwrapper #cat-active").width() / 2) + 16;
	$(".fadenavwrapper").css("left", "calc(50% - " + spanwidth + "px").removeClass('hidden', 1000);
}

$("body").mousemove(function(e) {
	if (hidden) {
		$("body").removeClass("hidepointer");
		hidden = false;
	}
});

function setFadeNav(identifier) {
	var navi = 0;
	if(typeof obj === 'number') {
		navi = parseInt(identifier);
	}
	else {
		for (var i = 0; i < navoptions.length; i++) {
		if (navoptions[i].trim() === identifier.trim()) {
				navi = i;
				break;
			}
		}
		activenav = navi;
	}

	updateFadeNav(navi, true);
}

var ctrled = false;
var shifted = false;
$(document).on('keyup keydown', function(e) {
	ctrled = e.ctrlKey;
	shifted = e.shiftKey;
});