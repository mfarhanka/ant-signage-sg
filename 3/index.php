<?php
$logoPath = '../2/logo.png';

$showcaseItems = [
	[
		'eyebrow' => 'Signature Build',
		'title' => 'Prismatic Letter Signage',
		'text' => 'Custom acrylic and wood prismatic lettering for retail fronts, reception areas, and feature walls.',
	],
	[
		'eyebrow' => 'Installation',
		'title' => 'Indoor, Outdoor & At Height',
		'text' => 'Site-ready teams for facade signage, elevated installations, and after-hours deployment across Singapore.',
	],
	[
		'eyebrow' => 'Branding',
		'title' => 'Glass, Wall & Vehicle Decals',
		'text' => 'Large-format decals, glass stickers, wall graphics, and vehicle branding for campaign and permanent use.',
	],
	[
		'eyebrow' => 'Fabrication',
		'title' => 'CNC, Acrylic & Channel Letters',
		'text' => 'Precision-routed acrylic signage, CNC-engraved panels, plaques, nameplates, and illuminated channel letters.',
	],
];

$capabilities = [
	['title' => 'We Design', 'text' => 'Consultation, visual direction, and proposal-ready concepts for standard or bespoke signage builds.', 'icon' => 'bi-vector-pen'],
	['title' => 'We Fabricate', 'text' => 'Singapore-based production using CNC routing, laser cutting, acrylic forming, metalwork, and finishing.', 'icon' => 'bi-tools'],
	['title' => 'We Install', 'text' => 'Delivery and installation support, including high-access and after-hours scheduling where required.', 'icon' => 'bi-truck'],
];

$featuredSolutions = [
	['title' => 'Braille & Compliance Signs', 'text' => 'BCA-oriented accessible signage systems for buildings, facilities, and public-facing spaces.', 'tone' => 'dark'],
	['title' => 'Traffic & Directional Signs', 'text' => 'Wayfinding, statutory, warning, and directional sign production for site operations and navigation.', 'tone' => 'light'],
	['title' => 'Solar-Powered Signage', 'text' => 'Energy-conscious illuminated signs for outdoor zones where power routing is limited or costly.', 'tone' => 'accent'],
	['title' => 'LED Marquee & Feature Signs', 'text' => 'Statement signage for events, hospitality, retail launches, and theatrical brand moments.', 'tone' => 'light'],
];

$steps = [
	['number' => '01', 'title' => 'Send your brief', 'text' => 'Share artwork, site measurements, references, or simply describe the kind of sign you need.'],
	['number' => '02', 'title' => 'Approve the build plan', 'text' => 'Review material choices, fabrication details, and the production path before the job is released.'],
	['number' => '03', 'title' => 'Delivery or installation', 'text' => 'Receive the finished signage or book site installation based on your project scope and timeline.'],
];

$serviceLinks = [
	'Design proposal',
	'Custom signage',
	'Site survey',
	'Delivery & installation',
	'Gallery builds',
	'FAQ & support',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignageSG | Bespoke Signage & Fabrication</title>
	<meta name="description" content="SignageSG creates bespoke signage, decals, channel letters, plaques, compliance signs, and installation-ready branding systems in Singapore.">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<style>
		:root {
			--sg-red: #d3172a;
			--sg-red-deep: #a90f1f;
			--sg-black: #0f0f10;
			--sg-charcoal: #191a1d;
			--sg-white: #ffffff;
			--sg-cream: #f7f4ef;
			--sg-line: rgba(15, 15, 16, 0.12);
			--sg-muted: #64656c;
		}

		body {
			font-family: 'Inter', sans-serif;
			color: var(--sg-charcoal);
			background: linear-gradient(180deg, #fbfaf7 0%, #ffffff 32%, #f5f5f5 100%);
		}

		h1,
		h2,
		h3,
		h4,
		.brand-type {
			font-family: 'Barlow Condensed', sans-serif;
			text-transform: uppercase;
			letter-spacing: 0.03em;
		}

		a {
			text-decoration: none;
		}

		.navbar {
			background: rgba(255, 255, 255, 0.94);
			backdrop-filter: blur(12px);
			border-bottom: 1px solid var(--sg-line);
		}

		.navbar-brand {
			display: inline-flex;
			align-items: center;
			gap: 0.85rem;
		}

		.brand-logo {
			width: 66px;
			height: 66px;
			object-fit: contain;
			display: block;
			background: #fff;
			padding: 0.35rem;
			box-shadow: 0 12px 26px rgba(0, 0, 0, 0.1);
		}

		.brand-text strong {
			display: block;
			font-size: 1.6rem;
			line-height: 1;
			color: var(--sg-black);
		}

		.brand-text span {
			display: block;
			font-size: 0.72rem;
			font-weight: 800;
			letter-spacing: 0.16em;
			text-transform: uppercase;
			color: var(--sg-muted);
			margin-top: 0.3rem;
		}

		.brand-accent {
			color: var(--sg-red);
		}

		.nav-link {
			font-weight: 700;
			text-transform: uppercase;
			font-size: 0.87rem;
			letter-spacing: 0.08em;
			color: var(--sg-black);
		}

		.nav-link:hover,
		.nav-link:focus {
			color: var(--sg-red);
		}

		.btn-brand,
		.btn-outline-brand {
			border-radius: 999px;
			padding: 0.95rem 1.45rem;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: 0.08em;
			font-size: 0.82rem;
		}

		.btn-brand {
			background: var(--sg-red);
			border-color: var(--sg-red);
			color: #fff;
		}

		.btn-brand:hover,
		.btn-brand:focus {
			background: var(--sg-red-deep);
			border-color: var(--sg-red-deep);
			color: #fff;
		}

		.btn-outline-brand {
			border: 2px solid var(--sg-black);
			color: var(--sg-black);
			background: transparent;
		}

		.btn-outline-brand:hover,
		.btn-outline-brand:focus {
			background: var(--sg-black);
			border-color: var(--sg-black);
			color: #fff;
		}

		.hero {
			padding: 8.5rem 0 4.5rem;
			position: relative;
			overflow: hidden;
		}

		.hero::before {
			content: '';
			position: absolute;
			inset: 0;
			background:
				radial-gradient(circle at top left, rgba(211, 23, 42, 0.12), transparent 32%),
				linear-gradient(135deg, rgba(15, 15, 16, 0.03) 0%, rgba(15, 15, 16, 0) 45%);
			pointer-events: none;
		}

		.hero-copy {
			position: relative;
			z-index: 1;
		}

		.eyebrow {
			display: inline-flex;
			align-items: center;
			gap: 0.55rem;
			font-size: 0.82rem;
			font-weight: 800;
			letter-spacing: 0.18em;
			text-transform: uppercase;
			color: var(--sg-red);
		}

		.eyebrow::before {
			content: '';
			width: 44px;
			height: 2px;
			background: currentColor;
		}

		.hero h1 {
			font-size: clamp(3.4rem, 7vw, 6.4rem);
			line-height: 0.92;
			max-width: 9.4em;
			margin: 1rem 0 1.25rem;
		}

		.hero-lead {
			font-size: 1.06rem;
			line-height: 1.8;
			max-width: 42rem;
			color: var(--sg-muted);
		}

		.hero-panel {
			position: relative;
			z-index: 1;
			background: linear-gradient(180deg, var(--sg-black) 0%, #232428 100%);
			color: #fff;
			padding: 2rem;
			border-radius: 2rem;
			box-shadow: 0 28px 60px rgba(0, 0, 0, 0.18);
		}

		.hero-panel-grid {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 1rem;
		}

		.metric-card {
			padding: 1rem;
			border: 1px solid rgba(255, 255, 255, 0.12);
			border-radius: 1.2rem;
			background: rgba(255, 255, 255, 0.04);
		}

		.metric-card strong {
			display: block;
			font-family: 'Barlow Condensed', sans-serif;
			font-size: 2rem;
			line-height: 1;
		}

		.section-pad {
			padding: 5.5rem 0;
		}

		.section-title {
			font-size: clamp(2.3rem, 4vw, 4.2rem);
			line-height: 0.94;
			margin-bottom: 1rem;
		}

		.section-copy {
			color: var(--sg-muted);
			font-size: 1rem;
			line-height: 1.8;
		}

		.showcase-card {
			height: 100%;
			padding: 1.7rem;
			border-radius: 1.6rem;
			background: #fff;
			border: 1px solid var(--sg-line);
			box-shadow: 0 18px 44px rgba(0, 0, 0, 0.06);
			transition: transform 180ms ease, box-shadow 180ms ease;
		}

		.showcase-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 26px 52px rgba(0, 0, 0, 0.1);
		}

		.showcase-art {
			aspect-ratio: 4 / 3;
			border-radius: 1.2rem;
			margin-bottom: 1.2rem;
			background:
				linear-gradient(135deg, rgba(211, 23, 42, 0.95), rgba(90, 5, 18, 0.92)),
				linear-gradient(45deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0));
			position: relative;
			overflow: hidden;
		}

		.showcase-art::before,
		.showcase-art::after {
			content: '';
			position: absolute;
			border-radius: 999px;
			background: rgba(255, 255, 255, 0.12);
		}

		.showcase-art::before {
			width: 170px;
			height: 170px;
			top: -24px;
			right: -36px;
		}

		.showcase-art::after {
			width: 110px;
			height: 110px;
			left: 18px;
			bottom: -24px;
		}

		.showcase-card .small-label,
		.promo-label,
		.footer-label {
			font-size: 0.78rem;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: 0.16em;
			color: var(--sg-red);
		}

		.process-card {
			height: 100%;
			padding: 2rem;
			border-radius: 1.7rem;
			border: 1px solid var(--sg-line);
			background: linear-gradient(180deg, #ffffff 0%, #f8f8f8 100%);
		}

		.process-card i {
			font-size: 2rem;
			color: var(--sg-red);
		}

		.promo-card {
			height: 100%;
			padding: 2rem;
			border-radius: 1.8rem;
			position: relative;
			overflow: hidden;
		}

		.promo-card-dark {
			background: linear-gradient(160deg, #121316, #2a2d32);
			color: #fff;
		}

		.promo-card-light {
			background: linear-gradient(180deg, #ffffff, #f4f4f4);
			border: 1px solid var(--sg-line);
		}

		.promo-card-accent {
			background: linear-gradient(145deg, #d3172a, #7c0e1a);
			color: #fff;
		}

		.promo-card::after {
			content: '';
			position: absolute;
			width: 160px;
			height: 160px;
			border-radius: 50%;
			right: -50px;
			bottom: -50px;
			background: rgba(255, 255, 255, 0.1);
		}

		.step-card {
			height: 100%;
			padding: 2rem;
			background: #fff;
			border-radius: 1.6rem;
			border: 1px solid var(--sg-line);
			box-shadow: 0 20px 44px rgba(0, 0, 0, 0.05);
		}

		.step-number {
			display: inline-flex;
			width: 58px;
			height: 58px;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			background: var(--sg-red);
			color: #fff;
			font-family: 'Barlow Condensed', sans-serif;
			font-size: 1.8rem;
			line-height: 1;
			margin-bottom: 1rem;
		}

		.contact-shell {
			padding: 2.4rem;
			border-radius: 2rem;
			background: linear-gradient(145deg, #111316, #23262c);
			color: #fff;
			box-shadow: 0 24px 58px rgba(0, 0, 0, 0.16);
		}

		.contact-item {
			padding: 1rem 0;
			border-bottom: 1px solid rgba(255, 255, 255, 0.12);
		}

		.contact-item:last-child {
			border-bottom: 0;
		}

		.quick-links {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 0.9rem;
		}

		.quick-link {
			padding: 1rem 1.1rem;
			border-radius: 1rem;
			background: #fff;
			border: 1px solid var(--sg-line);
			font-weight: 700;
			color: var(--sg-black);
		}

		footer {
			padding: 2.5rem 0 3rem;
			border-top: 1px solid var(--sg-line);
		}

		.footer-logo {
			width: 72px;
			height: 72px;
			object-fit: contain;
			background: #fff;
			padding: 0.4rem;
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
		}

		@media (max-width: 991.98px) {
			.hero {
				padding-top: 7.6rem;
			}

			.hero-panel-grid,
			.quick-links {
				grid-template-columns: 1fr;
			}
		}

		@media (max-width: 575.98px) {
			.brand-logo {
				width: 54px;
				height: 54px;
			}

			.brand-text strong {
				font-size: 1.3rem;
			}

			.hero h1 {
				font-size: 3rem;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container py-2">
			<a class="navbar-brand" href="#top" aria-label="SignageSG home">
				<img class="brand-logo" src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="SignageSG logo">
				<span class="brand-text">
					<strong class="brand-type"><span class="brand-accent">Signage</span>SG</strong>
					<span>Bespoke Signage Singapore</span>
				</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
					<li class="nav-item"><a class="nav-link" href="#showcase">Showcase</a></li>
					<li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
					<li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					<li class="nav-item ms-lg-2"><a class="btn btn-brand" href="https://wa.me/6582861600" target="_blank" rel="noreferrer">WhatsApp Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="hero" id="top">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-lg-7 hero-copy">
					<div class="eyebrow">Inspired by premium signage studios</div>
					<h1>SignageSG makes bold, bespoke signs for brands that need presence.</h1>
					<p class="hero-lead">This page takes structural cues from maneki-signage.sg: a high-impact hero, category-led showcase, design-fabricate-install flow, and conversion-focused contact sections. The branding, styling, and copy here are rebuilt for SignageSG.</p>
					<div class="d-flex flex-wrap gap-3 mt-4">
						<a class="btn btn-brand" href="#contact">Start a Project</a>
						<a class="btn btn-outline-brand" href="#showcase">Explore Categories</a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="hero-panel">
						<p class="promo-label mb-3">What SignageSG Covers</p>
						<div class="hero-panel-grid mb-4">
							<div class="metric-card">
								<strong>3D</strong>
								<span>acrylic and metal lettering</span>
							</div>
							<div class="metric-card">
								<strong>CNC</strong>
								<span>routing, engraving, precision cutting</span>
							</div>
							<div class="metric-card">
								<strong>ADA</strong>
								<span>accessible and compliant sign systems</span>
							</div>
							<div class="metric-card">
								<strong>Site</strong>
								<span>survey, delivery, install, after-hours</span>
							</div>
						</div>
						<p class="mb-0 text-white-50">From feature signage and plaques to decals, pylon signs, wayfinding systems, and illuminated builds, the service spread mirrors the premium workshop feel of the reference site.</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>
		<section class="section-pad pt-0" id="showcase">
			<div class="container">
				<div class="row justify-content-between align-items-end g-4 mb-4">
					<div class="col-lg-7">
						<div class="eyebrow mb-3">Showcase categories</div>
						<h2 class="section-title">A category-driven landing page, like the source site, but reworked for SignageSG.</h2>
					</div>
					<div class="col-lg-4">
						<p class="section-copy mb-0">The reference page leans heavily on visual categories such as prismatic letters, decals, installations, plaques, CNC work, channel letters, braille signs, pylon signs, and marquees. This section recreates that browsing pattern without copying the original assets.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($showcaseItems as $item): ?>
						<div class="col-md-6 col-xl-3">
							<article class="showcase-card">
								<div class="showcase-art"></div>
								<div class="small-label mb-2"><?php echo htmlspecialchars($item['eyebrow'], ENT_QUOTES, 'UTF-8'); ?></div>
								<h3 class="mb-2"><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="mb-0 section-copy"><?php echo htmlspecialchars($item['text'], ENT_QUOTES, 'UTF-8'); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad bg-white" id="process">
			<div class="container">
				<div class="row justify-content-between align-items-end g-4 mb-4">
					<div class="col-lg-7">
						<div class="eyebrow mb-3">Studio workflow</div>
						<h2 class="section-title">We design, fabricate, and install.</h2>
					</div>
					<div class="col-lg-4">
						<p class="section-copy mb-0">This mirrors one of the strongest sections on the reference site: a simple three-part capability story that quickly explains how the team works.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($capabilities as $capability): ?>
						<div class="col-md-4">
							<article class="process-card">
								<i class="bi <?php echo htmlspecialchars($capability['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
								<h3 class="mt-3 mb-2"><?php echo htmlspecialchars($capability['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="mb-0 section-copy"><?php echo htmlspecialchars($capability['text'], ENT_QUOTES, 'UTF-8'); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad" id="solutions">
			<div class="container">
				<div class="row justify-content-between align-items-end g-4 mb-4">
					<div class="col-lg-7">
						<div class="eyebrow mb-3">Featured solutions</div>
						<h2 class="section-title">Commercial signage lines built around real project demand.</h2>
					</div>
					<div class="col-lg-4">
						<p class="section-copy mb-0">The source page uses multiple promotional blocks for braille signs, traffic signs, solar-powered signs, acrylic and metal signs, marquees, and prismatic lettering. This version keeps that modular feeling for SignageSG.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($featuredSolutions as $solution): ?>
						<div class="col-md-6">
							<?php $className = 'promo-card-light'; ?>
							<?php if ($solution['tone'] === 'dark') { $className = 'promo-card-dark'; } ?>
							<?php if ($solution['tone'] === 'accent') { $className = 'promo-card-accent'; } ?>
							<article class="promo-card <?php echo $className; ?>">
								<div class="promo-label mb-2 <?php echo $solution['tone'] === 'light' ? '' : 'text-white-50'; ?>">Featured line</div>
								<h3 class="mb-3"><?php echo htmlspecialchars($solution['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="mb-0 <?php echo $solution['tone'] === 'light' ? 'section-copy' : 'text-white-50'; ?>"><?php echo htmlspecialchars($solution['text'], ENT_QUOTES, 'UTF-8'); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad bg-white">
			<div class="container">
				<div class="row justify-content-between align-items-end g-4 mb-4">
					<div class="col-lg-7">
						<div class="eyebrow mb-3">Easy ordering flow</div>
						<h2 class="section-title">Buying signage online is easy.</h2>
					</div>
					<div class="col-lg-4">
						<p class="section-copy mb-0">The reference site uses a simple three-step story. This keeps that clear conversion pattern for a faster landing-page decision path.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($steps as $step): ?>
						<div class="col-md-4">
							<article class="step-card">
								<div class="step-number"><?php echo htmlspecialchars($step['number'], ENT_QUOTES, 'UTF-8'); ?></div>
								<h3 class="mb-2"><?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="mb-0 section-copy"><?php echo htmlspecialchars($step['text'], ENT_QUOTES, 'UTF-8'); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad" id="contact">
			<div class="container">
				<div class="row g-4 align-items-stretch">
					<div class="col-lg-7">
						<div class="contact-shell h-100">
							<div class="eyebrow mb-3">Contact SignageSG</div>
							<h2 class="section-title text-white mb-3">Ready for a quote, redesign, or site install?</h2>
							<p class="text-white-50 mb-4">SignageSG handles custom signboards, feature walls, decals, plaques, directional systems, and installation-led commercial signage projects throughout Singapore.</p>
							<div class="contact-item">
								<div class="footer-label mb-2 text-white-50">WhatsApp</div>
								<a class="text-white fw-bold" href="https://wa.me/6582861600" target="_blank" rel="noreferrer">+65 8286 1600</a>
							</div>
							<div class="contact-item">
								<div class="footer-label mb-2 text-white-50">Email</div>
								<a class="text-white fw-bold" href="mailto:hello@signagesg.com">hello@signagesg.com</a>
							</div>
							<div class="contact-item">
								<div class="footer-label mb-2 text-white-50">Scope</div>
								<span class="text-white-50">Custom signage, site survey, fabrication, delivery, and installation.</span>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="h-100 d-flex flex-column justify-content-between">
							<div>
								<div class="eyebrow mb-3">Quick links</div>
								<h2 class="section-title">Browse like a signage catalog.</h2>
								<p class="section-copy mb-4">The source footer acts like a navigation hub. This version uses the same idea to keep the page feeling browseable even as a one-pager.</p>
							</div>
							<div class="quick-links">
								<?php foreach ($serviceLinks as $link): ?>
									<div class="quick-link"><?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?></div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-lg-8">
					<div class="d-flex align-items-center gap-3">
						<img class="footer-logo" src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="SignageSG logo">
						<div>
							<div class="brand-type fs-2"><span class="brand-accent">Signage</span>SG</div>
							<div class="text-secondary">Bespoke signage and fabrication landing page inspired by the structure of maneki-signage.sg.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-lg-end">
					<div class="footer-label mb-2">Company</div>
					<div>Singapore signage fabrication, decals, plaques, lighting, and installation.</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>