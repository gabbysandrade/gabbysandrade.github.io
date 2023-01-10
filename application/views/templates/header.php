<!DOCTYPE html>
<html lang="en">
<!--------------------------
Name: Gabriela Andrade
Floração Design
Purpose: This template will render the document "header" of each page
of the Floração website. It will include the document head and the
navbar for the pages.
--------------------------->
  <head>
    <title><?= $title ?></title>
    <meta name="Author" content="Gabriela Andrade">
    <meta name="description" content="Portfolio site for Austin-based Brasilian web developer and UI/UX designer, Gabriela Andrade.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b1edbd6c5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/images/favicon.ico" type="image/ico">
  </head>
  <body>
  <nav class="navbar navbar-dark navbar-expand-lg">
    <div id="navinner" class="container-fluid">
      <a class="navbar-brand" href="\">
        <img src="assets/images/flor_logo.png" alt="Home" class="d-inline-block align-text-center hdrimg"/>
        <span class="site-title ms-3">floração</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
        <div class="navbar-nav me-3 mb-2 mb-lg-0">
          <a class="nav-link active" id="navindx" aria-current="page" href="\">home</a>
          <a class="nav-link" id="navport" href="<?= $navport ?>">portfolio</a>
        </div>
      </div>
    </div>
  </nav>