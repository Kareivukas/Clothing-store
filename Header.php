<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { line-height: 1.6; color: rgb(51, 51, 51); }
        
       
        .navbar {
            background: rgb(44, 62, 80); 
            padding: 15px 30px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-brand {
            color: rgb(255, 255, 255);
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        .navbar-brand:hover {
            color: rgb(255, 255, 255);
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        
         .nav-link {
            background-color: rgb(52, 73, 94);
            color: rgb(255, 255, 255);
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background 0.3s;
        }
        .nav-link:hover {
            background-color: rgb(61, 86, 110); 
            color: rgb(255, 255, 255);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .dropdown-item {
            color: rgb(51, 51, 51);
            padding: 12px 16px;
            text-decoration: none;
            border-bottom: 1px solid rgb(241, 241, 241);
            transition: background 0.3s;
        }
        
        .dropdown-item:hover {
            background-color: rgb(248, 249, 250); 
        }
        .btn {
            background-color: rgb(52, 73, 94);
            color: rgb(255, 255, 255);
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: rgb(61, 86, 110); 
            color: rgb(255, 255, 255);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .category-dropdowns {
            display: flex;
            gap: 10px;
        }
        
        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 20px; 
        }
        
        .footer {
            background-color: rgb(44, 62, 80); 
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 30px 20px;
            margin-top: 40px;
        }
        
    </style>
</head>
<body>
        <!-- Top Navigation Bar -->
   <nav class="navbar navbar-expand-lg justify-content-center fixed-top">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <ul class="navbar-nav ms-auto">
        <a class="navbar-brand" href="index.php">Frost&Form</a>
    </ul>
     <!-- Category Dropdowns -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <!-- Men Dropdown -->
            <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Men</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Jackets</a></li>
            <li><a class="dropdown-item" href="#">Sweaters</a></li>
            <li><a class="dropdown-item" href="#">Boots</a></li>
            </ul>
            <!-- Women Dropdown -->
            <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Women</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Jackets</a></li>
            <li><a class="dropdown-item" href="CollectionsPage.php">Sweaters</a></li>
            <li><a class="dropdown-item" href="#">Boots</a></li>
            </ul>
            <!-- Kids Dropdown -->
            <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Kids</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Jackets</a></li>
            <li><a class="dropdown-item" href="#">Sweaters</a></li>
            <li><a class="dropdown-item" href="#">Boots</a></li>
            </ul>
        </ul>
        <!-- Search bar -->
        <ul class="navbar-nav ms-auto">
  <form class="d-flex">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn" type="button">Search</button>
       
      </form>
      <!-- Cart button -->
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Cart
  </button>
    </div>
    </nav>
</ul>
    <!-- Inside of the cart -->
    <div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Cart</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body"> 
    <p>Your cart is empty</p>
  </div>
</div>
</nav>
