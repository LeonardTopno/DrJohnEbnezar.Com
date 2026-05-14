<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

renderHeader(
    'About',
    'about.php',
    'About Dr. John Ebnezar, including profile positioning, qualifications, and the proposed structure for a more professional biography page.'
);
global $site;

renderPageHero(
    'About Dr. John',
    'A distinguished profile deserves a page with clarity, hierarchy, and restraint.',
    'The current site contains a large amount of biography and achievement material. This rebuild organizes it into a cleaner profile page that patients can actually read and trust.'
);
?>
<section class="section-block pt-0">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5" data-reveal>
                <article class="content-card h-100">
                    <img class="hero-portrait mx-auto" src="<?= htmlspecialchars($site['hero_image'], ENT_QUOTES, 'UTF-8') ?>" alt="Dr. John Ebnezar portrait">
                </article>
            </div>
            <div class="col-lg-7" data-reveal>
                <article class="content-card h-100">
                    <p class="section-eyebrow">Professional Positioning</p>
                    <h2 class="section-title">Orthopaedic surgeon, spine surgeon, educator, and author.</h2>
                    <p class="section-lead">The live website repeatedly positions Dr. John as a senior orthopaedic expert with contributions across clinical care, spine work, teaching, research, publishing, and public speaking. This page gives those elements breathing room instead of competing for attention.</p>
                    <ul class="list-clean list-copy mt-4">
                        <li>Padma Shri and Dr. B. C. Roy recognitions should be presented early as trust anchors.</li>
                        <li>Qualifications should appear in a clean, verified line with full consistency across pages.</li>
                        <li>Leadership roles, books, talks, and media work belong in structured sections instead of long unbroken blocks.</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section-block">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-reveal>
                <article class="feature-card">
                    <p class="card-eyebrow">Recommended Layout</p>
                    <h3 class="feature-title">Biography section</h3>
                    <p class="card-copy">A concise narrative introduction should explain Dr. John’s mission, philosophy of care, and why patients might choose him, rather than listing every achievement upfront.</p>
                </article>
            </div>
            <div class="col-lg-6" data-reveal>
                <article class="feature-card">
                    <p class="card-eyebrow">Recommended Layout</p>
                    <h3 class="feature-title">Credentials section</h3>
                    <p class="card-copy">Professional qualifications, fellowships, certifications, and major recognitions should be separated from general biography so visitors can scan them quickly.</p>
                </article>
            </div>
            <div class="col-lg-6" data-reveal>
                <article class="feature-card">
                    <p class="card-eyebrow">Recommended Layout</p>
                    <h3 class="feature-title">Teaching and research</h3>
                    <p class="card-copy">Books, publications, lectures, and conference work should be presented as a dedicated scholarly profile, not mixed into patient care copy.</p>
                </article>
            </div>
            <div class="col-lg-6" data-reveal>
                <article class="feature-card">
                    <p class="card-eyebrow">Recommended Layout</p>
                    <h3 class="feature-title">Human trust signals</h3>
                    <p class="card-copy">Portraits, selected quotes, a short statement of philosophy, and a transparent booking path make the profile more personal and more credible.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<?php renderFooter(); ?>
