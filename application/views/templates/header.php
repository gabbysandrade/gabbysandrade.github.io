<html lang="eng-US">
<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the header template for the
Floração website.
--------------------------->
  <head>
    <title><?= $title ?></title>
    <meta name="Author" content="Gabriela Andrade">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.ico" type="image/ico">
  </head>
  <body>
  <nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="\">
        <img src="images/flor_logo.png" alt="Home" class="d-inline-block align-text-center hdrimg"/>
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