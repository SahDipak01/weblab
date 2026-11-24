<html>
<body>
	<?php
		$states = "Missisippi Alabama Texas Massachusetts Kansas";
		$b = explode(' ',$states);
		echo "<br>ORIGINAL ARRAY :<br>";
		foreach ( $b as $i => $value )
			echo "states[$i] = $value<br>";
		foreach ($b as $c)
		{
			$n = strlen($c);
			if($c[$n-1]=='s' && $c[$n-2]=='a' && $c[$n-3]== 'x')
				$d[0] = $c;
			if($c[0]=='K' || $c[0]=='k' && $c[$n-1]=='s')
				$d[1] = $c;
			if($c[0]=='M' || $c[0]=='m' && $c[$n-1]=='s')
				$d[2] = $c;
			if($c[$n-1]=='a')
				$d[3] =$c;
			if($c[0]=='M' && $c[$n-1]=='i')
				$d[4] =$c;
		}
		echo "<br>RESULTANT ARRAY :<br>";
		for ($i=0; $i < count($d); $i++)
			echo "statesList[$i] = $d[$i]<br>";
	?>
</body>
</html>
