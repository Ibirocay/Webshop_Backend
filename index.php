<?php include_once('php/Products.php');
include_once('php/Carousel.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TripÆ[d]ventüre</title>

  <!-- Bootstrap core CSS + Bootstrap Swatch color -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <style>
    .icon-float {
      position: absolute;
      z-index: 1;
      padding: 15px;
    }

    .right {
      right: 5px;
    }

    .sectionHeading {
      font-size: 3rem;
      text-align: center;
      padding: 2rem;
      scroll-margin-top: 1em;
    }
  </style>

</head>

<body class="">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">TripÆ[d]ventüre</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form><input class="form-control" type="text" placeholder="Sök" aria-label="Search"></form>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#aktuellt">Aktuella erbjudanden</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#villkor">Villkor & regler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Logga in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Carousel -->
    <div class="row">
      <?php Carousel::main(); ?>
    </div>

    <!-- Products -->
    <div class="row">

      <div class="col-12">
        <h1 id="aktuellt" class="sectionHeading">Aktuella erbjudanden</h1>
      </div>

      <div class="col">
        <?php Products::main(); ?>
      </div>

    </div>
    <!-- /.products -->

  </div>
  <!-- /.container -->

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Travellers' Choice Worst of the Worst</h1>
      <p>Varje år samlar vi ihop alla resenärernas omdömen, betyg och sparade favoriter från hela världen – och använder den informationen för att lyfta fram det allra sämsta. Utmärkelsen Travellers' Choice Worst of the Worst hyllar dem alla.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Läs mer »</a></p>
    </div>
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <h1 id="villkor" class="sectionHeading">Villkor & regler</h1>
      </div>

      <div class="col-md-6">
        <h3>Allmänna villkor</h3>
        <p class="">
          Tjänsterna erbjuds till dig förutsatt att du godkänner de regler, villkor och meddelanden som anges. Genom att ansluta till eller använda Tjänsterna samtycker du till att bindas av Avtal och bekräftar att du har läst och förstått villkoren i det.</p>
        <p class="">Läs noga igenom Avtalet, då det innehåller information gällande dina rättigheter enligt lag samt begränsningar av dessa rättigheter. Det innehåller även ett avsnitt om gällande lagar och domstolars behörighet vid eventuell tvist.
        </p>
        <p><a class="btn btn-info" href="#" role="button">Fullständiga villkor »</a></p>
      </div>
      <div class="col-md-6">
        <h3>Integritets- och cookiepolicy</h3>
        <p class="">Vi värnar om våra användares integritet och arbetar därför aktivt för att skydda de personuppgifter vi behandlar i vår verksamhet.
          Vår Integritetspolicy förklarar hur och varför vi behandlar personuppgifter, hur vi arbetar för att skydda användares integritet och vad du har för rättigheter vad gäller vår behandling av personuppgifter.</p>
        <p class="">Vi och våra betrodda tredjepartsleverantörer använder cookies och annan teknik till att förbättra säkerheten på webbplatsen, till att förbättra och anpassa din upplevelse samt till att leverera skräddarsydda annonser både på våra egna och andra webbplatser. Om du vill ha mer information läser du vår sekretess- och cookiepolicy.</p>
        <p class="">
          <a class="btn btn-info" href="#" role="button">Integritetspolicy »</a>
          <a class="btn btn-info" href="#" role="button">Cookiespolicy »</a>
        </p>
      </div>
    </div>
  </div> <!-- /container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center">Stulet, lånat och kopierat @ Annika och Ibirocay <?php echo date('Y'); ?> </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

</body>
</html>
