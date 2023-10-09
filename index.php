<?php
// Crea un nuovo file chiamato index.php e, importando la classe appena creata,
// crea una classe Post con i seguenti attributi:

// Titolo
// Categoria
// Tag

// Crea delle istanze di classe Post,
// iniettando la dipendenze Categoria all’interno dell’attributo dedicato.
// Crea anche dei metodi per visualizzare gli articoli completi.

require_once('class.php');
class Post{
    protected $title;
    protected $category;
    protected $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }
    public function show(){
        echo "$this->title \n";
        echo ($this->category->getMyCategory()) . "\n" ;
        echo "$this->tag \n";
    }

}

$categoriaPost1 = new Storia();
$categoriaPost2 = new Gossip();
$categoriaPost3 = new Sport();

$post1 = new Post('i suricati vivono', $categoriaPost2, 'Suricati');

$post1->show();


?>