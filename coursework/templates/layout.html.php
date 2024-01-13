<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Home</title>
    <link rel="stylesheet" href="jokes.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://img.freepik.com/free-vector/logo-with-colorful-sphere_1017-4314.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="bar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="land.php" class="navbar-brand">University</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="questions.php" class="nav-link">Message list</a>
                    </li>
                    <li class="nav-item">
                        <a href="useraddjoke.php" class="nav-link">Create a message</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/questions.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        <?=$output?>
    </main>

    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="lead mb-0">Copyright &copy; University of Liberty City</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
</body>
</html>
