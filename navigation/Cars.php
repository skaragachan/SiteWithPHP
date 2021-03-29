<?php session_start(); 
 if(isset($_SESSION['login'])){
    if($_SESSION['login']){
        header('Location: /navigation/user/Cars.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="/header.css">
    <link rel="stylesheet" type="text/css" href="/navigation/print_db.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/header.js"></script>
    <title>App</title>
  </head>
  <body>
        <header class="header">
            <nav>
                <ul class="burger-links" id="burger-links">
                    <i onClick="clickHandler()" class="fas fa-bars burger"></i>
                    <li><a href="/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" class="active" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <i onClick="clickHandler()" class="fas fa-bars burger"></i>

                <div class="logo" id="logo">
                    Cars
                </div>
                <ul class="nav-links">
                    <li><a href="/Index.php" onClick="clickHandlerLinks('Home')">Home</a></li>
                    <li><a href="/navigation/Cars.php" class="active" onClick="clickHandlerLinks('Cars')">Cars</a></li>
                    <li><a href="/navigation/search.php" onClick="clickHandlerLinks('Seacrh')">Search</a></li>
                    <li><a href="/navigation/login.php" onClick="clickHandlerLinks('Login')">Login</a></li>
                    <li><a href="/navigation/about.php" onClick="clickHandlerLinks('About')">About</a></li>
                </ul>
                <a href="/Index.php" class="aimage"><image class="image" src="https://media.istockphoto.com/vectors/car-logo-with-circle-hand-colorful-logo-vector-id1064271428"></image></a>
            </nav>
        </header>
        <div class="padd"></div>
        <main>
            <?php require_once $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."navigation".DIRECTORY_SEPARATOR."PrintDB.php" ;?>
        </main>
  </body>
</html>