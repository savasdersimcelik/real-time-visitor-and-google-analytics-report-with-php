<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        function getRealtimeData() {
            $.post('realtime-analytics.php', {}, function (response) {
                $('#online-users').text(response.online);
                $('#online-users-data').html('');
                $.each(response.data, function (key, val) {
                    $('#online-users-data').append('<li>' +
                        'Sayfa: ' + (val[0]) + ' <br> ' +
                        'Lokasyon: ' + (val[1] + '/' + val[2]) + '<br>' +
                        'Kaç Kişi: ' + (val[5]) +
                        '</li>');
                });
                console.log('çalıştı!');
            }, 'json');
        }

        getRealtimeData();
        setInterval(getRealtimeData, 1000);
    </script>
</head>
<body>

<div id="realtime-data">
    <h3>
        sevim sevilgen
        Online <span id="online-users"></span> kişi var
    </h3>
    <ul id="online-users-data"></ul>
</div>

</body>
</html>