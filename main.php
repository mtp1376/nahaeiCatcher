<?php
require('include/phpQuery.php');
$l = json_decode(file_get_contents('links.in'));

foreach ($l as $k => $v){
	$doc = phpQuery::newDocument(file_get_contents($v));
	
	foreach ($doc['a.imagecache-exam'] as $j){
		file_put_contents('out/' . $k . '.out', pq($j) -> attr('href') . PHP_EOL, FILE_APPEND);
	}
}