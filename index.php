<?php
    require_once("db.php");
    require_once("models/Comentarios.php");
    require_once("DAO/ComentariosDAO.php");

    $comentarios = new Comentarios();
    $comentariosDao = new ComentariosDAO($conn);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="scripts/jquery-3.6.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários com ajax</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="container">
        <h1>Escreva seu comentário</h1>

        <!-- Formulário -->

        <div class="form-box">

            <form action="" method="post">
    
                <div class="input-box">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
    
                <div class="input-box">
                    <label for="comentario">Comentário:</label>
                    <textarea name="comentario" id="comentario"  rows="5" required></textarea>
                </div>

                <button type="button" id="form-btn">Enviar</button>
    
            </form>
        </div>

        <h3>Comentários:</h3>
        <div class="comments-box">

        </div>

        
    </div>

    <script src="scripts/script.js"></script>
    
</body>
</html>