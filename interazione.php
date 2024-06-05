<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo con Select e Calendario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 20px;
        }

        h2 {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24 px;
            color: black;
        }
    </style>
</head>

<body>

    <h2>Prenota un test ride</h2>

    <form id="bookingForm" action="processo_tabella.php" method="POST" onsubmit="return validateForm()">

        <div class="form-group">
            <label for="nome">nome:</label>
            <input type="text" name="nome" class="form-control" />
        </div>

        <div class="form-group">
            <label for="modello">Seleziona un modello:</label>
            <select name="modello" class="form-control">
                <option value="">--Seleziona un Modello--</option>
                <option value="Duke">Duke</option>
                <option value="Enduro">Enduro</option>
                <option value="Travel">Travel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Event Date & Time:</label>
            <input type="datetime-local" id="event_dt" name="event_dt" class="form-control" />
        </div>

        <button type="button" id="submitBtn" class="btn btn-primary">Invia</button>

    </form>

    <?php
    if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
    }
    ?>

    <script>
        document.getElementById('submitBtn').addEventListener('click', async function() {
            if (validateForm()) {
                await submitForm();
            }
        });

        async function submitForm() {
            const form = document.getElementById('bookingForm');
            const formData = new FormData(form);

            try {
                const response = await fetch('processo_tabella.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    alert('Prenotazione effettuata con successo!');
                    console.log(result);
                } else {
                    alert('Si è verificato un errore: ' + result.message);
                }
            } catch (error) {
                console.error('Errore nella richiesta:', error);
                alert('Si è verificato un errore nella comunicazione con il server.');
            }
        }

        function validateForm() {
            var eventDateTime = new Date(document.getElementById("event_dt").value);
            var dayOfWeek = eventDateTime.getDay();
            var hour = eventDateTime.getHours();

            // Verifica che il giorno sia da lunedì a venerdì
            if (dayOfWeek < 1 || dayOfWeek > 5) {
                alert("Le prenotazioni sono disponibili solo dal lunedì al venerdì.");
                return false;
            }

            // Verifica che l'ora sia tra 9:00-12:00 e 16:00-18:00
            if (!((hour >= 9 && hour < 12) || (hour >= 16 && hour < 18))) {
                alert("Le prenotazioni sono disponibili solo tra le 9:00-12:00 e le 16:00-18:00.");
                return false;
            }

            // Verifica che l'ora sia selezionata a mezz'ora
            var minutes = eventDateTime.getMinutes();
            if (minutes !== 0 && minutes !== 30) {
                alert("Seleziona un orario a mezz'ora (es. 9:00, 9:30, ecc).");
                return false;
            }

            // Altrimenti, il modulo è valido
            return true;
        }
    </script>


</body>

</html>