<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Metas -->
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:w<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Karla:wght@200&display=swap" rel="stylesheet">

        <!-- Styles -->

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
