<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "playqueue");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_review'])) {
        if (!isset($_SESSION['nome_usuario'])) {
            echo "Erro: Usuário não autenticado.";
            exit();
        }

        $username = $_SESSION['nome_usuario'];
        $review_text = $_POST['user_review'];
        $platform = $_POST['plataforma'];
        $rating = intval($_POST['rating_data']);

        $sql_query = "INSERT INTO reviews (nome_usuario, nota_usuario, texto_review, plataforma)
        VALUES ('$username', '$rating', '$review_text', '$platform')";

        $query_run = mysqli_query($db, $sql_query);

        if ($query_run)
            $_SESSION['status'] = "Review salva com sucesso!";
        else
            $_SESSION['status'] = "A review não pôde ser salva";

        header("Location: index.php");
    }

?>