<?php

$error = 'Er is een onverwachtse fout opgetreden.';

if(!isset($_GET['p']) || $_GET['p'] == '') {
	echo $error;
	die();
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
		<p>Zo ben ik docente aan de Opleiding Journalistiek in Limburg. Cevora en andere bedrijfsopleidingen kwamen erbij. Samen met een collega doe ik speciale cursussen stemtraining voor leerkrachten. En er is natuurlijk mijn eigen priv&#233;praktijk. Lijkt U dat veel. Neen, niet als je de hele dag mag doen wat je graag doet. Er is zelfs nog tijd voor hobby's, tuinieren enz.</p>
		<?php
		break;
	case 'praktijk':
		?>
		<div id="praktijkNavigatie">
			<ul style="list-style-type: none;">
				<li><a href="#praktijk-uitspraak" class="praktijknav">Uitspraak/articulatie</a></li>
				<li><a href="#praktijk-stemkinderen" class="praktijknav">Stem kinderen</a></li>
				<li><a href="#praktijk-stemvolwassenen" class="praktijknav">Stem volwassenen</a></li>
				<li><a href="#praktijk-dyscalculie" class="praktijknav">Dyscalculie/rekenen</a></li>
				<li><a href="#praktijk-dyslexie" class="praktijknav">Dyslexie/lezen</a></li>
				<li><a href="#praktijk-dysorthografie" class="praktijknav">Dysorthografie/schrijven</a></li>
				<li><a href="#praktijk-taal" class="praktijknav">Taal</a></li>
				<li><a href="#praktijk-afasie" class="praktijknav">Afasie</a></li>
				<li><a href="#praktijk-cvs" class="praktijknav">CVS</a></li>
			</ul>
		</div>
		<div id="praktijkContent"></div>
		<div class="clear"></div>
		<script type="text/javascript">
		$('#praktijkNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});
		</script>
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
		<div id="goedgestemd_situaties_div" class="citaat" style="margin-right: 242px; font-style: normal;">
			<ul id="goedgestemd_situaties">
				<li>Je bent stemmoe, hees of je hebt zelfs pijn?</li>
				<li>Je hebt een goede stem nodig voor je carri&#232;re?</li>
				<li>Je mompelt?</li>
				<li>Je roept veel, heel veel?</li>
				<li>Je spreekt een andere taal en wil af van dat typische accent?</li>
				<li>Je droom ligt bij radio en tv?</li>
				<li>Je hebt een stem maar hoe gebruik je ze effici&#235;nt om je boodschap over te brengen? </li>
				<li>Je vraagt je af: mogen dialectklanken?</li>
				<li>Je wilt mooi, natuurlijk en vooral met je eigen karakter kunnen spreken?</li>
			</ul>
		</div>
		<p>
			Dan is het boek van VRT-logopediste Christel Lacroix, GOED GESTEMD! zeker iets voor jou!<br />
			Logopediste Christel Lacroix traint al meer dan twintig jaar bekende radio- en televisiestemmen. In dit boek helpt ze je op weg naar een gezonde en aangenaam klinkende stem. Er is ook een bijhorende cd vol praktische oefeningen, ingelezen door vertrouwde radio- en televisie-stemmen van VRT, zoals Wim De Vilder, Kobe Ilsen, Indra Dewitte, Christophe Lambrecht, Cath Luyten en vele andere. Een toegankelijk boek met leuke oefeningen voor een mooie uitspraak, een gezonde stem en een aangename intonatie en presentatie.
		</p>
		<p class="citaat" style="margin-right: 242px;">
			'Dat ik een fijn televisieprogramma mag presenteren, heb ik te danken aan Christel Lacroix. In pure My Fair lady-stijl veranderde ze mijn plat Antwerps Eliza Doolittle-gemompel in iets verstaanbaars. Net als professor Higgins deden we honderd keer "het Spaanse graan" en gingen we op zoek naar de juiste ij. In een mum van tijd leerde ze me praten &#233;n presenteren.'<br />
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