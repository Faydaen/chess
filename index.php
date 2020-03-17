<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Шахмотные дебюты</title>
        <!-- взято от сюда https://www.flaticon.com/packs/chess-3 -->
        <link rel="shortcut icon" href="/favicon.png" type="image/png">

        <link rel="stylesheet" href="node_modules/@chrisoakman/chessboardjs/dist/chessboard-1.0.0.min.css">
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>

        <script src="node_modules/@chrisoakman/chessboardjs/dist/chessboard-1.0.0.min.js"></script>

        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

        <style>
            /*body {
                background-color: #98a38d;
            }
            .container {
                background-color: white;
            }
            */
             */
        </style>

    </head>
    <body>


    <br>
    <br>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="board" style="width: 400px; margin: 0 auto"></div>
                </div>
                <div class="col-md-6">
                    <!-- treejs-->
                </div>
            </div>
        </div>


        <script type="text/javascript">
            // /home/ghost/web/app/chess/bN.png
            var config = {
                pieceTheme: '/chesspieces/wikipedia/{piece}.png',
                position: 'start'
            };

            var board1 = Chessboard('board',config)
        </script>
    </body>
</html>
