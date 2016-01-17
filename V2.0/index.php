<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head> 
	<base href="http://localhost/00_Websites/Christellacroix.be/v2.0/">
	<!--<base href="http://familiecornelis.be/christellacroix/">-->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>Christel Lacroix</title> 
	
	<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}
	
	body, html {
		width: 100%;
		height: 100%;
		font-family: 'ParisineClairRegular', Arial, Trebuchet MS;
		background: #FFFFFF url('images/content_background.png') repeat top left;
		font-size: 12px;
	}
	
	#page {
		position: relative;
		min-height: 100%;
		height: auto !important; /* voor moderne browsers */
		height: 100%; /* voor IE */
	}
	
	#header {
		width: 100%;
		height: 60px;
		background: #167CD1 url('images/header_background.png') repeat-x top left;
		color: #FFFFFF;
		font-size: 50px;
		text-align: center;
		padding: 40px 0px 100px 0px;
	}
	
	#navigation {
		width: 100%;
		margin: 0px auto;
		background-color: #3A3A3A;
		color: #FFFFFF;
	}
	
		#navigation #navigation_border {
			width: 1000px;
			margin: 0px auto;
			position: relative;
			padding-left: 5px;
		}
	
			#navigation #navigation_border ul {
				list-style-type: none;
				position: relative;
			}
			
				#navigation #navigation_border ul li {
					float: left;
					display: inline;
				}
				
				#navigation #navigation_border ul li a {
					display: block;
					margin: 10px 5px;
					padding: 10px;
					position: relative;
					text-decoration: none;
				}
				
				#navigation #navigation_border ul li a.nav-non-active,
				#navigation #navigation_border ul li a:link,
				#navigation #navigation_border ul li a:active,
				#navigation #navigation_border ul li a:visited {
					color: #FFFFFF;
				}
				
				#navigation #navigation_border ul li a.nav-active {
					color: #167CD1;
					padding-top: 0px;
					padding-bottom: 20px;
				}
				
					#navigation #navigation_border ul li a .text {
						z-index: 2; 
						position: relative;
						font-size: 13px;
						text-transform: uppercase;
					}
					
					#navigation #navigation_border ul li a .imageholder,
					#navigation #navigation_border ul li .imageholder	{
						width: 80px; 
						height: 80px; 
						position: absolute; 
						top: -110px; 
						opacity: 0.0; 
						background-image: url('images/imageholder.png');
					}
					
					#navigation #navigation_border ul li a .imageholder img,
					#navigation #navigation_border ul li .imageholder img {
						border-width: 0px;
						padding: 10px; 
						width: 60px; 
						height: 54px;
					}
	
	#content {
		width: 960px;
		margin: 0px auto;
		position: relative;
		background-color: #FFFFFF;
		padding: 20px;
		z-index: 10;
		padding-bottom: 80px;
		overflow: hidden;
	}
		
		#content img {
			background-color: #EEEEEE;
			border: 1px solid #CCCCCC;
			padding: 10px;
		}
	
		#content h1 {
			margin: 10px 0px 20px 0px;
			font-size: 27px;
			font-weight: normal;
		}
		
		#content p {
			line-height: 22px;
			text-align: justify;
			margin-bottom: 20px;
			font-size: 13px;
		}
	
		#content #praktijkNavigatie {
			width: 200px; 
			float: left;
			position: relative; 
			top: -50px;
			opacity: 0.0;
		}
		
			#content #praktijkNavigatie ul {
			
			}
			
				#content #praktijkNavigatie ul li {
					 border-bottom: 1px dashed #555555;
				}
				
					#content #praktijkNavigatie ul li a:link,
					#content #praktijkNavigatie ul li a:active,
					#content #praktijkNavigatie ul li a:visited,
					#content #praktijkNavigatie ul li a.praktijknav {
						color: #167CD1;
						text-decoration: none;
						display: block;
						padding: 7px 5px 5px 5px;
						margin-top: 5px;
						background-color: #FFFFFF;
					}
					
					#content #praktijkNavigatie ul li a.praktijknav-active {
						background-color: #EEEEEE;
						padding-left: 25px;
					}
					
			#content #praktijkContent {
				margin-left: 220px;
				width: 740px;
				text-align: justify;
			}
			
				#content #praktijkContent h1 {
					margin: 2px 0 20px 0;
					padding: 0;
				}
			
				#content #praktijkContent p {
					line-height: 22px;
					margin-bottom: 20px;
				}
		
		#content #links a:link,
		#content #links a:active,
		#content #links a:visited	{
			display: block;
			/*background-color: #EEEEEE;*/
			padding: 10px 5px;
			margin-bottom: 10px;
			text-decoration: none;
			color: #167CD1;
		}
		
		#content #links a:hover {
		
		}
		
		#content .citaat {
			border: 1px solid #DDD; 
			background: #EEE url('images/citaat.png') no-repeat top right;
			padding: 10px; 
			font-style: italic;
			margin-bottom: 15px;
		}
		
		#content div#goedgestemd_situaties_div ul#goedgestemd_situaties {
			
		}
		
		#content div#goedgestemd_situaties_div ul#goedgestemd_situaties {
			list-style-type: none;
			padding: 0;
		}
		
		#content div#goedgestemd_situaties_div ul#goedgestemd_situaties li {
			margin: 0;
		}
		
	
	#footer {
		position: absolute;
		bottom: 0;
		left: 0;
		background-color: #3A3A3A;
		color: #FFFFFF;
		padding: 20px 0;
		margin: 0;
		width: 100%;
		z-index: 11;
		text-align: center;
	}
	
	.clear {
		clear: both;
	}
	
	</style>
	
	<link rel="stylesheet" href="fonts/parisine/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="fonts/parisinebold/stylesheet.css" type="text/css" />
		
	<script type="text/javascript" src="jquery/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.easing.1.3.js"></script> 
	<script type="text/javascript" src="jquery/jquery-ui-1.8.2.custom.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.innerfade.js"></script>
		
	<script type="text/javascript">
	$(document).ready(function() {
		$('#navigation #navigation_border ul li a.nav-non-active')
			.mouseover(function() {
				$(this).stop().animate({paddingBottom: '20px', paddingTop: '0px', color: '#167CD1'}, {duration: 400});
				$(this).children(".imageholder").stop().animate({opacity: 1.0, top: '-90px'}, {duration: 400});
			})
			.mouseout(function() {
				$(this).stop().animate({paddingBottom: '10px', paddingTop: '10px', color: '#FFFFFF'}, {duration: 400});
				$(this).children(".imageholder").stop().animate({opacity: 0.0, top: '-110px'}, {duration: 400});
			});

		// add images to navigation
		$('#navigation #navigation_border ul li a').append(function() {
			var aWidth = $(this).outerWidth(); // + parseInt(($(this).outerWidth() - $(this).width())/2);
			var imageHolderWidth = 80;
			var positionLeft = parseInt((aWidth - imageHolderWidth)/2);
			
			// DEBUG
			//$("#footer").append("this = " + $(this).children('.text').text() + ", aWidth = " + aWidth + ", imageHolderWidth = " + imageHolderWidth + ", positionLeft = " + positionLeft + "<br />");
			
			return '<div class="imageholder" style="left: ' + positionLeft + 'px;"><img src="images/' + $(this).children('.text').text() + '.jpg" /></div>';
		});
		
		$('#navigation #navigation_border ul li a.nav-active .imageholder').css('opacity', '1.0').css('top', '-90px');
		
		$('.praktijknav:not(.praktijknav-active)')
			.live('mouseover', function() {
				$(this).stop().animate({paddingLeft: '25px', backgroundColor: '#DDDDDD'}, {duration: 400}); 
			})
			.live('mouseout', function() {
				$(this).stop().animate({paddingLeft: '5px', backgroundColor: '#FFFFFF'}, {duration: 400});
			});
			
		jQuery(window).bind('hashchange', function(e) {
			var fadeSpeed = 150;
			$.ajax({
				url: 'praktijk.php?p=' + document.location.hash.substr(1) + '&rand=' + Math.random(),
				success: function(data) {
					$('#praktijkContent').fadeOut(fadeSpeed, function() {
						$(this).html(data).fadeIn(fadeSpeed);
					});
				},
				beforeSend: function() {
					$('.praktijknav-active').stop().animate({paddingLeft: '5px', backgroundColor: '#FFFFFF'}, {duration: 400});
					$('.praktijknav').removeClass('praktijknav-active'); //make other tabs inactive
					$('#content #praktijkNavigatie ul li a[href$="' + document.location.hash + '"]').addClass('praktijknav-active'); //make this tab active
					$('.praktijknav-active').stop().animate({paddingLeft: '25px', backgroundColor: '#DDDDDD'}, {duration: 400});
					
					$('#praktijkContent').fadeOut(fadeSpeed, function() {
						$(this).html('<div style="text-align: center; padding-top: 50px;"><img src="images/loading.gif" /><br />Laden ...</div>').fadeIn(200);
					});
				},
				error: function() {
					$('#praktijkContent').fadeOut(fadeSpeed, function() {
						$(this).html('<h1>Error</h1><p>Deze pagina kon niet gevonden worden.</p>').fadeIn(200);
					});
				}
			});	
		});	
		
		$('#goedgestemd_situaties').innerfade({
			animationtype: 'fade',
			speed: 'slow',
			timeout: 4000,
			type: 'random',
			containerheight: '1em'
		});

		var originalFooterHeight = $('#footer').height();
		var visible = false;
		$('#footer')
			.click(function() {
				if (visible == false) {
					$(this).stop().animate({height: '200px'}, {duration: 200, easing: 'easeInQuart'});
				}
				else {
					$(this).stop().animate({height: originalFooterHeight}, {duration: 200, easing: 'easeInQuart'});
				}
				visible = !visible;
			});
	});
	
	$(window).load(function() {
		var oldhash = document.location.hash;
		var location = String(document.location).split("/");
	
		if( location[location.length - 2] == 'praktijk' ) {
			if(document.location.hash == '') {
				document.location.hash = 'uitspraak';
			}		
			jQuery(window).trigger( 'hashchange' );
		}
		
		$('#praktijkNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});
	});
	</script>	
		
</head>
<body>

<div id="page">
	<div id="header">
		Christel Lacroix
		<!--<div id="goedgestemd" style="background-color: red; width: 150px; height: 150px; position: absolute; top: 25px; right: 25px;"></div>-->
	</div>

	<div id="navigation">
		<div id="navigation_border">
			<ul>
			<?php
			$navItems = array("Startpagina", "Trainingen", "Achtergrond", "Praktijk", "Mediatraining", "Presentatietraining", "Goed gestemd", "Linken", "Contact");
			
			foreach($navItems as $i => $value) {
			?>
				<li>
					<a href="<?php print(str_replace(' ', '', strtolower($value)));?>/" class="<?php (!isset($_GET['p']) || $_GET['p'] == str_replace(' ', '', strtolower($value))) ? print("nav-active") : print("nav-non-active"); ?>">
						<div class="text"><?php print($value); ?></div>
					</a>
				</li>
			<?php
			}
			?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>

	<div id="content">
	
		<!--<div id="debug">test</div>-->
	
		<?php
			if(!isset($_GET['p'])) {	
				$_GET['p'] = 'startpagina';
			}
			
			switch($_GET['p']) {
				case 'startpagina':
					?>
					<h1>Startpagina</h1>
					<p>
					Aenean dignissim sem suscipit dolor sagittis adipiscing. Aliquam libero felis, blandit tincidunt varius vel, dictum vel mauris. Sed sit amet turpis mi. In posuere arcu ac lectus congue commodo. Sed aliquet lacus eu massa accumsan vitae aliquet lacus consectetur. Quisque pretium, quam in pharetra dictum, tortor ipsum ultricies justo, et adipiscing nunc ante at diam. Mauris eu tincidunt lorem. Suspendisse non augue et libero facilisis auctor.
					</p>
					<p>
					In in augue sapien. Mauris a erat velit, et fringilla nulla. In ultricies lacus sit amet felis pretium sed suscipit urna accumsan. Vestibulum placerat nisl nec dui tincidunt in sollicitudin velit rutrum. Ut vulputate, leo vitae ornare placerat, magna odio aliquet quam, eget malesuada est nisl non nulla. Pellentesque mattis venenatis enim, ut placerat justo condimentum non. Donec ultrices congue justo, eu sollicitudin risus consequat sit amet. Curabitur porttitor pulvinar ligula vel consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar, mi a interdum rutrum, orci est rhoncus nunc, vitae sagittis turpis velit a ante. Suspendisse potenti. Aliquam ac odio massa. Aenean accumsan, risus id blandit mattis, nunc nibh ultricies magna, eget laoreet dui nisl eget magna. Nunc a iaculis sem.
					</p>
					<?php
					break;
				case 'trainingen':
					?>
					<h1>Trainingen</h1>
					<?php
					break;
				case 'achtergrond':
					?>
					<h1>Achtergrond</h1>
					<img src="images/christel_lacroix.jpg" style="float: right; width: 150px; margin-left: 20px; margin-bottom: 20px;" />
					<p>Stemmen die iets zeggen, stemmen die je laten wegdromen, stemmen die zich in een magische wereld bevinden. Sinds mijn kindertijd was ik niet weg te slaan van de televisie. Stemmen op radio, opera en concerten vulden de huiskamer.</p>
					<p>In 1989 ben ik dan ook als logopediste begonnen bij de VRT, dagelijks begeleid ik TV- en Radiostemmen. Dat is mijn wereld, mijn communicatiemiddel. Het medialandschap evolueerde en ik ging mee. Er kwamen andere mediabedrijven bij. Door de loop van de jaren zijn er naast de media ook andere specialisaties bijgekomen.</p>
					<p>Zo ben ik docente aan de Opleiding Journalistiek in Limburg. Cevora en andere bedrijfsopleidingen kwamen erbij. Samen met een collega doe ik speciale cursussen stemtraining voor leerkrachten. En er is natuurlijk mijn eigen privépraktijk. Lijkt U dat veel. Neen, niet als je de hele dag mag doen wat je graag doet. Er is zelfs nog tijd voor hobby's, tuinieren enz.</p>
					<?php
					break;
				case 'praktijk':
					?>
					<div id="praktijkNavigatie">
						<ul style="list-style-type: none;">
							<li><a href="praktijk/#uitspraak" class="praktijknav">Uitspraak/articulatie</a></li>
							<li><a href="praktijk/#stemkinderen" class="praktijknav">Stem kinderen</a></li>
							<li><a href="praktijk/#stemvolwassenen" class="praktijknav">Stem volwassenen</a></li>
							<li><a href="praktijk/#dyscalculie" class="praktijknav">Dyscalculie/rekenen</a></li>
							<li><a href="praktijk/#dyslexie" class="praktijknav">Dyslexie/lezen</a></li>
							<li><a href="praktijk/#dysorthografie" class="praktijknav">Dysorthografie/schrijven</a></li>
							<li><a href="praktijk/#taal" class="praktijknav">Taal</a></li>
							<li><a href="praktijk/#afasie" class="praktijknav">Afasie</a></li>
							<li><a href="praktijk/#cvs" class="praktijknav">CVS</a></li>
						</ul>
					</div>
					<div id="praktijkContent"></div>
					<div class="clear"></div>
					<?php
					break;
				case 'mediatraining':
					?>
					<h1>Mediatraining</h1>
					<?php
					break;
				case 'presentatietraining':
					?>
					<h1>Presentatietraining</h1>
					<?php
					break;
				case 'goedgestemd':
					?>
					<h1>Goed Gestemd</h1>
					<img src="images/GoedGestemd_cover.jpg" style="width: 200px; float: right; margin-left: 20px; margin-bottom: 20px;">
					<h2>Persbericht Lannoo april 2009</h2>
					<p>Herken je je in een van deze situaties?</p>
					<div id="goedgestemd_situaties_div" class="citaat" style="margin-right: 242px; font-style: normal; background-image: none;">
						<ul id="goedgestemd_situaties">
							<li>Je bent stemmoe, hees of je hebt zelfs pijn?</li>
							<li>Je hebt een goede stem nodig voor je carrière?</li>
							<li>Je mompelt?</li>
							<li>Je roept veel, heel veel?</li>
							<li>Je spreekt een andere taal en wil af van dat typische accent?</li>
							<li>Je droom ligt bij radio en tv?</li>
							<li>Je hebt een stem maar hoe gebruik je ze efficiënt om je boodschap over te brengen? </li>
							<li>Je vraagt je af: mogen dialectklanken?</li>
							<li>Je wilt mooi, natuurlijk en vooral met je eigen karakter kunnen spreken?</li>
						</ul>
					</div>
					<p>
						Dan is het boek van VRT-logopediste Christel Lacroix, GOED GESTEMD! zeker iets voor jou!<br />
						Logopediste Christel Lacroix traint al meer dan twintig jaar bekende radio- en televisiestemmen. In dit boek helpt ze je op weg naar een gezonde en aangenaam klinkende stem. Er is ook een bijhorende cd vol praktische oefeningen, ingelezen door vertrouwde radio- en televisie-stemmen van VRT, zoals Wim De Vilder, Kobe Ilsen, Indra Dewitte, Christophe Lambrecht, Cath Luyten en vele andere. Een toegankelijk boek met leuke oefeningen voor een mooie uitspraak, een gezonde stem en een aangename intonatie en presentatie.
					</p>
					<p class="citaat" style="margin-right: 242px;">
						'Dat ik een fijn televisieprogramma mag presenteren, heb ik te danken aan Christel Lacroix. In pure My Fair lady-stijl veranderde ze mijn plat Antwerps Eliza Doolittle-gemompel in iets verstaanbaars. Net als professor Higgins deden we honderd keer "het Spaanse graan" en gingen we op zoek naar de juiste ij. In een mum van tijd leerde ze me praten én presenteren.'<br />
						Erik Van Looy
					</p>
					<p class="citaat">
						'Ik dacht dat ik kon lezen. Tot ik tijdens het journalistenexamen voor een micro een nieuwsbericht moest voorlezen. "Voor verbetering vatbaar", was het oor-deel van de terecht strenge jury. En zo geschiedde, met de hulp en het geduld van Christel Lacroix. Geen mens gelooft me nog als ik dat verhaal van de jury vertel.'<br />
						Phara de Aguirre
					</p>
					<div class="clear"></div>
					<?php
					break;
				case 'linken':
					?>
					<h1>Linken</h1>
					<div id="links">
						<ul style="list-style-type: none;">
							<li><a href="http://www.caroline-ex.be/pages.php?page=1" target="_blank">Caroline Ex [CHECK LINK!!!]</a></li>
							<li><a href="http://www.hebbes.nl/index.php?p=person&i=4480" target="_blank">Thomas Van Der Spiegel</a></li>
							<li><a href="http://www.brunhilde.be/idbrun003.asp" target="_blank">Brunhilde Verhenne</a></li>
							<li><a href="http://www.zita.be/users_error/" target="_blank">Peggy Richie [CHECK LINK!!!]</a></li>
							<li><a href="http://www.kathleengoossens.be/www.kathleengoossens.be/Welkom.html" target="_blank">Kathleen Goossens [CHECK LINK!!]</a></li>
						</ul>
					</div>
					<?php
					break;
				case 'contact':
					?>
					<h1>Contact</h1>
					<table border="0" cellspacing="15">
						<tr>
							<td valign="top"><img src="images/icons/address.png" style="background-color: transparent; border-width: 0px; padding: 12px 2px;"></td>
							<td><p>Veldekens 44<br />2600 Berchem</p></td>
						</tr>
						<tr>
							<td valign="top"><img src="images/icons/phone.png" style="background-color: transparent; border-width: 0px; padding: 2px;"></td>
							<td><p>Telefoon/Fax 03/281 66 62</p></td>
						</tr>
						<tr>
							<td valign="top"><img src="images/icons/mobile.png" style="background-color: transparent; border-width: 0px; padding: 2px;"></td>
							<td><p>0495/53 39 92</p></td>
						</tr>
						<tr>
							<td valign="top"><img src="images/icons/email.png" style="background-color: transparent; border-width: 0px; padding: 2px;"></td>
							<td><p>info@christellacroix.be</p></td>
						</tr>
					</table>
					<iframe 	width="965" 
								height="350" 
								frameborder="0" 
								scrolling="no" 
								marginheight="0" 
								marginwidth="0" 
								src="http://maps.google.be/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=veldekens+44+2600+berchem&amp;aq=&amp;sll=50.805935,4.432983&amp;sspn=5.936984,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=Veldekens+44,+Berchem+2600+Antwerpen,+Vlaams+Gewest&amp;t=m&amp;z=14&amp;iwloc=r1&amp;ll=51.190384,4.435479&amp;output=embed">
					</iframe>
					<br />
					<small>
						<a href="http://maps.google.be/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=veldekens+44+2600+berchem&amp;aq=&amp;sll=50.805935,4.432983&amp;sspn=5.936984,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=Veldekens+44,+Berchem+2600+Antwerpen,+Vlaams+Gewest&amp;t=m&amp;z=14&amp;iwloc=r1&amp;ll=51.190384,4.435479" style="color:#0000FF;text-align:left">Grotere kaart weergeven</a></small>
					<?php
					break;
				default:
					include('error.php');
					break;
			}
		?>
	</div>

	<!--<div id="hashtag">hash: </div>-->

	<div id="footer"></div>
</div>
</body>
</html>