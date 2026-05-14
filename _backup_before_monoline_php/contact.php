<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

renderHeader(
    'Contact',
    'contact.php',
    'Book an appointment with Dr. John Ebnezar using the current phone, email, clinic references, and external booking link.'
);
global $site;

renderPageHero(
    'Contact & Appointment',
    'The booking path should be simple, visible, and reassuring.',
    'The rebuilt contact page keeps the essentials together: phone, email, locations, and the external appointment route currently linked from the live website.'
);
?>
<section class="section-block pt-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5" data-reveal>
                <article class="contact-card h-100">
                    <p class="section-eyebrow">Book Consultation</p>
                    <h2 class="section-title">Reach the clinic directly.</h2>
                    <ul class="contact-list">
                        <li><strong>Phone:</strong> <a href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['phone_display'], ENT_QUOTES, 'UTF-8') ?></a></li>
                        <li><strong>Email:</strong> <a href="<?= htmlspecialchars($site['email_href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8') ?></a></li>
                        <li><strong>Booking partner:</strong> <a href="<?= htmlspecialchars($site['practo_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Practo appointment listing</a></li>
                    </ul>
                    <div class="hero-actions mt-4">
                        <a class="btn btn-brand" href="<?= htmlspecialchars($site['phone_href'], ENT_QUOTES, 'UTF-8') ?>">Call Now</a>
                        <a class="btn btn-outline-brand" href="<?= htmlspecialchars($site['email_href'], ENT_QUOTES, 'UTF-8') ?>">Email Clinic</a>
                    </div>
                </article>
            </div>
            <div class="col-lg-7" data-reveal>
                <article class="contact-card h-100">
                    <p class="section-eyebrow">Locations</p>
                    <h2 class="section-title">Current touchpoints referenced on the live site.</h2>
                    <div class="row g-3 mt-1">
                        <?php foreach ($site['locations'] as $location): ?>
                            <div class="col-md-6">
                                <div class="spotlight-card">
                                    <h3 class="card-title"><?= htmlspecialchars($location['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                                    <p class="card-copy mb-2"><?= htmlspecialchars($location['address'], ENT_QUOTES, 'UTF-8') ?></p>
                                    <p class="metric-label mb-0"><?= htmlspecialchars($location['note'], ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section-block">
    <div class="container">
        <div class="content-card" data-reveal>
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <p class="section-eyebrow">Recommended Next Upgrade</p>
                    <h2 class="section-title">Replace a basic contact block with a complete conversion section.</h2>
                    <p class="section-lead mb-0">The next version of this page can add consultation timings, embedded Google Maps, WhatsApp CTA, appointment forms, and FAQs so patients have fewer reasons to abandon the journey.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-brand" href="<?= htmlspecialchars($site['practo_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">Book via Practo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php renderFooter(); ?>
