<?php
$paragraph = $_GET['paragraph'];
$filter = $_GET['filter'];
$censored = '***';
var_dump($paragraph); 

$filter_term = str_replace($filter ,$censored, $paragraph );
var_dump($filter_term); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $paragraph ?></h1>
    <h1><?= $filter ?></h1>
    <h1><?= $filter_term ?> </h1>
</body>
</html>