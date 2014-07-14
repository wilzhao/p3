<?php

require base_path()."/vendor/badcow/lorem-ipsum/lib/Badcow/LoremIpsum/Generator.php";

function generate($numParagraphs){
	$generator = new BadCow\LoremIpsum\Generator();
	$paragrapharray = $generator->getParagraphs($numParagraphs);
	$paragraphstring = "<br>\n";
	$paragraphstring .= implode("\n<br>\n\n<br>\n",$paragrapharray);
	$paragraphstring .= "\n<br>\n";
	return $paragraphstring;
}
