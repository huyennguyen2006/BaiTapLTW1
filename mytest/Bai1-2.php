
<?php 
//bai1

$str = 'Chao mung den voi lap trinh web 1';
echo $str."<br>";
echo $str = 'Lap trinh web 1'."<br>";
echo nl2br("Chao\n mung\n den\n voi\n lap\n trinh\n web\n 1");

//bai 2

echo $time = "14/03/2018"."<br>";
$timemoi1 = date("d-m-y");
$timemoi2 = date("M-d-Y");
echo "a:".$timemoi1."<br>";
echo "b". $timemoi2;