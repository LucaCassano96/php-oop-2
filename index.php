
<!-- ## Todo
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende **prodotti** per animali
- I prodotti sono **categorizzati**, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

Stampiamo delle card contenenti i dettagli dei `prodotti`, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo che si sta visualizzando` (prodotto, cibo, gioco, cuccia). -->


<?php



require_once("./models/Product.php");

$product = new Product("immagine", "croccantini", "8$", "icon", "cibo");

echo $product -> getImmagine();
echo $product -> getTitolo();
echo $product -> getPrezzo();
echo $product -> getIconaCategoria();
echo $product -> getTipoDiArticolo();


