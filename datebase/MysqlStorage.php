<?php

class MysqlStorage
{
    var $pdo;
     public function __construct($dsn,$username,$password){
        $this->pdo=new PDO($dsn,$username,$password);
    }

    function getBooks()
    {
       return $this->pdo
           ->query('SELECT * FROM books')
           ->fetchAll();
    }

    function getDvds(){
         return $this->pdo
             ->query('SELECT * FROM dvd')
             ->fetchAll();
    }

    function getFurniture(){
         return$this->pdo
             ->query('SELECT * FROM furniture')
             ->fetchAll();
    }

    function deleteBookById($id){

         $sql=$this->pdo->prepare("DELETE FROM books WHERE id = ?" );
         $sql->execute([$id]);
    }

    function deleteDvdById($id){
         $this->pdo->query("DELETE FROM dvd WHERE id=$id");
    }

    function deleteFurnitureById($id){
         $this->pdo->query("DELETE FROM furniture WHERE id=$id");
    }

    function  addBook( Book $book)
    {
        $sql = $this->pdo->prepare("INSERT INTO books (sku,title,price,weight) VALUES(:sku,:title,:price,:weight)");
        $sql->bindValue(':sku', $book->SKU);
        $sql->bindValue(':title', $book->Title);
        $sql->bindValue(':price', $book->Price);
        $sql->bindValue(':weight', $book->Weight);
        $sql->execute();


    }

    function  addDvd(Dvd $dvd){
        $sql =$this->pdo->prepare( "INSERT INTO dvd (sku,title,price,size) VALUES(:sku,:title,:price,:size)");
        $sql->bindValue(':sku', $dvd->SKU);
        $sql->bindValue(':title', $dvd->Title);
        $sql->bindValue(':price', $dvd->Price);
        $sql->bindValue('size',$dvd->size);
        $sql->execute();
    }

    function addFurniture(Furniture $furniture){
        $sql = $this->pdo->prepare("INSERT INTO furniture(sku,title,price,height,width,length)
          VALUES (:sku,:title,:price,:height,:width,:length)");
        $sql->bindValue(':sku', $furniture->SKU);
        $sql->bindValue(':title', $furniture->Title);
        $sql->bindValue(':price', $furniture->Price);
        $sql->bindValue(':height',$furniture->height);
        $sql->bindValue(':width',$furniture->width);
        $sql->bindValue(':length',$furniture->length);
        $sql->execute();
    }

}

