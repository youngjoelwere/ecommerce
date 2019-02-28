<html>
<head>
  <title> iStyle</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
      <a href="/iStyle/index.php" class="navbar-brand" id="text">iStyle</a>
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">General designs</a></li>
            <li><a href="#">Event Fashions</a></li>
            <li><a href="#">Home interior Assets</a></li>
            <li><a href="#">Protective Assesories</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>
  <div id="background-image"></div>

  <div class="col-md-2"></div>

  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Featured Fashion Outfits</h2>
      <div class="col-md-3">
        <h4>Beach Wear</h4>
        <img src="img/img1.png" id="img"/>
        <p class="List-price text-danger">List Price:<s>$24.99</s></p>
        <p class="price">our price: $19.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">details</button>

      </div>
      <div class="col-md-3">
        <h4>Women Coats</h4>
        <img src="img/img2.png"  id="img"/>
        <p class="list-price text-danger">list price:<s>$39.99</s></p>
        <p class="price">our price: $29.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">details</button>

      </div>
      <div class="col-md-3">
        <h4>Level Wedding</h4>
        <img src="img/img3.png"  id="img"/>
        <p class="list-price text-danger">list price:<s>$39.99</s></p>
        <p class="price">our price: $29.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">details</button>

      </div>

      <div class="col-md-3">
        <h4>Fabric Art</h4>
        <img src="img/img4.png" id="img"/>
        <p class="list-price text-danger">list price:<s>$39.99</s></p>
        <p class="price">our price: $29.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">details</button>

      </div>
      <div class="col-md-3">
        <h4>Pullover</h4>
        <img src="img/img5.png" id="img"/>
        <p class="list-price text-danger">list price:<s>$39.99</s></p>
        <p class="price">our price: $29.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">details</button>

      </div>
      <div class="col-md-3">
        <h4>Mat Designs</h4>
        <img src="img/img6.png" alt="Addidas football" id="img"/>
        <p class="list-price text-danger">list price:<s>$39.99</s></p>
        <p class="price">our price: $29.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">details</button>

      </div>
    </div>
    <footer class="text-center" id="footer">&copy; Copyright 2018 iStyle Systems</footer>
  </div>


<?php include 'details-modal-beachWear.php';
      include 'details-modal-dateNight.php';
      include 'details-modal-levelWedding.php';
      include 'details-modal-party.php';
      include 'details-modal-pullover.php';
      include 'details-modal-matDesigns.php'; ?>


</body>
</html>
