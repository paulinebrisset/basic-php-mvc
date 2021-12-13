<?php
return array (
/***Page d'accueil ** */
'http://localhost/pauline/projetscolaire/public/index.php' => '<MainController>/<index>',
'http://localhost/pauline/projetscolaire/public' => '<MainController>/<index>',
/*Articles*/
'http://localhost/pauline/projetscolaire/public/items/index.php' => '<ItemsController>/<index>',
'http://localhost/pauline/projetscolaire/public/items' => '<ItemsController>/<index>',
'http://localhost/pauline/projetscolaire/public/items/lire.php' => '<ItemsController>/<lire>',
'http://localhost/pauline/projetscolaire/public/items/lire' => '<ItemsController>/<lire>',
/*Categories*/
'http://localhost/pauline/projetscolaire/public/categories/index.php' => '<CategoriesController>/<index>',
'http://localhost/pauline/projetscolaire/public/categories' => '<CategoriesController>/<index>',
'http://localhost/pauline/projetscolaire/public/categories/lire/{$}' => '<CategoriesController>/<lire>',
'http://localhost/pauline/projetscolaire/public/categories/lire' => '<CategoriesController>/<lire>',
/*Gestion des articles*/
'http://localhost/pauline/projetscolaire/public/gestionArticles/index.php' => '<GestionArticlesController>/<index>',
'http://localhost/pauline/projetscolaire/public/gestionArticles' => '<GestionArticlesController>/<index>',
'http://localhost/pauline/projetscolaire/public/gestionArticles/editer/{$}' => '<GestionArticlesController>/<editer>',
'http://localhost/pauline/projetscolaire/public/gestionArticles/editer/' => '<GestionArticlesController>/<editer>'
)
?>