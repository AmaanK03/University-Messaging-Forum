<form action="editmodule.php" method="post">
   <input type="hidden" name="id" value="<?= $category['id']; ?>">
   <label for="categoryName">Edit your Module name here:</label>
   <input type="text" name="categoryName" value="<?= htmlspecialchars($category['categoryName'], ENT_QUOTES, 'UTF-8'); ?>" required>
   <input type="submit" value="Save">
</form>
