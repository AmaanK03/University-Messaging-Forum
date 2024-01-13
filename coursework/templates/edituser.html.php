<!-- edituser.html.php -->
<h2>Edit User</h2>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
    
    <label for="name">Author Name:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>" required>

    <label for="email">Author Email:</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($author['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>

    <input type="submit" name="submit" value="Update">
</form>
