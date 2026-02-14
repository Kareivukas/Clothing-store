
<?php
include  'Header.php';
$title = "Frost & Form® | Where Snowflakes Meet Blueprints";
$md = "This website is for winter enthusiasts!"
?>
<style>
        .hero-section {
            background: url('mainimage.jpeg') center/cover no-repeat;
            padding: 150px 20px;
            text-align: center;
            margin-bottom: 40px;
            color: rgb(255, 255, 255);
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }
        
        .hero-content h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 1px;
        }
        
        .hero-content p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        
        .card {
            background: rgb(255, 255, 255);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .img-fluid {
            height: 90%;
            width: 100%; 
            overflow: hidden; 
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(248, 248, 248);
        }
        
        .img-fluid img {
            object-fit: cover;
            display: block;
        }
        
        .card-footer {
            font-weight: bold;
            margin: 15px 0;
            font-size: 16px;
            text-align: center;
            padding: 0 10px;
            flex-grow: 1;
        }
        
        .about-section {
            background-color: rgb(249, 249, 249);
            padding: 60px 20px;
            margin: 40px 0;
            text-align: center;
        }
</style>
    
    <!-- Hero Section with "main page image.jpg" as background -->
    <section class="hero-section">
        <div class="hero-content">
            <h2>FOR THE DEEPEST WINTER CONDITIONS</h2>
            <p></p>
        </div>
    </section>
    
    <!-- Product Range -->
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 30px; color: rgb(44, 62, 80);">
        
        <!-- First Row -->
        <div class="row">
            <div class="col-sm-4">
            <div class="card">
                <a href="CollectionsPage.php">
                    <img class="img-fluid" src="wimage1.jpg.jpeg" alt="Sweater Women's">
                <div class="card-footer">Sweater Women's</div>
            </a>
            </div>
            </div>
            
            <div class="col-sm-4">
            <div class="card">
                    <img class="img-fluid" src="Caden-Crewneck-Sweater.jpeg" alt="Sweater Men's">
                <div class="card-footer">Sweater Men's</div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card">
                    <img class="img-fluid" src="Sweaterkids.jpeg" alt="Sweater Kid's">
                <div class="card-footer">Sweater Kid's</div>
            </div>
        </div>
        </div>

        <!-- Second Row -->
         <div class="row">
            <div class="col-sm-4">
            <div class="card">
                    <img class="img-fluid" src="Nonie-Puffer-Jacket-250.jpeg" alt="Jacket Women's">
                <div class="card-footer">Jacket Women's</div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card">
                    <img class="img-fluid" src="mimage2.jpg.jpeg" alt="Sweater Men's">
                <div class="card-footer">Jacket Men's</div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card">
                    <img class="img-fluid" src="kidsJacket.jpg" alt="Sweater Kid's">
                <div class="card-footer">Jacket Kid's</div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 style="margin-bottom: 20px; color: rgb(44, 62, 80);">OUR STORY</h2>
            <p style="max-width: 800px; margin: 0 auto;">
                Since 2025, Frost & Form has been designing and developing outdoor gear and outfits in the unpredictable Finnish climate. 
                Frost & Form makes clothes for those who hike, train, ski – anyone who has the drive (or sisu) to get out and enjoy 
                the great outdoors no matter the conditions. Frost & Form gear has proven its reliability year after year in any weather 
                our northern latitude throws at us, and we are committed to staying sustainable for years to come.
            </p>
        </div>
    </section>
    <?php include 'Footer.php' ?>
    
