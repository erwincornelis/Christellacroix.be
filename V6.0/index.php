<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
    <head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>Christel Lacroix</title> 
	
	<meta name="description" content="Een Dynamisch Stemgebruik met een Goede Ademhaling en een Mooie Verzorgde Uitspraak geschikt voor Presentaties , Camera en Lesgeven zodat je Goed Gestemd door het Spreken gaat op Radio en Televisie" />
	<meta name="keywords" content="Coach, Stemcoaching, Training, Stemtraining, Stem, Therapeut, Praktijk, Logopedist, Logopediste, Rekenen, 
Lezen, Schrijven, Dyslexie, Dysorthografie, Dyscalculie, Presentatie, Microfoon, Mooie stem, Keelpijn, Stemmoe, Rekenproblemen, Leesproblemen, ADHD, CVS, Fibromylagie, Uitspraak, Articulatie, Radio, TV, 
Televisie, Stemtest, Cameratraining, Leerkracht, Lesgeven, Workshop, Goed Gestemd, Kinderen, Volwassenen, Nasaliteit, Afwijkend mondgedrag, Stem verzorgen, Dialect, Regionale klankkleur, Stembeheersing, Intonatie, 
Pauze, Klemtonen, Stemdynamiek, Verzorgde uitspraak, Mediatraining, Ademhaling, Heesheid, Stemadvies, Stemhygiëne, Mompelen, Roepen, VRT, VTM, Woestijnvis, Taalachterstand, Slissen, R probleem" />
	<meta name="revisit-after" content="1 month" />
	<meta name="web_author" content="Erwin Cornelis" />
	
	<meta http-equiv="language" content="NL" />

	<link rel="stylesheet" type="text/css" href="style.css" />

	<link rel="stylesheet" href="fonts/parisine/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="fonts/parisinebold/stylesheet.css" type="text/css" />

	<script type="text/javascript" src="jquery/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui-1.8.21.custom.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.innerfade.js"></script>
	<script type="text/javascript" src="jquery/jquery.emailSpamProtection.1.0.js"></script>
	<script type="text/javascript" src="jquery/jquery.ba-hashchange.min.js"></script>

	<script type="text/javascript">
	
	    var currentheadLocation = null;
	    var currentSubLocation = null;
	    var currentLocation = null;
	    var praktijkNavSet = false;
	    var fadeSpeed = 150;
	    
	    		
	    function addCorners() {
			var corners = '';
			corners += '<div class="gray-rounded-corner-top-left"></div>';
			corners += '<div class="gray-rounded-corner-top-right"></div>'; 
			corners += '<div class="gray-rounded-corner-bottom-left"></div>';
			corners += '<div class="gray-rounded-corner-bottom-right"></div>';

			return corners;
	    }
	    
	    $(function() {

		$(window).hashchange(function() {			
		    currentLocation = String(document.location.hash).substr(1).split("-");
		    currentHeadLocation = currentLocation[0];		
			
		    if(currentLocation.length > 1) {
			currentSubLocation = currentLocation[1];
		    } else {
			currentSubLocation = null;
		    }
			
		    if(currentHeadLocation == 'praktijk' && currentSubLocation == null) {
			document.location.hash = 'praktijk-uitspraakkinderen';
			return false;
		    } 
			
		    if(currentHeadLocation == 'workshops' && currentSubLocation == null) {
			document.location.hash = 'workshops-inleiding';
			return false;
		    }
		    
		    if(currentHeadLocation == 'stem' && currentSubLocation == null) {
			document.location.hash = 'stem-ademhaling';
			return false;
		    }
		    
		    if(currentHeadLocation == 'presentatie' && currentSubLocation == null) {
			document.location.hash = 'presentatie-inleiding';
			return false;
		    }
		    
		    if(currentHeadLocation == 'goedgestemd' && $("#goedgestemd-header").css("opacity") == '1') {
			$('#goedgestemd-header').stop().animate({opacity: '0.0'}, {duration: 400});
		    } else if (currentHeadLocation != 'goedgestemd' && $("#goedgestemd-header").css("opacity") == '0') {
			$('#goedgestemd-header').stop().animate({opacity: '1.0'}, {duration: 400});
		    }

		    $.ajax({
			url: 'content.php?p=' + currentHeadLocation + '&s=' + currentSubLocation + '&rand=' + Math.random(),
			beforeSend: function() {						
			    $('#navigation ul li a.nav-active').stop().animate({paddingBottom: '10px', paddingTop: '10px', color: '#167CD1'}, {duration: 400});
			    $('#navigation ul li a.nav-active').children('.imageholder').stop().animate({opacity: 0.0, top: '-110px'}, {duration: 400});

			    $('#navigation ul li a').removeClass('nav-active');
			    $('#navigation ul li a[href$="' + currentLocation[0] + '"]').addClass('nav-active');

			    $('#navigation ul li a.nav-active').stop().animate({paddingBottom: '20px', paddingTop: '0px', color: '#167CD1'}, {duration: 400});
			    $('#navigation ul li a.nav-active').children(".imageholder").stop().animate({opacity: 1.0, top: '-90px'}, {duration: 400});

			    $('#content').fadeOut(fadeSpeed, function() {
				$(this).html('<div style="text-align: center; padding-top: 50px;"><img src="images/loading.gif" style="background: none; border-width: 0px;" /><br />Laden ...</div>').fadeIn(200);
			    });
			},
			success: function(data) {
			    $('#content').fadeOut(fadeSpeed, function() {
				$(this).html(data).fadeIn(fadeSpeed);
			    });
			},
			error: function() {
			    $('#content').fadeOut(fadeSpeed, function() {
				$(this).html('<h1>Error</h1><p>Deze pagina kon niet gevonden worden.</p>').fadeIn(200);
			    });
			}
		    });
		});	
	    });
	
	    $(document).ready(function() {
		
		if(document.location.hash == '') {
		    document.location.hash = 'wiebenik';
		}
	
		$('#navigation ul li a:not(.nav-active)')
		.live('mouseover', function() {
		    $(this).stop().animate({paddingBottom: '20px', paddingTop: '0px', color: '#167CD1'}, {duration: 400});
		    $(this).children('.imageholder').stop().animate({opacity: 1.0, top: '-90px'}, {duration: 400});
		})
		.live('mouseout', function() {
		    $(this).stop().animate({paddingBottom: '10px', paddingTop: '10px', color: '#167CD1'}, {duration: 400});
		    $(this).children('.imageholder').stop().animate({opacity: 0.0, top: '-110px'}, {duration: 400});
		});
		
		$('#content #subNavigatie ul li a:not(.subNavigatie-active)').css({backgroundPosition: '-200 0'})
		.live('mouseover', function() {
		    $(this).stop().animate({paddingLeft: '25px', backgroundPosition: '0 0'}, {duration: 400}); 
		})
		.live('mouseout', function() {
		    $(this).stop().animate({paddingLeft: '5px', backgroundPosition: '-200 0'}, {duration: 400}); 
		});
			
		$('body').emailSpamProtection('email');
		
		// add images to navigation
		$('#navigation ul li a').append(function() {
		    var imageHolderWidth = 80;
		    var positionLeft = parseInt(($(this).innerWidth() - imageHolderWidth)/2);
			
		    return '<span class="imageholder" style="left: ' + positionLeft + 'px; display: block"><img src="images/navigation_images/resized/' + $(this).children('.text').text().toLowerCase() + '.jpg" /></span>';
		});
		
		$('#navigation ul li a:not(.nav-active) .imageholder').css('opacity', '0.0');
	    });
	    
	    $(window).load(function(){ 
		$(window).hashchange();
	    });
	</script>
	
	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-35386172-1']);
	_gaq.push(['_trackPageview']);

	(function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>

    </head>
    <body>

	<div id="page">
	    
	    <div id="header">
		Christel Lacroix
		
		<div id="overlay-goedgestemd">
		    <div id="goedgestemd-header">
			<div class="rounded-corner-top-left-transparant"></div>
			<div class="rounded-corner-top-right-transparant"></div>
			
			<a href="#goedgestemd"><img src="images/GoedGestemd_cover_small.jpg" width="140" style="border-width: 0px" /></a>
		    </div>
		</div>
		
	    </div>
	    

	    <div id="navigation">
		<ul>
		    <?php
		    $navItems = array("Wie ben ik", "Praktijk", "Presentatie", "Workshops", "Stem", "Goed gestemd", "Linken", "Contact");

		    foreach ($navItems as $value) {
			?>
    		    <li>
    			<a href="#<?php print(str_replace(' ', '', strtolower($value))); ?>">
    			    <span class="text"><?php print($value); ?></span>
    			</a>
    		    </li>
			<?php
		    }
		    ?>
		    <div class="clear"></div>
		</ul>

	    </div>

	    <div class="clear"></div>

	    <div id="content"></div>
	    <div id="footer">Christel Lacroix - Veldekens 44, 2600 Berchem - 0495/53.39.92 - <span class="email">info [at] christellacroix.be</span> - Website & design door: Erwin Cornelis (<span class="email">erwin.cornelis [at] gmail.com</span>)</div>
	</div>
    </body>
</html>