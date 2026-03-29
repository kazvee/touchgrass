<?php
$csvFile = fopen("data/places.csv", "r");
$places = [];
$firstRow = true;

while (($row = fgetcsv($csvFile)) !== false) {
    if ($firstRow) {
        $firstRow = false;
        continue;
    }
    $places[] = [
        "name" => $row[0],
        "city" => $row[1],
        "province" => $row[2],
        "postcode" => $row[3],
        "mapUrl" => $row[4],
        "notes" => $row[5],
    ];
}
fclose($csvFile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Touch Grass</title>
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="js/app.js" defer></script>
</head>
<body>

<nav class="navbar">
  <div class="nav-container">
    <h1 class="logo">
        <img src="assets/img/logo.png" alt="TouchGrass logo" class="logo-img">
        <span class="logo-text">Touch Grass</span>
    </h1>
    <div class="nav-right">
        <input type="text" id="search-input" placeholder="Search places..." aria-label="Search places">
        <button id="search-btn">Search</button>
        <button id="theme-toggle">
            <img src="assets/img/theme-dark.png" alt="Toggle theme" id="theme-icon" class="theme-icon">
        </button>
    </div>
  </div>
</nav>

<main class="main-content">
    <div class="cards">
        <?php foreach ($places as $place) {
            include "templates/card.php";
        } ?>
    </div>
</main>

<footer class="footer">
    <a href="https://github.com/kazvee/touchgrass/#readme" target="_blank" rel="noopener">GitHub</a>
</footer>
    
</body>
</html>
