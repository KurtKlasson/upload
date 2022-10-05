    <?php 
    // skriver ut alla variabler som sänts via formulär
    header('Content-type: text/plain');
    
    if ($_POST["username"] === "Valet2022") {
        if ($_POST["password"] === "Moderaterna") {
            echo "Inloggning avklarad";
            session_start();
            $_SESSION["username"] = $_POST["username"];
            header("Location: upload.html"); 
        }
        else {
            echo "Fel Lösenord";
        }
    }
    else {
        echo "Inloggning misslyckades";
    }