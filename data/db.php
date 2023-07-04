<?php

require_once("./models/Prodotto.php");
require_once("./models/Categoria.php");
require_once("./models/Cibo.php");
require_once("./models/Cuccia.php");
require_once("./models/Gioco.php");


$categoriaCani = new Categoria("Cani","https://www.grantennistoscana.it/wp-content/uploads/2023/06/cane-anziano-04-06-2023-grantennistoscana.it_.jpg");

$categoriaGatti = new Categoria("Gatti","https://i.pinimg.com/736x/db/70/63/db70633ad36f3ef8b12b153fcda81984--twitter-cover-twitter-headers.jpg");


$croccantiniMagici = new Cibo("https://www.cicalia.com/it/img/imgproducts/58952/l_58952.jpg","Croccantini Magici","20$",$categoriaCani, "cani belli", "100kg","pollo");

$croccantiniGattosi = new Cibo("https://www.gros.it/photo/2020/04/05/e/scancube_001/photo/000201451_scancubefoto0001.jpg","Croccantini Gattosi","30$", $categoriaGatti, "gatti belli","20kg","pollo");

$cucciaMaxi = new Cuccia("https://www.cherubin.it/wp-content/uploads/cucce-per-cani.jpg","Cuccia Maxi","100$", $categoriaCani, "stoffa", "10x10","circolare");

$cucciaMaxiCiccioGatto = new Cuccia("https://img-prod.tgcom24.mediaset.it/images/2019/10/21/124444959-540a4d3f-ca01-418e-8ebb-281cbdabc559.jpg","Cuccia Maxi Ciccio Gatto","200$",$categoriaGatti, "stoffa", "1000x1000","circolare");

$giocoCaneArmageddon = new Gioco("https://m.media-amazon.com/images/I/71K+yq5qrUL._AC_UF1000,1000_QL80_.jpg","Gioco Cane Armageddon","100$",$categoriaCani,"plastica", "2x6");

$giochiPreziosiGattoni = new Gioco("https://publish.purewow.net/wp-content/uploads/sites/2/2019/09/23-arched-cat-brush-and-self-groomer.png?fit=680%2C489","Giochi Preziosi Gattoni","150$", $categoriaGatti, "plastica" , "20x6");


$products = array (
    $croccantiniMagici,
    $croccantiniGattosi,
    $cucciaMaxi,
    $cucciaMaxiCiccioGatto,
    $giocoCaneArmageddon,
    $giochiPreziosiGattoni
);

