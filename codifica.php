<!DOCTYPE html>
<html>
    <head>
        <title>CODIFICA</title>
    </head>
    <body>
        <form action="logica/LogicaCodifica.php" method="POST">
            <label for="k1">chiave 1 (1-25):</label>
            <input type="number" name="k1" min="1" max="26">
            <br>
            <label for="testo">TESTO DA CODIFICARE:</label>
            <br>
            <textarea type="message" name="testo" rows="10" cols="30">
            </textarea>
            <br>
            <input type="submit" value="CODIFICA">
        </form>
        <br>
                <?php
                    session_start();
                    echo"$_SESSION[testo_crittografato]";
                ?>
    </body>
</html>