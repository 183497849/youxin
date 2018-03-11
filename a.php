 <?php
 	$a = file_get_contents("http://php.net/manual/en/langref.php");
 	$b = preg_match_all("a.*?herf",$a);
 	echo $b;
 	die();
//  <a href="getting-started.php" title="Getting Started">Getting Started</a>
