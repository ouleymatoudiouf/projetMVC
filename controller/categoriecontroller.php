<?php
 require_once './model/categorieModel.php';

    function index(){
        $categories = getAll();
        require_once './view/categorie/list.php';
    }

    function create(){
        require_once './view/categorie/add.php';
    }

    function save(){
        $libelle =$_POST['libelle'];
        addCategorie($libelle);
        header('location:index.php?controller=categorie');
    }

    function remove(){
        $id =$_GET['id'];
        deleteCategorie($id);
        header('location:index.php?controller=categorie');

    }

    function edit(){
        $id =$_GET['id'];
        $categorie = getCategorieById($id);
         require_once './view/categorie/edit.php';
    }

    function update(){
        extract($_POST);
        updateCategorie($id,$libelle);
        header('location:index.php?controller=categorie');
    }






?>