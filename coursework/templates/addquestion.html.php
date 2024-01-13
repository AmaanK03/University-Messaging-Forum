<header>
    <h1 class="animated-header text-center">Add a post</h1>
</header>

<form action="" method="post" class="m-3">
    <div class="form-group">
        <label for="joketext">Type your message here:</label>
        <textarea class="form-control" name="joketext" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <select class="form-control" name="authors">
            <option value="">Select an user</option>
            <?php foreach ($authors as $author): ?>
                <option value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <select class="form-control" name="categories">
            <option value="">Select a Module</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <?= htmlspecialchars($category['categoryName'], ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Add">
</form>
