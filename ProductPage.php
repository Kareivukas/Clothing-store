<?php
$title = "Product";
$md = "This website is for winter enthusiasts!";
include  'Header.php';

$description = "A soft, lightweight knit designed for everyday comfort, perfect for layering through every season.";
$name = "Winter Whisper Knit";
$price = "15,00";
?>
<style>
 h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: 255,255,255;
        }
</style>
    <div class="container" style="margin-top:65px">
        <div class="row">
    <div class="col-sm-6"><img class="img-fluid" src="image1.jpg.jpeg"></div>
    <div class="col-sm-6">
    <h1><? echo $name ?></h1>
    <p><? echo $description ?></p>
    <h3><? echo "$price €"?></h3>
    <p>size options</p>
    <div class="d-flex">
    <button type="button" class="btn btn-outline-dark btn-sm my-3 me-1 flex-fill">XS</button>
    <button type="button" class="btn btn-outline-dark btn-sm my-3 me-1 px-3 flex-fill">S</button>
    <button type="button" class="btn btn-outline-dark btn-sm my-3 me-1 px-3 flex-fill">M</button>
    <button type="button" class="btn btn-outline-dark btn-sm my-3 me-1 px-3 flex-fill">L</button>
    <button type="button" class="btn btn-outline-dark btn-sm my-3 me-1 px-3 flex-fill">XL</button>
  </div>
    <div class="d-grid">
  <button type="button" class="btn btn-dark btn-block">Add to cart</button>
</div></div></div></div>
<?php include 'Footer.php' ?>
