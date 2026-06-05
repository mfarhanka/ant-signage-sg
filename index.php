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
    <title>ANT Signage SG</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }

        .visit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            padding: 14px 20px;
            background: #111111;
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            border: 1px solid #111111;
            transition: background-color 160ms ease, color 160ms ease;
        }

        .visit:hover,
        .visit:focus-visible {
            background: #ffffff;
            color: #111111;
        }

        @media (max-width: 640px) {
            body {
                padding: 16px;
            }

            .buttons {
                width: 100%;
            }

            .visit {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php if ($sites !== []): ?>
        <main class="buttons" aria-label="Available websites">
            <?php foreach ($sites as $site): ?>
                <a class="visit" href="<?php echo rawurlencode($site); ?>/"><?php echo htmlspecialchars($site, ENT_QUOTES, 'UTF-8'); ?></a>
            <?php endforeach; ?>
        </main>
    <?php endif; ?>
</body>
</html>