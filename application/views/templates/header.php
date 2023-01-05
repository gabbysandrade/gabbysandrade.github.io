<html lang="eng-US">
<!--------------------------
Name: Gabriela Andrade
Intermediate Web Programming
Purpose: This program will generate the header template for the
comer o sol web application.
--------------------------->
        <head>
            <title>comer o sol - <?= $title ?></title>
            <meta name="Author" content="Gabriela Andrade">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link href="<?= $css ?>" rel="stylesheet">
            <link rel="icon" href="<?= $favicon ?>" type="image/ico">
        </head>
        <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="\"><img src="<?= $logo ?>" alt="Home"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" id="navindx" aria-current="page" href="\">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="navabt" href="<?= $navabt ?>">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="navnews" href="<?= $navnews ?>">Recipes</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>