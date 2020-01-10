<html>
    <body>
        <h1>Apparel prices:</h1>
        <ul>
            <?php
                foreach(json_decode(file_get_contents('http://prices')) as $price_item) {
                    echo "<li>$price_item->name : $price_item->price $</li>";
                } 
            ?>
        </ul>
    </body>
</html>