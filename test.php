<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 2/16/15
 * Time: 9:09 PM
 */
$arr=array(
    array(
        "name"=>"Dashboard",
        "url"=>"dash/a.html"
    ),
    array(
        "name"=>"Setting",
        "url"=>"setting/a.html"
    ),
    array(
        "name"=>"Tool",
        "url"=>"tool/a.html"
    )
);
echo "var dump </br>";
var_dump($arr);
echo " </br> export</br>";
var_export($arr);
echo " </br> print</br>";
print_r($arr);

echo "</br>";
echo "</br>";
echo "</br>";
$con=mysqli_connect("localhost","root","root","task1");

$query=mysqli_query($con,"select *from users");
while($row=mysqli_fetch_assoc($query)):
    var_dump($row);
    endwhile;
echo "</br>";
echo "</br>";
echo "</br>";

foreach($arr as $row){
    echo $row["name"].":  ". $row["url"];
    echo "</br>";

}