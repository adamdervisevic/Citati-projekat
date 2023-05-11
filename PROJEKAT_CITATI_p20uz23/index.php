<?php
    $images = 'images/';
    $slike = glob($images . '*jpg');
    shuffle($slike);

    $categories = array('posao', 'ljubav', 'zdravlje', 'motivacija');
if (isset($_GET['category']) && in_array($_GET['category'], $categories)) {
    $filename = $_GET['category'] . '.txt';
} else {
    $filename = $categories[array_rand($categories)] . '.txt';
}

$citate = file($filename, FILE_IGNORE_NEW_LINES);
$citat = $citate[array_rand($citate)];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Citati</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item px-4 fs-4">
            <a class="nav-link text-white" aria-current="page" href="?category=posao">Posao</a>
            </li>
            <li class="nav-item px-4 fs-4">
            <a class="nav-link text-white" href="?category=zdravlje">Zdravlje</a>
            </li>
            <li class="nav-item px-4 fs-4">
            <a class="nav-link text-white" href="?category=ljubav">Ljubav</a>
            </li>
            <li class="nav-item px-4 fs-4">
            <a class="nav-link text-white" href="?category=motivacija">Motivacija</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
            for ($i = 0; $i < 3; $i++) {
                echo '<div class="carousel-item';
                if ($i == 0) {
                    echo ' active';
                }
                echo '"><img src="' . $slike[$i] . '" class="d-block w-100" alt="random-slike" style="height: 100vh"></div>';
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="container position-absolute top-50 start-50 translate-middle text-white">
    <div class="row">
        <?php
            echo '<div class="d-flex justify-content-center">';
            echo '<blockquote class="blockquote">';
            echo '<p class="mb-0 fs-4">' . $citat . '</p>';
            echo '</blockquote>';
            echo '</div>';
        ?>
    </div>
</section>
<footer class="fixed-bottom d-flex justify-content-center">
    <p class="text-white fs-5"><?php echo date("d.m.Y H:i:s"); ?></p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>