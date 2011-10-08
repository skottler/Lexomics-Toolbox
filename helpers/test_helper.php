<?php

function scrub_text($string, $type = 'default') {
	switch ($type) {
		case 'default':
			strip_tags($string);
			break;
		case 'xml':
			strip_tags($string);
			break;
		case 'sgml':
			strip_tags($string);
			break;
	}
}

?>
