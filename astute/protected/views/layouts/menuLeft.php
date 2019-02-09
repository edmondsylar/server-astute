<?php
$controller = $this->id; //Yii::app()->controller->id;
$action = $this->action->id; //pages
$userid = Yii::app()->user->userid;

//$allowpeopleaccess = array('KD003', 'WA002', 'MP001', 'WT007');
$allowpeopleaccess = array("KD003", "WA002", "WT007", "MP001", "MY004","PO008");
$allowlicenceaccess = array("KD003", "WA002", "WT007", "MP001", "MY004","PO008");
$alloworganizationaccess = array("KD003", "WA002", "MP001", "MY004", "LN008","PO008");
$allowpositionsaccess = array("KD003", "WA002", "MP001", "MY004", "LN008","PO008");
$allowfunctionsaccess = array("KD003", "WA002", "MP001", "MY004", "LN008","PO008");
//$allowfunctionsaccess = ('KD003','WA002','MP001','MY004');
//$allowfunctionsaccess = ('KD003' || 'WA002' || 'MP001' ||'MY004');
//set menu arrays
//      dashboard menu
$dashboard_array = array("user");
$dashboard_status = '';
$dashboard_color = '';

//      settings menu
$setting_array = array("settings/panel");
$setting_status = '';
$setting_color = '';


//      people menu
$people_array = array("people/panel", "people/politicallyExposed");
$people_status = '';
$people_color = '';

//      organisation menu
$organisation_array = array("organisation/organizations");
$organisation_status = '';
$organisation_color = '';

//      position menu
$position_array = array("organisation/positions");
$position_status = '';
$position_color = '';

//      function menu
$function_array = array("organisation/functions");
$function_status = '';
$function_color = '';



//      media menu
$media_array = array("media/adverseMedia");
$media_status = '';
$media_color = '';

//      licences menu
$licence_array = array("licences/licencesClient");
$licence_status = '';
$licence_color = '';



if (in_array($controller, $dashboard_array)) {
    $dashboard_status = 'active';
    $dashboard_color = 'cyan-text';
} elseif (in_array($controller, $organisation_array)) {
    $organisation_status = 'active';
    $organisation_color = 'cyan-text';
} elseif (in_array($controller, $people_array)) {
    $people_status = 'active';
    $people_color = 'cyan-text';
} elseif (in_array($controller, $position_array)) {
    $position_status = 'active';
    $position_color = 'cyan-text';
} elseif (in_array($controller, $function_array)) {
    $function_status = 'active';
    $function_color = 'cyan-text';
} elseif (in_array($controller, $media_array)) {
    $media_status = 'active';
    $media_color = 'cyan-text';
} elseif (in_array($controller, $setting_array)) {
    $setting_status = 'active';
    $setting_color = 'cyan-text';
} elseif (in_array($controller, $licence_array)) {
    $licence_status = 'active';
    $licence_color = 'cyan-text';
}
?>

<li class="no-padding <?php echo $dashboard_status; ?>">
    <?php echo CHtml::link('Dashboard', array('user/panel'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $dashboard_color)); ?>
</li>

<li class="no-padding <?php echo $setting_status; ?>">
    <?php echo CHtml::link('Settings', array('settings/panel'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $setting_color)); ?>
</li>

<li class="no-padding <?php echo $people_status; ?>">
    <?php if (in_array("$userid", $allowpeopleaccess)) { ?>
        <?php echo CHtml::link('People', array('people/politicallyExposed'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $people_color)); ?>
    <?php } else { ?>
        <a class="grey-text"href="#">People</a>
    <?php } ?>
</li>

<li class="no-padding <?php echo $organisation_status; ?>">
    <?php if (in_array("$userid", $alloworganizationaccess)) { ?>
        <?php echo CHtml::link('Organizations', array('organisation/organizations'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $organisation_color)); ?>
    <?php } else { ?>
        <a class="grey-text"href="#">Organizations</a>
    <?php } ?>
</li>

<li class="no-padding <?php echo $media_status; ?>">
    <?php echo CHtml::link('Media', array('media/adverseMedia'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $media_color)); ?>
</li>




<!--<li class="no-padding --><?php //echo $licence_status; ?><!--">-->
<!--    --><?php ////if (in_array("$userid", $allowlicenceaccess)) {  ?>
<!--    --><?php //echo CHtml::link('Licences', array('licences/licencesClient'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $licence_color)); ?>
<!--    --><?php //// } else { ?>
<!--    <a class="grey-text"href="#">licences</a>-->
<!--    --><?php // //}  ?>
<!--</li>-->
<!---->
<!---->
<!---->
<!--<li class="no-padding --><?php ////echo $function_status; ?><!--">-->
<!--    --><?php ////if (in_array("$userid", $allowfunctionsaccess)) { ?>
<!--        --><?php ////echo CHtml::link('Functions', array('organisation/functions'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $function_color)); ?>
<!--    --><?php//// } else { ?>
<!--        <a class="grey-text"href="#">Functions</a>-->
<!--    --><?php ////} ?>
<!--</li>-->
<!---->
<!--<li class="no-padding --><?php // echo $position_status;  ?><!--">-->
<?php // if (in_array("$userid", $allowpositionsaccess)) {  ?>
<?php // echo CHtml::link('Positions', array('organisation/positions'), $htmlOptions = array('class' => 'waves-effect waves-grey ' . $position_color)); ?>
<?php // } else { ?>
<!--<a class="grey-text"href="#">Positions</a>-->
<?php // }  ?>
<!--</li>-->



