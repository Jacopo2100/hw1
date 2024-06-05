<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrati</title>
        <style>
            body{
                display: flex;
                justify-content: center;

            }
            form{
                display: flex;
                flex-direction: column;
                width: 300px;
                
            }
            form input{
                margin-bottom: 20px;
            }



        </style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#username').on('input', function() {
                var username = $(this).val();
                if (username.length > 0) {
                    $.ajax({
                        url: 'check_username.php',
                        type: 'POST',
                        data: { username: username },
                        success: function(response) {
                            if (response == 'taken') {
                                $('#username-status').text('Username non disponibile').css('color', 'red');
                            } else {
                                $('#username-status').text('Username disponibile').css('color', 'green');
                            }
                        }
                    });
                } else {
                    $('#username-status').text('');
                }
            });

            $('#password').on('input', function() {
                var password = $(this).val();
                var passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?=.*[a-z]).{5,}$/;
                if (!passwordPattern.test(password)) {
                    $('#password-error').text('La password deve contenere almeno 5 caratteri, una lettera maiuscola, un numero e un carattere speciale.').css('color', 'red');
                } else {
                    $('#password-error').text('').css('color', 'inherit');
                }
            });
        });
    </script>


    </head>

    <body>
        <form action="register.php" method="POST">
            <h2>Registrati</h2>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <span id="password-error" style="color: red;"></span>
            <?php
            // Controlla se è stato memorizzato un messaggio di errore per la password
            session_start();
            if (isset($_SESSION['password_error'])) {
                echo '<span style="color: red;">' . $_SESSION['password_error'] . '</span>';
                unset($_SESSION['password_error']); // Rimuove il messaggio di errore dalla sessione
            }
        ?>


            <input type="submit" value="invia">
            <p></p> Hai già un account? <a href="login.html">Accedi</a></p>

            <?php if(isset($_GET['error']) && $_GET['error'] == 'username_taken'): ?>
                <p style="color:red;">Username non disponibile</p>
            <?php endif; ?>




        </form>






    </body>







</html>