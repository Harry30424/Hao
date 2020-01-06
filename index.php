<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="Shortcut Icon" type="image/x-icon" href="https://image.flaticon.com/icons/png/512/75/75375.png">
    <title>Hao台灣官方網站</title>
    
  </head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><h1 style="font-family: 'Courier New', Courier, monospace;">Hao</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home </span></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="about.html">品牌故事</a>
                      <a class="dropdown-item" href="index.php">穿搭指南</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.html">Service </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="product.html">Product</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.html">Contact</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
    </nav>
  <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">穿搭指南</li>
        </ol>
  </div>
<?php
$imgType = array('animals','architecture','nature','people','tech');
#print $imgType[rand(0,4)];

for ($x = 0; $x <= 100; $x++) {
    $img="https://placeimg.com/45".($x%10)."/350/any".$imgType[rand(0,4)];
    echo "<img src='" .$img. "'>" .PHP_EOL;
}

   
?>
</body>
</html>


