<?php
    //$ingredients = $_REQUEST["ingredients"];
    //$servings = $_REQUEST["servings"];
    $ingredients = "3 oz flour";
    $servings = 1;
    $url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/visualizeNutrition';
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Nutrition',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
            'defaultCss' => true,
            'ingredientList' => $ingredients,
            'servings' => $servings,
            'showBacklink' => true
        ),
        CURLOPT_HTTPHEADER => array(
            'X-Mashape-Key: Pk6TFpp1FCmshqZmBHPM84GoY33jp1TEpvLjsnbvrgws3OZlSP',
            'Accept: text/html',
            'Content-Type: application/x-www-form-urlencoded'
        )
    ));
    
    $resp = curl_exec($curl);
    
    curl_close($curl);
    
    echo($resp);
?>