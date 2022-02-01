<?php
$persondata =explode(",",file_get_contents('customer.txt'));

$person = new stdClass();
$person->name= $persondata[0];
$person ->cash = (int)$persondata[1];




function createProduct(string $name,int $price,string $category,string $description,string $exDate,int $amount):stdClass{
    $product = new stdClass();
    $product-> name = $name;
    $product-> price = $price;
    $product-> category = $category;
    $product-> description = $description;
    $product-> exDate = $exDate;
    $product-> amount = $amount;

    return $product;

}

$products =[];
if (($handle = fopen('myFile0.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        [$name,$price, $category,$description,$exDate,$amount] = $data;
        $products[] = createProduct($name,(int)$price,$category,$description,$exDate,(int)$amount);



    }
    fclose($handle);
}


echo $person->name." has ".$person->cash."money";


if(file_exists('basket.txt')) {
    $basket = explode(',', file_get_contents('basket.txt'));
};




while($person->cash>=100) {
    echo "[1]purchase".PHP_EOL;
    echo "[2] checkout".PHP_EOL;
    echo "[Any] exit".PHP_EOL;

    $f = (int) readline("Select option").PHP_EOL;
    switch ($f){

        case 1 :

            foreach ($products as $index => $product) {
                echo $index . " " . $product->name . " ". $product->price . PHP_EOL;

            }
            $selectedProductsIndex = (int)readline('Select product');

            $product = $products[$selectedProductsIndex] ?? null;

            if ($product === null) {
                echo "product not found" . PHP_EOL;
                exit;
            }



            $basket[]=$selectedProductsIndex;
            echo "added to cart".PHP_EOL;
            break;

        case 2 :
            $total = 0;
            foreach ($basket as $productIndex){
                $product = $products[$productIndex];
                $total += $product->price;
                echo $product->name .PHP_EOL;
            }
            echo "Total sum: ".$total." Euros ".PHP_EOL;

            if($person->cash>=$total){
                echo "Payment successful".PHP_EOL;
            }else{
                echo" insufficient funds".PHP_EOL;
            }
            if(file_exists('basket.txt')) {
                unlink('basket.txt');
            }
            exit;
            break;


            default:
            $productIndexes = implode(",",$basket);
            file_put_contents('basket.txt',$productIndexes);
            exit;
            break;
    }
}