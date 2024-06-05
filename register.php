<?php
require_once('config.php');

// Preleva i dati dal form e sanitizza l'input
$email = $connessione->real_escape_string($_POST['email']);
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

// Verifica se l'username esiste già
$sql = "SELECT username FROM utenti WHERE username = ?";
$stmt = $connessione->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Username esiste già, reindirizza con un messaggio di errore
    header("Location: utente.php?error=username_taken");
    exit();
} else {
    // Verifica della password
    $password_pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?=.*[a-z]).{5,}$/';
    if (!preg_match($password_pattern, $password)) {
        // Password non rispetta i requisiti, memorizza il messaggio di errore temporaneamente
        session_start();
        $_SESSION['password_error'] = "La password deve contenere almeno 5 caratteri, una lettera maiuscola, un numero e un carattere speciale.";
        
        // Reindirizza alla pagina di registrazione
        header("Location: utente.php");
        exit();
    }

    // Hash della password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query di inserimento
    $sql = "INSERT INTO utenti (email, username, password) VALUES (?, ?, ?)";
    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("sss", $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registrazione effettuata con successo";
       
         header("Location: index.php");
    } else {
        echo "Errore durante la registrazione utente. " . $stmt->error;
    }
}

$stmt->close();
$connessione->close();
?>
