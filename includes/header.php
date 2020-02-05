<!Doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($title) ? $title : 'Page with no title' ; ?></title>
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<div>
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlay"></div>
    <div class="container">
    <nav>
        <h1 class="brand"><a href="index.php">VOC<span>AL</span>LY</h1>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Article 1</a></li>
            <li><a href="#">Article 2</a></li>
            <li><a href="#">Article 3</a></li>
        </ul>
    </nav>
    </div>
    </div>
</header>
</html>
