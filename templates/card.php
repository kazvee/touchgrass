<?php
$copyText = "Go Touch Grass here:\n";

$copyText .= $place['name'] . "\n";

$copyText .= $place['city'] . ', ' . $place['province'] . ', ' . $place['postcode'] . "\n";

if (!empty($place['notes'])) {
    $copyText .= 'Notes: ' . $place['notes'] . "\n";
}

$copyText .= 'Map: ' . $place['mapUrl'];
?>
<div class="card place-card" data-name="<?= strtolower($place['name']) ?>">
    <h3><?= $place['name'] ?></h3>
    <p><?= $place['city'] ?>, <?= $place['province'] ?>, <?= $place['postcode'] ?></p>
    <span>📍 <a href="<?= $place['mapUrl'] ?>" target="_blank">Map</a></span>
    <?php if (!empty($place['notes'])): ?>
        <p>Notes: <?= $place['notes'] ?></p>
    <?php endif; ?>

    <button class="copy-btn" data-copy="<?= htmlspecialchars($copyText, ENT_QUOTES) ?>">Copy Info</button>
</div>
