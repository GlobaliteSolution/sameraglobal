<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Modern Bootstrap App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to MyApp</h1>
            <p class="lead">Build your dreams with us.</p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Feature 1</h3>
                    <p class="card-text">Description of feature 1.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Feature 2</h3>
                    <p class="card-text">Description of feature 2.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Feature 3</h3>
                    <p class="card-text">Description of feature 3.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; <?php echo date('Y'); ?> MyApp. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
