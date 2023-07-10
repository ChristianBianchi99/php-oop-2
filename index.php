<?php
    require_once __DIR__."/Models/Product.php";
    require_once __DIR__."/Models/Food.php";
    require_once __DIR__."/Models/Accessories.php";
    require_once __DIR__."/Models/Games.php";

    $product1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 'Cane', 545, ['prosciutto', 'riso']);
    $product1->setPrize(43,99);

    $product2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 600, ['manzo', 'cereali']);
    $product2->setPrize(44,99);

    $product3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 400, ['tonno', 'pollo', 'prosciutto']);
    $product3->setPrize(34,99);

    $product4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 30, ['pesci e sottoprodotti dei pesci', 'cereali', 'lieviti', 'alghe']);
    $product4->setPrize(2,95);

    $product5 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
    $product5->setPrize(184,99);

    $product6 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Materiale espanso', 'ND');
    $product6->setPrize(2,29);

    $product7 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
    $product7->setPrize(13,49);

    $product8 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Morbido con codina corta', '8,5 cm x 10 cm');
    $product8->setPrize(4,99);

    echo "<pre>";
    var_dump($product1);
    var_dump($product2);
    var_dump($product3);
    var_dump($product4);
    var_dump($product5);
    var_dump($product6);
    var_dump($product7);
    var_dump($product8);
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