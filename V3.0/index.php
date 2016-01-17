<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
<head> 
	<!--<base href="http://localhost/00_Websites/Christellacroix.be/v3.0/">-->
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
		/*background: #FFFFFF url('images/content_background2.png') repeat top left;*/
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
		/*color: #FFFFFF;*/
		color: #c5d823;
		font-size: 50px;
		text-align: center;
		padding: 40px 0px 100px 0px;
		/*font-style: italic;*/
		/*font-family: times new roman;*/
	}
	
	#navigation {
		width: 100%;
		margin: 0px auto;
		/*background-color: #3A3A3A;*/
		background: #c5d823 url('images/nav-background.png') repeat top left;
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
					/*color: #FFFFFF;*/
					color: #167CD1;
				}
				
				#navigation #navigation_border ul li a.nav-active {
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
			/*border: 1px solid #DDD; */
			background: #EEE url('images/citaat.png') no-repeat top right;
			/*background: #EEE url('images/nav-background.png') repeat top right; */
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
	
	var currentheadLocation = null;
	var currentSubLocation = null;
	var currentLocation = null;
	var praktijkNavSet = false;
	var fadeSpeed = 150;
	var contentIterations = 0;
	
	$(document).ready(function() {
	
		$('#navigation #navigation_border ul li a:not(.nav-active)')
			.live('mouseover', function() {
				$(this).stop().animate({paddingBottom: '20px', paddingTop: '0px', color: '#167CD1'}, {duration: 400});
				$(this).children(".imageholder").stop().animate({opacity: 1.0, top: '-90px'}, {duration: 400});
			})
			.live('mouseout', function() {
				$(this).stop().animate({paddingBottom: '10px', paddingTop: '10px', color: '#167CD1'}, {duration: 400});
				$(this).children(".imageholder").stop().animate({opacity: 0.0, top: '-110px'}, {duration: 400});
			});

		// add images to navigation
		$('#navigation #navigation_border ul li a').append(function() {
			var aWidth = $(this).outerWidth();
			var imageHolderWidth = 80;
			var positionLeft = parseInt((aWidth - imageHolderWidth)/2);
			
			return '<div class="imageholder" style="left: ' + positionLeft + 'px;"><img src="images/' + $(this).children('.text').text() + '.jpg" /></div>';
		});
		
		$('.praktijknav:not(.praktijknav-active)')
			.live('mouseover', function() {
				$(this).stop().animate({paddingLeft: '25px', backgroundColor: '#DDDDDD'}, {duration: 400}); 
			})
			.live('mouseout', function() {
				$(this).stop().animate({paddingLeft: '5px', backgroundColor: '#FFFFFF'}, {duration: 400});
			});
			
		function getPraktijkContent() {		
			//if(contentIterations <= 2) {
				$.ajax({
					url: 'praktijk.php?p=' + currentSubLocation + '&rand=' + Math.random(),
					beforeSend: function() {
						$('.praktijknav-active').stop().animate({paddingLeft: '5px', backgroundColor: '#FFFFFF'}, {duration: 400});
						$('.praktijknav').removeClass('praktijknav-active'); //make other tabs inactive
						$('#content #praktijkNavigatie ul li a[href$="' + currentSubLocation + '"]').addClass('praktijknav-active'); //make this tab active
						$('.praktijknav-active').stop().animate({paddingLeft: '25px', backgroundColor: '#DDDDDD'}, {duration: 400});
						
						$('#praktijkContent').fadeOut(fadeSpeed, function() {
							$(this).html('<div style="text-align: center; padding-top: 50px;"><img src="images/loading.gif" /><br />Laden ...</div>').fadeIn(200);
						});
					},
					success: function(data) {
						$('#praktijkContent').fadeOut(fadeSpeed, function() {
							$(this).html(data).fadeIn(fadeSpeed);
						});
					},
					error: function() {
						$('#praktijkContent').fadeOut(fadeSpeed, function() {
							$(this).html('<h1>Error</h1><p>Deze pagina kon niet gevonden worden.</p>').fadeIn(200);
						});
					}
				});
				
				/*contentIterations += 1;
				getPraktijkContent();*/
			//}
		}

		jQuery(window).bind('hashchange', function(e) {
			
			currentLocation = String(document.location.hash).substr(1).split("-");
			currentHeadLocation = currentLocation[0];		
			
			if(currentLocation.length > 1) {
				currentSubLocation = currentLocation[1];
			} else {
				currentSubLocation = null;
			}
			
			//document.getElementById('footer').innerHTML += ' lengte = ' + currentLocation.length + ' currentHeadLocation = ' + currentHeadLocation;
			//document.getElementById('footer').innerHTML += ' occurred';
			
			if(currentHeadLocation == 'praktijk' && currentSubLocation == null) {
				document.location.hash = 'praktijk-uitspraak';
			} else {
				if((currentHeadLocation == 'praktijk' && praktijkNavSet == false) || (currentHeadLocation != 'praktijk')) {
					$.ajax({
						url: 'content.php?p=' + currentHeadLocation + '&rand=' + Math.random(),
						beforeSend: function() {						
							$('#navigation #navigation_border ul li a.nav-active').stop().animate({paddingBottom: '10px', paddingTop: '10px', color: '#167CD1'}, {duration: 400});
							$('#navigation #navigation_border ul li a.nav-active').children('.imageholder').stop().animate({opacity: 0.0, top: '-110px'}, {duration: 400});
							
							$('#navigation #navigation_border ul li a').removeClass('nav-active');
							$('#navigation #navigation_border ul li a[href$="' + currentLocation[0] + '"]').addClass('nav-active');
							
							$('#navigation #navigation_border ul li a.nav-active').stop().animate({paddingBottom: '20px', paddingTop: '0px', color: '#167CD1'}, {duration: 400});
							$('#navigation #navigation_border ul li a.nav-active').children(".imageholder").stop().animate({opacity: 1.0, top: '-90px'}, {duration: 400});
						
							$('#content').fadeOut(fadeSpeed, function() {
								$(this).html('<div style="text-align: center; padding-top: 50px;"><img src="images/loading.gif" /><br />Laden ...</div>').fadeIn(200);
							});
						},
						success: function(data) {
							if(currentHeadLocation == 'praktijk') {
								praktijkNavSet = true;
								getPraktijkContent();
							} else {
								praktijkNavSet = false;
							}
							
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
					
				} else if(currentHeadLocation == 'praktijk' && praktijkNavSet == true) {
					getPraktijkContent();
				}
			}
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
		currentLocation = String(document.location.hash).substr(1).split("-");
		
		if(currentLocation == '') {
			document.location.hash = 'startpagina';
		} 
		
		currentHeadLocation = currentLocation[0];
		currentSubLocation = currentLocation[1];
	
		if(currentHeadLocation == 'praktijk') {
			if(currentSubLocation == '' || currentSubLocation == null) {
				document.location.hash = 'praktijk-uitspraak';
			}	
		}
		
		jQuery(window).trigger('hashchange');
	});
	</script>	
		
</head>
<body>

<div id="page">
	<div id="header">
		Christel Lacroix
	</div>

	<div id="navigation">
		<div id="navigation_border">
			<ul>
			<?php
			$navItems = array("Startpagina", "Trainingen", "Achtergrond", "Praktijk", "Mediatraining", "Presentatietraining", "Goed gestemd", "Linken", "Contact");
			
			foreach($navItems as $i => $value) {
			?>
				<li>
					<a href="#<?php print(str_replace(' ', '', strtolower($value)));?>" class="">
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

	<div id="content"></div>
	<div id="footer"></div>
</div>
</body>
</html>