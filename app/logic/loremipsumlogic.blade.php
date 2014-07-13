<?php

require base_path()."/vendor/badcow/lorem-ipsum/lib/Badcow/LoremIpsum/Generator.php";

function generate($numParagraphs){
	$generator = new BadCow\LoremIpsum\Generator();
	$paragrapharray = $generator->getParagraphs($numParagraphs);
	$paragraphstring = "<p>\n";
	$paragraphstring .= implode("\n</p>\n\n<p>\n",$paragrapharray);
	$paragraphstring .= "\n</p>\n";
	return $paragraphstring;
}
