<?php
$tagsData = file_get_contents("C:\Users\Thariq\Developments\laragon\www\iqradb\backend\app\Database\Seeds\data\\tags_20231206.txt");
$tagsArray = explode("\n", $tagsData);

echo count($tagsArray);
echo "\n"; 
echo "\n"; 

$i=1;
foreach($tagsArray as $tag){
    $val = explode("|",$tag);
    if(count($val)>49){
        echo $i."-".count($val);
        echo "\n";
    }
    $i++;
}