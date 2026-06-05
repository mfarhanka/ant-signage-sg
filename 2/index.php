<?php
$logoPath = 'logo.png';

$services = [
	[
		'title' => 'Custom Signboards',
		'text' => 'Fabrication for retail fronts, office branding, storefront panels, and made-to-measure signboard systems.',
		'icon' => 'bi-easel2',
	],
	[
		'title' => '3D Lettering & Lightbox',
		'text' => 'Front-lit, back-lit, whole-lit, and side lightbox solutions designed to stand out day and night.',
		'icon' => 'bi-lightbulb',
	],
	[
		'title' => 'Indoor & Wayfinding',
		'text' => 'Acrylic signage, foamboard wording, directional signs, road signs, and architectural wayfinding systems.',
		'icon' => 'bi-signpost-split',
	],
	[
		'title' => 'Printing & Stickers',
		'text' => 'Banners, buntings, labels, window graphics, wall stickers, and vehicle wrapping for campaigns and daily branding.',
		'icon' => 'bi-printer',
	],
];

$productGroups = [
	['name' => 'Front-Lit Signboard', 'tag' => 'Illuminated'],
	['name' => 'Back-Lit Lettering', 'tag' => 'Premium'],
	['name' => 'LED Neon Signage', 'tag' => 'Modern'],
	['name' => 'Acrylic Signage', 'tag' => 'Indoor'],
	['name' => 'Road & Directional Signs', 'tag' => 'Wayfinding'],
	['name' => 'Billboard & Hoarding', 'tag' => 'Large Format'],
	['name' => 'Banner & Bunting', 'tag' => 'Campaign'],
	['name' => 'Exhibition Display Sets', 'tag' => 'Events'],
];

$advantages = [
	'One-stop handling from design direction and material selection to fabrication and installation.',
	'Quality-focused production with multiple material options for different budgets and environments.',
	'Site-aware installation planning to keep the build safe, compliant, and brand-forward.',
];

$stats = [
	['value' => '20+', 'label' => 'signage categories'],
	['value' => '1-stop', 'label' => 'design-to-install workflow'],
	['value' => 'SG', 'label' => 'local fabrication focus'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignageSG | Signboard Manufacturer Singapore</title>
	<meta name="description" content="SignageSG builds custom signboards, lightboxes, indoor signage, banners, stickers, and installation-ready branding systems in Singapore.">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<style>
		:root {
			--sg-red: #c1121f;
			--sg-red-dark: #8f0e18;
			--sg-black: #101010;
			--sg-white: #ffffff;
			--sg-ink: #1d1d1d;
			--sg-smoke: #f4f4f4;
			--sg-line: rgba(16, 16, 16, 0.12);
		}

		html {
			scroll-behavior: smooth;
		}

		body {
			font-family: 'Manrope', sans-serif;
			color: var(--sg-ink);
			background:
				radial-gradient(circle at top right, rgba(193, 18, 31, 0.08), transparent 28%),
				linear-gradient(180deg, #ffffff 0%, #fafafa 100%);
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		.brand-font {
			font-family: 'Oswald', sans-serif;
			letter-spacing: 0.02em;
			text-transform: uppercase;
		}

		.navbar {
			backdrop-filter: blur(12px);
			background-color: rgba(255, 255, 255, 0.92);
			border-bottom: 1px solid var(--sg-line);
		}

		.navbar-brand {
			font-family: 'Oswald', sans-serif;
			display: inline-flex;
			align-items: center;
			gap: 0.9rem;
		}

		.brand-logo-wrap {
			width: 68px;
			height: 68px;
			flex: 0 0 68px;
			background: var(--sg-white);
			padding: 0.5rem;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
		}

		.brand-logo {
			max-width: 100%;
			max-height: 100%;
			display: block;
		}

		.brand-copy {
			display: flex;
			flex-direction: column;
			line-height: 1;
		}

		.brand-title {
			font-size: 1.55rem;
			letter-spacing: 0.08em;
			color: var(--sg-black);
		}

		.brand-subtitle {
			font-family: 'Manrope', sans-serif;
			font-size: 0.68rem;
			font-weight: 800;
			letter-spacing: 0.16em;
			text-transform: uppercase;
			color: var(--sg-black);
			margin-top: 0.35rem;
		}

		.brand-mark {
			color: var(--sg-red);
		}

		.nav-link {
			font-weight: 700;
			font-size: 0.9rem;
			text-transform: uppercase;
			color: var(--sg-black);
		}

		.nav-link:hover,
		.nav-link:focus {
			color: var(--sg-red);
		}

		.btn-brand,
		.btn-brand-outline {
			border-radius: 0;
			text-transform: uppercase;
			font-weight: 800;
			letter-spacing: 0.06em;
			padding: 0.9rem 1.4rem;
		}

		.btn-brand {
			background-color: var(--sg-red);
			border-color: var(--sg-red);
			color: var(--sg-white);
		}

		.btn-brand:hover,
		.btn-brand:focus {
			background-color: var(--sg-red-dark);
			border-color: var(--sg-red-dark);
			color: var(--sg-white);
		}

		.btn-brand-outline {
			background-color: transparent;
			border: 2px solid var(--sg-black);
			color: var(--sg-black);
		}

		.btn-brand-outline:hover,
		.btn-brand-outline:focus {
			background-color: var(--sg-black);
			color: var(--sg-white);
		}

		.hero {
			position: relative;
			padding: 8rem 0 5rem;
			overflow: hidden;
		}

		.hero::before {
			content: '';
			position: absolute;
			inset: 0;
			background-image: linear-gradient(var(--sg-line) 1px, transparent 1px), linear-gradient(90deg, var(--sg-line) 1px, transparent 1px);
			background-size: 32px 32px;
			opacity: 0.65;
			pointer-events: none;
		}

		.hero-panel,
		.section-card,
		.service-card,
		.product-card,
		.contact-card {
			position: relative;
			background: rgba(255, 255, 255, 0.94);
			border: 1px solid var(--sg-line);
			box-shadow: 0 18px 40px rgba(0, 0, 0, 0.06);
		}

		.hero-panel {
			padding: 2rem;
		}

		.eyebrow {
			color: var(--sg-red);
			font-weight: 800;
			letter-spacing: 0.16em;
			text-transform: uppercase;
			font-size: 0.82rem;
		}

		.hero h1 {
			font-size: clamp(3rem, 8vw, 6rem);
			line-height: 0.94;
			margin-bottom: 1rem;
			color: var(--sg-black);
		}

		.hero-lead {
			font-size: 1.1rem;
			max-width: 42rem;
		}

		.hero-side {
			background: var(--sg-black);
			color: var(--sg-white);
			padding: 2rem;
			height: 100%;
			border-top: 6px solid var(--sg-red);
		}

		.hero-side .small-label,
		footer .small-label {
			color: rgba(255, 255, 255, 0.68);
			text-transform: uppercase;
			letter-spacing: 0.12em;
			font-size: 0.74rem;
		}

		.stat-box {
			border-top: 3px solid var(--sg-red);
			padding-top: 1rem;
		}

		.stat-value {
			font-family: 'Oswald', sans-serif;
			font-size: 2.1rem;
			line-height: 1;
		}

		.section-pad {
			padding: 5rem 0;
		}

		.section-title {
			font-size: clamp(2.1rem, 4vw, 3.4rem);
			margin-bottom: 0.75rem;
			color: var(--sg-black);
		}

		.accent-rule {
			width: 92px;
			height: 6px;
			background: linear-gradient(90deg, var(--sg-red) 0%, var(--sg-black) 100%);
			margin-bottom: 1.25rem;
		}

		.service-card,
		.product-card,
		.contact-card,
		.section-card {
			height: 100%;
		}

		.service-card {
			padding: 1.75rem;
			transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease;
		}

		.service-card:hover {
			transform: translateY(-6px);
			border-color: rgba(193, 18, 31, 0.35);
			box-shadow: 0 22px 44px rgba(0, 0, 0, 0.1);
		}

		.service-icon {
			font-size: 2rem;
			color: var(--sg-red);
		}

		.service-card h3,
		.product-card h3,
		.contact-card h3 {
			font-size: 1.5rem;
			color: var(--sg-black);
		}

		.feature-list {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.feature-list li {
			padding: 0.95rem 0;
			border-bottom: 1px solid var(--sg-line);
			display: flex;
			gap: 0.85rem;
			align-items: flex-start;
		}

		.feature-list li:last-child {
			border-bottom: 0;
		}

		.feature-list i {
			color: var(--sg-red);
			font-size: 1.1rem;
			margin-top: 0.15rem;
		}

		.product-card {
			padding: 1.5rem;
			overflow: hidden;
		}

		.product-card::after {
			content: '';
			position: absolute;
			right: -30px;
			bottom: -40px;
			width: 120px;
			height: 120px;
			background: radial-gradient(circle, rgba(193, 18, 31, 0.18) 0%, rgba(193, 18, 31, 0) 72%);
		}

		.tag-pill {
			display: inline-block;
			background: var(--sg-black);
			color: var(--sg-white);
			font-size: 0.76rem;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: 0.08em;
			padding: 0.35rem 0.6rem;
			margin-bottom: 1rem;
		}

		.process-step {
			padding: 1.5rem;
			border-left: 4px solid var(--sg-red);
			background: #fff;
			border-top: 1px solid var(--sg-line);
			border-right: 1px solid var(--sg-line);
			border-bottom: 1px solid var(--sg-line);
			height: 100%;
		}

		.process-number {
			font-family: 'Oswald', sans-serif;
			color: var(--sg-red);
			font-size: 2rem;
			line-height: 1;
		}

		.contact-card {
			padding: 1.75rem;
		}

		.contact-link {
			color: var(--sg-red);
			font-weight: 800;
			text-decoration: none;
		}

		.contact-link:hover,
		.contact-link:focus {
			color: var(--sg-red-dark);
		}

		footer {
			background: var(--sg-black);
			color: rgba(255, 255, 255, 0.82);
		}

		.footer-brand {
			color: var(--sg-white);
			font-size: 1.85rem;
		}

		.footer-brand-row {
			display: inline-flex;
			align-items: center;
			gap: 1rem;
		}

		.footer-logo-wrap {
			width: 80px;
			height: 80px;
			background: var(--sg-white);
			padding: 0.5rem;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.18);
		}

		@media (max-width: 991.98px) {
			.hero {
				padding-top: 7rem;
			}

			.navbar-brand {
				gap: 0.65rem;
			}

			.brand-logo-wrap {
				width: 56px;
				height: 56px;
				flex-basis: 56px;
			}

			.brand-title {
				font-size: 1.2rem;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container py-2">
			<a class="navbar-brand fw-bold text-dark" href="#top" aria-label="SignageSG home">
				<span class="brand-logo-wrap">
					<img class="brand-logo" src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="SignageSG logo">
				</span>
				<span class="brand-copy">
					<span class="brand-title"><span class="brand-mark">Signage</span>SG</span>
					<span class="brand-subtitle">Signboard Manufacturer</span>
				</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNav">
				<ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
					<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
					<li class="nav-item"><a class="nav-link" href="#why-us">Why Us</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					<li class="nav-item ms-lg-2"><a class="btn btn-brand" href="https://wa.me/6582861600" target="_blank" rel="noreferrer">Get Quote</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="hero" id="top">
		<div class="container position-relative" style="z-index: 1;">
			<div class="row g-4 align-items-stretch">
				<div class="col-lg-8">
					<div class="hero-panel h-100">
						<p class="eyebrow mb-3">Singapore Signboard Manufacturer</p>
						<h1>Bold signage systems built to get your brand seen.</h1>
						<p class="hero-lead text-secondary mb-4">SignageSG delivers custom signboards, illuminated lettering, indoor displays, stickers, banners, and installation-ready branding solutions for businesses across Singapore. The content direction on this page is adapted from signages.com.sg and rewritten into a cleaner one-page layout.</p>
						<div class="d-flex flex-wrap gap-3 mb-4">
							<a class="btn btn-brand" href="#contact">Start Your Project</a>
							<a class="btn btn-brand-outline" href="#products">View Product Range</a>
						</div>
						<div class="row g-3">
							<?php foreach ($stats as $stat): ?>
								<div class="col-sm-4">
									<div class="stat-box">
										<div class="stat-value"><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></div>
										<div class="text-uppercase small fw-bold text-secondary"><?php echo htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<aside class="hero-side">
						<p class="small-label mb-2">What we cover</p>
						<h2 class="text-white mb-3">Design, fabricate, install.</h2>
						<p class="mb-4">From shopfront signboards to road signs and event displays, the service mix mirrors the source company offering: fabrication, material selection, production, and site installation.</p>
						<ul class="list-unstyled mb-0 d-grid gap-3">
							<li class="d-flex gap-3"><i class="bi bi-check2-square text-danger"></i><span>3D lettering and lightbox fabrication</span></li>
							<li class="d-flex gap-3"><i class="bi bi-check2-square text-danger"></i><span>Indoor signage and acrylic branding</span></li>
							<li class="d-flex gap-3"><i class="bi bi-check2-square text-danger"></i><span>Stickers, banners, buntings, and vehicle wraps</span></li>
							<li class="d-flex gap-3"><i class="bi bi-check2-square text-danger"></i><span>Billboard, hoarding, directional, and construction signage</span></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</header>

	<main>
		<section class="section-pad" id="services">
			<div class="container">
				<div class="row justify-content-between align-items-end mb-4 g-3">
					<div class="col-lg-7">
						<div class="accent-rule"></div>
						<p class="eyebrow mb-2">Core Services</p>
						<h2 class="section-title">A sharper Bootstrap build for a manufacturer-led signage brand.</h2>
					</div>
					<div class="col-lg-4">
						<p class="text-secondary mb-0">The source site lists signboard production, printing services, indoor signage, display sets, banners, lightboxes, LED signage, and sticker work. This section condenses those offers into a clearer service stack.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($services as $service): ?>
						<div class="col-md-6 col-xl-3">
							<article class="service-card">
								<div class="service-icon mb-3"><i class="bi <?php echo htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i></div>
								<h3 class="mb-3"><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="text-secondary mb-0"><?php echo htmlspecialchars($service['text'], ENT_QUOTES, 'UTF-8'); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad pt-0" id="why-us">
			<div class="container">
				<div class="row g-4 align-items-stretch">
					<div class="col-lg-5">
						<div class="section-card p-4 p-lg-5 h-100">
							<p class="eyebrow mb-2">Why Choose SignageSG</p>
							<h2 class="section-title mb-3">Built around one-stop execution.</h2>
							<p class="text-secondary mb-4">The original site emphasizes one-stop solutions, quality assurance, and safe site installation. This version keeps those same points but presents them in a tighter, more modern sales structure.</p>
							<ul class="feature-list">
								<?php foreach ($advantages as $advantage): ?>
									<li>
										<i class="bi bi-arrow-up-right"></i>
										<span><?php echo htmlspecialchars($advantage, ENT_QUOTES, 'UTF-8'); ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="row g-4 h-100">
							<div class="col-md-6">
								<div class="process-step">
									<div class="process-number mb-3">01</div>
									<h3>Brief & Site Review</h3>
									<p class="text-secondary mb-0">Discuss dimensions, branding direction, and installation conditions before production starts.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="process-step">
									<div class="process-number mb-3">02</div>
									<h3>Material & Build Plan</h3>
									<p class="text-secondary mb-0">Choose acrylic, metal, lighting, vinyl, or display materials based on budget, visibility, and environment.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="process-step">
									<div class="process-number mb-3">03</div>
									<h3>Fabrication</h3>
									<p class="text-secondary mb-0">Manufacture the signboard, lettering, banner, sticker, or display system with production-ready detailing.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="process-step">
									<div class="process-number mb-3">04</div>
									<h3>Installation</h3>
									<p class="text-secondary mb-0">Install safely on site so the final piece works as both branding and functional signage.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-pad bg-white" id="products">
			<div class="container">
				<div class="accent-rule"></div>
				<div class="row justify-content-between align-items-end g-3 mb-4">
					<div class="col-lg-7">
						<p class="eyebrow mb-2">Product Range</p>
						<h2 class="section-title">Product categories adapted from the source catalog.</h2>
					</div>
					<div class="col-lg-4">
						<p class="text-secondary mb-0">The reference site spans lightboxes, 2D signboards, 3D wording, acrylic signage, LED displays, road signs, billboard work, stickers, exhibition systems, and printing essentials.</p>
					</div>
				</div>
				<div class="row g-4">
					<?php foreach ($productGroups as $product): ?>
						<div class="col-sm-6 col-xl-3">
							<article class="product-card">
								<span class="tag-pill"><?php echo htmlspecialchars($product['tag'], ENT_QUOTES, 'UTF-8'); ?></span>
								<h3 class="mb-2"><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
								<p class="text-secondary mb-0">Manufactured for visibility, durability, and straightforward deployment across retail, office, roadside, and event settings.</p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="section-pad">
			<div class="container">
				<div class="row g-4 align-items-center">
					<div class="col-lg-6">
						<div class="section-card p-4 p-lg-5">
							<p class="eyebrow mb-2">Positioning</p>
							<h2 class="section-title mb-3">For brands that need more than a printed board.</h2>
							<p class="text-secondary mb-0">A signage manufacturer needs to signal capability quickly. This page does that by combining a cleaner information hierarchy, a stronger white-black-red visual system, and a tighter summary of the source company offer into one responsive Bootstrap page.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-card p-4 p-lg-5">
							<p class="eyebrow mb-2">Included Source Details</p>
							<ul class="feature-list">
								<li><i class="bi bi-building"></i><span>Address adapted from the source company listing: 601 Ang Mo Kio Avenue 5, Singapore 560601.</span></li>
								<li><i class="bi bi-telephone"></i><span>Primary enquiry number from the source site: +65 8286 1600.</span></li>
								<li><i class="bi bi-envelope"></i><span>Email contact preserved from the source listing: antadv.gan@gmail.com.</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-pad pt-0" id="contact">
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-7">
						<div class="contact-card h-100">
							<p class="eyebrow mb-2">Contact</p>
							<h2 class="section-title mb-3">Start a signboard, lightbox, or branding build.</h2>
							<p class="text-secondary mb-4">Use the source company details below as the current enquiry route for this mockup. If you want, I can swap these out for SignageSG-specific contact information next.</p>
							<div class="row g-4">
								<div class="col-md-6">
									<h3 class="mb-2">Call or WhatsApp</h3>
									<p class="mb-1"><a class="contact-link" href="https://wa.me/6582861600" target="_blank" rel="noreferrer">+65 8286 1600</a></p>
									<p class="text-secondary mb-0">Fast route for quote requests and installation discussions.</p>
								</div>
								<div class="col-md-6">
									<h3 class="mb-2">Email</h3>
									<p class="mb-1"><a class="contact-link" href="mailto:antadv.gan@gmail.com">antadv.gan@gmail.com</a></p>
									<p class="text-secondary mb-0">Best for artwork, dimensions, and project reference materials.</p>
								</div>
								<div class="col-12">
									<h3 class="mb-2">Office</h3>
									<p class="mb-2">601 Ang Mo Kio Avenue 5, Singapore 560601</p>
									<p class="text-secondary mb-0">Office hours adapted from the source site: Monday to Friday, 9:00 AM to 6:00 PM. Saturday and Sunday closed.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="hero-side h-100">
							<p class="small-label mb-2">Quick brief</p>
							<h2 class="text-white mb-3">What to send for a faster quote</h2>
							<ul class="list-unstyled d-grid gap-3 mb-4">
								<li class="d-flex gap-3"><i class="bi bi-dot text-danger"></i><span>Required size or installation area</span></li>
								<li class="d-flex gap-3"><i class="bi bi-dot text-danger"></i><span>Preferred materials or lighting type</span></li>
								<li class="d-flex gap-3"><i class="bi bi-dot text-danger"></i><span>Artwork, logo, or reference images</span></li>
								<li class="d-flex gap-3"><i class="bi bi-dot text-danger"></i><span>Target timeline and site location</span></li>
							</ul>
							<a class="btn btn-brand w-100" href="mailto:antadv.gan@gmail.com">Request Proposal</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer class="py-5">
		<div class="container">
			<div class="row g-4 align-items-end">
				<div class="col-lg-8">
					<div class="footer-brand-row">
						<span class="footer-logo-wrap">
							<img class="brand-logo" src="<?php echo htmlspecialchars($logoPath, ENT_QUOTES, 'UTF-8'); ?>" alt="SignageSG logo mark">
						</span>
						<div>
							<div class="footer-brand brand-font"><span class="brand-mark">Signage</span>SG</div>
							<p class="small-label mb-0 mt-2">Primary brand uses uploaded logo</p>
						</div>
					</div>
					<p class="mt-3 mb-0">Responsive Bootstrap landing page for a signage and signboard manufacturer. Content direction and factual service/contact references were adapted from signages.com.sg and rewritten for this page.</p>
				</div>
				<div class="col-lg-4 text-lg-end">
					<p class="small-label mb-2">Theme</p>
					<p class="mb-0">White. Black. Red.</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
