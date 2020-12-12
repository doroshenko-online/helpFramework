<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ошибка</title>
</head>
<body>
    <h1>Произошла ошибка</h1>
    <p style="color: red;"><b style="color: #2da5da;">Код ошибки: </b><?= $response ?></p>
    <p style="color: red;"><b style="color: #2da5da;">Текст ошибки: </b><?= $errstr ?></p>
    <p style="color: red;"><b style="color: #2da5da;">Файл ошибки: </b><?= $errfile ?></p>
    <p style="color: red;"><b style="color: #2da5da;">Строка ошибки: </b><?= $errline ?></p>
</body>
</html>