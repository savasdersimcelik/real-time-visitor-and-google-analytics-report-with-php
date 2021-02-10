<?php

require __DIR__ . '/vendor/autoload.php';

$viewId = "774XXXXX"; // İzleme Kimliği ID Değeriniz

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/kendi-dosyanızın-adı.json');     // Google Console'dan aldığınız JSON Dosyası
$client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);

$analytics = new Google_Service_Analytics($client);

$result = $analytics->data_ga->get(
    'ga:' . $viewId,
    '30daysAgo',
    'today',
    'ga:newUsers,ga:sessions,ga:pageviews,ga:hits',
    'today',
    [
        'dimensions' => 'ga:date'
    ]
);

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Tarih</th>
    <th>Yeni Kullanıcı</th>
    <th>Oturum</th>
    <th>Sayfa Görüntüleme</th>
    <th>Hit</th>
  </tr>
  <?php
    foreach ($result['rows'] as $key => $value) { 
        $year = substr($value[0], 0,4);
        $month = substr($value[0], 4,2);
        $day = substr($value[0], 6,2);    
    ?>
        <tr>
            <td><?php echo $year . '-' . $month . '-' . $day; ?></td>
            <td><?php echo $value[1]; ?></td>
            <td><?php echo $value[2]; ?></td>
            <td><?php echo $value[3]; ?></td>
            <td><?php echo $value[4]; ?></td>
        </tr>
    <?php } ?>
  
</table>

</body>
</html>
