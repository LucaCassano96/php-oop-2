
<!-- ## Todo
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende **prodotti** per animali
- I prodotti sono **categorizzati**, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

Stampiamo delle card contenenti i dettagli dei `prodotti`, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo che si sta visualizzando` (prodotto, cibo, gioco, cuccia). -->


<!DOCTYPE html>
<html lang="en">

<?php require_once("./data/db.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Fattoria degli animali</title>
</head>

<body>
   
    <h1>Fattoria degli animali</h1>

<?php

    foreach ($products as $product) {
    
    ?> 
    
        <div class="card">
            <h2>
                <?php echo $product -> getTitolo(); ?>
            </h2>
            <img src="<?php echo $product -> getImmagine(); ?>" alt="">
            <div class="prezzo">
                <?php echo $product -> getPrezzo(); ?>
            </div>
            <div class="categoria">
                <?php echo $product -> getCategoria() -> getNome() ; ?>
            </div>

            <img class="icona" src="<?php echo $product -> getCategoria() -> getIcona(); ?>" alt="">
                
            <div class="info">

                

                <div>
                    <?php 
                        if (method_exists($product, 'getMarca')) {
                            echo $product -> getMarca();
                        }
                    ?>
                </div>

                <div>
                    <?php 
                        if (method_exists($product, 'getPeso')) {
                            echo $product -> getPeso();
                            } 
                    ?>
                </div>
              
                <div>
                    <?php 
                        if (method_exists($product, 'getIngredienti')) {
                            echo $product -> getIngredienti();
                        } 
                    ?>
                </div>

                <div>
                    <?php 
                        if (method_exists($product, 'getMateriale')) {
                            echo $product -> getMateriale();
                        } 
                    ?>
                </div>

                <div>
                    <?php 
                        if (method_exists($product, 'getDimensioni')) {
                            echo $product -> getDimensioni();
                        } 
                    ?>
                </div>
                
                <div>
                    <?php 
                        if (method_exists($product, 'getForma')) {
                            echo $product -> getForma();
                        } 
                    ?>
                </div>


            
            </div>
          
        </div>
    
    <?php
    }

?>

</body>



</html>

<style>

img{
    width: 300px;
}

.card{

    border: 2px solid #000;
    text-align: center;
    margin: 10px;
    position: relative;
}

.prezzo{
    font-size: 30px;
    color: lightgreen;
    padding: 20px
}

.icona {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    position: absolute;
    top: 30px;
    left: 30px;
}

.categoria{
    position: absolute;
    top: 120px;
    left: 50px;
    font-size: 20px;
    color: lightblue;
}

.info{
    padding: 10px;
    border: 1px solid #000;
    color: blue;
    font-size: 25px;

}


</style>
