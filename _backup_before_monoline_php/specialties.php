<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

renderHeader(
    'Specialties',
    'specialties.php',
    'Overview of Dr. John Ebnezar’s specialty areas in a cleaner, more patient-friendly format for the rebuilt medical website.'
);
global $site;

renderPageHero(
    'Specialties',
    'The new structure makes the clinical offer much easier to understand.',
    'Instead of burying treatment areas under many navigation layers, the rebuilt site gives each clinical focus area a direct and readable entry point.'
);
?>
<section class="section-block pt-0">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($site['specialties'] as $specialty): ?>
                <div class="col-md-6" data-reveal>
                    <article class="feature-card">
                        <p class="card-eyebrow">Core Specialty</p>
                        <h2 class="feature-title"><?= htmlspecialchars($specialty['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p class="card-copy"><?= htmlspecialchars($specialty['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="card-copy mb-0">Each specialty can later expand into its own landing page with symptoms, who should consult, treatment philosophy, FAQs, and a clear appointment CTA.</p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-block">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7" data-reveal>
                <article class="content-card">
                    <p class="section-eyebrow">Recommended Expansion</p>
                    <h2 class="section-title">Treatment pages should be separate from specialty pages.</h2>
                    <p class="section-lead">This distinction helps SEO and patient understanding. A specialty page explains the broad area of care; a treatment page answers the visitor’s immediate problem.</p>
                </article>
            </div>
            <div class="col-lg-5" data-reveal>
                <article class="content-card">
                    <p class="section-eyebrow">Future Pages</p>
                    <ul class="list-clean list-copy mb-0">
                        <li>Back pain and neck pain</li>
                        <li>OA knee guidance</li>
                        <li>Sports injury and rehabilitation</li>
                        <li>Fracture and trauma recovery</li>
                        <li>Geriatric mobility care</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>
<?php renderFooter(); ?>
