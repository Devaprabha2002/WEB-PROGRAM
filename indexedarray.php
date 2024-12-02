<html>
<body>
<?php
    $flower = array("rose", "lotus", "dahlia");
    $number = array(1, 2, 3, 4, 5);
    echo "Flowers at index 1 is $flower[1] <br>";
    for ($x = 0; $x < 3; $x++) 
{
        echo "<br>" . $flower[$x] . "<br>"; 
}
    foreach ($flower as $x) 
{
        echo "<br>$x<br>";
}
    foreach ($number as $y)
 {
        echo "<br>$y<br>";
 }
?>
</body>
</html>
