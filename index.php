<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

<?php

$text ="Hello world!";
$x = 4;
$y = 10;
echo "$text <br>";
echo "$x + $y <br>";

// 

$x = 0;
while($x <= 100) {
    echo "This number is: $x <br>";
    $x+=10;
}

// 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
}

// 

$color = array('Black', 'White', 'Blue', 'Red');
foreach ($color as $value){
echo "$value <br>";
}


?>

</body>
</html>