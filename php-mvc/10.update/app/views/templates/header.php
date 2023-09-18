<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['heading']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar-expand-lg d-flex justify-content-between navbar-dark bg-primary shadow-sm pt-2 pb-2 pr-5 pl-5">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASEURL; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASEURL; ?>about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASEURL; ?>students">Students</a>
            </li>
        </ul>
        <p class="align-middle text-white">Welcome, <?= $data['users']; ?></p>
    </nav>