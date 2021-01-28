<?php

// Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// PHP-arrayer för att lagra egenskaper hos produkterna
$name = array(
    0 => "Skogen",
    1 => "Strandbad",
    2 => "Rockstock",
    3 => "Vinterspa",
    4 => "Naturen",
    5 => "Krokstad berg",
    6 => "Björnläger",
    7 => "Mordor",
    8 => "Mountainbike",
    9 => "Fågelskådning"
);
$description = array(
    0 => "Glöm vardagen för en liten stund och ta med någon du tycker om på en minisemester till skogen – kottarnas och kvistarnas plats! Få platser kan erbjuda så många granbarr som denna. ",
    1 => "Lugna dagar på strandbad. Nu kan du ta med dig någon du inte tycker om till denna sorgliga strand. Ni övernattar i rum. Ni har inte tillgång till skydd från snålblåsten eller bekvämligheter! ",
    2 => "I färgglada Rockstock finns det mycket att uppleva och upptäcka. Tältet kan ni sätta upp i hjärtat av Rostock där du är helt utelämnad till naturens krafter. Du äter middag med skallerormar.",
    3 => "Välkomna till Brösarps Gästgifveri: Denna iskalla plats omgiven av obärmhärtig natur, precis vid det gamla korset. Ni bor i eget tält, ett opersonligt och charmigt sätt att sova med romantisk känsla.",
    4 => "Ta med dig en vän eller hela familjen på en avkopplande vistelse bland höga berg och djupa hav. Här får ni verkligen tid till att koppla av med den dramatiska naturen precis utanför fönstret.",
    5 => "Starta 2020 på berget tillsammans med någon du tycker om. Förutom den vackra omgivningen och naturens mysiga atmosfär får ni ta del av bergets säsongsbetonade meny inkl. varsitt glas varm saft.",
    6 => "Camp Mons är ett läger omgiven av ensamhet. Med sin fantastiska miljö, underbara björnslagsmål och sin hisnande stjärnhimmel med norrsken, kommer du få uppleva en semester som aldrig förr.",
    7 => "Ta med familjen och bo på Orchgården i Mordor. Här bor ni i mysiga svarta jordhålor. Strax intill hittar ni Tolkiens Värld, så passa på att hälsa på Sauron! (Obs! Inträde till Tolkiens Värld ingår inte).",
    8 => "Ta med dig en vän på en vistelse på vackra WCC. Ni hyr ett hus som rymmer sovrum med plats för personer, här har ni tillgång till ved efter en heldag med mountainbike i landskap. ",
    9 => "Trivsel för alla! Njut av fågelskådning med varierande svårighetsgrad. För barnen finns små fåglar och ägg, allt för att väcka nyfikenheten och glädjen som fågelskådning innebär. "
);
$image = array(
    0 => "http://localhost/webshop/img/0.jpg",
    1 => "http://localhost/webshop/img/1.jpg",
    2 => "http://localhost/webshop/img/2.jpg",
    3 => "http://localhost/webshop/img/3.jpg",
    4 => "http://localhost/webshop/img/4.jpg",
    5 => "http://localhost/webshop/img/5.jpg",
    6 => "http://localhost/webshop/img/6.jpg",
    7 => "http://localhost/webshop/img/7.jpg",
    8 => "http://localhost/webshop/img/8.jpg",
    9 => "http://localhost/webshop/img/9.jpg"
);
$image_lg = array(
    0 => "http://localhost/webshop/img/0-lg.jpg",
    1 => "http://localhost/webshop/img/1-lg.jpg",
    2 => "http://localhost/webshop/img/2-lg.jpg",
    3 => "http://localhost/webshop/img/3-lg.jpg",
    4 => "http://localhost/webshop/img/4-lg.jpg",
    5 => "http://localhost/webshop/img/5-lg.jpg",
    6 => "http://localhost/webshop/img/6-lg.jpg",
    7 => "http://localhost/webshop/img/7-lg.jpg",
    8 => "http://localhost/webshop/img/8-lg.jpg",
    9 => "http://localhost/webshop/img/9-lg.jpg"
);
$price = array(
    0 => "1268",
    1 => "1259",
    2 => "2745",
    3 => "2690",
    4 => "3449",
    5 => "2498",
    6 => "3600",
    7 => "3400",
    8 => "1789",
    9 => "2895"
);

// Skapa 10 olika produkter (product)
// och spara dessa i en ny array som heter products.

$products = array();

for ($i=0; $i < 10 ; $i++) { //Loppar genom varje index och tilldelar värden utifrån motsvarande index i egenskapernas arrayer
  
    $product = array(
        "name" => $name[$i],
        "description" =>  $description[$i],
        "inStock" => $inStock [$i] = rand(0, 50),
        "image" => $image[$i],
        "image_lg" => $image_lg[$i],
        "price" => number_format($price[$i], 0, ',', ' ')
    );
    
    array_push($products, $product);

}

/* Konvertera PHP-arrayen till en JSON-string
* JSON_UNESCAPED_SLASHES Don't escape /.
* JSON_UNESCAPED_UNICODE Encode multibyte Unicode characters literally (default is to escape as \uXXXX).
* JSON_PRETTY_PRINT Use whitespace in returned data to format it.
* https://www.php.net/manual/en/json.constants.php
*/

$json = json_encode($products, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;
