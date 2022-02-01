<?php
/*
$file = fopen("customer.txt","r");
echo fread($file,filesize("customer.txt")).PHP_EOL;

/*
if (($handle = fopen('myFile0.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!

        for ($i = 0; $i < count($data); $i++) { // Loop over the data using $i as index pointer
            echo $data[$i] . "<br />\n";
        }
    }
    fclose($handle);
}
*/
$products =[];
[$name, $cash] = explode(",",file_get_contents('customer.txt'));
if (($handle = fopen('myFile0.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!

        var_dump($data); // Array
        $products->$name = $data[0];

    }
    fclose($handle);
}
