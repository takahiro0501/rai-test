
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calender.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>カレンダーテスト</h1>
    <div class="wrapper">
        <h1 id="header"></h1>
        <div id="next-prev-button">
            <button id="prev" onclick="prev()">前の月</button>
            <button id="next" onclick="next()">次の月</button>
        </div>
        <div id="calendar"></div>
    </div>

    <div id="all_show_result">
    </div>
    <script src="{{ asset('/js/calender.js') }}"></script>

</body>
</html>

