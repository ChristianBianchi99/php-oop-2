<?php
    require_once __DIR__."/Models/Product.php";
    require_once __DIR__."/Models/Food.php";

    $product1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 'Cane', '545g', ['prosciutto', 'riso']);
    $product1->setPrize(43.99);
    echo "<pre>";
    var_dump($product1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header>
                    <div class="content">
                        <h1 class="logo">
                            Boolshop
                        </h1>
                    </div>
                </header>
                <main>
                    <div class="content">

                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>