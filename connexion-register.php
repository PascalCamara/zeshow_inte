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
    </style>

<div class="connexion-box">

    <div class="container connexion-container">

        <p class="h2">Parmis nous</p>

        <a href="#" class="btn-connexion">Inscription</a>
        <a href="#" class="btn-connexion">Connexion</a>

    </div>

</div>
<?php  include "layouts/footer.php"; ?>