<?php
 require_once './model/utilisateurmodel.php';

 function index(){
    $utilisateurs = getAll();
    require_once './view/utilisateur/list.php';
}

function remove(){
    $id =$_GET['id'];
    deleteUtilisateur($id);
    header('location:index.php?controller=utilisateur');

}
function create(){
    require_once './view/utilisateur/add.php';
}

function save() {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    addUtilisateur($nom, $prenom, $email, $mot_de_passe);

    header('Location: index.php?controller=utilisateur');
    exit();
}


function edit() {
    $id = $_GET['id'];
    $utilisateur = getUtilisateurById($id);  
    require_once './view/utilisateur/edit.php';  
}
function update() {
    
    if (isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe= $_POST['mot_de_passe'];

        
        if (!empty($mot_de_passe)) {
            $mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        }

    
        updateUtilisateur($id, $nom, $prenom, $email, $mot_de_passe);

        
        header('location:index.php?controller=utilisateur');
        exit();
    } else {
        
        echo "Tous les champs doivent être remplis.";
    }
}


?>