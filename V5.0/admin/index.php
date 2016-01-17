<?php
session_start();

include('../classes/db.class.php');
include('../classes/db.class.inc.php');

$username = "goed";
$wachtwoord = "gestemd";
$error = "";
$start_page = 1;

if (!isset($_GET['p']) && isset($_SESSION['user'])) {
    header('Location: index.php?p=' . $start_page);
}

if (isset($_POST['login'])) {
    // check user name and password
    if ($_POST['username'] == $username && $_POST['password'] == $wachtwoord) {
	
	if(!isset($_GET['p'])) {
	    $page = $start_page;
	} else {
	    $page = $_GET['p'];
	}
	
	$_SESSION['user'] = $_POST['username'];
	header('Location: index.php?p=' . $page);
    } else {
	$error = "Gebruikersnaam en/of wachtwoord is niet in orde";
    }
}

if(isset($_SESSION['user'])) {
    if (isset($_POST['addDate'])) {
	$db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
	$db->execute("INSERT INTO workshopdata(type_id, short_description, long_description, date, time_start, time_end) VALUES(" . $_GET['p'] . ", '" . htmlspecialchars($_POST['short_description']) . "', '" . htmlspecialchars($_POST['long_description']) . "', STR_TO_DATE('" . $_POST['workshop_date'] . "', '%d-%m-%Y'), STR_TO_DATE('" . $_POST['workshop_time_start'] . "', '%H:%i'), STR_TO_DATE('" . $_POST['workshop_time_end'] . "', '%H:%i'))", false);
	$db->close();
    }

    if(isset($_POST['editDate'])) {
	$db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
	$db->execute("UPDATE workshopdata SET short_description = '" . htmlspecialchars($_POST['short_description']) . "', long_description = '" . htmlspecialchars($_POST['long_description']) . "', date = STR_TO_DATE('" . $_POST['workshop_date'] . "', '%d-%m-%Y'), time_start = STR_TO_DATE('" . $_POST['workshop_time_start'] . "', '%H:%i'), time_end = STR_TO_DATE('" . $_POST['workshop_time_end'] . "', '%H:%i') WHERE id = " . $_POST['workshopid'], false);
	$db->close();
    }

    if(isset($_POST['deleteDate'])) {
	$db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
	$db->execute("DELETE FROM workshopdata WHERE id = " . $_POST['workshopid'], false);
	$db->close();
    }

    if (isset($_GET['p']) && $_GET['p'] == 'logout') {
	session_destroy();
	header('Location: index.php');
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
    <head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>Christel Lacroix - admin</title> 
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="../jquery/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../jquery/fancybox/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" media="all" type="text/css" href="../jquery/fancybox/jquery.fancybox.css?v=2.0.6"/>
	
	<!-- Add timepicker -->
	<script type="text/javascript" src="../jquery/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="../jquery/jquery-ui-sliderAccess.js"></script>
	<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.8.21/themes/ui-lightness/jquery-ui.css" />
	
	<!-- Form validation -->
	<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>	
	
	<link rel="stylesheet" media="all" type="text/css" href="style.css" />

	<script type="text/javascript">
   
	    jQuery.fn.center = function () {
		this.css("position","absolute");
		this.css("top", Math.max(0, (($(window).height() - this.outerHeight()) / 2) + $(window).scrollTop()) + "px");
		this.css("left", Math.max(0, (($(window).width() - this.outerWidth()) / 2) + $(window).scrollLeft()) + "px");
		return this;
	    }
	    
	    $(document).ready(function() {
		$('.fancybox').fancybox();
		$('#login_div').center();
	    });	    
	</script>
	
	<style>
	    /* css for timepicker */
	    .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
	    .ui-timepicker-div dl { text-align: left; }
	    .ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
	    .ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
	    .ui-timepicker-div td { font-size: 90%; }
	    .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
	    #ui-datepicker-div, .ui-datepicker{ font-size: 80%; }	
	</style>
    </head>
    <body>
	<?php
	if (isset($_SESSION['user'])) {
	    // logged in

	    $db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);

	    $result = $db->query("SELECT id, type FROM workshoptype");
	    
	    print('<div style="float: left" id="navigation">');
	    print('<ul>');
	    while ($line = $db->fetchNextObject($result)) {
		print('<li><b><a href="?p=' . $line->id . '">' . $line->type . '</a></b>');
		if($_GET['p'] == $line->id) {
		    print('<ul id="subnavigation"><li><a href="content.php?p=' . $line->id . '&a=add" class="fancybox fancybox.ajax">- Voeg datum toe</a></li></ul></li>');
		}
	    }
	    print('<li><b><a href="?p=logout">Logout</a></b></li>');
	    print('</ul>');
	    print('</div>');
	    
	    
	    print('<div style="float: left; margin: 10px;" id="content">');
	    $result = $db->query("SELECT workshopdata.id as workshopdata_id, type_id, workshoptype.type, short_description, long_description, DATE_FORMAT(date, '%d-%m-%Y') AS date, DATE_FORMAT(time_start, '%H:%i') AS time_start, DATE_FORMAT(time_end, '%H:%i') AS time_end FROM workshopdata LEFT JOIN workshoptype ON workshopdata.type_id = workshoptype.id WHERE type_id = " . $_GET['p'], false);
	    
	    
	    print('<table style="border: 1px" border="1">');
	    print('<tr><th>Korte uitleg</th><th>Lange uitleg</th><th>Datum</th><th>Startuur</th><th>Einduur</th><td></td><td></td></tr>');
	    
	    while ($line = $db->fetchNextObject($result)) {
		print('<tr><td>' . $line->short_description . '</td><td>' . $line->long_description . '</td><td>' . $line->date . '</td><td>' . $line->time_start . '</td><td>' . $line->time_end . '</td><td><a href="content.php?p=' . $_GET['p'] . '&id=' . $line->workshopdata_id . '&a=edit" class="fancybox fancybox.ajax">Aanpassen</a></td><td><a href="content.php?p=' . $_GET['p'] . '&id=' . $line->workshopdata_id .'&a=delete" class="fancybox fancybox.ajax">Verwijderen</a></td></tr>');
	    }
	    print('</table>');
	    
	    print('</div>');
	    
	    print('<div class="clear:"></div>');
	    
	    $db->close();
	    ?>
	    
	    <?php
	} else {
	    ?>
	<div id="login_div">
	    <form action="index.php" method="post" id="login">
		<label for="username">Gebruikersnaam</label><input type="text" name="username" size="20" id="username" />
		<div class="clear"></div>
		<label for="password">Wachtwoord</label><input type="password" name="password" size="20" id="password" />
		<div class="clear"></div>
		<input type="submit" name="login" value="Log in" size="20" id="submit" /><br />
		<div id="error"><?php print($error); ?></div>
	    </form>
	</div>
	    <?php
	}
	?>

    </body>
</html>