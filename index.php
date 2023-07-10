<?php
    require_once __DIR__."/Models/Product.php";
    require_once __DIR__."/Models/Food.php";
    require_once __DIR__."/Models/Accessories.php";
    require_once __DIR__."/Models/Games.php";

    $product1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 'Cane', 545, ['prosciutto', 'riso']);
    $product1->setPrize(43.99);

    $product2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 600, ['manzo', 'cereali']);
    $product2->setPrize(44.99);

    $product3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 400, ['tonno', 'pollo', 'prosciutto']);
    $product3->setPrize(34.99);

    $product4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 30, ['pesci e sottoprodotti dei pesci', 'cereali', 'lieviti', 'alghe']);
    $product4->setPrize(2.95);

    $product5 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
    $product5->setPrize(184.99);

    $product6 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Materiale espanso', 'ND');
    $product6->setPrize(2.29);

    $product7 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
    $product7->setPrize(13.49);

    $product8 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Morbido con codina corta', '8,5 cm x 10 cm');
    $product8->setPrize(4.99);

    $products = [
        $product1,
        $product2,
        $product3,
        $product4,
        $product5,
        $product6,
        $product7,
        $product8,
    ];

    // var_dump($products)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
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
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                I nostri prodotti
                            </h3>
                        </div>
                        <?php foreach($products as $product){ ?>
                            <div class="col-4">
                                <div class="card">
                                    <img src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>">
                                    <ul>
                                        <li>
                                            <h3>
                                                <?php echo $product->name ?>
                                            </h3>
                                        </li>
                                        <li>
                                            <div class="animals">
                                                <i class="fa-solid <?php if($product->animals === 'Cane'){
                                                    echo 'fa-dog';
                                                } else if($product->animals === 'Gatto'){
                                                    echo 'fa-cat';
                                                } else if($product->animals === 'Pesce'){
                                                    echo 'fa-fish';
                                                } else if($product->animals === 'Uccello'){
                                                    echo 'fa-dove';
                                                } ?>"></i>
                                                <?php echo $product->animals ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prize">
                                                Prezzo: &euro; <?php echo $product->getPrize() ?>
                                            </div>
                                        </li>
                                        <li>
                                            <?php if(isset($product->weight)){
                                                echo 'Peso netto: '.$product->weight.'g';
                                            } else if(isset($product->materials)){
                                                echo 'Materiale: '.$product->materials;
                                            } else if(isset($product->characteristics)){
                                                echo 'Caratteristiche: '.$product->characteristics;
                                            } ?>
                                        </li>
                                        <li>
                                            <?php if(isset($product->ingredients)){
                                                echo 'Ingredienti: ';
                                                foreach($product->ingredients as $ingredient){
                                                    echo $ingredient.', ';
                                                };
                                            } else if(isset($product->dimension)){
                                                echo 'Dimensioni: '.$product->dimension;
                                            } ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>