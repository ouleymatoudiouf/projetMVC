<a href="/index.php?controller=categorie&action=add">Add Categorie</a>
<table>
    <tr>
        <th>ID</th>
        <td>Libelle</td>

    </tr>
    <?php while($p = pg_fetch_assoc($categories)){?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            <td>
                <a href="/index.php?controller=categorie&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <a href="/index.php?controller=categorie&action=edit&id=<?= $p['id'] ?>">Update</a>
            </td>
        </tr>
    <?php } ?>
</table>