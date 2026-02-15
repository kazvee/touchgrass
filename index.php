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
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="js/app.js" defer></script>
</head>
<body>

<nav class="navbar">
  <div class="nav-container">
    <h1 class="logo">🌱 Touch Grass</h1>
    <button id="theme-toggle">🌚 Dark Mode</button>
  </div>
</nav>

    <div class="cards">
        <?php foreach ($places as $place) {
            include "templates/card.php";
        } ?>
    </div>
    
</div>
</body>
</html>
