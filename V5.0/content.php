<?php

function getDutchDay($day) {
    $days = array("Monday" => "Maandag", "Tuesday" => "Dinsdag", "Wednesday" => "Woensdag", "Thursday" => "Donderdag", "Friday" => "Vrijdag", "Saturday" => "Zaterdag", "Sunday" => "Zondag");
    return $days[$day];
}

$onlyDate = false;

$error = 'Er is een onverwachtse fout opgetreden.';

if (!isset($_GET['p']) || $_GET['p'] == '') {
    echo $error;
    die();
}

include('classes/db.class.php');
include('classes/db.class.inc.php');

switch ($_GET['p']) {
    case 'wiebenik':
	?>
	<h1>Wie ben ik?</h1>
	<h2>Christel Lacroix</h1>
	<img src="images/christel_lacroix.jpg" style="width: 170px; float: left; margin: 0 20px 20px 0;" />
	<p>Het is altijd wat vreemd om over jezelf te vertellen.<br />
	Wat zeg je juist?<br />
	Dat ik logopediste ben? Dat ik me zoveel mogelijk bijschool? Dat radio en televisie mijn wereld is? Dat ik de eerste logopediste was die ooit op VRT werkte? Dat ik het boek <a href="#goedgestemd">Goed Gestemd</a> schreef? Dat ik nog altijd graag mensen met stembandknobbels, ontstekingen of verlammingen verder help? <br />
	Dat als je een opleiding volgt waar je stem en uitspraak belangrijk zijn ik je graag op de juiste weg zet?
	Dat ik les geef aan verschillende hogescholen? Dat cursussen of themadagen geven voor bedrijven altijd weer een fijne belevenis is? Dat ik op maat gemaakte cursussen voor leerkrachten geef? En dat ik bijna dagelijks ook nog in mijn privépraktijk mensen mag begeleiden?<br />
	Ik vind dit niet zo belangrijk.<br />
	Wie ik ben?<br />
	Een bruisende dame, vol leven en energie met een passie voor stemmen en uitspraak. Een vrouw die na al die jaren het elke dag nog even prettig vindt om mensen te mogen begeleiden. Iemand die graag samen op weg gaat met anderen om de wereld van stem – taal en uitspraak te blijven verkennen.<br />
	Ik lach graag, geniet van het leven, zie meestal de positieve kant van de dingen en ik ga graag op reis. Ik vind het fijn om andere mensen en culturen te leren kennen. En ik babbel graag …. misschien ben ik daarom wel logopediste geworden.</p>

	<div class="clear"></div>
	
	<p>Voor diegene die toch een paar referentie wensen: hier gaan we.</p>

	<div style="text-align: center">
	    <table class="referenties">
			<tr>
				<td>VRT</td>
				<td>VMMA</td>
				<td>Woestijnvis</td>
				<td>TV Limburg</td>
			</tr>
			<tr>
				<td>TV Brussel</td>
				<td>ATV</td>
				<td>TV Oost</td>
				<td>RTV</td>
			</tr>
			<tr>
				<td>NRJ</td>
				<td>Sanoma</td>
				<td>Offitel</td>
				<td>Belgacom</td>
			</tr>
			<tr>
				<td>ROB</td>
				<td>Campell</td>
				<td>Optima Facto</td>
				<td>N allo</td>
			</tr>
			<tr>
				<td>Xios Limburg</td>
				<td>Howest</td>
				<td>Plantijn Hogeschool</td>
				<td>Akkanto</td>
			</tr>
			<tr>
				<td>Cevora</td>
				<td>Atel</td>
				<td>VDAB</td>
				<td>Danspunt</td>
			</tr>
	    </table>
	</div>
	
	<h2>Tinne Jacobs</h2>
	<img src="images/tinne_jacobs.jpg" style="width: 170px; float: left; margin: 0 20px 20px 0;" />
	
	<p>
		Ik hou van mooie stemmen, daarom specialiseerde ik me in alles wat met stemproblemen te maken heeft.<br />
		Moet je veel spreken, volg je een opleiding waar je stem belangrijk is, ik help je graag op weg om jouw doel te bereiken.<br />
		Mijn interesse is ruimer dan enkel stemproblemen.<br />
		Heb je taal of uitspraakmoeilijkheden dan ben je ook altijd welkom. Afwijkende mondgewoonten, reken–, lees– of schrijfproblemen? Ik help je graag op de goede weg.<br />
		Wie ben ik?<br />
		Een dynamische dame die houdt van de zon in haar leven.
	</p>
	<div class="clear"></div>
	
	<h2>Hanne Swartenbroekx</h2>
	<img src="images/hanne_swartenbroekx.jpg" style="width: 170px; float: left; margin: 0 20px 20px 0;" />
	
	<p>
		Soms zeggen ze: de appel valt niet ver van de boom. En bij mij is dat in iedere geval zo.<br />
		Mijn mama is Gon-begeleidster en daaruit groeide mijn interesse voor alles wat met spraak–, lees–, schrijf–, reken– en taalstoornissen te maken heeft.<br />
		Als animator in het jeugdwerk en begeleider van bijzondere doelgroepen weet ik hoe belangrijk het is om kinderen op een positieve speelse manier te helpen hun moeilijkheden te overwinnen.<br />
		Wie ben ik?<br />
		Een vlotte jonge dame met het motto: je leert maar als je iets boeiend en leuk vindt.
	</p>
	
	<div class="clear"></div>
	
	<?php
	break;
    
    case 'workshops':
	?>
	<div class="tabs">
	    <div id="subNavigatie">
		<ul style="list-style-type: none;">
		    <li><a href="#workshops-inleiding">Inleiding</a></li>
		    <li><a href="#workshops-bedrijven">Bedrijven</a></li>
		    <li><a href="#workshops-leerkrachten">Leerkrachten</a></li>
		    <li><a href="#workshops-spelenmetjestem">Spelen met je stem</a></li>
		    <li><a href="#workshops-mediatraining">Mediatraining</a></li>
			<li><a href="#workshops-aanbod">Aanbod</a></li>
		</ul>
	    </div>

	    <div id="subContent">
		<div id="workshops-inleiding">
		    <h1>Inleiding</h1>
		    <p>
			Wil je gezamenlijk nog wat bijleren op een Pedagogische Studiedag.<br />
			Heeft je bedrijf een themadag?<br />
			Willen jullie iets leren rond stem en spreken?
		    </p>
		    <p>
			Dat kan.<br />
			Het kan in de vorm van een workshop of in een beperkte trainingscursus.
		    </p>
		    <p>
			Hier vind je een paar basispakketideeën, maar alles zal altijd aan specifieke de noden en verlangens van de groep aangepast worden.
		    </p>
		</div>
		<div id="workshops-bedrijven">
		    <h1>Bedrijven</h1>
		    <p>
			<i>Je stem, je ademen, je uitspraak en je presentatie:</i><br />
			Je stem is één van je visitekaartjes.<br />
			Een soepele, krachtige, dynamische stem straalt niet enkel je eigen kracht uit maar ook de kracht van je bedrijf.
		    </p>
		    <p>	
			<i>Voor wie:</i><br />
			Wie komt ervoor in aanmerking? <br />
			Iedereen natuurlijk, maar voornamelijk sprekers, trainers, managers, verkopers, telefonisten, receptionisten, enz.<br />
		    </p>
		    <p>
			Stem<br />
			Hoe je stem klinkt zal sterk meebepalen hoe je overkomt. Een futloze of hese stem geeft nooit een dynamische boodschap.<br />
			Ademhaling<br />
			Adem je gejaagd, geef je ook een gejaagde indruk.<br />
			Rustig ontspannen spreken betekent rustig ontspannen ademen. Een rustige ademhaling laat je toe het gesprek beter en meer te controleren.<br />
			Uitspraak<br />
			Een klare heldere uitspraak op een goede economische wijze, zorgt voor natuurlijkheid en een sneller begrip van je boodschap.<br />
			Presentatie<br />
			Hoe je je boodschap brengt bepaalt de luisterbereidheid bij je toehoorder en het resultaat van je inspanning. Je hebt natuurlijk de klassieke presentatietrainingen met aandacht voor oogcontact, houding, kennis, enz.<br />
			Maar heb je al eens gedacht wat je met je stem kan bereiken?<br />
			Kracht, goed gekozen pauzes, de juiste klemtonen. <br />
			Begrip en meegaandheid verhogen onmiddellijk.<br />
			Houding<br />
			Tegen een scheve eik leun je maar je steunt er niet op.<br />
			Hoe je staat, hoe je je armen beweegt, heeft uiteraard gevolgen voor je presentatie<br />
		    </p>
		    <p>
			<i>Praktische uitwerking:</i><br />
			De begeleiding kan in kleine groepen of individueel.<br />
			De cursus is altijd op maat van jouw noden en van jouw bedrijf.<br />
		    </p>
		    <p style="margin-bottom: 0;">
			<i>Enkele voorbeelden van bedrijven:</i><br />
		    </p>
		    <div style="text-align: center">
			<table class="referenties">
			    <tr>
				<td>Cevora</td>
				<td>N Allo</td>
				<td>Belgacom</td>
			    </tr>
			    <tr>
				<td>Danspunt</td>
				<td>Akkanto</td>
				<td>Offitel</td>
			    </tr>
			</table>
		    </div>
		</div>
		<div id="workshops-leerkrachten">
		    <h1>Leerkrachten</h1>
		    <p>
			<i>Voor wie:</i><br />
			Lesgevers<br />
		    </p>
		    <p>
			Data: zie <a href="#praktijk-cursusleerkrachten">Cursus Leerkrachten</a>.
		    </p>
		    <p>
			Je spreekt veel, heel veel.<br />
			Je groepen zijn levendig en luisteren niet altijd voor 100%. Je klas is niet de akoestieke perfectie.<br />
			En toch.<br />
			Toch moet jij je boodschap weten over te brengen, elk uur weer.<br />
			In het begin van het schooljaar kan dit nog zonder veel inspanning maar hoe dichter de kerstvakantie komt en zeker tegen Pasen vraagt dit altijd maar meer en meer energie en inspanning.<br />
			Je stem klinkt snel moe en soms hees. Soms heb je zelf pijn aan je stem.<br />
			Gelukkig hoeven we niet altijd onmiddellijk aan opereren te denken , dikwijls gaat het gewoon om een niet efficiënt stemgedrag.<br />
			Het verkeerd gebruiken van de stem komt heel regelmatig voor.<br />
			Je ziet dan een ademhaling die niet vanuit het diafragma (buik) vertrekt, die je spreken helemaal niet ondersteunt.<br />
			Je ziet dikwijls roepen ipv luid spreken.<br />
		    </p>
		    <p>
			<i>Wat leren we je:</i><br />
			Hoe je je stem kunt verwennen.<br />
			Hoe je op een eenvoudige wijze je ademhaling leert en altijd toepast.<br />
			Hoe je luider kan spreken zonder je te forceren.<br />
			Hoe je krachtiger en dynamischer kan overkomen zonder dat je veel inspanning moet doen.<br />
		    </p>
		</div>
		<div id="workshops-spelenmetjestem">
		    <h1>Spelen met je stem</h1>
		   
		    <p>
			<i>Voor wie:</i><br />
			Iedereen die graag spreekt
		    </p>
		    <p>
			Wat kan ik allemaal met mijn stem doen?<br />
			Ik wil mijn stem beter kunnen gebruiken.<br />
			Ik vertel graag. Ik speel toneel. Ik lees graag voor. Ik kick op mooie stemmen.<br />
			Ik wil gewoon beter kunnen spreken.<br />
		    </p>
		    <p>
			Persoonlijkheid en natuurlijkheid geven veerkracht aan je boodschap.<br />
			Je wilt met een authentiek stemgeluid een maximaal rendement met de minste kans op stemproblemen.<br />
		    </p>
		    <p>
			Wel dan stellen we een op maat gemaakt pakket samen.<br />
			Hieronder vind je een paar samenstellingselementen
		    </p>
		    <p>
			<i>Stem</i><br />
			Hoe je stem klinkt zal sterk meebepalen hoe je overkomt. Een futloze of hese stem geeft nooit een dynamische boodschap.<br />
		    </p>
		    <p>
			<i>Ademhaling</i><br />
			Rustig ontspannen spreken betekent rustig ontspannen ademen. Een rustige ademhaling laat je toe het gesprek beter en meer te controleren.<br />
		    </p>
		    <p>
			<i>Uitspraak</i><br />
			Een klare helder uitspraak op een correct, economische wijze, zorgt voor natuurlijkheid en een sneller begrip van je boodschap.<br />
		    </p>
		    <p>
			<i>Presentatie</i><br />
			Hoe je je boodschap brengt of afleest bepaald de luisterbereidheid en assimilatievermogen van je toehoorder.<br />
		    </p>
		    <p>
			<i>Stemwarmte</i><br />
			Je stemkleur of timbre bepalen een groot deel van je persoonlijkheid. Naar een warme, volle stem luister je veel sneller.<br />
		    </p>
		    <p>
			<i>Expressie</i><br />
			Niet alleen het zuiver stemgebruik beslist over het overkomen van je boodschap. De expressie, de levendigheid, de toon zijn zeker even belangrijk.<br />
		    </p>
		    <p>
			<i>Voorbereiding stemtest</i><br />
			Wil je je voorbereiden op een stemtest. Dat kan. We oefen heel gericht naar jouw stemtest toe.<br />
			Mocht het bv. om de VRT stemtest gaan, zullen we zowel uitspraak als tekstanalyse bespreken.<br />
		    </p>	    
		    
		</div>
		<div id="workshops-mediatraining">
		    <h1>Mediatraining</h1>
		    <p>
			Zit mijn jasje goed, zit mijn dasje goed?<br />
			Dé clichézin binnen mediatraining. <br />
			Natuurlijk moet je er verzorgd uit zien.<br />
			Maar er is nog zoveel meer!<br />
			De inhoud: daar moet je zelf voor zorgen.<br />
			Maar er is nog zoveel meer!<br />
			Hoe breng ik dat gene wat ik wil vertellen?<br />
			Wat doe ik met mijn toon en intonatie?<br />
			Hoe gebruik ik de microfoon op een juiste manier?<br />
			Hoe kijk je in de camera?<br />
			Praat ik niet te snel?<br />
			Hoe schrijf ik een goed tekst?<br />
			Spreek ik niet te hoog of te laag?<br />
			Hoe mooi moet ik spreke ?<br />
			Waar moet ik opletten bij een interview?<br />
			Hoe sta je elegant?<br />
		    </p>
		    <p>
			Op al deze en nog meer vragen geef ik je raad en advies.<br />
			Sommige dingen zul je natuurlijk ook echt moeten leren, want presenteren is en blijft een vak en niet iets dat je met een paar tips beheerst.<br />
		    </p>
		</div>
		<div id="workshops-aanbod">
			<h1>Aanbod</h1>
			<div class="aanbod-title">Stemtraining : Stemproblemen en stemvermoeidheid voorkomen</div>
			<p>
				Het schooljaar is halverwege en de stemvermoeidheid is er weer<br />
				In  2 avonden geef ik je tips en simpele maar doeltreffende oefeningen om je stem weer klaarwakker en in topvorm te krijgen
			</p>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td class="aanbod-table-title"><p>Data</p></td>
					<td class="aanbod-table-data">
						<p>
							<b>Workshop 1 : </b> donderdag 5 februari en donderdag 12 februari<br />
							<b>Workshop 2 : </b> woensdag 18 maart en woensdag 25 maart<br />
							<br />
							Uur: 18.30 uur tot 21.00 uur<br />
						</p>
					</td>
				</tr>
			</table>

			<div class="aanbod-title">Stemwellness :</div>
			<p>
				Verwent u zich graag met een dagje SPA?<br />
				Waarom geeft u uw stem dan ook eens geen verwenbeurt?<br />
				’s Ochtends een douche om wakker te worden?<br />
				En waarom geen verkwikkend bad voor uw stembanden?<br />
				In de stemwellness-workshop leert u op een eenvoudige manier uw stem te sparen, u leert er wat wel en niet goed is voor uw stem.<br />
				Kruiden en hun weldaad kennen we, maar wist u ook dat kruiden heel goed kunnen zijn voor uw stem?<br />
				En dan natuurlijk rust en ontspanning: met een paar eenvoudige ademhalingstechnieken leert u  hoe u uw stem efficiënter kunt gebruiken en meer ontspannen kracht te geven.
			</p>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td class="aanbod-table-title"><p>Data</p></td>
					<td class="aanbod-table-data">
						<p>
							<b>Workshop 1 : </b> donderdag 29 januari<br />
							<b>Workshop 2 : </b> donderdag 26 februari<br />
							<b>Workshop 30 : </b> donderdag 5 maart<br />
							<br />
						</p>
					</td>
				</tr>
			</table>

			
		</div>
	    </div>
	</div>
	<div class="clear"></div>
	<script type="text/javascript">
	    $('#subNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});

	    $(function () {
			var tabContainers = $('div.tabs div#subContent > div');
					
			$('div.tabs div#subNavigatie ul a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
										
				$('.subNavigatie-active').stop().animate({paddingLeft: '5px', backgroundPosition: '-200 0'}, {duration: 400}); 
				$('div.tabs div#subNavigatie ul a').removeClass('subNavigatie-active'); //make other tabs inactive
				$(this).addClass('subNavigatie-active'); //make this tab active
				$('.subNavigatie-active').stop().animate({paddingLeft: '25px', backgroundPosition: '0 0'}, {duration: 400});

				return false;
			}).filter('[href$="' + document.location.hash + '"]').click();
					
			$('.aanbod-title').append(addCorners());
	    });
	</script>
	<?php
	break;

    case 'presentatie':
	?>
	<div class="tabs">
	    <div id="subNavigatie">	
		<ul>
		    <li><a href="#presentatie-inleiding">Inleiding</a></li>
		    <li><a href="#presentatie-uitspraak">Uitspraak</a></li>
		    <li><a href="#presentatie-stembeheersing">Stembeheersing</a></li>
		    <li><a href="#presentatie-intonatie">Intonatie</a></li>		    
		</ul>
	    </div>

	    <div id="subContent">
		<div id="presentatie-inleiding">
		    <h1>Presentatietraining</h1>
		    <p>
			Hoe komt het dat de ene spreker je boeit en dat de ander je inslaapt wiegt?<br />
			Wat doe ik toch aan die zenuwen die altijd door mijn keel gieren wanneer ik iets voor een groep moet zeggen?<br />
			Hoe sta of beweeg ik en wat met die microfoon?<br />
			Hoe moet ik verzorgd spreken zonder hautain over te komen?<br />
			Hoe breng ik mijn tekst?<br />
			Of maak ik geen tekst en improviseer want dat komt natuurlijker over?
		    </p>
		    <p>
			Honderden vragen die je je stelt wanneer je een presentatie geeft.<br />
			Samen gaan we op weg om van jouw een goede spreker te maken die zelfverzekerd, professioneel en rustig overkomt.	
		    </p>
		</div>
		<div id="presentatie-intonatie">
		    <h1>Intonatie</h1>
		    <p>
			Je mag dan een goede ademhaling, een verzorgde uitspraak en een mooie stem hebben, het zal je niets helpen als je niet weet hoe je je boodschap kan overbrengen.<br />
			Daarvoor moet je de spelregels van de intonatie kennen. Belangrijk is immers niet alleen te weten wat jij wil overbrengen, maar ook hoe jouw stem en boodschap aan de luisterkant overkomt.<br />
			Wat in een dagelijks gesprek helemaal geen inspanning vraagt, is soms een ramp als we een tekst voor onze ogen krijgen.<br />
			De drie basisregels zijn: 1. waar pauzeer ik, 2. waar leg ik klemtonen, 3. hoe klink ik dynamisch. <br />
			Om de drie, vier woorden stoppen om te ademen geeft dat je toehoorder al snel de draad van je verhaal verliest. Alles snel na elkaar zeggen en ik weet ook weer niet wat je juist wil zeggen.<br />
			Punten en komma’s kennen we alleen in de geschreven taal. In het gesproken woord gebruiken we adem - en begripspauzes.<br />
			De juiste accenten op de juiste woorden en iedereen kan je verhaal volgen. Geen of weinig accenten en je klinkt saai. Te veel klemtonen en je vraagt je af  “waar is nu de essentie?“<br />
			En dan moet je ook nog eens dynamisch overkomen. Een hele klus.<br />
			Spelen met de verschillende soorten pauzes en klemtonen, kunnen je een heel eind op weg helpen.
		    </p>
		</div>
		<div id="presentatie-uitspraak">
		    <h1>Uitspraak</h1>
		    <p>
			Een mooie verzorgde uitspraak. <br />
			Met een beetje inspanning ligt dit in het bereik van velen.<br />
			Maar verzorgd betekent ook natuurlijkheid.<br />
			Wanneer je hautain of afstandelijk zou overkomen dan kun je met die manier van articuleren niets doen. Niemand luistert immers naar wat je zegt, wel hoe je het zegt.<br />
			Dus verzorgd en natuurlijkheid gaan hand in hand.<br />
			En je moet soepel spreken zonder je stembanden te belasten zodat je stem warm en aangenaam klinkt en nog jaren mee kan.<br />
		    </p>
		</div>
		<div id="presentatie-stembeheersing">
		    <h1>Stembeheersing</h1>
		    <p>
			Een aangename, warme stem daar droomt iedereen van.<br />
			Met wat oefening ligt dit meestal ook in het bereik van iedereen.<br />
			Te hoog of te laag praten is niet mooi om naar te luisteren (meestal wijst dit ook op een pathologie). <br /> 
			Roepen heeft helemaal geen zin. ‘Wablief’ hoor je alleen maar als je te stil praat.<br />
			Een ijle stem is een stem die niet draagt. Een duidelijk gemis aan resonantie zou ik zeggen. <br />
			Resonantie wordt ook wel eens ‘in het masker praten‘ genoemd. Plaats je handen voor je gezicht en vertel me waar je woont. Je stem klinkt warm en vol. Hetzelfde kan je bereiken zonder je handen voor je gezicht. Dan moet je wel je resonantieholten gebruiken.<br />
			Een ratelmachine? Daar luister je geen twee minuten naar. Iemand die te traag praat? Zorg dat je niet inslaap valt! De snelheid moet altijd in functie van de boodschap staan.<br />
			Zo zal een leraar altijd iets trager praten omdat de boodschap niet alleen moet worden verstaan maar ook geanalyseerd en geassimileerd.<br />
		    </p>
		</div>
	    </div>
	</div>
	<div class="clear"></div>
	<script type="text/javascript">
	    $('#subNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});

	    $(function () {
		var tabContainers = $('div.tabs div#subContent > div');
				
		$('div.tabs div#subNavigatie ul a').click(function () {
		    tabContainers.hide();
		    tabContainers.filter(this.hash).show();
									
		    $('.subNavigatie-active').stop().animate({paddingLeft: '5px', backgroundPosition: '-200 0'}, {duration: 400}); 
		    $('div.tabs div#subNavigatie ul a').removeClass('subNavigatie-active'); //make other tabs inactive
		    $(this).addClass('subNavigatie-active'); //make this tab active
		    $('.subNavigatie-active').stop().animate({paddingLeft: '25px', backgroundPosition: '0 0'}, {duration: 400});

		    return false;
		}).filter('[href$="' + document.location.hash + '"]').click();
	    });
	</script>
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
    
    case 'stem':
	?>
	<div class="tabs">
	    <div id="subNavigatie">	
		<ul>
		    <li><a href="#stem-ademhaling">Ademhaling</a></li>
		    <li><a href="#stem-heesheid">Heesheid</a></li>
		    <li><a href="#stem-advies">Advies</a></li>
		</ul>
	    </div>

	    <div id="subContent">
		<div id="stem-ademhaling">
		    <h1>Ademhaling</h1>
		    <p>
			Wil je je adem beter kunnen beheersen? Heb je last van hyperventilatie?<br />
			Zorgt stress dat je op je adem trapt? Put CVS je zo uit dat je geen drie woorden meer kan zeggen?<br />
			Leer dan spreken met een juiste ademhaling!<br />
			Spanning en zeker gespannen spreken kunnen je zo uitputten dat je niet verder kan.<br />
			We pakken je spreekhouding aan en leren je een natuurlijke ontspannen ademhaling.	
		    </p>
		</div>
		<div id="stem-heesheid">
		    <h1>Heesheid</h1>
		    <p>
			Klink je hees of schor, doet je stem pijn of heb je soms geen stem meer………. Heesheid kan verschillende oorzaken hebben.<br />
			Sommige roepen veel, anderen moeten de hele dag luid spreken.<br />
			Je ademhaling is niet altijd even goed. Of je kan je stem ook verkeerd gebruiken.<br />
			Het zijn allemaal gewoontes die makkelijk te verhelpen zijn. Maar, als je niets doet kan zo’n foutief gedrag echt wel tot een letsel leiden. Stembandknobbeltjes zijn de bekendste problemen.<br />
			Soms is er een organisch letsel. Dan zal de logopediste in samenspraak met een medisch team en de Neus – Keel en Oorarts kijken wat zij kan doen.
		    </p>
		</div>
		<div id="stem-advies">
		    <h1>Advies</h1>
		    <p>
			Dampen en drinken.<br />
			Je stem houdt van vocht.<br />
			Drink daarom heel regelmatig slokjes water zodanig dat je stembanden niet kunnen uitdrogen.<br />
			Wil je een echte Spa voor je stembanen? Damp dan enkele minuten. Gewoon warm water, een handdoek en de damp inademen. Een betere verwenbeurt kun je je stembanden niet geven.
		    </p>
		    <p>
			Kuchen<br />
			Dit is waarschijnlijk het meest schadelijkste dat je met je stembanden kunt doen.<br />
			Je slaat ze immers heel hard tegen elkaar.<br />
			Kriebelt het toch? Drink een slokje water of hoest discreet.
		    </p>
		    <p>
			Fluisteren<br />
			Fluisteren wanneer je ziek bent?<br />
			Neen, niet zo’n goed idee want fluisteren is juist erg vermoeiend voor je stembanden.<br />
			Klink je hees, dan ben je of heel stemmoe of je bent ziek. Rust is een veel beter hulpmiddel.
		    </p>
		</div>
	    </div>
	</div>
	<div class="clear"></div>
	<script type="text/javascript">
	    $('#subNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});

	    $(function () {
		var tabContainers = $('div.tabs div#subContent > div');
				
		$('div.tabs div#subNavigatie ul a').click(function () {
		    tabContainers.hide();
		    tabContainers.filter(this.hash).show();
									
		    $('.subNavigatie-active').stop().animate({paddingLeft: '5px', backgroundPosition: '-200 0'}, {duration: 400}); 
		    $('div.tabs div#subNavigatie ul a').removeClass('subNavigatie-active'); //make other tabs inactive
		    $(this).addClass('subNavigatie-active'); //make this tab active
		    $('.subNavigatie-active').stop().animate({paddingLeft: '25px', backgroundPosition: '0 0'}, {duration: 400});

		    return false;
		}).filter('[href$="' + document.location.hash + '"]').click();
	    });
	</script>
	<?php
	break;

    case 'praktijk':
	?>
	<div class="tabs">
	    <div id="subNavigatie">	
		<ul>
		    <li><a href="#praktijk-uitspraakkinderen">Uitspraak kinderen</a></li>
		    <li><a href="#praktijk-lezen">Lezen</a></li>
		    <li><a href="#praktijk-schrijven">Schrijven</a></li>
		    <li><a href="#praktijk-rekenen">Rekenen</a></li>
		    <li><a href="#praktijk-cursusleerkrachten">Cursus leerkrachten</a></li>
		    <li><a href="#praktijk-uitspraakvolwassenen">Uitspraak volwassenen</a></li>
		    <li><a href="#praktijk-stemtest">Stemtest</a></li>
		</ul>
	    </div>

	    <div id="subContent">
		<div id="praktijk-uitspraakkinderen">
		    <h1>Uitspraak kinderen</h1>
		    <p>
			<i>Uitspraakfoutjes</i><br />
			Alle letters moet je leren maar soms lukt dat niet zo goed.<br />
			Je lispelt of je zegt de | r | verkeerd.<br />
			Je laat een letter weg, je vervangt ze door een andere letter of je vervormt ze. Daar kan de logopediste je bij helpen.
		    </p>
		    <p>
			<i>Nasaliteit</i><br />
			Als er teveel lucht door de neus ontsnapt klink je altijd een beetje verkouden, je klinkt nasaal. Dat is niet zo erg maar je bent wel veel minder verstaanbaar en dat is niet leuk.
		    </p>
		    <p>
			<i>Afwijkend mondgedrag</i><br />
			Door altijd langs je mond te ademen, door heel veel op je duim te zuigen of door fout slikken (tongpersen) kun je ook een slechte of verkeerde uitspraak krijgen. Daarnaast zie je dan ook heel dikwijls dat je gebit niet meer zo mooi is. De orthodontist helpt je met je tanden, de logopedist met je gedrag.	
		    </p>
		</div>
		<div id="praktijk-lezen">
		    <h1>Lezen (dyslexie)</h1>
		    <p>
			Woordjes lezen blijft moeilijk. Je kind verwisselt dikwijls de lettertjes. Lezen is een straf.<br />
			Dit kan niet de bedoeling zijn. Met heel wat methodes en technieken kunnen we je spruit helpen om van die zware last een leuke bezigheid te maken.
		    </p>
		</div>
		<div id="praktijk-schrijven">
		    <h1>Schrijven (dysorthografie)</h1>
		    <p>
			Zonder foutjes schrijven? Het wil maar niet lukken.<br />
			Je kind schrijft de woordjes zoals hij/zij ze hoort. D of t: wat is het verschil?<br />
			Moet je die letter met het beentje naar boven of naar beneden schrijven?<br />
			Daar zijn alle spellingsregeltjes en de regeltjes over werkwoorden… de paniek breekt uit.<br />
			We helpen je graag om alles mooi en eenvoudig op papier te krijgen.
		    </p>
		</div>
		<div id="praktijk-rekenen">
		    <h1>Rekenen (dyscalulie)</h1>
		    <p>
			Getallen omkeren, tafels altijd maar weer vergeten, breuken, hoofdrekenen… het blijft moeilijk, ook al oefen je elke dag.<br />
			We kunnen je oogappel met speciale oefeningen helpen en begeleiding.
		    </p>
		</div>
		<div id="praktijk-cursusleerkrachten">
		    <h1>Cursus leerkrachten</h1>
		    <p>
			Ik krijg te vaak de vraag: ik ben leerkracht en ik heb last van mijn stem, wat kan ik doen?<br />
			Daarom heb ik een specifieke groepscursus gemaakt voor lesgevers. In een paar avondworkshops bekijken we:
		    </p>
		    <p>
			Hoe kan ik mijn stem verzorgen.<br />
			Hoe voorkom ik verkeerd stemgebruik.<br />
			Hoe leer ik juist ademen.<br />
			Hoe spreek je vlot natuurlijk maar vooral economisch.<br />
			Hoe spreek je verstaanbaar zonder luider te moeten spreken.<br />
			Hoe leer ik luider praten zonder te roepen.<br />
			Hoe vermijd ik stembandknobbeltjes en aanverwanten.
		    </p>
		    <p>
			<i>Praktisch:</i><br />
			We oefenen in kleine groepjes in ons groot leslokaal.<br />
			De workshopdata voor dit trimester zijn: check
		    </p>
		    <table border="0" cellspacing="0" cellpadding="0" class="workshops-list">
			<?php
			
			function encode_data($data) {
			    return utf8_encode($data);
			}
			
			$db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);

			$result = $db->query("SELECT short_description, long_description, DATE_FORMAT(`date`, '%W') as `day`, DATE_FORMAT(`date`, '%d-%m-%Y') AS `date_sorted`, DATE_FORMAT(time_start, '%H:%i') AS time_start, DATE_FORMAT(time_end, '%H:%i') AS time_end FROM workshopdata LEFT JOIN workshoptype ON workshopdata.type_id = workshoptype.id WHERE workshoptype.id = 1 ORDER BY `date` DESC, time_start DESC");

			while ($line = $db->fetchNextObject($result)) {
			    
			    if(!$onlyDate) {
				print('<tr>');
				print('<td class="td-short-description"><div class="short-description">' . encode_data($line->short_description) . '</div></td>');
				print('<td><div class="long-description">' . encode_data($line->long_description) . '</div></td>');
				print('</tr>');
			    }
			    print('<tr>');
			    if(!$onlyDate) {
				print('<td></td>');
			    }
			    print('<td><div class="datetime">' . getDutchDay($line->day) . ' ' . $line->date_sorted . ' van ' . $line->time_start . ' tot ' . $line->time_end . '</div></td>');
			    print('</tr>');
			}
			
			$db->close();
			?>
		    </table>
		</div>
		<div id="praktijk-uitspraakvolwassenen">
		    <h1>Uitspraak volwassenen</h1>
		    <p>
			Wil je een verzorgde uitspraak zonder hautain over te komen?<br />
			Dat kan!<br />
			Je hebt een klank die je soms stoort?<br />
			Geen probleem!<br />
			Je zal merken dat een regionaal gekleurde uitspraak of een scherpe s dikwijls te maken heeft met een verkeerde beweging van je spieren. Als je bij een ee je lippen breed maakt dan zal je ee altijd scherper klinken.<br />
			Je moet dus alleen de juiste spier op de juiste manier leren gebruiken, zonder te forceren.<br />
			Makkelijker gezegd dan gedaan? <br />
			Zo moeilijk is het niet.<br />
			Als we samen op weg gaan en je kunt het stapje per stapje leren, dan ligt het beslist ook binnen jouw mogelijkheden.
		    </p>
		</div>
		<div id="praktijk-stemtest">
		    <h1>Stemtest</h1>
		    <p>
			Wil je je voorbereiden op een stemtest?<br />
			We helpen je graag daar waar nodig.
		    </p>
		</div>
	    </div>
	</div>
	<div class="clear"></div>
	<script type="text/javascript">
	    $('#subNavigatie').css({opacity: 0.0}).animate({opacity: 1.0, top: '+=50px'}, {duration: 800});

	    $(function () {
		var tabContainers = $('div.tabs div#subContent > div');
				
		$('div.tabs div#subNavigatie ul a').click(function () {
		    tabContainers.hide();
		    tabContainers.filter(this.hash).show();
									
		    $('.subNavigatie-active').stop().animate({paddingLeft: '5px', backgroundPosition: '-200 0'}, {duration: 400}); 
		    $('div.tabs div#subNavigatie ul a').removeClass('subNavigatie-active'); //make other tabs inactive
		    $(this).addClass('subNavigatie-active'); //make this tab active
		    $('.subNavigatie-active').stop().animate({paddingLeft: '25px', backgroundPosition: '0 0'}, {duration: 400});

		    return false;
		}).filter('[href$="' + document.location.hash + '"]').click();
	    });
	    
	    $('#content .tabs #subContent table.workshops-list tr td div.long-description').append(addCorners());
	    $('#content .tabs #subContent table.workshops-list tr td div.datetime').append(addCorners());
	</script>
	<?php
	break;
    case 'goedgestemd':
	?>
	<h1>Goed Gestemd</h1>
	<a href="http://www.goedgestemd.be" target="_blank"><img src="images/GoedGestemd_cover.jpg" style="width: 200px; float: right; margin-left: 20px; margin-bottom: 20px;"></a>
	<p>Herken je je in een van deze situaties?</p>
	<div id="goedgestemd_situaties_div" class="citaat" style="margin-right: 242px;">
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
	    Dan is het boek van VRT-logopediste Christel Lacroix, <a href="http://www.goedgestemd.be" target="_blank">GOED GESTEMD!</a> zeker iets voor jou!<br />
	    Logopediste Christel Lacroix traint al meer dan twintig jaar bekende radio- en televisiestemmen. In dit boek helpt ze je op weg naar een gezonde en aangenaam klinkende stem. Er is ook een bijhorende cd vol praktische oefeningen, ingelezen door vertrouwde radio- en televisie-stemmen van VRT, zoals Wim De Vilder, Kobe Ilsen, Indra Dewitte, Christophe Lambrecht, Cath Luyten en vele andere. Een toegankelijk boek met leuke oefeningen voor een mooie uitspraak, een gezonde stem en een aangename intonatie en presentatie.
	</p>
	<p class="citaat" style="margin-right: 242px;">
	    'Dat ik een fijn televisieprogramma mag presenteren, heb ik te danken aan Christel Lacroix. In pure My Fair lady-stijl veranderde ze mijn plat Antwerps Eliza Doolittle-gemompel in iets verstaanbaars. Net als professor Higgins deden we honderd keer "het Spaanse graan" en gingen we op zoek naar de juiste ij. In een mum van tijd leerde ze me praten &#233;n presenteren.'<br />
	    Erik Van Looy
	</p>
	<p class="citaat">
	    'Ik dacht dat ik kon lezen. Tot ik tijdens het journalistenexamen voor een micro een nieuwsbericht moest voorlezen. "Voor verbetering vatbaar", was het oordeel van de terecht strenge jury. En zo geschiedde, met de hulp en het geduld van Christel Lacroix. Geen mens gelooft me nog als ik dat verhaal van de jury vertel.'<br />
	    Phara de Aguirre
	</p>
	<div class="clear"></div>
	<?php
	break;
    case 'linken':
	?>
	<h1>Linken</h1>
	<div id="links">
	    <ul>
		<li>
		    <div class="linkb"><a href="http://www.gva.be/nieuws/wetenschap/een-op-de-drie-heeft-problemen-met-de-stem.aspx" target="_blank">http://www.gva.be/nieuws/wetenschap/een-op-de-drie-heeft-problemen-met-de-stem.aspx</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.schrijf.be/blog/goed-gestemd/" target="_blank">http://www.schrijf.be/blog/goed-gestemd/</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://oud.danspunt.be/index.php?onderdeel=5074&titel=Externe+organisaties" target="_blank">http://oud.danspunt.be/index.php?onderdeel=5074&titel=Externe+organisaties</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.radio1.be/programmas/mezzo/goed-gestemd" target="_blank">http://www.radio1.be/programmas/mezzo/goed-gestemd</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.fondspascaldecroos.org/inhoud/nieuws/winnaar-nacht-journalistiek-bekend" target="_blank">http://www.fondspascaldecroos.org/inhoud/nieuws/winnaar-nacht-journalistiek-bekend</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.howest.be/Default.aspx?target=hiepso&lan=nl&item=1114" target="_blank">http://www.howest.be/Default.aspx?target=hiepso&lan=nl&item=1114</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.howest.be/documenten/folders/20112012/Journalistiek.pdf" target="_blank">http://www.howest.be/documenten/folders/20112012/Journalistiek.pdf</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.brunhilde.be/idbrun003.asp" target="_blank">http://www.brunhilde.be/idbrun003.asp</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://hannelorevanhove.be/" target="_blank">http://hannelorevanhove.be/</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://www.thomasvanderspiegel.com/Thomas_Van_der_Spiegel/CV_THOMAS_VAN_DER_SPIEGEL.html" target="_blank">http://www.thomasvanderspiegel.com/Thomas_Van_der_Spiegel/CV_THOMAS_VAN_DER_SPIEGEL.html</a></div>
		</li>
		<li>
		    <div class="linkb"><a href="http://kimvanoncen.com/voorbeeld-pagina/" target="_blank">http://kimvanoncen.com/voorbeeld-pagina/</a></div>
		</li>
	    </ul>
	</div>
	<script type="text/javascript">
	    $('#links ul li .description').append(addCorners());
	    $('#links ul li .linkb').append(addCorners());	    
	</script>
	<?php
	break;
    case 'contact':
	?>
	<h1>Contact</h1>
	<table border="0" cellspacing="5" class="contact">
	    <tr>
		<td valign="top"><img src="images/icons/address.png" style="background-color: transparent; border-width: 0px; padding: 2px 2px;"></td>
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
		<td><p><span class="email">info [at] christellacroix.be</span></p></td>
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
	    <a href="http://maps.google.be/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=veldekens+44+2600+berchem&amp;aq=&amp;sll=50.805935,4.432983&amp;sspn=5.936984,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=Veldekens+44,+Berchem+2600+Antwerpen,+Vlaams+Gewest&amp;t=m&amp;z=14&amp;iwloc=r1&amp;ll=51.190384,4.435479" style="color:#0000FF;text-align:left">Grotere kaart weergeven</a>
	</small>

	<h2>Bereikbaarheid</h2>
	<p style="font-size: 14px;">Er zijn verschillende trams en bussen die niet zo ver van mijn deur een halte hebben. De meeste haltes zijn op de Grote Steenweg of aan de Berchemstadionstraat. Je vindt altijd meer informatie op <a href="http://www.delijn.be" target="_blank">www.delijn.be</a>.</p>
	<p style="font-size: 14px;">Berchem Station ligt op loop afstand van onze praktijk.</p>


	<script type="text/javascript">
	    $('#content').emailSpamProtection('email');
	</script>
	<?php
	break;
    default:
	include('error.php');
	break;
}
?>