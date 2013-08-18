<?php
function getTypeTheme($dataType) {
	switch ($dataType) {
		case "HUN":
			$class="HumanName";
			break;
		case "TEL":						//Phone or Fax
			$class="Phone";
			break;
		case "MOB":
			$class="Mobile";
			break;
		case "EML":
			$class="EMail";
			break;
		case "URL":
			$class="Site";
			break;
		case "DAT":
			$class="Date";
			break;
		case "NUM":
			$class="Number";
			break;
		case "":
		case "FT":
		default:
			$class="";
		break;
	};
	return $class;
}
?>