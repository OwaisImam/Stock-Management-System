<?php
include "db.php";
$q = strtolower($_GET["q"]);
if (!$q) return;
$db->query("SELECT * FROM supplier_details");
  while ($line = $db->fetchNextObject()) {
  
  	if (strpos(strtolower($line->category_name), $q) !== false) {
		echo "$line->supplier_name\n";
	
 }
 }

?>