<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT *  FROM produit";
    $produits = pg_query($connexion,$sql);
    return $produits;
 }

 
 function addProduit($libelle,$qt,$prix){
    global $connexion;
    $sql="INSERT INTO produit (libelle,quantite,prix) values
     ('$libelle',$qt,$prix)";
     pg_query($connexion,$sql);
    
 }

 function deleteProduit($id){
    global $connexion;
    $sql="DELETE from produit  where id = $id";
     pg_query($connexion,$sql);
    
 }

 
 function updateProduit($id,$libelle,$qt,$prix){
    global $connexion;
    $sql="UPDATE produit SET libelle ='$libelle',quantite=$quantite, prix =$prix where id=$id ";
     pg_query($connexion,$sql);
    
 }
 function getProduitById($id){
    global $connexion;
    $sql="SELECT * FROM produit where id=$id";
    $produit = pg_fetch_assoc(pg_query($connexion,$sql));
    return $produit;
  }
?>