<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
$num = 0;
$num2 = 0;
$cars = array();
for($x = 0; $x<12; $x++) {
    $cars[$x] = rand(10,100);
}
for($x = 0; $x<12; $x++) {
if($cars[$x] > 88    ){
$num = $num + 1;
 }
 else{
$num2 = $num2 + 1;
 }
}
echo "<span>x ზე მეტია </span>".$num ."<br>" ; 
echo "<span>x ზე ნაკლებია </span>".$num2 ."<br>" ; 
?>
</pre>
</body>
</html>