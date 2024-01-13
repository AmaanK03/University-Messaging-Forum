<h1 class="animated-header">Edit Student Posts</h1>
<?php foreach ($jokes as $joke): ?>
    <blockquote>
        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
        <br /> Category: <?= htmlspecialchars($joke['categoryName'], ENT_QUOTES, 'UTF-8') ?>
        <br /> Date: <?= htmlspecialchars(date("D d M Y", strtotime($joke['jokedate'] ?? 'today')), ENT_QUOTES, 'UTF-8') ?>
        <br /> Author: <?= htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8') ?>
        <br /> Email: <?= htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8') ?>


        <a href="mailto:<?= htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8') ?>">Send Email</a>
        <br />
        <a href="editquestion.php?id=<?=$joke['id']?>">Edit</a>

        <form action="deletequestion.php" method="post">
            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>
