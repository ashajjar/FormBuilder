<?php
global $labelWidth;
global $controlWidth;
global $errMsgWidth;
function initFormBuilder($dimensions,$lang)
{
	$float=($lang=="en")?"left":"right";
	$clear=($lang=="en")?"right":"left";
	echo "<style>";
	echo ".container$lang{margin-top:5px;}\n";
	echo ".labelContainer$lang{margin:1px;min-width:{$dimensions[0]}px;float:$float;}\n";
	echo ".controlContainer$lang{margin:1px;float:$float;}\n";
	echo ".errMsgContainer$lang{margin:1px;min-width:{$dimensions[2]}px;clear:both;}\n";
	echo "</style>";
}
?>