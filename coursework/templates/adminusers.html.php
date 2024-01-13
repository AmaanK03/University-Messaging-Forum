<?php foreach ($authors as $author): ?>
    <blockquote>
        <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8') ?>
        <br /> Email: <?= htmlspecialchars($author['email'], ENT_QUOTES, 'UTF-8') ?>
        
        <a href="edituser.php?id=<?= $author['id'] ?>">Edit</a>

        <form action="deleteuser.php" method="post">
            <input type="hidden" name="id" value="<?= $author['id'] ?>">
            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this author?');">
        </form>
    </blockquote>
<?php endforeach; ?>
