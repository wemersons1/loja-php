<html>
    <head>
        <title>WShop | <?= $data[0] ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" >
    </head>
    <body>
        <header></header>
        
        <main>
            <?php
                require("views/$view.php");
            ?>
        </main>

        <footer></footer>
    </body>

</html>