<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/image/favicon.ico">

    <title><?= $data["title"]; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/image/android-chrome-512x512.png" alt="AnswerSpace Logo" width="40" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION["user"])) : ?>
                        <!-- Show these links only when user is logged in -->
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/about/">About</a>
                        <a class="nav-link" href="/answer/">New Answer</a>
                        <a class="nav-link" href="/profile/">Profile</a>
                        <a class="btn btn-danger" href="/profile/logout">Logout</a>
                    <?php else : ?>
                        <!-- Show these links when user is not logged in -->
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/about/">About</a>
                        <a class="btn btn-primary" href="/authentication">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>