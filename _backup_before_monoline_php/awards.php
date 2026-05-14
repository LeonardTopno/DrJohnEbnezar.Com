<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

renderHeader(
    'Awards',
    'awards.php',
    'Awards and recognitions presented in a cleaner trust-building format for the rebuilt Dr. John Ebnezar website.'
);
global $site;

renderPageHero(
    'Awards & Recognition',
    'Recognitions should reinforce trust, not overwhelm the user journey.',
    'This page shows how awards can be presented with dignity and hierarchy while leaving room for verification, source details, and supporting media.'
);
?>
<section class="section-block pt-0">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($site['awards'] as $award): ?>
                <div class="col-md-6" data-reveal>
                    <article class="feature-card">
                        <p class="card-eyebrow">Recognition</p>
                        <h2 class="feature-title"><?= htmlspecialchars($award['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p class="card-copy mb-0"><?= htmlspecialchars($award['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-block">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-reveal>
                <article class="quote-card">
                    <p class="section-eyebrow">Migration Rule</p>
                    <h2 class="section-title">Every claim should be source-checked before launch.</h2>
                    <p class="section-lead">The current site includes many high-value recognitions, counts, titles, and historical achievements. During redevelopment, each one should be tied to an official certificate, year, or publication note before it is republished.</p>
                </article>
            </div>
            <div class="col-lg-6" data-reveal>
                <article class="content-card">
                    <p class="section-eyebrow">Best Practice</p>
                    <ul class="list-clean list-copy mb-0">
                        <li>Show selected flagship awards on the homepage.</li>
                        <li>Keep the full awards archive on a dedicated page.</li>
                        <li>Use dates, issuing bodies, and short descriptions.</li>
                        <li>Avoid repeating the same recognition across too many sections.</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>
<?php renderFooter(); ?>
