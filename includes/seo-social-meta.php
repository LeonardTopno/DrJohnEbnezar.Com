<?php
$siteUrl = 'https://www.drjohnebnezar.com';
$siteName = 'Padma Shri Rtn. Dr. John Ebnezar';
$defaultImage = $siteUrl . '/assets/img/hero/1.jpg';
$currentFile = basename(parse_url($_SERVER['REQUEST_URI'] ?? 'index.php', PHP_URL_PATH) ?: 'index.php');
if ($currentFile === '' || $currentFile === 'drjohnebnezar.com') {
	$currentFile = 'index.php';
}

$seoPages = [
	'index.php' => [
		'title' => 'Padma Shri Rtn. Dr. John Ebnezar | Orthopaedic & Spine Surgeon',
		'description' => 'Official website of Padma Shri Rtn. Dr. John Ebnezar, orthopaedic and spine surgeon, author, researcher, educator, and pioneer of wholistic orthopaedics.',
		'keywords' => 'Dr John Ebnezar, orthopaedic surgeon Bangalore, spine surgeon Bangalore, Padma Shri doctor, wholistic orthopaedics',
	],
	'about-dr-john-ebnezar.php' => [
		'title' => 'About Dr. John Ebnezar | Orthopaedic & Spine Surgeon',
		'description' => 'Profile of Dr. John Ebnezar, covering orthopaedic practice, spine care, qualifications, academic roles, fellowships, publications, and wholistic orthopaedics.',
		'keywords' => 'about Dr John Ebnezar, orthopaedic surgeon, spine surgeon, wholistic orthopaedics, Bangalore',
	],
	'books-written-by-dr-john-ebnezar.php' => [
		'title' => 'Books Written By Dr. John Ebnezar | Orthopaedic Author',
		'description' => 'Books authored by Dr. John Ebnezar across orthopaedics, spine care, trauma, rehabilitation, yoga therapy, and public education.',
		'keywords' => 'Dr John Ebnezar books, orthopaedic books, spine books, medical author, yoga therapy books',
	],
	'scientific-publications-of-dr-john-ebnezar.php' => [
		'title' => 'Scientific Publications of Dr. John Ebnezar',
		'description' => 'Scientific publications, abstracts, articles, and newspaper features by Dr. John Ebnezar in orthopaedics, yoga therapy, spine care, and rehabilitation.',
		'keywords' => 'Dr John Ebnezar scientific publications, orthopaedic research, yoga therapy research, osteoarthritis research',
	],
	'awards-won-by-dr-john-ebnezar.php' => [
		'title' => 'Awards Won By Dr. John Ebnezar | Padma Shri & Honours',
		'description' => 'Awards, recognitions, felicitations, and honours received by Dr. John Ebnezar, including Padma Shri, Dr. B. C. Roy National Award, and Guinness World Records.',
		'keywords' => 'Dr John Ebnezar awards, Padma Shri, Dr B C Roy Award, Guinness World Record, orthopaedic awards',
	],
	'service.php' => [
		'title' => 'Services | Dr. John Ebnezar',
		'description' => 'Explore services from Dr. John Ebnezar, including spine surgery, orthopaedic care, author work, patient education, and wholistic orthopaedics.',
		'keywords' => 'Dr John Ebnezar services, spine surgeon, orthopaedic care, author, wholistic orthopaedics',
	],
	'spine-surgeon.php' => [
		'title' => 'Spine Surgeon in Bangalore | Dr. John Ebnezar',
		'description' => 'Spine surgeon profile of Dr. John Ebnezar, including fellowship training under Dr. P. S. Ramani, NSSA leadership, back care, neck pain, and spine education.',
		'keywords' => 'spine surgeon Bangalore, Dr John Ebnezar spine surgeon, low back pain, cervical spondylosis, NSSA Karnataka',
	],
	'author.php' => [
		'title' => 'Author | Dr. John Ebnezar',
		'description' => 'Author profile of Dr. John Ebnezar, covering orthopaedic textbooks, spine care books, patient education, yoga therapy, and medical publications.',
		'keywords' => 'Dr John Ebnezar author, orthopaedic author, medical books, spine books, patient education',
	],
	'contact.php' => [
		'title' => 'Contact Dr. John Ebnezar | Appointment & Enquiry',
		'description' => 'Contact Dr. John Ebnezar for appointments, professional communication, orthopaedic care, spine care, and enquiries.',
		'keywords' => 'contact Dr John Ebnezar, appointment, orthopaedic surgeon Bangalore, spine surgeon Bangalore',
	],
	'faq.php' => [
		'title' => 'FAQ | Dr. John Ebnezar',
		'description' => 'Frequently asked questions related to Dr. John Ebnezar, orthopaedic care, spine care, wholistic orthopaedics, and appointments.',
		'keywords' => 'Dr John Ebnezar FAQ, orthopaedic FAQ, spine care questions, appointment questions',
	],
	'casestudy.php' => [
		'title' => 'Case Study | Dr. John Ebnezar',
		'description' => 'Case study page for Dr. John Ebnezar, highlighting orthopaedic work, public education, wholistic care, and patient-centred practice.',
		'keywords' => 'Dr John Ebnezar case study, orthopaedic case study, wholistic orthopaedics',
	],
	'blog.php' => [
		'title' => 'Blog | Dr. John Ebnezar',
		'description' => 'Articles, updates, and insights from Dr. John Ebnezar on orthopaedics, spine care, public health, and wholistic practice.',
		'keywords' => 'Dr John Ebnezar blog, orthopaedic blog, spine care articles, health education',
	],
	'blog_sidebar.php' => [
		'title' => 'Blog With Sidebar | Dr. John Ebnezar',
		'description' => 'Blog articles and updates from Dr. John Ebnezar with additional navigation and reading links.',
		'keywords' => 'Dr John Ebnezar articles, orthopaedic articles, spine care blog',
	],
	'blog_single.php' => [
		'title' => 'Article | Dr. John Ebnezar',
		'description' => 'Single article page from Dr. John Ebnezar covering orthopaedics, spine care, public education, or wholistic health.',
		'keywords' => 'Dr John Ebnezar article, orthopaedic article, health article',
		'robots' => 'noindex, follow',
	],
	'portfolio.php' => [
		'title' => 'Portfolio | Dr. John Ebnezar',
		'description' => 'Portfolio and professional highlights from Dr. John Ebnezar.',
		'keywords' => 'Dr John Ebnezar portfolio, orthopaedic surgeon portfolio, professional highlights',
		'robots' => 'noindex, follow',
	],
	'portfolio_gallery.php' => [
		'title' => 'Portfolio Gallery | Dr. John Ebnezar',
		'description' => 'Photo gallery and professional moments from Dr. John Ebnezar.',
		'keywords' => 'Dr John Ebnezar gallery, orthopaedic surgeon photos, professional gallery',
		'robots' => 'noindex, follow',
	],
	'about.php' => [
		'title' => 'About | Dr. John Ebnezar',
		'description' => 'General about page for Dr. John Ebnezar.',
		'keywords' => 'Dr John Ebnezar about',
		'robots' => 'noindex, follow',
	],
	'index_two.php' => [
		'title' => 'Home Two | Dr. John Ebnezar',
		'description' => 'Alternate home page layout for Dr. John Ebnezar.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'index_three.php' => [
		'title' => 'Home Three | Dr. John Ebnezar',
		'description' => 'Alternate home page layout for Dr. John Ebnezar.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'pricing.php' => [
		'title' => 'Pricing | Dr. John Ebnezar',
		'description' => 'Template pricing page.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'team.php' => [
		'title' => 'Team | Dr. John Ebnezar',
		'description' => 'Template team page.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'single_project.php' => [
		'title' => 'Single Project | Dr. John Ebnezar',
		'description' => 'Template project detail page.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'single_service.php' => [
		'title' => 'Single Service | Dr. John Ebnezar',
		'description' => 'Template service detail page.',
		'keywords' => 'Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'thank-you.php' => [
		'title' => 'Thank You | Dr. John Ebnezar',
		'description' => 'Thank you for contacting Dr. John Ebnezar.',
		'keywords' => 'thank you Dr John Ebnezar',
		'robots' => 'noindex, follow',
	],
	'404.php' => [
		'title' => 'Page Not Found | Dr. John Ebnezar',
		'description' => 'The requested page could not be found on Dr. John Ebnezar\'s website.',
		'keywords' => 'page not found',
		'robots' => 'noindex, follow',
	],
];

$defaultSeo = [
	'title' => 'Padma Shri Rtn. Dr. John Ebnezar',
	'description' => 'Official website of Dr. John Ebnezar, orthopaedic and spine surgeon, author, researcher, educator, and pioneer of wholistic orthopaedics.',
	'keywords' => 'Dr John Ebnezar, orthopaedic surgeon, spine surgeon, author, wholistic orthopaedics',
	'robots' => 'index, follow',
];

$seo = array_merge($defaultSeo, $seoPages[$currentFile] ?? []);
$canonicalPath = ($currentFile === 'index.php') ? '/' : '/' . $currentFile;
$canonicalUrl = $siteUrl . $canonicalPath;
$robots = $seo['robots'] ?? 'index, follow';

$personSchema = [
	'@context' => 'https://schema.org',
	'@type' => 'Physician',
	'name' => 'Padma Shri Rtn. Dr. John Ebnezar',
	'url' => $siteUrl,
	'image' => $defaultImage,
	'description' => $seo['description'],
	'medicalSpecialty' => ['Orthopedic', 'Spine Surgery'],
	'jobTitle' => 'Orthopaedic and Spine Surgeon',
	'telephone' => '+91-9986015128',
	'email' => 'johnebnezar@gmail.com',
	'sameAs' => [
		'https://www.facebook.com/john.ebnezar',
		'https://x.com/johnebnezar',
		'https://www.youtube.com/@johnebnezar',
		'https://www.researchgate.net/profile/John-Ebnezar',
	],
];

$websiteSchema = [
	'@context' => 'https://schema.org',
	'@type' => 'WebSite',
	'name' => $siteName,
	'url' => $siteUrl,
];
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="robots" content="<?php echo htmlspecialchars($robots, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="author" content="Dr. John Ebnezar">
<meta property="og:locale" content="en_IN">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($defaultImage, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:alt" content="Padma Shri Rtn. Dr. John Ebnezar">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($defaultImage, ENT_QUOTES, 'UTF-8'); ?>">
<script type="application/ld+json"><?php echo json_encode($personSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo json_encode($websiteSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
