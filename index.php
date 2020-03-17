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
    </head>
    <body>

        <div id="board" style="width: 400px"></div>

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
