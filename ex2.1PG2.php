<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fita2 - ex2.1PG2</title>
</head>
<body>
    
    <table>
        <?php
            $quantitat = intval($_POST["quantitat"]);
            for ($i = 0; $i <= $quantitat; $i++) { 
                echo "<tr><td><a href='ex2.1PG3.php?comanda=$i'>Comanda $i</a></td></tr>";
            }
        ?>
    </table>
    
</body>
</html>
