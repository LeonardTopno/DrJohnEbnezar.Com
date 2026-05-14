<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

renderHeader(
    'Home',
    'index.php',
    'Modern homepage for Dr. John Ebnezar inspired by the Monoline theme, rebuilt in PHP with Bootstrap 5 and a clearer medical positioning.'
);

global $site;
?>
<section class="home-hero" style="background-image: url('<?= htmlspecialchars($site['hero_background'], ENT_QUOTES, 'UTF-8') ?>');">
    <div class="container">
        <div class="row hero-grid g-5">
            <div class="col-lg-7">
                <div class="hero-copy" data-reveal>
                    <p class="hero-kicker"><?= htmlspecialchars($site['kicker'], ENT_QUOTES, 'UTF-8') ?></p>
                    <h1 class="display-title">Modern orthopaedic care with a stronger, more professional online presence.</h1>
                    <p class="hero-lead">We are reshaping the website around what patients need first: who Dr. John is, what he specializes in, why he is trusted, and how to book an appointment quickly.</p>
                    <div class="hero-actions">
                        <a class="btn btn-brand" href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>">Book Appointment</a>
                        <a class="btn btn-outline-brand" href="#profile">Learn More</a>
                    </div>
                    <div class="hero-meta">
                        <?php foreach ($site['hero_stats'] as $stat): ?>
                            <div class="hero-meta-item">
                                <div class="hero-meta-value"><?= htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8') ?></div>
                                <div class="hero-meta-label"><?= htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8') ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-lg-end">
                <aside class="hero-panel" data-reveal>
                    <img src="<?= htmlspecialchars($site['hero_image'], ENT_QUOTES, 'UTF-8') ?>" alt="Portrait of Dr. John Ebnezar">
                    <p class="card-eyebrow">Consultation Snapshot</p>
                    <h3>Orthopaedic, spine and geriatric focus.</h3>
                    <p class="mb-4">A cleaner homepage now balances trust, clinical expertise, and a visible booking path instead of overwhelming visitors with too many disconnected sections.</p>
                    <a class="btn btn-brand w-100" href="#contact-cta">View Contact Options</a>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="feature-area">
    <div class="container">
        <div class="feature-shell">
            <div class="section-heading text-center" data-reveal>
                <p class="section-eyebrow">What This Homepage Does Better</p>
                <h2 class="section-title">A Monoline-inspired layout adapted for a doctor website</h2>
                <p class="section-subtitle" style="color: #747474;">The original theme gives us a strong visual rhythm. We are using that rhythm for a medical brand: big opening statement, overlapping feature block, cleaner trust sections, and a more credible navigation flow.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($site['homepage_sections'] as $index => $section): ?>
                    <div class="col-lg-4 col-md-6" data-reveal>
                        <article class="feature-card">
                            <div class="feature-icon"><?= htmlspecialchars((string) ($index + 1), ENT_QUOTES, 'UTF-8') ?></div>
                            <h3 class="feature-title"><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="card-copy" style="color: #747474;"><?= htmlspecialchars($section['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section-block" id="profile">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-reveal>
                <article class="content-card">
                    <p class="section-eyebrow">Profile</p>
                    <h2 class="section-title">Dr. John Ebnezar should read as both accomplished and approachable.</h2>
                    <p class="card-copy" style="color: #747474;">The live site contains a rich body of credentials, recognitions, publications, and leadership roles. This rebuild starts by organizing that material into a cleaner profile narrative that patients can understand without losing the prestige behind it.</p>
                    <ul class="profile-list">
                        <li>Orthopaedic surgeon and spine surgeon positioning is brought forward clearly.</li>
                        <li>Padma Shri and Dr. B. C. Roy recognition become visible trust anchors instead of buried references.</li>
                        <li>Academic, research, speaking, and writing achievements can move into dedicated sections later.</li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-6" data-reveal>
                <img src="<?= htmlspecialchars($site['hero_image'], ENT_QUOTES, 'UTF-8') ?>" alt="Dr. John Ebnezar" class="w-100 rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<section class="section-block section-block-dark" id="specialties">
    <div class="container">
        <div class="section-heading text-center" data-reveal>
            <p class="section-eyebrow">Specialties</p>
            <h2 class="section-title">Core areas of orthopaedic and spine-focused care</h2>
            <p class="section-subtitle">These sections replace vague or overloaded navigation with patient-readable clinical entry points.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($site['specialties'] as $index => $specialty): ?>
                <div class="col-lg-3 col-md-6" data-reveal>
                    <article class="recognition-card">
                        <p class="card-eyebrow"><?= htmlspecialchars(sprintf('%02d', $index + 1), ENT_QUOTES, 'UTF-8') ?></p>
                        <h3 class="card-title"><?= htmlspecialchars($specialty['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="card-copy mb-0"><?= htmlspecialchars($specialty['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-block" id="recognition">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($site['awards'] as $award): ?>
                <div class="col-lg-6" data-reveal>
                    <article class="recognition-card">
                        <p class="section-eyebrow">Recognition</p>
                        <h2 class="card-title"><?= htmlspecialchars($award['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p class="card-copy" style="color: #747474;"><?= htmlspecialchars($award['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-block" id="contact-cta">
    <div class="container">
        <div class="contact-band" data-reveal>
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <p class="section-eyebrow">Contact</p>
                    <h2 class="section-title text-white">Keep the booking path visible and friction-free.</h2>
                    <p class="contact-copy mb-0">This first PHP homepage keeps the main actions close at hand so patients can call, email, or move to the clinic booking route without digging through the site.</p>
                </div>
                <div class="col-lg-4">
                    <a class="contact-line" href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['phone_display'], ENT_QUOTES, 'UTF-8') ?></a>
                    <a class="contact-line" href="<?= htmlspecialchars($site['email_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?></a>
                    <a class="btn btn-brand mt-3" href="<?= htmlspecialchars($site['practo_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Book via Practo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php renderFooter(); ?>
