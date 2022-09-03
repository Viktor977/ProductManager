<?php


include_once ("Models/Creater.php");

$creator=new Creater();
$bookOne=$creator->createBook();

$bookOne->SKU='SKUBOOKONE';
$bookOne->Title="Book one title";
$bookOne->Price="100";
$bookOne->Weight="1";


$bookTwo=$creator->createBook();
$bookTwo->SKU='SKUBOOKTWO';
$bookTwo->Title="Book two title";
$bookTwo->Price="200";
$bookTwo->Weight="2";




$bookThree=$creator->createBook();
$bookThree->SKU="SKUBOOKTHREE";
$bookThree->Title="Book three title";
$bookThree->Price="300";
$bookThree->Weight="300";


$dvdOne=$creator->createDvd();
$dvdOne->SKU="SKUDVDONE";
$dvdOne->Title="DVD title";
$dvdOne->Price="1";
$dvdOne->size="700";


$dvdTwo=$creator->createDvd();
$dvdTwo->SKU="SKUDVDTWO";
$dvdTwo->Title="Dvd two title";
$dvdTwo->Price='2';
$dvdTwo->size='750';


$dvdThree=$creator->createDvd();
$dvdThree->SKU='SKUDVDTHREE';
$dvdThree->Title='Dvd three title';
$dvdThree->Price='3';
$dvdThree->size="800";


$furnitureOne=$creator->createFurniture();
$furnitureOne->SKU="SKUFURNIRUREONE";
$furnitureOne->Title="Furniture two title";
$furnitureOne->Price="2.5";
$furnitureOne->height="20";
$furnitureOne->length="25";
$furnitureOne->width='30';


$furnitureTwo=$creator->createFurniture();
$furnitureTwo->SKU="SKUFURNITURETWO";
$furnitureTwo->Title="Furniture two title";
$furnitureTwo->Price='3.5';
$furnitureTwo->height='35';
$furnitureTwo->length="40";
$furnitureTwo->width='45';


$prodArr=array();
array_push($prodArr,$bookOne,$bookTwo,$bookThree,$dvdOne,$dvdTwo,$dvdThree,$furnitureOne,$furnitureTwo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php

if (empty($products)): ?>
    <p class="lead mt-3">There are no products</p>
<?php endif; ?>

<?php foreach ($prodArr as $item): ?>
    <div class="card">

        <input type="checkbox" class="form-check-input m-l-5"
               style="margin-left: 7%;  margin-top: 5%;" >
        <br/>
        <?php echo $item->Print()?><br/>

    </div>

<?php endforeach;?>
</body>
</html>

