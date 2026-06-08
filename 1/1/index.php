<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signage SG | Premium Architectural Fabricators Singapore</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts (Inter & Space Grotesk) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --color-pure-white: #ffffff;
            --color-light-gray: #f8f9fa;
            --color-mid-gray: #e9ecef;
            --color-dark-gray: #495057;
            --color-near-black: #121212;
            --color-pure-black: #000000;
            --color-subtle-border: rgba(0, 0, 0, 0.1);
            --color-bold-border: rgba(0, 0, 0, 0.9);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-pure-white);
            color: var(--color-near-black);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6, .display-font {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: var(--color-pure-black);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--color-light-gray);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--color-dark-gray);
            border-radius: 0px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-pure-black);
        }

        /* STYLING UTILITIES: Clean Light Architectural Theme */
        .border-technical {
            border: 1px solid var(--color-bold-border) !important;
        }
        .border-technical-subtle {
            border: 1px solid var(--color-subtle-border) !important;
        }
        
        /* Interactive Buttons */
        .btn-wb-outline {
            background: transparent;
            color: var(--color-pure-black);
            border: 1px solid var(--color-pure-black);
            border-radius: 0;
            padding: 12px 28px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.8rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-wb-outline:hover {
            background: var(--color-pure-black);
            color: var(--color-pure-white);
            transform: translateY(-2px);
        }

        .btn-wb-solid {
            background: var(--color-pure-black);
            color: var(--color-pure-white);
            border: 1px solid var(--color-pure-black);
            border-radius: 0;
            padding: 12px 28px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.8rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-wb-solid:hover {
            background: var(--color-pure-white);
            color: var(--color-pure-black);
            border-color: var(--color-pure-black);
            transform: translateY(-2px);
        }

        /* Navigation Styling */
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--color-subtle-border);
            transition: all 0.3s ease;
        }
        .nav-link {
            color: var(--color-dark-gray) !important;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: color 0.2s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--color-pure-black) !important;
            border-bottom: 2px solid var(--color-pure-black);
        }

        /* Hero Blueprint Grid Pattern */
        .hero-section {
            position: relative;
            background-color: var(--color-pure-white);
            padding-top: 140px;
            padding-bottom: 100px;
            min-height: 85vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            border-bottom: 1px solid var(--color-pure-black);
        }
        .hero-grid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: center top;
            z-index: 1;
        }
        .hero-diagonal-accent {
            position: absolute;
            top: 0;
            right: 10%;
            width: 1px;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.05);
            z-index: 2;
        }

        /* Service Cards - White turning into stark Black */
        .service-card {
            background: var(--color-pure-white);
            border: 1px solid var(--color-subtle-border);
            border-radius: 0px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
        }
        .service-card:hover {
            background: var(--color-pure-black);
            color: var(--color-pure-white) !important;
            transform: translateY(-8px);
            border-color: var(--color-pure-black);
        }
        .service-card:hover h4 {
            color: var(--color-pure-white) !important;
        }
        .service-card:hover p {
            color: var(--color-mid-gray) !important;
        }
        .service-card:hover .service-icon {
            color: var(--color-pure-white) !important;
        }
        .service-card:hover .service-link {
            color: var(--color-pure-white);
            border-color: var(--color-pure-white);
        }
        .service-icon {
            font-size: 2.2rem;
            color: var(--color-pure-black);
            transition: color 0.4s ease;
        }

        /* Portfolio Tabs & Layout */
        .portfolio-filter-btn {
            background: transparent;
            border: none;
            color: var(--color-dark-gray);
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 8px 20px;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
            letter-spacing: 0.05em;
        }
        .portfolio-filter-btn.active, .portfolio-filter-btn:hover {
            color: var(--color-pure-black);
            border-bottom-color: var(--color-pure-black);
        }
        .portfolio-item {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .portfolio-card {
            position: relative;
            overflow: hidden;
            background-color: var(--color-pure-white);
            border: 1px solid var(--color-subtle-border);
            cursor: pointer;
        }
        .portfolio-img-container {
            aspect-ratio: 4 / 3;
            overflow: hidden;
            position: relative;
            background-color: var(--color-light-gray);
        }
        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%) contrast(1.15);
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), filter 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .portfolio-card:hover .portfolio-img {
            transform: scale(1.05);
            filter: grayscale(0%) contrast(1);
        }
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 24px;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0) 100%);
            transform: translateY(10px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .portfolio-card:hover .portfolio-overlay {
            transform: translateY(0);
            opacity: 1;
        }

        /* Singapore Trust Grid */
        .trust-badge-container {
            border: 1px solid var(--color-subtle-border);
            background: var(--color-light-gray);
            border-radius: 0px;
            padding: 30px;
            transition: all 0.3s ease;
        }
        .trust-badge-container:hover {
            transform: translateY(-4px);
            border-color: var(--color-pure-black);
            background: var(--color-pure-white);
        }
        .trusted-by-strip {
            background-color: var(--color-light-gray);
            border-top: 1px solid var(--color-subtle-border);
            border-bottom: 1px solid var(--color-subtle-border);
            padding: 30px 0;
        }

        .reviews-section {
            background: var(--color-pure-white);
        }

        .review-card-custom {
            height: 100%;
            padding: 28px;
            border: 1px solid var(--color-subtle-border);
            background: var(--color-pure-white);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .review-card-custom:hover {
            transform: translateY(-6px);
            border-color: var(--color-pure-black);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
        }

        .review-source {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--color-pure-black);
        }

        .review-source-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #4285f4;
            box-shadow: 14px 0 0 #ea4335, 28px 0 0 #fbbc05, 42px 0 0 #34a853;
            margin-right: 42px;
        }

        .review-quote {
            margin-bottom: 18px;
            color: var(--color-near-black);
            font-size: 1rem;
            line-height: 1.75;
        }

        .review-meta-name {
            display: block;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            letter-spacing: 0.02em;
            color: var(--color-pure-black);
        }

        .review-meta-role {
            color: var(--color-dark-gray);
            font-size: 0.88rem;
        }

        .reviews-carousel {
            position: relative;
        }

        .reviews-carousel-viewport {
            overflow: hidden;
        }

        .reviews-carousel-track {
            display: flex;
            gap: 24px;
            transition: transform 0.55s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform;
        }

        .reviews-carousel-item {
            flex: 0 0 calc((100% - (24px * 2)) / 3);
        }

        .reviews-carousel-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 28px;
        }

        .reviews-carousel-buttons {
            display: flex;
            gap: 12px;
        }

        .reviews-carousel-button {
            width: 52px;
            height: 52px;
            border: 1px solid var(--color-pure-black);
            background: var(--color-pure-white);
            color: var(--color-pure-black);
            font-size: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .reviews-carousel-button:hover,
        .reviews-carousel-button:focus {
            background: var(--color-pure-black);
            color: var(--color-pure-white);
            transform: translateY(-2px);
        }

        .reviews-carousel-button:disabled {
            opacity: 0.35;
            cursor: not-allowed;
            transform: none;
        }

        .reviews-carousel-dots {
            display: flex;
            gap: 10px;
        }

        .reviews-carousel-dot {
            width: 11px;
            height: 11px;
            padding: 0;
            border: 0;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.18);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .reviews-carousel-dot.is-active {
            background: var(--color-pure-black);
            transform: scale(1.15);
        }

        @media (max-width: 575.98px) {
            .review-card-custom {
                padding: 22px;
            }

            .reviews-carousel-controls {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        /* Material Specification Table */
        .spec-table th {
            background-color: var(--color-pure-black) !important;
            color: var(--color-pure-white) !important;
            font-family: 'Space Grotesk', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 0.85rem;
            border: 1px solid var(--color-pure-black);
        }
        .spec-table td {
            font-size: 0.9rem;
            border: 1px solid var(--color-subtle-border);
            vertical-align: middle;
        }

        /* Estimator Panel Styles */
        .estimator-panel {
            background: var(--color-light-gray);
            border: 1px solid var(--color-subtle-border);
            border-radius: 0px;
            padding: 40px;
        }
        .form-control-custom {
            background-color: var(--color-pure-white);
            border: 1px solid var(--color-subtle-border);
            border-radius: 0;
            color: var(--color-pure-black) !important;
            padding: 12px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        .form-control-custom:focus {
            background-color: var(--color-pure-white);
            border-color: var(--color-pure-black);
            box-shadow: none;
            outline: none;
        }
        .form-label-custom {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            color: var(--color-pure-black);
            margin-bottom: 8px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .output-card {
            background: var(--color-pure-black);
            color: var(--color-pure-white);
            border-radius: 0;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Form Overlay */
        .success-overlay {
            display: none;
            background: var(--color-pure-white);
            border: 2px solid var(--color-pure-black);
            padding: 40px;
            text-align: center;
        }

        .step-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: var(--color-pure-black);
            color: var(--color-pure-white);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.85rem;
        }

        .developer-showcase-section {
            position: relative;
            overflow: hidden;
            scroll-margin-top: 140px;
            background-color: var(--color-pure-white);
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 0, 0, 0.07) 1px, transparent 1px);
            background-size: 140px 140px;
            background-position: center top;
        }

        .developer-showcase-shell {
            position: relative;
            display: grid;
            grid-template-columns: 1fr;
            align-items: start;
        }

        .developer-showcase-content {
            position: relative;
            z-index: 1;
        }

        .developer-showcase-heading {
            text-align: center;
            margin-bottom: 32px;
            animation: developerHeadingFloat 7s ease-in-out infinite;
        }

        .developer-showcase-heading h2 {
            font-size: clamp(3rem, 7vw, 4.8rem);
            letter-spacing: -0.05em;
            margin-bottom: 0;
        }

        .developer-showcase-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 26px;
        }

        .developer-showcase-card {
            position: relative;
            overflow: hidden;
            min-height: 300px;
            background: var(--color-light-gray);
            border: 1px solid var(--color-subtle-border);
            transition: box-shadow 320ms ease;
            animation: developerCardFloat 6.5s ease-in-out infinite;
        }

        .developer-showcase-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), filter 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            animation: developerImagePan 14s ease-in-out infinite;
        }

        .developer-showcase-card:hover img {
            transform: scale(1.035);
            filter: contrast(1.05);
        }

        .developer-showcase-card:hover {
            box-shadow: 0 20px 44px rgba(0, 0, 0, 0.14);
        }

        .developer-showcase-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02) 0%, rgba(0, 0, 0, 0.08) 100%);
            pointer-events: none;
        }

        .developer-showcase-card:nth-child(2) {
            animation-delay: 140ms;
        }

        .developer-showcase-card:nth-child(3) {
            animation-delay: 280ms;
        }

        .developer-showcase-card:nth-child(4) {
            animation-delay: 420ms;
        }

        .developer-showcase-card:nth-child(2) img {
            animation-delay: 180ms;
        }

        .developer-showcase-card:nth-child(3) img {
            animation-delay: 360ms;
        }

        .developer-showcase-card:nth-child(4) img {
            animation-delay: 540ms;
        }

        @keyframes developerHeadingFloat {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes developerCardFloat {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes developerImagePan {
            0%,
            100% {
                transform: scale(1.02) translate3d(0, 0, 0);
            }
            50% {
                transform: scale(1.06) translate3d(0, -8px, 0);
            }
        }

        @media (max-width: 991.98px) {
            .developer-showcase-shell {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .developer-showcase-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .developer-showcase-card {
                min-height: 320px;
            }
        }

        @media (max-width: 575.98px) {
            .developer-showcase-heading {
                margin-bottom: 32px;
            }

            .developer-showcase-grid {
                grid-template-columns: 1fr;
            }

            .developer-showcase-card {
                min-height: 320px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .developer-showcase-heading,
            .developer-showcase-card,
            .developer-showcase-card img {
                animation: none;
                transition: none;
                transform: none;
                opacity: 1;
            }
        }
    </style>
</head>
<body class="d-flex flex-column h-full">

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="logo.png" alt="Signage SG logo" style="height: 34px; width: auto;" class="flex-shrink-0">
                <div>
                    <span class="d-block h4 mb-0 fw-bold tracking-widest text-black display-font" style="letter-spacing: 1px;">SIGNAGE SG</span>
                    <span class="d-block text-uppercase text-muted" style="font-size: 0.55rem; letter-spacing: 3px; font-weight: 700;">ARCHITECTURAL SIGN CRAFTS</span>
                </div>
            </a>
            
            <button class="navbar-toggler border-1 border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 gap-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#compliance">Safety & Compliance</a></li>
                    <li class="nav-item"><a class="nav-link" href="#estimator">Cost Calculator</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+6567470000" class="text-black text-decoration-none d-none d-xl-inline-block fw-bold text-nowrap" style="font-size: 0.85rem;">
                        <i class="fa-solid fa-phone me-1"></i>+65 6747 0000
                    </a>
                    <a href="#quote-form" class="btn-wb-solid">Get Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <header id="hero" class="hero-section">
        <div class="hero-grid"></div>
        <div class="hero-diagonal-accent"></div>
        
        <div class="container relative z-3">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-lg-7 text-start">
                    <div class="d-inline-flex align-items-center gap-2 border border-technical px-3 py-1.5 mb-4" style="background: var(--color-light-gray);">
                        <span class="d-inline-block bg-black rounded-circle" style="width: 8px; height: 8px;"></span>
                        <span class="text-uppercase tracking-wider text-black fw-bold" style="font-size: 0.7rem; letter-spacing: 2px;">Singapore Registered Sign Contractor</span>
                    </div>
                    
                    <h1 class="display-3 text-black mb-3 tracking-tight lh-sm">
                        FABRICATING PRECISE<br>
                        <span class="text-decoration-underline" style="text-underline-offset: 8px; text-decoration-thickness: 3px;">ARCHITECTURAL SIGNAGE</span>
                    </h1>
                    
                    <p class="lead text-dark-gray mb-5 max-w-lg" style="font-weight: 400; line-height: 1.8; font-size: 1.1rem;">
                        From custom CNC laser-cut lettering and certified low-voltage LED assemblies to BCA submissions and high-altitude installations. Serving developers, fit-out architects, and retail brands across Singapore with flawless mechanical alignment.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#estimator" class="btn-wb-solid">Calculate Signage Cost</a>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <!-- Technical CAD Outline Signage Display -->
                    <div class="p-4 border-technical" style="background: var(--color-pure-white);">
                        <div class="d-flex justify-content-between align-items-center border-bottom border-technical pb-3 mb-3">
                            <span class="text-uppercase tracking-wider text-black font-monospace fw-bold" style="font-size: 0.7rem;">CAD FILE REVISION // SG-2026-X</span>
                            <span class="badge bg-black text-white px-2 py-1 font-monospace" style="font-size: 0.65rem; border-radius: 0px;">APPROVED</span>
                        </div>
                        
                        <!-- Mini structural blueprint SVG wireframe -->
                        <svg viewBox="0 0 400 300" class="w-full" style="border: 1px dashed rgba(0,0,0,0.2);">
                            <!-- Grid Layout -->
                            <line x1="50" y1="0" x2="50" y2="300" stroke="rgba(0,0,0,0.05)" />
                            <line x1="150" y1="0" x2="150" y2="300" stroke="rgba(0,0,0,0.05)" />
                            <line x1="250" y1="0" x2="250" y2="300" stroke="rgba(0,0,0,0.05)" />
                            <line x1="350" y1="0" x2="350" y2="300" stroke="rgba(0,0,0,0.05)" />
                            <line x1="0" y1="75" x2="400" y2="75" stroke="rgba(0,0,0,0.05)" />
                            <line x1="0" y1="150" x2="400" y2="150" stroke="rgba(0,0,0,0.05)" />
                            <line x1="0" y1="225" x2="400" y2="225" stroke="rgba(0,0,0,0.05)" />

                            <!-- Dimension Box -->
                            <rect x="70" y="70" width="260" height="160" fill="none" stroke="black" stroke-width="2"/>
                            
                            <!-- Laser projection vector markers -->
                            <line x1="70" y1="50" x2="330" y2="50" stroke="black" stroke-width="1" stroke-dasharray="3,3"/>
                            <path d="M70 45V55M330 45V55" stroke="black" stroke-width="1"/>
                            <text x="200" y="40" fill="black" font-family="monospace" font-weight="bold" font-size="11" text-anchor="middle">3000 mm (W)</text>

                            <line x1="350" y1="70" x2="350" y2="230" stroke="black" stroke-width="1" stroke-dasharray="3,3"/>
                            <path d="M345 70H355M345 230H355" stroke="black" stroke-width="1"/>
                            <text x="375" y="155" fill="black" font-family="monospace" font-weight="bold" font-size="11" text-anchor="middle" transform="rotate(90 375 155)">1800 mm (H)</text>
                            
                            <!-- 3D Halo LED Layer Demonstration -->
                            <path d="M120 180 L160 100 L200 180" fill="none" stroke="black" stroke-width="4"/>
                            <path d="M117 183 L157 103 L197 183" fill="none" stroke="rgba(0,0,0,0.2)" stroke-width="4"/>
                            <line x1="140" y1="150" x2="180" y2="150" stroke="black" stroke-width="3"/>
                            
                            <!-- Core description -->
                            <text x="200" y="270" fill="black" font-family="monospace" font-weight="bold" font-size="10" text-anchor="middle">3D HALO-LIT CHROME STAINLESS STEEL LETTERING</text>
                        </svg>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3 text-dark-gray font-monospace" style="font-size: 0.75rem;">
                            <span>SCALE: 1:12</span>
                            <span>CNC PRECISION FORMING</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="trusted-by-strip">
        <div class="container">
            <div class="row align-items-center justify-content-between g-3">
                <div class="col-md-4 text-center text-md-start">
                    <span class="text-uppercase tracking-wider text-black fw-bold" style="font-size: 0.75rem; letter-spacing: 2px;">ENGINEERED FOR SINGAPORE'S LEADING ENTITIES</span>
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-wrap justify-content-around justify-content-md-end align-items-center gap-4 gap-md-5 fw-bold text-uppercase" style="letter-spacing: 1.5px; font-size: 0.95rem;">
                        <span class="text-black">CAPITALAND</span>
                        <span class="text-black">KEPPEL BAY</span>
                        <span class="text-black">MARINA BAY SANDS</span>
                        <span class="text-black">CHIP ENG SENG</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="signboard-showcase" class="developer-showcase-section py-5 border-bottom border-technical">
        <div class="container py-4 py-lg-5">
            <div class="developer-showcase-shell">
                <div class="developer-showcase-content">
                    <div class="developer-showcase-heading">
                        <h2 class="display-font text-uppercase">3D Signboard</h2>
                    </div>

                    <div class="developer-showcase-grid">
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?auto=format&fit=crop&w=900&q=80" alt="3D illuminated signboard installation" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=3D+Signboard+1'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?auto=format&fit=crop&w=900&q=80" alt="Halo-lit acrylic signboard" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=3D+Signboard+2'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=900&q=80" alt="Outdoor 3D shopfront signboard" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=3D+Signboard+3'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80" alt="Interior branded 3D signboard" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=3D+Signboard+4'">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="acrylic-showcase" class="developer-showcase-section py-5 border-bottom border-technical">
        <div class="container py-4 py-lg-5">
            <div class="developer-showcase-shell">
                <div class="developer-showcase-content">
                    <div class="developer-showcase-heading">
                        <h2 class="display-font text-uppercase">Acrylic Signage</h2>
                    </div>

                    <div class="developer-showcase-grid">
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80" alt="Acrylic lobby signage installation" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Acrylic+Signage+1'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=900&q=80" alt="Frosted acrylic branding panel" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Acrylic+Signage+2'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80" alt="Illuminated acrylic sign display" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Acrylic+Signage+3'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?auto=format&fit=crop&w=900&q=80" alt="Raised acrylic logo signage" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Acrylic+Signage+4'">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lightbox-showcase" class="developer-showcase-section py-5 border-bottom border-technical">
        <div class="container py-4 py-lg-5">
            <div class="developer-showcase-shell">
                <div class="developer-showcase-content">
                    <div class="developer-showcase-heading">
                        <h2 class="display-font text-uppercase">Lightbox</h2>
                    </div>

                    <div class="developer-showcase-grid">
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=900&q=80" alt="Retail lightbox signage facade" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Lightbox+1'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?auto=format&fit=crop&w=900&q=80" alt="Illuminated lightbox branding installation" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Lightbox+2'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?auto=format&fit=crop&w=900&q=80" alt="Slim lightbox logo sign" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Lightbox+3'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80" alt="Interior commercial lightbox display" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Lightbox+4'">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sticker-showcase" class="developer-showcase-section py-5 border-bottom border-technical">
        <div class="container py-4 py-lg-5">
            <div class="developer-showcase-shell">
                <div class="developer-showcase-content">
                    <div class="developer-showcase-heading">
                        <h2 class="display-font text-uppercase">Sticker</h2>
                    </div>

                    <div class="developer-showcase-grid">
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=900&q=80" alt="Sticker branding applied on glass" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Sticker+1'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80" alt="Window sticker and vinyl graphics" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Sticker+2'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=900&q=80" alt="Outdoor sticker promotional panel" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Sticker+3'">
                        </article>
                        <article class="developer-showcase-card">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=900&q=80" alt="Interior wall sticker installation" onerror="this.src='https://placehold.co/900x1200/ffffff/111111?text=Sticker+4'">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="reviews-section py-5 border-bottom border-technical">
        <div class="container py-5">
            <div class="row align-items-end mb-5 g-4">
                <div class="col-lg-12 text-center">
                    <h2 class="display-4 text-black mt-2 mb-3">Trusted By Clients Who Need Signage Delivered Right</h2>
                    <p class="text-dark-gray mb-0 mx-auto" style="font-weight: 400; line-height: 1.8; max-width: 720px;">
                        Business owners, developers, and office fit-out teams rely on us for clear timelines, precise fabrication, and clean on-site installation. Here is a snapshot of the feedback we consistently receive after project handover.
                    </p>
                </div>
            </div>

            <div class="reviews-carousel" id="reviewsCarousel" aria-label="Client testimonials carousel">
                <div class="reviews-carousel-viewport">
                    <div class="reviews-carousel-track">
                        <div class="reviews-carousel-item">
                            <article class="review-card-custom">
                                <span class="review-source"><span class="review-source-dot"></span>Google Review</span>
                                <p class="review-quote">“Very professional from site measurement to final install. The illuminated signboard looked exactly like the approved artwork and the team kept the timeline tight.”</p>
                                <div>
                                    <span class="review-meta-name">Marcus Tan</span>
                                    <span class="review-meta-role">Retail business owner, Singapore</span>
                                </div>
                            </article>
                        </div>
                        <div class="reviews-carousel-item">
                            <article class="review-card-custom">
                                <span class="review-source"><span class="review-source-dot"></span>Google Review</span>
                                <p class="review-quote">“Fast response, clear quotation, and excellent workmanship. Our office branding wall and acrylic lettering were installed neatly with minimal disruption.”</p>
                                <div>
                                    <span class="review-meta-name">Alicia Goh</span>
                                    <span class="review-meta-role">Corporate office manager</span>
                                </div>
                            </article>
                        </div>
                        <div class="reviews-carousel-item">
                            <article class="review-card-custom">
                                <span class="review-source"><span class="review-source-dot"></span>Client Testimonial</span>
                                <p class="review-quote">“They coordinated well with our developer timeline and landlord requirements. The final hoarding, lightbox, and directional signs were consistent and well finished.”</p>
                                <div>
                                    <span class="review-meta-name">Shawn Lim</span>
                                    <span class="review-meta-role">Project coordinator, mixed-use development</span>
                                </div>
                            </article>
                        </div>
                        <div class="reviews-carousel-item">
                            <article class="review-card-custom">
                                <span class="review-source"><span class="review-source-dot"></span>Google Review</span>
                                <p class="review-quote">“The team handled our mall submission requirements properly and the finished signage looked premium. Installation was neat and fast.”</p>
                                <div>
                                    <span class="review-meta-name">Nur Aisyah</span>
                                    <span class="review-meta-role">Retail operations lead</span>
                                </div>
                            </article>
                        </div>
                        <div class="reviews-carousel-item">
                            <article class="review-card-custom">
                                <span class="review-source"><span class="review-source-dot"></span>Client Testimonial</span>
                                <p class="review-quote">“Good communication, realistic lead time, and strong finishing quality. The wayfinding signs and lightbox set were delivered exactly as discussed.”</p>
                                <div>
                                    <span class="review-meta-name">Daniel Chua</span>
                                    <span class="review-meta-role">Facilities manager, commercial building</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="reviews-carousel-controls">
                    <div class="reviews-carousel-buttons">
                        <button type="button" class="reviews-carousel-button" data-review-prev aria-label="Previous reviews">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button type="button" class="reviews-carousel-button" data-review-next aria-label="Next reviews">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <div class="reviews-carousel-dots" data-review-dots aria-label="Review pages"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="estimator" class="py-5 bg-white border-bottom border-technical">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="text-uppercase tracking-wider text-muted fw-bold" style="font-size: 0.8rem; letter-spacing: 2px;">TRANSPARENT COMMERCIAL VALUATION</span>
                    <h2 class="display-4 text-black mt-2">B2B COST ESTIMATOR</h2>
                    <p class="text-dark-gray" style="font-weight: 400;">
                        Use our mathematical estimation matrix based on localized Singapore production rates (SGD). Calculate your estimated fabrication costs and import the configuration directly to lock in a physical site survey.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="estimator-panel">
                        <div class="row g-5">
                            <!-- Input Settings panel -->
                            <div class="col-lg-7">
                                <h4 class="text-black mb-4 border-bottom border-technical pb-2 display-font">1. SIGNAGE CONFIGURATION</h4>
                                
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <label class="form-label form-label-custom">Signage Service Class / Material</label>
                                        <select class="form-select form-control-custom" id="est-category" onchange="runCostEstimate()">
                                            <option value="led">3D LED Illuminated Signage (Premium Halo/Frontlit)</option>
                                            <option value="corporate-acrylic">Acrylic Raised Laser Cut Lettering (Non-Illuminated)</option>
                                            <option value="metal-stainless">Stainless Steel / Hairline Brass Metal Lettering</option>
                                            <option value="large-vinyl">Outdoor Storefront Decal / Large Format Vinyl Print</option>
                                            <option value="frosting-glass">Frosted Privacy Glass Decal (Per SqM Rate)</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label form-label-custom">Width (Meters)</label>
                                        <input type="number" class="form-control form-control-custom" id="est-width" value="1.8" min="0.2" max="15" step="0.1" oninput="runCostEstimate()">
                                        <div class="form-text text-dark-gray font-monospace" style="font-size: 0.75rem;">Limit: 0.2m - 15m</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label form-label-custom">Height (Meters)</label>
                                        <input type="number" class="form-control form-control-custom" id="est-height" value="0.9" min="0.2" max="6" step="0.1" oninput="runCostEstimate()">
                                        <div class="form-text text-dark-gray font-monospace" style="font-size: 0.75rem;">Limit: 0.2m - 6m</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label form-label-custom">Mounting Surface / Elevation</label>
                                        <select class="form-select form-control-custom" id="est-mount" onchange="runCostEstimate()">
                                            <option value="drywall">Standard Indoors (Drywall / Timber panel)</option>
                                            <option value="glass">Glass Panel (Double-Sided adhesive setup)</option>
                                            <option value="external-high">External Facade High Rise (Requires Scaffold / Skylift)</option>
                                            <option value="external-low">External Ground Level Wall (Canopy / Entrance)</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label form-label-custom">Installation Required?</label>
                                        <select class="form-select form-control-custom" id="est-install" onchange="runCostEstimate()">
                                            <option value="yes">Yes (Apex Professional Installation Crew)</option>
                                            <option value="no">No (Supply Only, Delivery only)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Interactive Calculation output board -->
                            <div class="col-lg-5">
                                <div class="output-card h-100 text-center">
                                    <h5 class="text-uppercase tracking-wider text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 2px;">ESTIMATED PRICE RANGE</h5>
                                    
                                    <div class="my-4">
                                        <span class="text-white display-font display-4" id="price-display">S$1,500 - S$2,100</span>
                                        <p class="text-muted mt-2 mb-0" style="font-size: 0.8rem;">SGD (Excluding dynamic transport/sub-cladding if any)</p>
                                    </div>

                                    <div class="text-start border-top border-technical-subtle pt-4 w-100" style="font-size: 0.8rem;">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-muted">BCA Approval Flag:</span>
                                            <span class="text-white fw-bold font-monospace text-uppercase" id="detail-bca">Not Required</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-muted">Est. Lead Time:</span>
                                            <span class="text-white fw-bold font-monospace">8 - 12 Working Days</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted">Fabrication Tolerances:</span>
                                            <span class="text-white fw-bold font-monospace">+/- 0.5mm CNC router</span>
                                        </div>
                                    </div>

                                    <a href="#quote-form" class="btn-wb-outline text-white border-white w-100 mt-4" onclick="prepopulateQuoteForm()">Proceed to Book Site Survey</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quote-form" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <span class="text-uppercase tracking-wider text-muted fw-bold" style="font-size: 0.8rem; letter-spacing: 2px;">SUBMIT DRAWINGS OR PARALIST FOR STRUCTURAL AUDIT</span>
                    <h2 class="display-4 text-black mt-2">REQUEST FORMAL QUOTATION</h2>
                    <p class="text-dark-gray" style="font-weight: 400;">
                        Upload your sign specs or reference photos. Our production estimator team will review your inputs and respond with a formal quotation package within 4 working hours.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="border-technical p-4 p-md-5 bg-white">
                        
                        <!-- Success View Interface (No Alert) -->
                        <div id="success-message" class="success-overlay">
                            <i class="fa-solid fa-circle-check text-black mb-4" style="font-size: 4.5rem;"></i>
                            <h3 class="text-black mb-3 text-uppercase display-font">RFQ SUBMITTED SUCCESSFULLY</h3>
                            <p class="text-dark-gray mb-4">
                                Your design parameters have been registered in our system. Reference ID: <span id="ref-id" class="text-black fw-bold font-monospace">APX-02941</span>. A Signage SG estimator will contact you within 4 business hours to finalize site measurements.
                            </p>
                            <button class="btn-wb-solid" onclick="resetForm()">Submit Another Enquiry</button>
                        </div>

                        <!-- Core RFQ Form Elements -->
                        <form id="rfq-form" onsubmit="handleFormSubmission(event)">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Company Registered Name *</label>
                                    <input type="text" class="form-control form-control-custom" id="q-company" placeholder="e.g. Apex Hospitality Group SG" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Contact Person *</label>
                                    <input type="text" class="form-control form-control-custom" id="q-contact" placeholder="e.g. Rachel Lim" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Corporate Email Address *</label>
                                    <input type="email" class="form-control form-control-custom" id="q-email" placeholder="e.g. rachel@apexgroup.sg" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Mobile / Contact Number *</label>
                                    <input type="tel" class="form-control form-control-custom" id="q-phone" placeholder="e.g. +65 9234 5678" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Target Completion Date</label>
                                    <input type="date" class="form-control form-control-custom" id="q-date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label form-label-custom">Installation Site Address / Building</label>
                                    <input type="text" class="form-control form-control-custom" id="q-site" placeholder="e.g. Guoco Tower, Level 24">
                                </div>

                                <div class="col-12">
                                    <label class="form-label form-label-custom">Fabrication Path & Scope</label>
                                    <select class="form-select form-control-custom" id="q-scope">
                                        <option value="3d-led">3D LED / Illuminated Frontlit Letters</option>
                                        <option value="lobby-brand">Corporate Office Lobby Backdrop Signage</option>
                                        <option value="frosting">Glass Decals & Privacy Frosted Film Installation</option>
                                        <option value="pylon-ext">Large Scale Pylon & External Architectural Signs</option>
                                        <option value="metal-fab">Specialist Custom Metal Laser Fabrication</option>
                                        <option value="others">Other Custom Architectural Signages</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label form-label-custom">Specifications, Materials & Sizing Details</label>
                                    <textarea class="form-control form-control-custom" id="q-notes" rows="4" placeholder="e.g., Brushed stainless steel profile, 50mm return depth, white halo-lit LED lighting, installation on concrete wall surface."></textarea>
                                </div>

                                <div class="col-12 text-dark-gray" style="font-size: 0.8rem;">
                                    <i class="fa-solid fa-lock me-2 text-black"></i> We comply with the Singapore Personal Data Protection Act (PDPA). All structural details, floor designs, and contact information are kept strictly confidential.
                                </div>

                                <div class="col-12 text-end">
                                    <button type="submit" class="btn-wb-solid py-3 px-5">Submit Request for Quote</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-auto py-5 bg-black text-white">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <svg width="32" height="32" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="100" height="100" fill="white"/>
                            <path d="M15 80L50 15L85 80H15Z" stroke="black" stroke-width="8" stroke-linejoin="round"/>
                            <line x1="30" y1="58" x2="70" y2="58" stroke="black" stroke-width="5"/>
                        </svg>
                        <div>
                            <span class="d-block h5 mb-0 fw-bold tracking-widest text-white display-font" style="letter-spacing: 1px;">SIGNAGE SG</span>
                            <span class="d-block text-uppercase text-muted" style="font-size: 0.55rem; letter-spacing: 2px; font-weight: 700;">Singapore</span>
                        </div>
                    </div>
                    <p class="text-light-gray mb-4" style="font-size: 0.9rem; line-height: 1.7; font-weight: 300;">
                        Precision engineering and aesthetic excellence in architectural signage systems. Fully accredited with bizSAFE Star and BCA standards for secure site handovers.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white hover-opacity" style="font-size: 1.2rem;"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-white hover-opacity" style="font-size: 1.2rem;"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-white hover-opacity" style="font-size: 1.2rem;"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-white hover-opacity" style="font-size: 1.2rem;"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4 tracking-wider text-uppercase font-monospace" style="font-size: 0.85rem;">PRODUCTION WORKSHOP</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3 text-light-gray" style="font-size: 0.9rem;">
                        <li class="d-flex align-items-start gap-2">
                            <i class="fa-solid fa-location-dot mt-1 text-white"></i>
                            <div>
                                <strong>Signage SG Private Limited</strong><br>
                                12 Geylang Lorong 23, Industrial Block B #04-01,<br>
                                Singapore 388351
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-clock text-white"></i>
                            <span>Mon - Fri: 9:00 AM - 6:00 PM (SGT)</span>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-envelope text-white"></i>
                            <a href="mailto:projects@apexsignage.sg" class="text-light-gray text-decoration-none hover-underline">projects@apexsignage.sg</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4 tracking-wider text-uppercase font-monospace" style="font-size: 0.85rem;">LOCAL REGULATORY COMPLIANCE</h5>
                    <div class="d-flex flex-column gap-2 text-light-gray" style="font-size: 0.8rem;">
                        <div class="border border-white p-2 text-white font-monospace d-flex justify-content-between align-items-center" style="opacity: 0.8;">
                            <span>BCA REGISTERED KEY:</span>
                            <span class="fw-bold">CR11 (L1)</span>
                        </div>
                        <div class="border border-white p-2 text-white font-monospace d-flex justify-content-between align-items-center" style="opacity: 0.8;">
                            <span>SAFETY COMPLIANCE:</span>
                            <span class="fw-bold text-uppercase">bizSAFE STAR</span>
                        </div>
                        <div class="border border-white p-2 text-white font-monospace d-flex justify-content-between align-items-center" style="opacity: 0.8;">
                            <span>ISO PROTOCOL:</span>
                            <span class="fw-bold">ISO 45001:2018</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-technical-subtle mt-5 pt-4 d-flex flex-column flex-md-row justify-content-between align-items-center text-muted" style="font-size: 0.8rem;">
                <p class="mb-2 mb-md-0">&copy; 2026 Signage SG. All Rights Reserved.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted text-decoration-none hover-white">Terms of Fabrication</a>
                    <span>|</span>
                    <a href="#" class="text-muted text-decoration-none hover-white">PDPA Privacy Protocol</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Portfolio Filters
        function filterPortfolio(category) {
            const items = document.querySelectorAll('.portfolio-item');
            const buttons = document.querySelectorAll('.portfolio-filter-btn');

            buttons.forEach(btn => {
                if (btn.textContent.toLowerCase().includes(category) || (category === 'all' && btn.textContent.toLowerCase().includes('all'))) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

        // B2B SGD Signage Estimator Mathematics
        function runCostEstimate() {
            const category = document.getElementById('est-category').value;
            const width = parseFloat(document.getElementById('est-width').value) || 0;
            const height = parseFloat(document.getElementById('est-height').value) || 0;
            const mount = document.getElementById('est-mount').value;
            const install = document.getElementById('est-install').value;

            // Compute Area in Square Meters
            const area = width * height;

            if (area <= 0) {
                document.getElementById('price-display').innerText = 'S$0';
                return;
            }

            // Real-world production rates per square meter in Singapore
            let baseRate = 0;
            switch(category) {
                case 'led':
                    baseRate = 1100; // Premium waterproof halo/front lit 3D lettering
                    break;
                case 'corporate-acrylic':
                    baseRate = 500;  // High polish non-lit raised letters
                    break;
                case 'metal-stainless':
                    baseRate = 800;  // Marine grade brushed/titanium steel
                    break;
                case 'large-vinyl':
                    baseRate = 220;  // Highly durable UV stable vinyl stickers
                    break;
                case 'frosting-glass':
                    baseRate = 110;  // High precision plotter glass frosting
                    break;
            }

            // Material fabrication sub-total
            let subtotal = area * baseRate;

            // Mounting and engineering coefficients
            let mountingMultiplier = 1.0;
            switch(mount) {
                case 'glass':
                    mountingMultiplier = 1.15; // Double-sided aligner plates
                    break;
                case 'external-high':
                    mountingMultiplier = 1.65; // High altitude scaffold / skylift setup
                    break;
                case 'external-low':
                    mountingMultiplier = 1.30; // Ground entrance structural framing
                    break;
            }

            subtotal *= mountingMultiplier;

            // Flat rate installation service costs
            let installFee = 0;
            if (install === 'yes') {
                if (category === 'led' || mount === 'external-high') {
                    installFee = 550; // Certified electricians + high-elevation crews
                } else {
                    installFee = 220; // Standard layout technicians
                }
            }

            const totalEstimate = Math.round(subtotal + installFee);

            // Bounds matrix (+/- 12%)
            const lowerBound = Math.round(totalEstimate * 0.88);
            const upperBound = Math.round(totalEstimate * 1.12);

            // Localization
            const formattedMin = new Intl.NumberFormat('en-SG', { style: 'currency', currency: 'SGD', maximumFractionDigits: 0 }).format(lowerBound);
            const formattedMax = new Intl.NumberFormat('en-SG', { style: 'currency', currency: 'SGD', maximumFractionDigits: 0 }).format(upperBound);

            document.getElementById('price-display').innerText = `${formattedMin} - ${formattedMax}`;

            // BCA Structural Submission check indicators
            const bcaDetailSpan = document.getElementById('detail-bca');
            if (height > 2.0 || mount === 'external-high') {
                bcaDetailSpan.innerText = 'BCA Permit Required';
                bcaDetailSpan.style.color = '#ff4d4d'; // Soft red highlight
            } else {
                bcaDetailSpan.innerText = 'Self-Certified Safe';
                bcaDetailSpan.style.color = '#00e676'; // Light green
            }
        }

        // Seamless prepopulation of values to contact form
        function prepopulateQuoteForm() {
            const categoryVal = document.getElementById('est-category').value;
            const wVal = document.getElementById('est-width').value;
            const hVal = document.getElementById('est-height').value;
            
            let targetScope = 'others';
            if (categoryVal === 'led') targetScope = '3d-led';
            if (categoryVal === 'corporate-acrylic' || categoryVal === 'metal-stainless') targetScope = 'lobby-brand';
            if (categoryVal === 'frosting-glass') targetScope = 'frosting';

            document.getElementById('q-scope').value = targetScope;
            document.getElementById('q-notes').value = `Auto-imported configuration from cost calculator:\n• Class Type: ${categoryVal}\n• Sizing: ${wVal}m Width x ${hVal}m Height\n\nPlease verify these parameters and schedule a physical site survey measurement.`;
        }

        // Clean RFQ Form submission handling
        function handleFormSubmission(event) {
            event.preventDefault();

            const randomID = Math.floor(10000 + Math.random() * 90000);
            document.getElementById('ref-id').innerText = `APX-${randomID}`;

            document.getElementById('rfq-form').style.display = 'none';
            document.getElementById('success-message').style.display = 'block';
        }

        function resetForm() {
            document.getElementById('rfq-form').reset();
            document.getElementById('rfq-form').style.display = 'block';
            document.getElementById('success-message').style.display = 'none';
        }

        function initReviewsCarousel() {
            const carousel = document.getElementById('reviewsCarousel');
            if (!carousel) {
                return;
            }

            const track = carousel.querySelector('.reviews-carousel-track');
            const items = Array.from(carousel.querySelectorAll('.reviews-carousel-item'));
            const prevButton = carousel.querySelector('[data-review-prev]');
            const nextButton = carousel.querySelector('[data-review-next]');
            const dotsContainer = carousel.querySelector('[data-review-dots]');
            let currentIndex = 0;
            let maxIndex = 0;
            let autoplayId;

            function getVisibleCount() {
                return 3;
            }

            function buildDots() {
                dotsContainer.innerHTML = '';
                for (let index = 0; index <= maxIndex; index += 1) {
                    const dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'reviews-carousel-dot';
                    dot.setAttribute('aria-label', `Go to review page ${index + 1}`);
                    dot.addEventListener('click', () => {
                        currentIndex = index;
                        updateCarousel();
                        restartAutoplay();
                    });
                    dotsContainer.appendChild(dot);
                }
            }

            function updateCarousel() {
                maxIndex = Math.max(items.length - getVisibleCount(), 0);
                if (currentIndex > maxIndex) {
                    currentIndex = maxIndex;
                }

                const itemWidth = items[0].getBoundingClientRect().width;
                const gap = 24;
                const offset = currentIndex * (itemWidth + gap);
                track.style.transform = `translateX(-${offset}px)`;

                if (dotsContainer.children.length !== maxIndex + 1) {
                    buildDots();
                }

                Array.from(dotsContainer.children).forEach((dot, index) => {
                    dot.classList.toggle('is-active', index === currentIndex);
                });

                prevButton.disabled = currentIndex === 0;
                nextButton.disabled = currentIndex === maxIndex;
            }

            function goNext() {
                currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
                updateCarousel();
            }

            function goPrev() {
                currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
                updateCarousel();
            }

            function startAutoplay() {
                autoplayId = window.setInterval(goNext, 4500);
            }

            function restartAutoplay() {
                window.clearInterval(autoplayId);
                startAutoplay();
            }

            prevButton.addEventListener('click', () => {
                goPrev();
                restartAutoplay();
            });

            nextButton.addEventListener('click', () => {
                goNext();
                restartAutoplay();
            });

            carousel.addEventListener('mouseenter', () => window.clearInterval(autoplayId));
            carousel.addEventListener('mouseleave', startAutoplay);
            window.addEventListener('resize', updateCarousel);

            buildDots();
            updateCarousel();
            startAutoplay();
        }

        // Initialize on layout completion
        window.onload = function() {
            runCostEstimate();
            initReviewsCarousel();
        };
    </script>
</body>
</html>