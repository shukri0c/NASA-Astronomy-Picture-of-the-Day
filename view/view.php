<!DOCTYPE html>
<html>
<head>
    <title>NASA APOD - <?= $title ?? 'Astronomy Picture of the Day' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #0B3D91;
            border-bottom: 2px solid #0B3D91;
            padding-bottom: 10px;
        }
        .apod-media {
            max-width: 100%;
            margin: 20px 0;
            border: 1px solid #ddd;
        }
        .error {
            color: #d9534f;
            padding: 10px;
            background: #f2dede;
            border: 1px solid #ebccd1;
        }
        .date-selector {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
    <h1>NASA Astronomy Picture of the Day</h1>
    
    <?php if (isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php else: ?>
        <h2><?= $title ?></h2>
        <p><em><?= $date ?></em></p>
        
        <?php if ($media_type === 'video'): ?>
            <iframe class="apod-media" width="100%" height="400" src="<?= $url ?>" frameborder="0" allowfullscreen></iframe>
        <?php else: ?>
            <img class="apod-media" src="<?= $url ?>" alt="<?= $title ?>">
        <?php endif; ?>
        
        <p><?= nl2br($explanation) ?></p>
        <p><strong>Credit:</strong> <?= $copyright ?></p>
    <?php endif; ?>
    
    <div class="date-selector">
        <form method="get">
            <label for="date">View APOD from another date:</label>
            <input type="date" id="date" name="date" max="<?= date('Y-m-d') ?>">
            <button type="submit">Go</button>
        </form>
    </div>
</body>
</html>