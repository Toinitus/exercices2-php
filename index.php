<?php
//1
	 $uneVariable = 0;
	 while ($uneVariable < 10) {
	 	echo "$uneVariable" . "<br />";
	 	$uneVariable++;
	 }
//2
	$variable1 =0;	
	$variable2 =50; 

	while ($variable1 <= 20) {
		echo $variable1 * $variable2. "<br />";
		$variable1++;
	}

//3
		$variable3 =100;	
		$variable4 =50; 

		while ($variable3 > 10) {
			$result = $variable3 * $variable4. "<br />";
			echo $result;
			$variable3--;
		}
//4
		$variable5 =1;

		while ($variable5 < 10) {
			echo $variable5 . "<br />";
			$variable5 += ($variable5 / 2);
		}

//5
		for ($i=1; $i <= 15; $i++) { 
			echo "On y arrive presque <br />";
		}
//6	
		for ($i=20; $i >= 0 ; $i--) { 
			echo "C'est presque bon <br />";
		}
//7
		for ($i=1; $i <= 100 ; $i+=15 ) { 
			echo "On tient le bon bout <br />";		
				}		
//8
		for ($i=200; $i >= 0 ; $i-= 12) { 
			echo "Enfin !!!! <br />";
				}		


?>