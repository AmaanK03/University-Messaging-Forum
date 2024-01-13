<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../jokes.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://img.freepik.com/free-vector/logo-with-colorful-sphere_1017-4314.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="bar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">University of Liberty City │ Admin area  </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="questions.php" class="nav-link">Message List</a>
                    </li>
                    <li class="nav-item">
                        <a href="addquestion.php" class="nav-link">Create a Message</a>
                    </li>
                    <li class="nav-item">
                        <a href="modules.php" class="nav-link">Modules</a>
                    </li>
                    <li class="nav-item">
                        <a href="addmodule.php" class="nav-link">Add Module</a>
                    </li>
                    <li class="nav-item">
                        <a href="user.php" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="adduser.php" class="nav-link">Add Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        <?=$output?>
    </main>

    <footer class="bg-warning text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="lead mb-0">Copyright &copy; University of Liberty City</p>
        </div>
    </footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-cktMIWVWoC5V9az2lU4lMLO7DBD1eRkJypiI7r2mTW5hyywBlvjFtUWVn5UUqEJz" 
    crossorigin="anonymous"></script>
</body>
</html>
