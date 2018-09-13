<?php
$baris=5;
printPiramida(0);
	function printPiramida($i) {
	  global $baris;
	  printJarak(0, $i);
	  printPola($baris, $i);
	  echo "<br>";
	  if ($baris > $i++) printPiramida($i);
	}

	function printJarak ($j,$i) {
		global $baris;
		if($j>$baris-$i-1) {
			echo "&nbsp;";
			printJarak($j+1,$i);
		}
	}
	function printPola ($a, $i) {
		global $baris;
		if($a>$baris-$i-1) {
			echo "*&nbsp;";
			printPola($a-1, $i);
		}
	}
?>
//========================================================================================================
<?php
	for ($i=1; $i<=5; $i++) { 
		for ($p=$i; $p<=5; $p++) {
			echo "$p"; 
		}
		echo "<br>";
	}

?>
