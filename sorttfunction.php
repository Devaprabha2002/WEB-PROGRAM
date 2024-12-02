<html>
<body>
<?php
$flowers = array("Sunflower", "Rose", "Dahlia");
sort($flowers); 
$clength = count($flowers);
echo "<br><b>Sorted flowers in ascending order:</b><br>";
for($x = 0; $x < $clength; $x++) 
{
    echo "<br>" . $flowers[$x] . "<br>";
}

$flowers = array("Sunflower", "Rose", "Dahlia");
rsort($flowers); 
$clength = count($flowers);
echo "<br><b>Sorted flowers in descending order:</b><br>";
for($x = 0; $x < $clength; $x++) 
{
    echo "<br>" . $flowers[$x] . "<br>";
}

$flower = array("one" => "Sunflower", "two" => "Rose", "three" => "Dahlia");
asort($flower); 
echo "<br><b>Sorted associative array by values:</b><br>";
foreach($flower as $xvalue) 
{
    echo $xvalue . "<br>";
}
ksort($flower);
echo "<br><b>Sorted associative array by keys (ascending):</b><br>";
foreach($flower as $key => $xvalue)
 {
    echo $key . " => " . $xvalue . "<br>";
}
arsort($flower);.
echo "<br><b>Sorted associative array by values (descending):</b><br>";
foreach($flower as $xvalue) {
    echo $xvalue . "<br>";
}
krsort($flower);
echo "<br><b>Sorted associative array by keys (descending):</b><br>";
foreach($flower as $key => $xvalue)
{
    echo $key . " => " . $xvalue . "<br>";
}
?>
</body>
</html>
