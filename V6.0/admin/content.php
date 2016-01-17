<?php
session_start();

if (!isset($_GET['p'])) { // page
    die('problem');
}

if(!isset($_SESSION['user'])) { // not logged in
    die('not logged in');
}

include('../classes/db.class.php');
include('../classes/db.class.inc.php');

$workshop_id = '';
$short_description = '';
$long_description = '';
$date = 'dd-mm-yyyy';
$time_start = '00:00';
$time_end = '00:00';
$submit_value = 'Voeg toe';
$submit_id = 'addDate';

if(isset($_GET['a']) && $_GET['a'] == 'edit') {
    $db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
    $result = $db->queryUniqueObject("SELECT workshopdata.id as workshopdata_id, type_id, workshoptype.type, short_description, long_description, DATE_FORMAT(date, '%d-%m-%Y') AS date, DATE_FORMAT(time_start, '%H:%i') AS time_start, DATE_FORMAT(time_end, '%H:%i') AS time_end FROM workshopdata LEFT JOIN workshoptype ON workshopdata.type_id = workshoptype.id WHERE workshopdata.id = " . $_GET['id'], false);
	    	 
    $workshop_id = $result->workshopdata_id;
    $short_description = $result->short_description;
    $long_description = $result->long_description;
    $date = $result->date;
    $time_start = $result->time_start;
    $time_end = $result->time_end;
    $submit_value = 'Pas aan';
    $submit_id = 'editDate';
    
    $db->close();
}

$db = new DB($DATABASE_NAME, $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
$workshop_type = $db->queryUniqueValue("SELECT type FROM workshoptype WHERE id = " . $_GET['p']);
$db->close();

print('<h1>' . $workshop_type . '</h1>');

if(isset($_GET['a'])) {
    if($_GET['a'] == 'add' || $_GET['a'] == 'edit') {
    ?>
    <form method="post" action="index.php?p=<?php print($_GET['p']); ?>" id="dateForm" style="width: 600px;">
	<input type="hidden" name="workshopid" id="workshopid" value="<?php print($workshop_id) ?>" />
	<p><label for="short_description">Short description</label><input type="text" name="short_description" maxlength="100" value="<?php print($short_description) ?>" id="short_description" class="required" /></p><div class="clear"></div>
	<p><label for="long_description">Long description</label><textarea name="long_description" id="long_description"><?php print($long_description) ?></textarea></p><div class="clear"></div>
	<p><label for="workshop_date">Datetime</label><input type="text" name="workshop_date" id="workshop_date" value="<?php print($date) ?>" class="required" /></p><div class="clear"></div>
	<p><label for="workshop_time_start">Startuur</label><input type="text" name="workshop_time_start" id="workshop_time_start" value="<?php print($time_start) ?>" class="required" /></p><div class="clear"></div>
	<p><label for="workshop_time_end">Einduur</label><input type="text" name="workshop_time_end" id="workshop_time_end" value="<?php print($time_end) ?>" class="required" /></p><div class="clear"></div>
	<p><label for="<?php print($submit_id) ?>"></label><input type="submit" value="<?php print($submit_value) ?>" name="<?php print($submit_id) ?>" id="<?php print($submit_id) ?>" class="required" /></p><div class="clear"></div>
    </form>
    <script type="text/javascript">
    $(function(){
	$('#workshop_date').datepicker({
	    dateFormat: 'dd-mm-yy',
	    showButtonPanel:  true
	});
	$('#workshop_time_start').timepicker({
	    timeFormat: 'hh:mm',
	    stepMinute: 10,
	    showButtonPanel:  false
	});
	$('#workshop_time_end').timepicker({
	    timeFormat: 'hh:mm',
	    stepMinute: 10,
	    showButtonPanel:  false
	});
    });

    $("#dateForm").validate({
	submitHandler: function(form) {
	    form.submit();
	},
	rules: {
	    workshop_date: {
		required: true,
		date: true
	    }
	},
	messages: {
	    short_description: "Gelieve een korte beschrijving op te geven van deze cursus",
	    workshop_date: "Gelieve een geldige datum op te geven in het formaat dd-mm-yyyy",
	    workshop_time_start: "Gelieve een geldig uur op te geven in het formaat uu:mm",
	    workshop_time_end: "Gelieve een geldig uur op te geven in het formaat uu:mm"
	}
    });	

    </script>
    <?php
    } else if ($_GET['a'] == 'delete') {
    ?>
    <form method="post" action="index.php?p=<?php print($_GET['p']); ?>" id="deleteForm">
	Weet u zeker dat u deze datum wilt verwijderen?
	<input type="hidden" name="workshopid" id="workshopid" value="<?php print($_GET['id']) ?>" />
	<input type="submit" value="Verwijderen" name="deleteDate" id="deleteDate" />
	<input type="submit" value="Annuleren" name="cancelDeletion" id="cancelDeletion" />
    </form>
<?php
    }
}
?>