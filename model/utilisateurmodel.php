<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT *  FROM utilisateur";
    $utilisateurs = pg_query($connexion,$sql);
    return $utilisateurs;
 }

 
 function addUtilisateur($libelle,$qt,$prix){
    global $connexion;
    $sql="INSERT INTO utilisateur (nom,prenom,email,mot_de_passe) values
     ('$nom',$prenom,$email,$mot_de_passe)";
     pg_query($connexion,$sql);
    
 }

 function deleteUtilisateur($id){
    global $connexion;
    $sql="DELETE from utilisateur  where id = $id";
     pg_query($connexion,$sql);
    
 }

 
 function updateProduit($id,$nom,$prenom,$email,$mot_de_passe){
    global $connexion;
    $sql="UPDATE utilisateur SET nom ='$nom',prenom='$prenom', email ='$email' , mot_de_passe = '$mot_de_passe'where id=$id ";
     pg_query($connexion,$sql);
    
 }
 function getUtilisateurById($id){
    global $connexion;
    $sql="SELECT * FROM utilisateur where id=$id";
    $utilisateur = pg_fetch_assoc(pg_query($connexion,$sql));
    return $utilisateur;
  }
?>