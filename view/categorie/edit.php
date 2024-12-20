<form action="/index.php?controller=categorie&action=update" method="post">
    <input type="text" name="id" value="<?= $categorie['id'] ?>" hidden>
    <label for="">Libelle</label>
    <input type="text" name="libelle" value="<?= $categorie['libelle'] ?>"><br>
    <button type="submit">Editer</button>
</form>
