<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fita2 - ex1.2</title>
    
</head>
<body>

    <form method="POST">
        <label for="userName">User:</label>
        <input type="text" name="userName">
        <label for="userPassword">Password:</label>
        <input type="password" name="userPassword">
        <input type="submit" value="Send"/>
    </form>
    
    <?php
        $userDict = ["Pepe" => "pepe1234", "Pepa" => "pepa1234"];

        if (isset($_POST["userName"]) && isset($_POST["userPassword"])) {
            if (array_key_exists($_POST["userName"], $userDict)){
                if ($userDict[$_POST["userName"]] == $_POST["userPassword"]) {
                    echo "Correct Login";
                }

                else {
                    echo "Incorrect Login";
                }
            }
            else {
                echo "Incorrect Login";
            }
        }
        
    ?>


</body>
</html>