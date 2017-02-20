<?php  include "layouts/header.php"; ?>


    <style>
        .connexion-box {
            background-image: url(./img/bg-connexion.png);
            background-position: center;
            background-size: cover;
            padding: 75px 0px;
        }
        .container.connexion-container {
            background: white;
            border-bottom: 1px solid grey;
            padding: 45px;
            text-align: center;
        }
        .connexion-container p.h2 {
            margin: 20px 0px 40px 0px;
        }
        a.btn-connexion {
            display: block;
            padding: 50px;
            background: #43b77a;
            width: 60%;
            color: white;
            font-size: 2em;
            font-weight: 200;
            margin: 60px auto;
            border-radius: 10px;
            border-bottom: 2px solid #adccbb;
        }

        a:hover {
            text-decoration: none;
        }

        img.message-envoyer-picto {
            margin: 38px;
        }

        a.btn-connexion:hover {
            background-color: #359060;
            transition: all 1s;
        }
    </style>

    <div class="connexion-box">

        <div class="container connexion-container">

            <p class="h2">Merci, votre message à bien été envoyé</p>

            <img src="./img/envoyer.png" class="message-envoyer-picto" alt="">
            <a href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>" class="btn-connexion">Revenir à la page de résultat</a>

        </div>

    </div>
<?php  include "layouts/footer.php"; ?>