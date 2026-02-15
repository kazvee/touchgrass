<div class="card place-card" data-name="<?= strtolower($place['name']) ?>">
    <h3><?= $place['name'] ?></h3>
    <p><?= $place['city'] ?>, <?= $place['province'] ?>, <?= $place['postcode'] ?></p>
    <span>📍 <a href="<?= $place['mapUrl'] ?>" target="_blank">Map</a></span>
    <?php if (!empty($place['notes'])): ?>
        <p>Notes: <?= $place['notes'] ?></p>
    <?php endif; ?>
</div>
