<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/site.php';

function renderHeader(string $pageTitle, string $activePage, string $pageDescription): void
{
    global $site;
    $fullTitle = $pageTitle . ' | ' . $site['name'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($fullTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/site.css?v=1">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Physician",
            "name": "<?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>",
            "medicalSpecialty": ["Orthopedic", "Spine Care"],
            "telephone": "<?= htmlspecialchars($site['phone_display'], ENT_QUOTES, 'UTF-8') ?>",
            "email": "<?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?>"
        }
    </script>
</head>
<body>
    <div class="site-shell">
        <header class="site-header" id="siteHeader">
            <nav class="navbar navbar-expand-xl">
                <div class="container py-3">
                    <a class="navbar-brand d-flex flex-column" href="/index.php">
                        <span class="brand-kicker"><?= htmlspecialchars($site['kicker'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="brand-title"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="brand-subtitle"><?= htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8') ?></span>
                    </a>
                    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="siteNav">
                        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                            <?php foreach ($site['nav'] as $navItem): ?>
                                <li class="nav-item">
                                    <?php
                                    $href = (string) $navItem['href'];
                                    $label = (string) $navItem['label'];
                                    $isActive = $href === '/index.php' && $activePage === 'index.php';
                                    ?>
                                    <a class="nav-link <?= $isActive ? 'active' : '' ?>" href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a>
                                </li>
                            <?php endforeach; ?>
                            <li class="nav-item ms-lg-2">
                                <a class="btn btn-brand" href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>">Book Appointment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
<?php
}

function renderFooter(): void
{
    global $site;
    $currentYear = date('Y');
    ?>
        </main>
        <footer class="site-footer">
            <div class="container py-5">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-5">
                        <p class="footer-eyebrow">Professional orthopaedic website foundation</p>
                        <h2 class="footer-title"><?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p class="footer-copy">This rebuilt foundation is designed to replace the crowded Wix layout with a cleaner patient journey, stronger trust cues, and a modern PHP codebase that is easier to extend.</p>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h3 class="footer-heading">Quick Links</h3>
                        <ul class="footer-list">
                            <?php foreach ($site['nav'] as $navItem): ?>
                                <li><a href="<?= htmlspecialchars((string) $navItem['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $navItem['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <h3 class="footer-heading">Appointments</h3>
                        <ul class="footer-list">
                            <li><a href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['phone_display'], ENT_QUOTES, 'UTF-8') ?></a></li>
                            <li><a href="<?= htmlspecialchars($site['email_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?></a></li>
                            <li><a href="<?= htmlspecialchars($site['practo_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Book via Practo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p class="mb-0">&copy; <?= htmlspecialchars((string) $currentYear, ENT_QUOTES, 'UTF-8') ?> <?= htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8') ?>. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/assets/js/site.js?v=1"></script>
</body>
</html>
<?php
}

function renderPageHero(string $eyebrow, string $title, string $lead): void
{
    ?>
    <section class="page-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <p class="section-eyebrow"><?= htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                    <h1 class="section-title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
                    <p class="section-lead mx-auto"><?= htmlspecialchars($lead, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
}
