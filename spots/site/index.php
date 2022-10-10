<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/divstruct.css" rel="stylesheet" type="text/css">
    <link href="../css/slide.css" rel="stylesheet" type="text/css">
    <script src="../jscript/slide.js"></script>
    <title>Página Inicial</title>
</head>
<body>
<?php include("../other/header.html");?>
<div id="main">
    <!-- Image text -->
    <p class="h1 text-center" id="title"></p>

    <!-- Container for the image gallery -->
<div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 3</div>
    <img class="demoP img-fluid rounded mx-auto d-block" src="../imgs/1.jpg" alt="tit1">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
    <img class="demoP img-fluid rounded mx-auto d-block" src="../imgs/2.jpg" alt="tit2">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
    <img class="demoP img-fluid rounded mx-auto d-block" src="../imgs/3.jpg" alt="tit3">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)"><&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;></a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row">
  <div class="column">
    <img class="demo cursor img-fluid mx-auto d-block" src="../imgs/1.jpg" onclick="currentSlide(1)" alt="Text1">
  </div>
  <div class="column">
    <img class="demo cursor img-fluid mx-auto d-block" src="../imgs/2.jpg" onclick="currentSlide(2)" alt="Text2">
  </div>
  <div class="column">
    <img class="demo cursor img-fluid mx-auto d-block" src="../imgs/3.jpg" onclick="currentSlide(3)" alt="Text3">
  </div>
</div>
<script type="text/javascript">
    currentSlide(slideIndex);
    plusSlidesAuto(0);
</script>
</div>
</div>
</body>
</html>