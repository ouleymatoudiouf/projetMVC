<a href="/index.php?controller=utilisateur&action=add">Add utilisateur</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Mot de passe</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($utilisateurs)) : ?>
        <?php foreach ($utilisateurs as $p) : ?>
            <tr>
                <td><?= htmlspecialchars($p['id']) ?></td>
                <td><?= htmlspecialchars($p['nom']) ?></td>
                <td><?= htmlspecialchars($p['prenom']) ?></td>
                <td><?= htmlspecialchars($p['email']) ?></td>
                <td><?= htmlspecialchars($p['mot_de_passe']) ?></td>
                <td>
                    <a href="/index.php?controller=utilisateur&action=delete&id=<?= htmlspecialchars($p['id']) ?>">Delete</a>
                    <button>Update</button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Aucun utilisateur trouvé.</td>
        </tr>
    <?php endif; ?>
</table>
