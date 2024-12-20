<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT * FROM categorie";
    $categories = pg_query($connexion,$sql);
    return $categories;
 }

 
 function addCategorie($libelle){
    global $connexion;
    $sql="INSERT INTO categorie (libelle) values
     ('$libelle')";
     pg_query($connexion,$sql);
    
 }

 function deleteCategorie($id){
    global $connexion;
    $sql="DELETE from categorie  where id = $id";
     pg_query($connexion,$sql);
    
 }

 
 function updateCategorie($id,$libelle){
    global $connexion;
    $sql="UPDATE categorie SET libelle ='$libelle' where id=$id";
     pg_query($connexion,$sql);
    
 }
 function getCategorieById($id){
   global $connexion;
   $sql="SELECT * FROM categorie where id=$id";
   $categorie = pg_fetch_assoc(pg_query($connexion,$sql));
   return $categorie;
 }

?>