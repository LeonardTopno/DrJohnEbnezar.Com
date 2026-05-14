# Dr. John Ebnezar Website Redevelopment Plan

Prepared from a crawl of the live Wix site on 2026-04-24:
- https://www.drjohnebnezar.com/
- https://www.drjohnebnezar.com/drprofile
- https://www.drjohnebnezar.com/booking

## 1. Current Website Summary

The existing website presents Dr. John Ebnezar as:
- An orthopaedic surgeon and spine surgeon
- A Padma Shri awardee and Dr. B. C. Roy awardee
- A pioneer of "Wholistic Orthopedics"
- An author, speaker, researcher, educator, and organizer

The site currently contains a very large amount of information spread across many menu items:
- Home
- About
- Profile
- Padma Shri
- Versatility: Trauma Specialist, Academician, Spine Surgeon, Author, Entrepreneur
- Centers: Parimala Health Care Services, Dr. John's Orthopedic Center, Dr. John's Orthopedic Clinic, Ayush Ayurvedic Center, Bangalore Wholistic Orthopedic Center, Dr. Ebnezar's Medical Institute
- Activities: Academic, Cultural, Social
- Treatments: Challenging Cases, Wholistic Methods of Dr John Ebnezar
- Testimonials: VIP Clients, NRI Clients
- Events: Past Event, Upcoming Events
- Awards
- Gallery
- Books
- Services
- Booking / appointment information

## 2. Information Gathered From The Live Site

### Doctor profile and positioning
- Name shown: Dr. John Ebnezar
- Qualification line shown on profile page: Ph.D, MBBS, D'Ortho, DNB (Ortho), MNAMS (Ortho), DAC, DMT, Diploma in Sports Medicine (Australia), INOR Fellow (UK)
- Positioning used repeatedly:
  - Orthopaedic surgeon
  - Spine surgeon
  - Geriatric orthopaedic surgeon
  - Wholistic orthopaedics specialist
  - Author and educator

### Key achievements highlighted
- Padma Shri award
- Dr. B. C. Roy National Award
- TEDx speaker
- Multiple world records / Guinness-related claims
- 200+ medical books claimed
- Research recognition including OA knee guidance mention

### Appointment and contact details currently visible
- Mobile: +91-9986015128
- Main appointment email: hospitalparimala@gmail.com
- Location 1: Parimala Hospital, Bilekahalli / Bannerghatta Main Road, Bengaluru
- Location 2: Dr. John's Orthopedic Clinic, Arakere
- Practo booking link is present

### Major content buckets currently published
- Awards and recognitions
- Research and scientific publications
- Books
- Talks / lecture series / teaching
- International and national events
- Medical tourism / NRI clients
- Social trust / foundation activities
- Press coverage
- Gallery items and event photographs

## 3. Problems With The Current Website

### Structural problems
- Too many top-level and nested menu items
- Information architecture is confusing for patients
- Important patient actions are buried under biography-heavy content
- Similar information appears in multiple places
- Old event content dominates the homepage instead of current clinical value

### Design and UX problems
- The site looks dated and overcrowded
- Weak visual hierarchy
- Inconsistent spacing, typography, and image treatment
- The homepage tries to show everything at once
- Professional trust elements are not organized cleanly
- Appointment CTA is not prominent enough

### Content problems
- Clinical services, patient journey, and treatment approach are not explained simply
- Many pages are event-archive style pages rather than useful patient pages
- Some content appears outdated or time-bound
- Claims are extensive and should be carefully reviewed for medical/legal compliance before reuse
- There is no clear distinction between evergreen content and archive content

### Technical/marketing problems
- Wix structure makes the site harder to scale cleanly
- SEO is likely diluted because of scattered content and weak page focus
- Performance and maintainability can be improved with a lean PHP stack
- No clear content model for awards, books, events, testimonials, gallery, and media

## 4. Recommended Goal For The Rebuild

The rebuilt website should do four things very well:
- Establish trust immediately
- Make it easy to book an appointment
- Explain treatments and specialties clearly
- Preserve Dr. John's legacy content in a structured archive without overwhelming patients

## 5. Recommended New Sitemap

Keep the public navigation small and professional.

### Primary navigation
- Home
- About Dr. John
- Specialties
- Treatments
- Awards & Recognition
- Books & Research
- Media & Events
- Testimonials
- Contact / Book Appointment

### Secondary or footer navigation
- Clinics / Locations
- Gallery
- Foundation / Social Work
- Privacy Policy
- Terms / Disclaimer
- Sitemap

### Suggested content grouping

#### Home
- Hero section with clear positioning:
  - Padma Shri awardee orthopaedic and spine surgeon
  - Bengaluru practice locations
  - Primary CTA: Book Appointment
  - Secondary CTA: View Specialties
- Trust strip:
  - Padma Shri
  - B. C. Roy Award
  - 200+ books
  - research / teaching / experience highlights
- Short clinical focus areas
- Why choose Dr. John
- Featured awards / recognitions
- Patient testimonials
- Clinic locations summary
- Final CTA section

#### About Dr. John
- Biography
- Qualifications
- Career timeline
- Philosophy of care
- Leadership roles

#### Specialties
- Trauma care
- Spine care
- Geriatric orthopaedics
- Sports medicine
- Holistic / wholistic orthopaedics

#### Treatments
- OA knee management
- Back pain
- neck pain
- fractures / trauma
- rehabilitation support
- difficult / challenging cases

#### Awards & Recognition
- National awards
- state awards
- world records
- institutional honors

#### Books & Research
- Books listing with filters
- Key publications
- Lecture / teaching resources
- Research highlights

#### Media & Events
- Press mentions
- TV / radio appearances
- Speaking engagements
- International and national event archive

#### Testimonials
- Patient testimonials
- VIP / NRI stories only if permission exists
- Video testimonials if available

#### Contact / Book Appointment
- Phone numbers
- WhatsApp CTA
- email
- clinic addresses with Google Maps embeds
- consultation timings
- Practo link
- appointment request form

## 6. Content Strategy For A Better Medical Website

Split content into three levels:

### Level 1: Patient-first pages
These are the pages most visitors need:
- Home
- Specialties
- Treatments
- Contact / booking
- About doctor

### Level 2: Trust-building pages
- Awards
- Testimonials
- Books
- Research
- Media coverage

### Level 3: Archive pages
- Old events
- lecture lists
- annual activities
- old press releases
- older galleries

This keeps the site clean while preserving important historical material.

## 7. Recommended Technology Stack

As of 2026-04-24, PHP 8.5 is the latest current PHP branch shown on php.net releases, while PHP 8.4 is also actively supported. For a modern rebuild:

- PHP 8.5 if your server/hosting supports it
- Fallback: PHP 8.4 for broader hosting compatibility
- Bootstrap 5.3.8
- Vanilla JavaScript for interaction
- MySQL or MariaDB only if dynamic content/admin is needed
- Otherwise start with a fast file-based CMS-style structure in PHP

Recommended setup:
- PHP 8.4 or 8.5
- Bootstrap 5.3.8
- SCSS customization for branding
- Modular PHP includes:
  - `includes/header.php`
  - `includes/footer.php`
  - `includes/nav.php`
  - reusable section partials
- Content managed from:
  - PHP arrays / JSON files for smaller site
  - database tables only where truly useful

## 8. Recommended Design Direction

The new site should feel:
- premium
- trustworthy
- calm
- medical but not cold
- modern without looking flashy

### Visual direction
- Clean white / warm neutral background
- Deep blue or teal medical accent color
- Strong serif or elegant heading font paired with a clean sans-serif body font
- Professional portrait photography
- Award and trust badges used carefully, not excessively
- Large clear CTA buttons
- Spacious layout with readable content blocks

### Home page design priorities
- Strong hero with doctor portrait and appointment CTA
- Immediate trust markers
- Easy scan of clinical specialties
- Fewer words, better hierarchy
- Mobile-first booking flow

## 9. SEO and Conversion Recommendations

### SEO
- One clear keyword target per page
- Unique title and meta description for every page
- Proper heading hierarchy
- schema markup for:
  - Physician
  - MedicalClinic
  - FAQPage where useful
- Proper image alt text
- XML sitemap
- clean slugs

### Conversion
- Sticky mobile call / WhatsApp button
- Appointment CTA above the fold
- Contact section on every major page footer
- Short lead form
- Practo link retained
- Google Maps and clinic info visible without hunting

## 10. Medical, Legal, and Trust Review Before Reuse

Before migration, every current claim should be verified with the doctor/team:
- awards and award years
- total number of books
- world record claims
- leadership/designation titles
- visiting consultant affiliations
- research claims
- testimonials and VIP/NRI names

Also add:
- disclaimer that website information is educational and not a substitute for medical consultation
- privacy policy for contact forms
- cookie notice only if tracking tools are used

## 11. Practical Redevelopment Phases

### Phase 1: Discovery and content audit
- Crawl and list all current pages
- identify content to keep / merge / archive / delete
- verify all facts and appointment details
- collect logos, portraits, certificates, and clinic photos

### Phase 2: Information architecture and wireframes
- finalize sitemap
- define page templates
- sketch homepage, about, specialty, treatment, awards, contact, archive pages

### Phase 3: UI design
- define brand colors, typography, buttons, cards, forms
- create desktop and mobile design mockups
- confirm visual direction with doctor/team

### Phase 4: Frontend build
- build responsive Bootstrap layout
- create reusable PHP partials
- optimize images
- implement forms, maps, CTA buttons, sliders only where needed

### Phase 5: Content migration
- rewrite patient-facing copy
- clean and standardize biography content
- move event-heavy material to archive pages
- upload selected images and documents

### Phase 6: SEO, analytics, and QA
- metadata
- schema
- sitemap
- performance optimization
- mobile QA
- browser testing
- contact form testing

### Phase 7: Launch
- deploy on staging
- final review
- go live
- monitor leads, speed, and indexing

## 12. Suggested Build Approach For This Project

For this website, the best balance of professionalism, speed, and maintainability is:

### Option A: Custom PHP brochure site
Best if:
- site is mostly informational
- content updates are infrequent
- you want speed and lower complexity

Structure:
- Home
- Static/dynamic PHP pages
- reusable components
- JSON or PHP config files for awards/books/events/testimonials

### Option B: PHP site with admin panel
Best if:
- staff need to regularly add events, books, testimonials, gallery images, or media items

Structure:
- custom PHP frontend
- simple admin backend for managing content
- database-driven content

For the current use case, Option A is likely the best starting point, with the code organized so Option B can be added later.

## 13. Recommended First Deliverables

The first redevelopment deliverables should be:
- content inventory spreadsheet
- approved sitemap
- homepage wireframe
- design system
- PHP project skeleton
- first 5 pages:
  - Home
  - About
  - Specialties
  - Awards & Recognition
  - Contact / Book Appointment

## 14. Immediate Next Steps

1. Finalize what content should stay on the new site versus move to archive.
2. Confirm current clinic addresses, phone numbers, email, and booking workflow.
3. Verify all awards, titles, and counts before publishing.
4. Approve a new sitemap and visual direction.
5. Start building the new PHP + Bootstrap project structure.

## 15. Useful References

- Live homepage: https://www.drjohnebnezar.com/
- Profile page: https://www.drjohnebnezar.com/drprofile
- Booking page: https://www.drjohnebnezar.com/booking
- PHP supported versions: https://www.php.net/supported-versions.php
- PHP releases: https://www.php.net/releases/
- Bootstrap docs: https://getbootstrap.com/docs/5.3/getting-started/introduction/
- Bootstrap downloads: https://getbootstrap.com/docs/5.3/getting-started/download/
