<?php

function getThose($file){
	preg_match("([0-9][0-9][0-9][0-9])",$file, $m);
	$img= strrev(strstr(strrev($file),"/", true));
	$yr= $m[0];
	
	return array($yr, $img);
}

$files = glob('out/*.out', GLOB_BRACE);
foreach($files as $f) {
	$lines = file($f);
	$fname = explode('/', $f);
	$fname = $fname[1];
	$fname = strstr($fname, '.', true);

	exec("mkdir files\\{$fname}");
	foreach ($lines as $l){
		$args = getThose(trim($l));
		
		exec("mkdir files\\{$fname}\\{$args[0]}");
		exec("tools\\wget.exe -q -O files\\{$fname}\\{$args[0]}\\{$args[1]} {$l}");		// replace tools\wget.exe :D
	}
}