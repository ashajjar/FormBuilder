<?php
require_once 'formBuilder.php';
require_once 'themeManager.php';

static $scripts="<script type='text/javascript' src='js/validator.js'></script>
				<script type='text/javascript' src='js/getElementsByClassName-1.0.1.js'></script>
				<link rel='stylesheet' type='text/css' href='css/main.css'/>";

function createTextField($label,$name,$isRequired,$dataType="",$lang="en",$maxlength=10,$size=20,$value="",$class="",$errMessage="")
{
	global $scripts;
	$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
	$class.=($isRequired?" required ":"");
	$class.=" ".getTypeTheme($dataType);
	$class=trim($class);
	$dir=($lang=="en")?"ltr":"rtl";
	$title=$label;
	if ($dataType=="DAT") {
		$date="'".date('Y/m/d')."'";
		$scripts.="<link href='css/jquery-ui.css' rel='stylesheet' type='text/css'/>\n<script type='text/javascript' src='js/jquery.min.js'></script>\n<script type='text/javascript' src='js/jquery-ui.min.js'></script>\n<script type='text/javascript' src='js/jquery-ui-1.7.2.custom.min.js'></script>\n<script type='text/javascript' src='js/ui.datepicker.js'></script>\n<script type='text/javascript' src='js/ui.core.js'></script><script type='text/javascript' src='js/jquery.timeentry.js'></script><script language='javascript'>$(document).ready(function() {\$('#$name').datepicker({dateFormat: 'd/m/yy',showButtonPanel: true,minDate: new Date($date)});});</script>";
	}
	elseif ($dataType=="EML")
	{
		if($maxlength<300)$maxlength=300;		
	}
	$textField="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>
	<input dir='$dir' class='$class' title='$title' value='$value' maxlength='$maxlength' size='$size'  id='$name$lang' name='$name$lang' type='text' />
	</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>
	</div>";
	return $textField;
}

function createTextArea($label,$name,$isRequired,$isPlainText=true,$lang="en",$rows=5,$cols=15,$value="",$class="",$errMessage="")
{
	if(!$isPlainText)
	{
		$value.=" . . . Advanced editor is not yet supported!!!";
	}
	$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
	$class.=($isRequired?" required ":"");
	$class=trim($class);
	$dir=($lang=="en")?"ltr":"rtl";
	$title=$label;
	$textArea="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>
	<textarea class='$class' dir='$dir' id='$name$lang' name='$name$lang' title='$title' rows='$rows' cols='$cols'>$value</textarea>
	</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>
	</div>";
	return $textArea;
}

function createPasswordField($label,$name,$isRequired,$isConfirmation=false,$confirmWith="",$lang="en",$maxlength=30,$size=20,$value="",$class="",$errMessage="")
{
	//$confirmWith is where to set password field ID to confirm with
	if($isConfirmation && trim($confirmWith)=="")
		return "Error rendering the control . . no password to confirm with was determined!";
	if($isConfirmation && trim($confirmWith)!="")
	{
		$confirmationMethod="if(\$() if(this.value!=document.getElementById('$confirmWith').value){document.getElementById('err$name$lang').style.visibility='visible';}";
		$reqField="<span style='color:#f00;'><sup>(*)</sup></span>";
		$class.=" required ";
		$class=trim($class);
		$dir=($lang=="en")?"ltr":"rtl";
		$title=$label;
		$pwField="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>
		<input dir='$dir' onblur='$confirmationMethod' class='$class' title='$title' value='$value' maxlength='$maxlength' size='$size'  id='$name$lang' name='$name$lang' type='password' />
		</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>
		</div>";
		return $pwField;		
	}
	else 
	{
		$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
		$class.=($isRequired?" required ":"");
		$class=trim($class);
		$dir=($lang=="en")?"ltr":"rtl";
		$title=$label;
		$pwField="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>
		<input dir='$dir' class='$class' title='$title' value='$value' maxlength='$maxlength' size='$size'  id='$name$lang' name='$name$lang' type='password' />
		</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>
		</div>";
		return $pwField;
	}
}
/**
 * 
 * Enter description here ...
 * @param string $label
 * @param string $name
 * @param boolean $isRequired
 * @param string $values semi-colon separated values
 * @param string $initValue
 * @param string $lang en/ar
 * @param boolean $isVertical true for vertical and false for horizontal
 * @param string $class
 * @param string $errMessage
 */
function createRadioList($label,$name,$isRequired,$values,$initValue="",$lang="en",$isVertical=true,$class="",$errMessage="")
{
	$optionSeparator=$isVertical?"<br/>":" ";
	$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
	$class.=($isRequired?" required ":"");
	$class=trim($class);
	$dir=($lang=="en")?"ltr":"rtl";
	$optListHTML="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>";
	$list=explode(";", $values);
	foreach ($list as $value) {
		$checked=($value==$initValue)?"checked='checked'":"";
		$optListHTML.="<input $checked type='radio' id='$name"."_$value' name='$name$lang' value='$value' /> <label for='$name"."_$value'>$value</label>$optionSeparator";
	}
	$optListHTML.="</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>";
	$optListHTML.="</div>";
	return $optListHTML;
}

function createCheckList($label,$name,$isRequired,$values,$initValues="",$lang="en",$isVertical=true,$class="",$errMessage="")
{
	$checkSeparator=$isVertical?"<br/>":" ";
	$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
	$class.=($isRequired?" required ":"");
	$class=trim($class);
	$dir=($lang=="en")?"ltr":"rtl";
	$chkListHTML="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>";
	$list=explode(";", $values);
	$initValues=explode(";", $initValues);
	foreach ($list as $value) {
		$checked=(in_array($value, $initValues))?"checked='checked'":"";
		$chkListHTML.="<input $checked type='checkbox' id='$name"."_$value' name='$name$lang' value='$value' /> <label for='$name"."_$value'>$value</label>$checkSeparator";
	}
	$chkListHTML.="</div>$checkSeparator<div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>";
	$chkListHTML.="</div>";
	return $chkListHTML;
}

function createComboBox($label,$name,$isRequired,$values,$keys,$initKey="",$lang="en",$class="",$errMessage="")
{
	$reqField=($isRequired?"<span style='color:#f00;'><sup>(*)</sup></span>":"");
	$class.=($isRequired?" required ":"");
	$class=trim($class);
	$dir=($lang=="en")?"ltr":"rtl";
	$comboHTML="<div class='container$lang'><div class='labelContainer$lang'><label for='$name$lang'>$label $reqField : </label></div><div class='controlContainer$lang'>";
	$listValues=explode(";", $values);
	$listKeys=explode(";", $keys);
	$count=count($listValues);
	if($count!=count($listKeys))
	{
		return "Error: Keys and values must have the same number of elements!";
	}
	$comboHTML.="<select name='$name$lang' id='$name$lang' class='$class'>";
	for ($i = 0; $i < $count; $i++) {
		$value=$listValues[$i];
		$key=$listKeys[$i];
		
		$selected=($key==$initKey)?"selected='selected'":"";
		$comboHTML.="<option $selected value='$key' >$value</option>";		
	}
	foreach ($listValues as $value) {

	}
	$comboHTML.="</select></div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>";
	$comboHTML.="</div>";
	return $comboHTML;
}
function createSubmitButton($label,$name,$lang="en",$value="Submit",$class="",$errMessage="")
{
	$dir=($lang=="en")?"ltr":"rtl";
	$title=$label;
	$submit="<div class='container$lang'><div class='controlContainer$lang'>
	<input dir='$dir' class='$class' title='$title' value='$value' id='$name$lang' name='$name$lang' type='submit' />
	</div><div id='err$name$lang' class='errMsgContainer$lang errorMsg'>$errMessage</div>
	</div>";
	return $submit;
}
function startForm($id,$action="#",$method="post",$onsubmit="",$enc="",$lang="en",$class="")
{
	initFormBuilder(array(170,100,100),$lang);
	$onsubmit=$onsubmit."return validate(this.id,\"$lang\"); ";
	$dir=($lang=="en")?"ltr":"rtl";
	$encryption=($enc!="")?"enctype='$enc'":"";
	$formHTML="<form class='$class' dir='$dir' $encryption id='$id' action='$action' method='$method' onsubmit='$onsubmit'>";
	return $formHTML;
	
}

function finishForm($lang)
{
	global $scripts;
	return "</form>$scripts";
}
?>