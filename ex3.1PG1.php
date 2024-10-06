<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fita2 - ex3.1PG1</title>
    <style>
        body {
            background-color: <?php echo isset($_POST['color']) ? htmlspecialchars($_POST['color']) : 'white'; ?>;
            transition: background-color 0.5s;
        }
    </style>
</head>
<body>

    <h1>Selecciona un color de fons</h1>
    <form action="" method="POST">
        <label for="color">Escull un color:</label>
        <select id="color" name="color" required>
            <option value="">-- Selecciona un color --</option>
            <option value="red">Roig</option>
            <option value="green">Verd</option>
            <option value="blue">Blau</option>
        </select>
        <input type="submit" value="Canvia el color">
    </form>

</body>
</html>
