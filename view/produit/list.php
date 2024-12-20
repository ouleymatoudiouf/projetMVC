<a href="/index.php?controller=produit&action=add">Add Product</a>
<table>
    <tr>
        <th>ID</th>
        <td>Libelle</td>
        <th>Prix</th>
        <th>Quantite</th>
        <th>description</th>
    </tr>
    <?php while($p = pg_fetch_assoc($produits)){?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            <td><?= $p['prix'] ?></td>
            <td><?= $p['quantite'] ?></td>
            <td><?= $p['description'] ?></td>
            <td>
                <a href="/index.php?controller=produit&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <button>Update</button>
            </td>
        </tr>
    <?php } ?>
</table>