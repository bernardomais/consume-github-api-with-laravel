<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSUME GITHUB API WITH LARAVEL</title>
    <style>
        h1 {
            display: block;
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Noto Sans",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
        }
    </style>
</head>
<body>
    <h1>CONSUME GITHUB API WITH LARAVEL</h1>
    <div>
        <ul>
            <li>Login: {{ $github['login'] }}</li>
            <li>Name: {{ $github['name'] }}</li>
            <li>Bio: {{ $github['bio'] }}</li>
            <li>Repositories: {{ $github['public_repos'] }}</li>
        </ul>
    </div>
</body>
</html>