<?php

require __DIR__ . '/vendor/autoload.php';

$viewId = "774XXXXX"; // İzleme Kimliği ID Değeriniz

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/kendi-dosyanızın-adı.json');     // Google Console'dan aldığınız JSON Dosyası
$client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);

$analytics = new Google_Service_Analytics($client);

$result = $analytics->data_realtime->get(
    'ga:' . $viewId,
    'rt:activeVisitors',
    [
        'dimensions' => 'rt:pagePath,rt:country,rt:city,rt:longitude,rt:latitude'
    ]
);

$arr = [
    'online' => $result->getTotalResults(),
    'data' => $result->getRows()
];

echo json_encode($arr);

?>
