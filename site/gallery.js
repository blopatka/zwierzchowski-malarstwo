$(document).ready(function() {
		$('#tresc div.kafel a').attr('rel','gallery').addClass('group');
		$('#tresc div.kafel a img').imgCenter({parentSteps: 1, scaleToFit: false});
		$('#tresc .zawartosc a.group').fancybox();		
	});