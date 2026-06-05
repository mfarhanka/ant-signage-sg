<?php
$entries = array_filter(scandir(__DIR__), static function ($name) {
    if ($name === '.' || $name === '..' || $name[0] === '.') {
        return false;
    }

    $fullPath = __DIR__ . DIRECTORY_SEPARATOR . $name;

    if (!is_dir($fullPath)) {
        return false;
    }

    return is_file($fullPath . DIRECTORY_SEPARATOR . 'index.html')
        || is_file($fullPath . DIRECTORY_SEPARATOR . 'index.php');
});

natsort($entries);
$sites = array_values($entries);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANT Signage SG | Site Index</title>
    <style>
        :root {
            --bg: #f4efe7;
            --panel: rgba(255, 252, 247, 0.82);
            --panel-border: rgba(43, 37, 31, 0.14);
            --ink: #1d1a17;
            --muted: #6f655d;
            --accent: #d96d3d;
            --accent-deep: #9d4520;
            --shadow: 0 28px 60px rgba(56, 37, 17, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(217, 109, 61, 0.2), transparent 30%),
                radial-gradient(circle at bottom right, rgba(98, 65, 37, 0.18), transparent 28%),
                linear-gradient(135deg, #efe6d8 0%, #f7f3ec 42%, #e9dfd0 100%);
        }

        .shell {
            width: min(1100px, calc(100% - 32px));
            margin: 0 auto;
            padding: 48px 0 64px;
        }

        .hero {
            display: grid;
            gap: 20px;
            padding: 40px;
            border: 1px solid var(--panel-border);
            background: var(--panel);
            backdrop-filter: blur(16px);
            box-shadow: var(--shadow);
        }

        .eyebrow {
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.18em;
            font-family: Arial, sans-serif;
            font-size: 0.78rem;
            color: var(--accent-deep);
        }

        h1 {
            margin: 0;
            font-size: clamp(2.5rem, 6vw, 5.2rem);
            line-height: 0.96;
            max-width: 9ch;
        }

        .hero p {
            margin: 0;
            max-width: 60ch;
            font-size: 1.05rem;
            line-height: 1.7;
            color: var(--muted);
            font-family: Arial, sans-serif;
        }

        .count-chip {
            display: inline-flex;
            width: fit-content;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border: 1px solid rgba(217, 109, 61, 0.25);
            background: rgba(255, 255, 255, 0.6);
            font-family: Arial, sans-serif;
            font-size: 0.92rem;
        }

        .grid {
            margin-top: 28px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
        }

        .card,
        .empty {
            padding: 24px;
            border: 1px solid var(--panel-border);
            background: rgba(255, 250, 242, 0.9);
            box-shadow: 0 18px 40px rgba(43, 37, 31, 0.08);
        }

        .card {
            display: grid;
            gap: 14px;
        }

        .card-label {
            margin: 0;
            font-size: 0.78rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--muted);
            font-family: Arial, sans-serif;
        }

        .card-title {
            margin: 0;
            font-size: 2rem;
            line-height: 1;
        }

        .card-path {
            margin: 0;
            color: var(--muted);
            font-family: Consolas, monospace;
            font-size: 0.95rem;
        }

        .visit {
            display: inline-flex;
            width: fit-content;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            background: var(--ink);
            color: #fffaf4;
            text-decoration: none;
            font-family: Arial, sans-serif;
            font-weight: 700;
            letter-spacing: 0.04em;
            transition: transform 160ms ease, background-color 160ms ease;
        }

        .visit:hover,
        .visit:focus-visible {
            background: var(--accent);
            transform: translateY(-2px);
        }

        .empty {
            margin-top: 28px;
        }

        .empty h2 {
            margin: 0 0 10px;
            font-size: 1.8rem;
        }

        .empty p {
            margin: 0;
            color: var(--muted);
            font-family: Arial, sans-serif;
            line-height: 1.7;
        }

        @media (max-width: 640px) {
            .shell {
                width: min(100% - 20px, 1100px);
                padding: 20px 0 36px;
            }

            .hero,
            .card,
            .empty {
                padding: 20px;
            }

            h1 {
                max-width: none;
            }
        }
    </style>
</head>
<body>
    <main class="shell">
        <section class="hero">
            <p class="eyebrow">ANT Signage SG</p>
            <h1>Available site folders</h1>
            <p>
                This index is generated from the folders in this project root. A visit button only appears when the folder exists
                and contains its own index page.
            </p>
            <div class="count-chip"><?php echo count($sites); ?> site<?php echo count($sites) === 1 ? '' : 's'; ?> ready</div>
        </section>

        <?php if ($sites !== []): ?>
            <section class="grid" aria-label="Available websites">
                <?php foreach ($sites as $site): ?>
                    <article class="card">
                        <p class="card-label">Subfolder</p>
                        <h2 class="card-title"><?php echo htmlspecialchars($site, ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="card-path">./<?php echo htmlspecialchars($site, ENT_QUOTES, 'UTF-8'); ?>/</p>
                        <a class="visit" href="<?php echo rawurlencode($site); ?>/">Visit website</a>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <section class="empty">
                <h2>No subfolder sites found</h2>
                <p>Add a folder with an index.html or index.php file and it will show up here automatically.</p>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>