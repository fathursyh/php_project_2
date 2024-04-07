<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <title><?= $data['header'] ?></title>
  <link rel="stylesheet" href=<?= DIREKTORI . '/css/bootstrap.css' ?>>
  <link rel="stylesheet" href=<?= DIREKTORI . '/css/style.css?' . time(); ?>>
  <style>
    nav {
      z-index: 3;
    }

    .navbar-nav {
      gap: 20px;
    }
  </style>
  <script src="<?= DIREKTORI . '/js/validate.js?' . time(); ?>"></script>
</head>

<body class="h-100%">
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-4">
    <div class="container-fluid">
      <a class="navbar-brand ms-3" href="#">DBZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-3" id="navbarNavDropdown">
        <ul class="navbar-nav text-end ms-auto">
          <li class="nav-item rounded">
            <a class="nav-link active" aria-current="page" href="<?= DIREKTORI; ?>">Home</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="<?= DIREKTORI; ?>/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="#"><b><?= $data['nama'] ?? 'User' ?></b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>