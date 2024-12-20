<?php
 require_once './model/produitModel.php';

 function index(){
    $produits = getAll();
    require_once './view/produit/list.php';
}

function remove(){
    $id =$_GET['id'];
    deleteProduit($id);
    header('location:index.php?controller=produit');

}
function create(){
    require_once './view/produit/add.php';
}

function save(){
    $libelle =$_POST['libelle'];
    $qt =$_POST['qt'];
    $prix =$_POST['prix'];
    addProduit($libelle,$qt,$prix),$description;
    header('location:index.php?controller=produit');
}
function edit(){
    $id =$_GET['id'];
    $categorie = getCategorieById($id);
     require_once './view/categorie/edit.php';
}

function update(){
    extract($_POST);
    updateCategorie($id,$libelle,$prix,$quantite,$description);
    header('location:index.php?controller=categorie');
}




?>