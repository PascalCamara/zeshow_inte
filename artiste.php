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


        img.artiste-photo {
            width: 170px;
            display: block;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .col-md-4.col-sm-12.artiste-profile p {
            font-size: 1.5em;
            font-weight: 400;
        }

        .border {
            padding: 20px 0px;
            border-right: 1px solid;
        }

        .col-sm-12.description {
            text-align: left;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        a.btn-contacter {
            display: inline-block;
            float: right;
            padding: 15px 30px;
            margin-right: 15px;
            background-color: #e89c18;
            border-radius: 10px;
            color: white;
        }

        .artiste-entreprise-img {
            width: 80px;
            height: 80px;
            background-size: cover;
            background-position: center;
            float: left;
            margin-left: 20px;
        }

        .box-artiste {
            border: 1px solid grey;
            border-radius: 10px;
            box-sizing: border-box;
            padding: 20px;
            margin-bottom: 30px;
        }
        .artiste-right p.h2 {
            font-size: 1.4em;
            margin-top: 0;
            margin-bottom: 4px;
        }

        p.note {
            color: #e89c18;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 0px;
        }

        p.comment {
            margin-bottom: 0;
            font-size: 0.8em;
            color: grey;
            margin-top: 7px;
        }

        .col-sm-8.artiste-left {
            border-right: 1px solid;
        }

        .connexion-box {
            overflow: hidden;
        }

        .media-item p {
            padding: 20px;
            font-weight: 200;
            border: 1px solid;
            margin: 0!important;
            float: left;
            position: relative;
        }
        .media {
            position: absolute;
            right: 0;
            top: -2px;
        }
        a.btn-contacter:hover {
            background-color: #bd8421;
            transition: all 1s;
        }
    </style>

    <div class="connexion-box">

        <div class="container connexion-container">

            <div class="media">
                <div class="media-item">
                    <p class="h2" style="border-left: none; border-bottom: none;">Profil</p>
                    <p class="h2" style="border-left: none;">Photos</p>
                    <p class="h2" style="border-left: none;">Vidéos</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 artiste-profile">

                    <div class="border">
                        <img  class="artiste-photo" src="./img/acount.png" alt="">

                        <p>Nom et prénom</p>

                        <p>Lieu</p>

                        <p>Discipline</p>
                    </div>



                </div>

                <div class="col-md-8 col-sm-12 artiste-description">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 description">
                                <p class="h2">Description</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum enim incidunt pariatur praesentium quasi repellat voluptates? Ad, deleniti doloribus, est exercitationem iure neque, non nostrum placeat quidem temporibus tenetur vitae!</p>

                                <a href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/formulaire-de-contact.php"; ?>" class="btn-contacter">Contacter</a>
                            </div>

                            <div class="col-sm-12" style="text-align: left;    margin-bottom: 30px;">
                                <p>Historique des prestations(s)</p>
                            </div>
                            
                            <div class="col-sm-12">
                                
                                <div class="box-artiste">
                                    
                                    <div class="row">
                                        
                                        <div class="col-sm-8 artiste-left">

                                            <div class="artiste-entreprise-img" style="background-image: url(https://images.pexels.com/photos/33597/guitar-classical-guitar-acoustic-guitar-electric-guitar.jpg?h=350&auto=compress&cs=tinysrgb)"></div>

                                            <p>Nom de lentreprise</p>

                                            <p>Type de prestation</p>

                                        </div>

                                        <div class="col-sm-4 artiste-right">
                                            <p class="h2">Note accordé</p>
                                            <p class="note"> 4.5 / 5</p>
                                            <p class="comment">2 commentaires</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-artiste">

                                    <div class="row">

                                        <div class="col-sm-8 artiste-left">

                                            <div class="artiste-entreprise-img" style="background-image: url(https://images.pexels.com/photos/33597/guitar-classical-guitar-acoustic-guitar-electric-guitar.jpg?h=350&auto=compress&cs=tinysrgb)"></div>

                                            <p>Nom de lentreprise</p>

                                            <p>Type de prestation</p>

                                        </div>

                                        <div class="col-sm-4 artiste-right">
                                            <p class="h2">Note accordé</p>
                                            <p class="note"> 4.5 / 5</p>
                                            <p class="comment">2 commentaires</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-artiste">

                                    <div class="row">

                                        <div class="col-sm-8 artiste-left">

                                            <div class="artiste-entreprise-img" style="background-image: url(https://images.pexels.com/photos/33597/guitar-classical-guitar-acoustic-guitar-electric-guitar.jpg?h=350&auto=compress&cs=tinysrgb)"></div>

                                            <p>Nom de lentreprise</p>

                                            <p>Type de prestation</p>

                                        </div>

                                        <div class="col-sm-4 artiste-right">
                                            <p class="h2">Note accordé</p>
                                            <p class="note"> 4.5 / 5</p>
                                            <p class="comment">2 commentaires</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
<?php  include "layouts/footer.php"; ?>