<?php
$jsonData = file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz");
$dataArray = json_decode($jsonData,true);

foreach ($dataArray['data'] as $item) {
    foreach ($item as $key=> $items){
            //echo $key.'=>'.$items.'<br>';
                if ($key == 'products_id') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_name') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_description') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_quantity') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_model') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_image') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_date_added') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

                if ($key == 'products_liked') {
                    $file = fopen('output.txt','a+');
                    $text = $key .' : ' . $items.'|';
                    fwrite($file,$text);
                }

            }
}

//echo $dataArray['data'][1]['products_name'];
//echo '<pre>';
//print_r($dataArray);
//echo '</pre>';
