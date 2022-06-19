<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOS Socorejo</title>
    <meta charset="UTF-8">
    <meta name="description" contents="BOS Socorejo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/slideshow.css" type="text/css">
    <link rel="stylesheet" href="css/aboutus.css" type="text/css">
</head>
<body>
    <header>
        <?php
            include 'cover/cover.php'
         ?>
        <hr />
    </header>
    <div class="topnav1" id="myTopnav">
            <a onclick="openNav()" style="cursor: pointer;" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="index.php?page=home">Profile</a>
            <a href="index.php?page=contact">Visi & Misi</a>
            <a href="index.php?page=contact"><i class="fa fa-fw fa-envelope"></i>Produk Kami</a>
            <a href="index.php?page=contact"><i class="fa fa-fw fa-user"></i>Contact</a>
            <a href="index.php?page=about">About Us</a>
        </div>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Artikel</a>
  <a href="#">Event</a>
  <a href="#">Gallery Foto</a>
  <a href="#">Client</a>
  <button class="dropdown-btn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Sign IN</a>
      <a href="#">Sign UP</a>
    </div>
</div>
    <div id="content">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "aboutus.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>
    </div>
    <footer>
        <?php include 'footer.php' ?>
        <!-- &copy Copyright BOS 2022 | Bike Owner Socorejo -->
    </footer>
    <script src="js/main.js">
    </script>
</body>
</html>