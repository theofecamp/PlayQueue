<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayQueue</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/9506ca6b63.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:ital@0;1&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if (isset($_SESSION['status'])) {
            echo "<h4>" . $_SESSION['status'] . "</h4>";
            unset($_SESSION['status']);
        }
    ?>
    <header>
    <nav>
        <div id="top-page-logo">
            <img src="imgs/imagem_2025-01-25_163137945-removebg-preview.png" alt="">
        </div>
        <a href="login.php"><div id="entrar" class="nav-options">
                <p>Entrar</p>
        </div></a>
        <a href="cadastro.php"><div id="cadastrar" class="nav-options">
                <p>Cadastrar</p>
        </div></a>
        <a href="creditos.html"><div id="creditos" class="nav-options">
            <p>Créditos</p>
        </div></a>
        <a href="myReviews.php">
            <div id="reviews" class="nav-options">
                <p>Minhas Reviews</p>
            </div>
        </a>
    </nav>
    </header>
    <div id="jogos-destaque-h2"><h2>Jogos em Destaque:</h2></div>
    <div class="categorias">
        <div class="destaque-column" class="spider2">
            <div class="overlay-game overlay-spider">
                <p class="text-game spider-man-2">Marvel's spider-man 2</p>
            </div>
            <img src="imgs/spider2.avif" class="jogo" data-game-name="spider-man-2">
        </div>
        <div class="destaque-column" class="gow">
            <div class="overlay-game overlay-gow">
                <p class="text-game gow-ragnarok">God of War: Ragnarok</p>
            </div>
            <img src="imgs/gow.webp" class="jogo" data-game-name="gow-ragnarok">
        </div>
        <div class="destaque-column" class="ratchet">
            <div class="overlay-game overlay-ratchet">
                <p class="text-game ratchet-clank">Ratchet & Clank: em outra dimensão
                </p>
            </div>
            <img src="imgs/ratchet.avif" class="jogo" data-game-name="ratchet-clank">
        </div>
        <div class="destaque-column"  class="horizon">
            <div class="overlay-game overlay-horizon">
                <p class="text-game horizon">Horizon: Zero Dawn</p>
            </div>
            <img src="imgs/horizon.avif" class="jogo" data-game-name="horizon">
        </div>
    </div>
    <div id="lançamentos-h2"><h2>Lançamentos:</h2></div>
    <div class="categorias">
        <div class="lançamentos-column" class="">
            <div class="overlay-game overlay-doom">
                <p class="text-game doom">Doom: Eternal
                </p>
            </div>
            <img src="imgs/doomE.avif" class="jogo" data-game-name="doom">

        </div>
        <div class="lançamentos-column"  class="">
            <div class="overlay-game overlay-fc25">
                <p class="text-game eafc-25">FC 2025
                </p>
            </div>
            <img src="imgs/fifa25.avif" class="jogo" data-game-name="eafc-25">

        </div>
        <div class="lançamentos-column" class="">
            <div class="overlay-game overlay-nba25">
                <p class="text-game nba-2k25">NBA 2k25
                </p>
            </div>
            <img src="imgs/nba25.avif" class="jogo" data-game-name="nba-2k25">

        </div>
        <div class="lançamentos-column" class="">
            <div class="overlay-game overlay-bf42">
                <p class="text-game bf-2042">Battlefield: 2042
                </p>
            </div>
            <img src="imgs/bf42.f98212b5-9c47-475e-a5bf-3530608585ca" class="jogo" data-game-name="bf-2042">

        </div>

    </div>
    <div id="bem-avaliados-h2"><h2>Bem avaliados:</h2></div>
    <div class="categorias" id="bem-avaliados-row">
        <div class="bem-avaliados-column" class="">
            <div class="overlay-game overlay-rdd">
                <p class="text-game rdr2">Red Dead Redemption
                </p>
            </div>
            <img src="imgs/rdd.avif" class="jogo" data-game-name="rdr2">

        </div>
        <div class="bem-avaliados-column" class="">
            <div class="overlay-game overlay-hlm">
                <p class="text-game hotline-miami">Hotline Miami
                </p>
            </div>
            <img src="imgs/hlm.avif" class="jogo" data-game-name="hotline-miami">

        </div>
        <div class="bem-avaliados-column" class="">
            <div class="overlay-game overlay-fnaf">
                <p class="text-game fnaf-itp">FNaF: Into The Pit
                </p>
            </div>
            <img src="imgs/fnafitp.avif" class="jogo" data-game-name="fnaf-itp">

        </div>
        <div class="bem-avaliados-column" class="">
            <div class="overlay-game overlay-p3r">
                <p class="text-game p3r">Persona 3 Reload
                </p>
            </div>
            <img src="imgs/p3r.avif" class="jogo" data-game-name="p3r">
        </div>
    </div>
    <div id="acao-aventura-h2"><h2>Ação e Aventura:</h2></div>
    <div class="categorias" id="acao-aventura-row">
        <div class="acao-aventura-column" class="">
            <div class="overlay-game overlay-ds">
                <p class="text-game death-stranding">Death Stranding
                </p>
            </div>
            <img src="imgs/ds.webp" class="jogo" data-game-name="death-stranding">

        </div>
        <div class="acao-aventura-column" class="">
            <div class="overlay-game overlay-jedi">
                <p class="text-game sw-jedi-survivor">Star Wars: Jedi Survivor
                </p>
            </div>
            <img src="imgs/jedis.avif" class="jogo" data-game-name="sw-jedi-survivor">
        </div>
        <div class="acao-aventura-column" class="">
            <div class="overlay-game overlay-hifi">
                <p class="text-game hifi-rush">Hifi-Rush
                </p>
            </div>
            <img src="imgs/hifi-rush.5083e064-e3e9-4a23-bb10-684f7be75d15" class="jogo" data-game-name="hifi-rush">

        </div>
        <div class="acao-aventura-column" class="">
            <div class="overlay-game overlay-indiana">
                <p class="text-game indiana">Indiana Jones e o Grande Círculo
                </p>
            </div>
            <img src="imgs/indiana.avif" class="jogo" data-game-name="indiana">
    </div>
    <div class="listWindowOpen">
        <div id="exit-list">
            <a>×</a>
        </div>
        <div>
            <a href="#" id="reset-btn" class="reset">↻</a>
        </div>
        <form method="POST" id="review-form">
            <div data-productid="39" class="ratings">
                <i class="stars fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                <i class="stars fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                <i class="stars fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                <i class="stars fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                <i class="stars fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
            </div>
            <div>
                <input name="user_review" placeholder="Escreva sua review aqui..." id="review" class="form-control" type="text">
            </div>
            <div class="select-platform-container">
                <select name="plataforma" class="dropdown" form="review-form">
                    <option value="">Plataforma</option>
                    <option value="pc">PC</option>
                    <option value="xbox">Xbox</option>
                    <option value="playstation">Playstation</option>
                    <option value="nintendo">Nintendo</option>
                </select>
                <div class="icon-container">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="review-save-button" name="save_review">Salvar review</button>
        </form>
    </div>
    <div id="dark-overlay"></div>
    <script src="darkOverlay-2.js"></script>
    <script src="ratingSystem.js"></script>
    <script src="review.js"></script>
</body>
</html>
