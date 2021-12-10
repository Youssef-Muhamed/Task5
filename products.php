<?php
$file = fopen('output.txt','a+');
$data = fread($file,filesize('output.txt'));

$newData = explode('|',$data);
foreach ($newData as $k =>$data){
    echo  $data.'<br>';
}


//echo '<pre>';
//print_r($newData);
//echo '</pre>';
