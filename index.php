<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Шахмотные дебюты</title>
        <!-- взято от сюда https://www.flaticon.com/packs/chess-3 -->
        <link rel="shortcut icon" href="/favicon.png" type="image/png">

        <!-- jquery -->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>

        <!-- bootstrap -->
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

        <!-- chess board -->
        <link rel="stylesheet" href="/node_modules/@chrisoakman/chessboardjs/dist/chessboard-1.0.0.min.css">
        <script src="/node_modules/@chrisoakman/chessboardjs/dist/chessboard-1.0.0.min.js"></script>

        <!-- js tree -->
        <link rel="stylesheet" href="/node_modules/jstree/dist/themes/default/style.min.css">
        <script src="/node_modules/jstree/dist/jstree.min.js"></script>

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
                    <div id="chess-board" style="width: 400px; margin: 0 auto"></div>
                </div>
                <div class="col-md-6">
                    <div id="tree"></div>
                </div>
            </div>
        </div>


        <script type="text/javascript">


            $(function() {
                $('#tree').jstree({
                    "plugins": [
                        // "types"
                    ],
                    // "types": {
                    //
                    //     "folder": {
                    //         "icon": "fa fa-folder",
                    //     },
                    //     "aim": {
                    //         "icon": "fa fa-crosshairs",
                    //     },
                    //     "action": {
                    //         "icon": "fa fa-fire-alt",
                    //     },
                    //     "progress": {
                    //         "icon": "fa fa-arrow-right",
                    //     },
                    //     "note": {
                    //         "icon": "fa fa-sticky-note",
                    //     },
                    // },
                    'core': {
                        "multiple": false, // запрет выделить несколько узлов
                        "animation": 0, // скорость анимации
                        'force_text': true,
                        'data': {
                            'url': 'data/ajax.php',
                            'data': function (node) {
                                return {'id': node.id}
                            }
                        }
                    }
                });
            });


            var config = {
                pieceTheme: '/chesspieces/wikipedia/{piece}.png',
                position: 'start'
            };

            var board = Chessboard('chess-board',config)
        </script>
    </body>
</html>
