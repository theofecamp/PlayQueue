<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reviews.css">
    <title>Minhas Reviews</title>
</head>
<body>
    <header>
        <a href="index.php"> <img src="imgs/arrow_back_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""> </a>
        <nav>
            <div id="top-page-logo">
                <img src="imgs/imagem_2025-01-25_163137945-removebg-preview.png" alt="">
            </div>
        </nav>
    </header>
    <section id="reviews-section">
                <?php
                    $db = mysqli_connect("localhost", "root", "", "playqueue");

                    if(!$db)
                        die("ERRO: " . mysqli_connect_error());

                    $username = $_SESSION['nome_usuario'];

                    $sql = "SELECT id_review, nota_usuario, texto_review, plataforma from reviews
                    WHERE nome_usuario = '$username'";

                    $result = mysqli_query($db, $sql);

                    if ($result -> num_rows <= 0) {
                        echo "<h2 id='empty'>Você não fez nenhuma review ainda!</h2>";
                        exit;
                    }

                    echo "<h2>Minhas Reviews</h2>
                    <article id='reviews-list'>
                        <table>
                            <tr>
                                <th>Review ID</th>
                                <th>Nota</th>
                                <th>Texto</th>
                                <th>Plataforma</th>
                            </tr>";

                    while($row = $result-> fetch_assoc()) {
                        echo "<tr><td>" . $row['id_review'] . "</td><td>" . $row['nota_usuario'] . " / 5 </td><td class='texto-table'>" . $row['texto_review'] . "</td><td class='texto-table'>" . $row['plataforma'] . "</td></tr>";
                    }
                ?>
            </table>
        </article>
    </section>
</body>
</html>