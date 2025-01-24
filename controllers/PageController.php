<?php

class PageController
{
    public function __construct()
    {

    }

    public function homepage() : void
    {

    }

    public function about() : void
    {
        /* 16. La méthode `about()` de la classe `PageController` déclare une variable appelée `$template` et lui donne comme valeur le nom du template qu'elle va vouloir utiliser : `about` */
        $template = "about";

        /* 17. La méthode `about` charge ensuite le template principal du site : le fichier `templates/layout.phtml` */
        require "templates/layout.phtml";
    }

    public function contact() : void
    {

    }
}