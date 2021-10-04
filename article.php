<?php

require_once 'articles.php';

if (array_key_exists($_GET['slug'], $articles)) {
    echo $articles[$_GET['slug']]['nom'];
} else {
    echo 'Désolé le produit n\'existe pas';
}

echo '<br><a href="/" class="btn btn-dark">home</a>';

//http://localhost:8000/article.php?slug=tee-shirt-s
