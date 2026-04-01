<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';

function studio_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function studio_render_header(string $activePage, string $title, string $description): void
{
    $data = studio_data();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= studio_e($title) ?></title>
    <meta name="description" content="<?= studio_e($description) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="grain"></div>
<div class="site-shell">
    <header class="topbar">
        <a class="brand" href="index.php">
            <img src="assets/img/studio-mark.svg" alt="StudioForge mark">
            <div>
                <strong><?= studio_e($data['brand']['name']) ?></strong>
                <span><?= studio_e($data['brand']['tagline']) ?></span>
            </div>
        </a>
        <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>
        <nav class="nav" data-menu>
            <?php foreach ($data['pages'] as $key => $page): ?>
                <a class="nav-link<?= $activePage === $key ? ' active' : '' ?>" href="<?= studio_e($page['file']) ?>"><?= studio_e($page['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </header>
<?php
}

function studio_render_footer(): void
{
    $data = studio_data();
    ?>
    <footer class="footer">
        <div>
            <p class="footer-kicker">Built by <?= studio_e($data['company']['name']) ?></p>
            <h2>Built for creative teams, editorial planning, and publishing operations.</h2>
        </div>
        <div class="footer-meta">
            <a href="mailto:<?= studio_e($data['company']['email']) ?>"><?= studio_e($data['company']['email']) ?></a>
            <span><?= studio_e($data['company']['phone']) ?></span>
            <span><?= studio_e($data['company']['license']) ?></span>
            <span>&copy; <?= date('Y') ?> <?= studio_e($data['company']['name']) ?></span>
        </div>
    </footer>
</div>
<script src="assets/js/app.js"></script>
</body>
</html>
<?php
}
