<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['header']?></title>
    <link rel="stylesheet" href=<?= DIREKTORI . '/css/bootstrap.css' ?>>
    <link rel="stylesheet" href=<?= DIREKTORI . '/css/style.css'?>>
    <style>
        nav {
            z-index: 3;
        }
        .navbar-nav {
            gap: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary px-4">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#">DBZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-3" id="navbarNavDropdown">
      <ul class="navbar-nav text-end ms-auto">
        <li class="nav-item rounded">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="true" >
            Divisions
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-end">
            <li><a class="dropdown-item" href="#">Fathur Syah</a></li>
            <li><a class="dropdown-item" href="#">Gabriel Sebastian</a></li>
            <li><a class="dropdown-item" href="#">Muhammad Abian</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
