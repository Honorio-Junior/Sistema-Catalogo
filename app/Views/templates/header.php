<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Papelaria</title>
</head>

<body data-bs-theme="light">

  <main>

    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand fs-5" href="/">Papelaria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center mx-auto gap-4">

            <a class="nav-link" href='/cat/0'>Todos</a>

            <?php if ($categorys): ?>
              <?php foreach($categorys as $item): ?>
                <a class="nav-link" href=<?php echo '/cat/' . $item['rowid']; ?>> <?php echo $item['name']; ?>  </a>
              <?php endforeach; ?>
            <?php endif; ?>
            

          </div>
          <form class="d-flex  mx-0" role="search" action="/product/" method="GET">
            <input class="form-control me-2" type="search" placeholder="Buscar produto" aria-label="Search" name='name_product'>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <style>
        /* sempre exibir a barra de rolagem */
        body {
            overflow-y: scroll;
        }
    </style>
