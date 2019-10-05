<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body>
        <div id="app">
            <router-view></router-view>

            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
