<h1 class="animated-header">Edit Modules</h1>
<?php foreach ($categories as $category): ?>
    <blockquote>
        <?= htmlspecialchars($category['categoryName'], ENT_QUOTES, 'UTF-8') ?>

        <a href="editmodule.php?id=<?= $category['id'] ?>">Edit</a>

        <form action="deletemodule.php" method="post">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?');">
        </form>
    </blockquote>
<?php endforeach; ?>
