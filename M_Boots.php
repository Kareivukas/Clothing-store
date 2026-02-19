<?php
include  'Header.php';
$title = "Frost & Form - Man's Collection";
$md = "Man's Boots are the best!";

$image1 = "TheColdfrontChelsea.avif";
$image2 = "TheFrozenPeakBoot.avif";
$image3 = "TheGlacierWalker.avif";
$image4 = "TheIceGripHiker.avif";
$image5 = "TheIcefieldLogger.avif";
$image6 = "ThePermafrostBoot.avif";
$image7 = "ThePolarExplorer.avif";
$image8 = "TheSnowmassBoot.avif";
$image9 = "TheTimberlineInsulated.avif";
$image10 = "TheTundraTrekker.avif";

$name1 = "The Coldfront Chelsea";
$name2 = "The Frozen Peak Boot";
$name3 = "The Glacier Walker";
$name4 = "The Ice Grip Hiker";
$name5 = "The Icefield Logger";
$name6 = "The Permafrost Boot";
$name7 = "The Polar Explorer";
$name8 = "The Snowmass Boot";
$name9 = "The Timberline Insulated";
$name10 = "The Tundra Trekker";

$price1 = "18,05";
$price2 = "21,14";
$price3 = "19,75";
$price4 = "21,28";
$price5 = "25,76";
$price6 = "25,30";
$price7 = "17,85";
$price8 = "19,68";
$price9 = "24,87";
$price10 = "22,55";
?>
<style>
header {
            text-align: center;
            padding: 40px 20px;
            background-color: reg(255,255,255);
            border-bottom: 1px solid ;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: 255,255,255;
        }
        
        .tagline {
            font-size: 1.2rem;
            color: black;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }

	       
     	.img {
   	 height: 150px;
    	width: 100%; 
    	background-color: rgb(255,255,255);
        object-fit: cover;
	}
 
	.product-image img {
    	height: 100%;
   	 width: 100%;  
   	 object-fit: cover; 
	}
	     
        {
            color: #999;
            font-size: 1.1rem;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-name {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #2c3e50;

        }
        
        .product-price {
            font-size: 1.0 rem;
            font-weight: bold;
            color: rgb(0,0,0);
            margin-bottom: 15px;
        }
        
        .collection-info {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            margin-top: 50px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .collection-info h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        
        .collection-info p {
            margin-bottom: 15px;
            line-height: 1.7;
        }
</style>
    <div class="container">
        <header>
            <h1>Frost & Form Women's Collection</h1>
            <p class="tagline">Trusted high quality woman’s collection for fashionable women for any occasions..</p>
        </header>


              <div class="products-grid">
            <!-- Product 1 -->
             
            <div class="card">
                <a href="ProductPage.php">
                  <img class="img-fluid" src=<? echo $image1?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name1?></h3>
                    <div class="product-price"><? echo "$price1 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 2 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image2?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name2?></h3>
                    <div class="product-price"><? echo "$price2 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 3 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image3?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name3?></h3>
                    <div class="product-price"><? echo "$price3 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 4 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image4?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name4?></h3>
                    <div class="product-price"><? echo "$price4 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 5 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image5?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name5?></h3>
                    <div class="product-price"><? echo "$price5 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 6 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image6?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name6?></h3>
                    <div class="product-price"><? echo "$price6 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 7 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image7?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name7?></h3>
                    <div class="product-price"><? echo "$price7 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 8 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image8?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name8?></h3>
                    <div class="product-price"><? echo "$price8 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 9 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image9?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name9?></h3>
                    <div class="product-price"><? echo "$price9 €" ?></div>
                </a></div>
            </div>
            
            <!-- Product 10 -->
            <div class="card">
                <a href="ProductPage.html">
                  <img class="img-fluid" src=<? echo $image10?>>
                <div class="product-info">
                    <h3 class="product-name"><? echo $name10?></h3>
                    <div class="product-price"><? echo "$price10 €" ?></div>
                </a></div>
            </div>
        
        <div class="collection-info">
            <h2>Man's Collection for All winter Activities</h2>
            <p>Embrace the chilly season with cozy, chic winter outfits by layering up in stylish coats, warm sweaters, and trendy boots. From fluffy scarves to classic wool coats, these 		winter wardrobe staples keep the look fashionable yet warm. Capture the aesthetic with captions like "Sweater weather is better together," "Cold days, warm aesthetic," or 		"Chic happens, even in the snow". </p>
          
        </div>
        </div>
        <?php include 'Footer.php' ?>