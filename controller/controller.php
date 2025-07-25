<?php
// Use __DIR__ to get the absolute path to the current directory
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/model.php';

$config = require __DIR__ . '/../config/config.php';
$model = new Model($config['nasa_api']['endpoint'], $config['nasa_api']['api_key']);

try {
    $date = $_GET['date'] ?? null;
    $apodData = $model->getApodData($date);

    if (isset($apodData['error'])) {
        $apodData['error_message'] = $apodData['error']['message'] ?? 'Unknown API error';
    }

} catch (Exception $e) {
    $apodData = ['error_message' => $e->getMessage()];
}

require_once __DIR__ . '/../view/view.php';
renderApodView($apodData);