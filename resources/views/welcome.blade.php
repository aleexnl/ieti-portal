<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:w<link rel=" preconnect"
        href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Karla:wght@200&display=swap"
        rel="stylesheet">

    <!-- Styles -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('images/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('images/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/') }}/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        #landingHeader {
            padding: 60px;
        }

        #button {
            font-family: 'Catamaran', sans-serif;
            border: ligh-grey;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

    <title>Landing page</title>

</head>
<header id="landingHeader">
</header>

<body id="landingBody">
    <center>
        <div>
            <h2>Bienvendido al portal de matriculacion web de IETI</h2>
        </div>
        <div>
            <button id="button">Iniciar sesión</button>
            <button id="button">Registrarse</button>
        </div>
    </center>
</body>
<footer id="landingFooter">
</footer>
</body>

</html>