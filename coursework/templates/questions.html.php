<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Page</title>
    <link rel="stylesheet" href="jokes.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://img.freepik.com/free-vector/logo-with-colorful-sphere_1017-4314.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="animated-header">Student Posts</h1>
    </header>

    <div class="container mt-4">
        <div class="row">
            <?php foreach ($jokes as $joke): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="images/<?= htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="Joke Image" height="225">
                        <div class="card-body">
                            <p class="card-text"><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></p>
                            <p class="card-text"><small class="text-muted">Category: <?= htmlspecialchars($joke['categoryName'], ENT_QUOTES, 'UTF-8') ?></small></p>
                            <p class="card-text"><small class="text-muted">Date: <?= htmlspecialchars(date("D d M Y", strtotime($joke['jokedate'] ?? 'today')), ENT_QUOTES, 'UTF-8') ?></small></p>
                            <div class="d-flex justify-content-between align-items-center">
                               
                                <small class="text-muted">By <a href="mailto:<?= htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8') ?></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>
</html>
