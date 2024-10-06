<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fita2 - ex4.1PG2</title>
</head>
<body>

    <h1>Resultat de la Comprovació de la Contrasenya</h1>

    <?php
        // Comprovar si s'han enviat les dades
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contrasenya1 = $_POST['contrasenya1'];
            $contrasenya2 = $_POST['contrasenya2'];

            // Comprovar si les contrasenyes coincideixen
            if ($contrasenya1 !== $contrasenya2) {
                echo "<p style='color:red;'>ERROR: les contrasenyes han de coincidir.</p>";
            } else {
                // Comprovar si la contrasenya conté almenys un número
                if (!preg_match('/[0-9]/', $contrasenya1)) {
                    echo "<p style='color:red;'>ERROR: la contrasenya ha de tenir al menys un número.</p>";
                } else {
                    echo "<p style='color:green;'>La contrasenya és correcta.</p>";
                }
            }
        } else {
            echo "<p style='color:red;'>ERROR: No s'han enviat les dades correctament.</p>";
        }
    ?>

</body>
</html>

