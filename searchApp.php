<?php
    $q = $_REQUEST["query"];
    $off = $_REQUEST["offset"];
    $url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/search?instructionsRequired=false&limitLicense=false&number=10&query='.$q."&offset=".$off;
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Search',
        CURLOPT_HTTPHEADER => array(
            'X-Mashape-Key: Pk6TFpp1FCmshqZmBHPM84GoY33jp1TEpvLjsnbvrgws3OZlSP',
            'Accept: application/json'
        )
    ));
    
    $resp = curl_exec($curl);
    
    curl_close($curl);
    
    echo($resp);
?>