<!DOCTYPE html>

<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/funciones.js"></script>
        <!-- Material Design Lite -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/material.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <!-- / Material Design Lite -->
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <span class="mdl-layout-title"><?php echo $title; ?> — por Cristián Salinas</span>
              <!-- Add spacer, to align navigation to the right -->
              <div class="mdl-layout-spacer"></div>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Menú</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.php">Inicio</a>
                <a class="mdl-navigation__link" href="ej-1.php">#01 | 3 MAY/MEN</a>
                <a class="mdl-navigation__link" href="ej-2.php">#02 | 10 PAR/IMP</a>
                <a class="mdl-navigation__link" href="ej-3.php">#03 | 5 ASC</a>
                <a class="mdl-navigation__link" href="ej-4.php">#04 | 5 DESC</a>
                <a class="mdl-navigation__link" href="ej-5.php">#05 | CHAR o NUM</a>
                <a class="mdl-navigation__link" href="ej-6.php">#06 | 10 SUM</a>
                <a class="mdl-navigation__link" href="ej-7.php">#07 | 2 HIPO</a>
                <a class="mdl-navigation__link" href="ej-8.php">#08 | CONT STR</a>
                <a class="mdl-navigation__link" href="ej-9.php">#09 | COMP STR</a>
                <a class="mdl-navigation__link" href="ej-10.php">#10 | CALC CTAS</a>
                <a class="mdl-navigation__link" href="ej-11.php">#11 | SALARIOS</a>
                <a class="mdl-navigation__link" href="ej-12.php">#12 | CONT. IMGS</a>
            </nav>
          </div>
          <main class="mdl-layout__content">
            <div class="page-content">

<div class="mdl-grid">