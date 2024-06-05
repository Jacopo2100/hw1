<?php
session_start();

// Verifica che il metodo della richiesta sia POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni i dati dal form
    $nome = $_POST['nome'];
    $modello = $_POST['modello'];
    $event_dt = $_POST['event_dt'];

    // Esegui la logica di salvataggio qui (es. salvataggio nel database)

    // Risposta di successo
    $response = [
        'status' => 'success',
        'message' => 'Prenotazione effettuata con successo!',
        'data' => [
            'nome' => $nome,
            'modello' => $modello,
            'event_dt' => $event_dt
        ]
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Risposta per richieste non POST
    http_response_code(405);
    $response = [
        'status' => 'error',
        'message' => 'Method Not Allowed'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
