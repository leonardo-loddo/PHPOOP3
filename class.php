<?php

// Crea un file chiamato class.php e crea una classe astratta di tipo Categoria,
// con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
// Category
// -- Attualita'
// -- Sport
// -- Gossip
// -- Storia
// Tutte le classi dovranno avere un metodo astratto chiamato:
// getMyCategory() che mostri a schermo il valore relativo.

abstract class Category{
    abstract function getMyCategory();
}

class Attualita extends Category{
    public function getMyCategory()
    {
        return "Attualitá";
    }
}
class Sport extends Category{
    public function getMyCategory()
    {
        return "Sport";
    }
}
class Gossip extends Category{
    public function getMyCategory()
    {
        return "Gossip";
    }
}
class Storia extends Category{
    public function getMyCategory()
    {
        return "Storia";
    }
}

// $test = new Storia();
// echo $test->getMyCategory();

?>