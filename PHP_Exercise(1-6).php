
<?php

echo "Twinkle, Twinkle little star"."<br>";

$Twinkle=7;
echo "$Twinkle"."<br>";

$star=5;
echo "$star"."<br>";

$a=$Twinkle-$star;

echo "$a"."<br>";
?>


<?php

$a=10;
$b=7;

$c=$a+$b;
echo "$c"."<br>";

$c=$a-$b;
echo "$c"."<br>";

$c=$a*$b;
echo "$c"."<br>";

$c=$a/$b;
echo "$c"."<br>";

$c=$a%$b;
echo "$c"."<br>";

?>


<?php
$x=8;
echo "Value is now $x"."<br>";
echo "Add 2. Value is now ",$x+2, "<br>";
$x=$x+2;
echo "Subtract 4. Value is now ",$x-4."<br>";
$x=$x-4;
echo "Multiply by 5. Value is now ",$x*5, "<br>";
$x=$x*5;
echo "Divide by 3. Value is now ",$x/3, "<br>";
$x=$x/3;
echo "Increment value by one. Value is now ",$x+1, "<br>";
$x=$x+1;
echo "Decrement value by one. Value is now ",$x-1, "<br>";

?>


<?php
 $a="Harry";
 var_dump($a);
 echo "<br>";
 
 echo "$a";
echo "<br>";

 $b=28;
 var_dump($b);
 echo "<br>";

$c = null;
var_dump($c);

?>


<?php
	
	$around="around";

	echo 'What goes '.$around. ', comes '.$around.'.'."<br>";
	echo "What goes ".$around. ", comes ".$around."."."<br>";
?>


<?php
 
$month=date('F', time());
if($month=='August'){
  echo "It's August, so it's really hot.\n";
}else{
  echo "Not August, so at least not in the peak of the heat.\n";
}
 
?>


<?php

for($i=0; $i<12; $i++){
    echo "$i * $i = ". $i*$i ."<br>";
}

?>



<?php

echo "<table border =\"2\" style='border-collapse: collapse'>";
	for ($a=0; $a<7;$a++) 
	{ 
		echo "<tr> \n";
		for ($b=0; $b<7; $b++) 
		{ 
		   $c = $b*$a;
		   echo "<td style='width: 80'>$c</td> \n";
		}
	  	echo "</tr>";
	}
	echo "</table>";
?>




