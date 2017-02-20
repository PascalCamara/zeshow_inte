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

        .form-connexion .form-group {
            width: 80%;
            margin: 40px auto;
        }

        a:hover {
            text-decoration: none;
        }

        .form-connexion input {
            padding: 20px;
            border: solid grey;
        }

        table {
            width: 100%;
            border-radius: 10px;
        }

        th {
            text-align: center;
            padding: 10px;
            border: 2px solid grey;
        }

        td {
            border: 2px solid grey;
            height: 56px;
        }

        tr:first-child {
            border-bottom: 3px solid rgba(0, 0, 0, 0.37);
        }

        textarea#exampleTextarea {
            border: solid grey;
        }
    </style>

    <div class="connexion-box">

        <div class="container connexion-container">

            <p class="h2">Connexion</p>

            <form action="" class="form-connexion">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mot de passe">
                            </div>

                            <div class="form-group">

                                <label for="">Date</label>
                                <table>
                                    <tr>
                                        <th>L</th>
                                        <th>M</th>
                                        <th>M</th>
                                        <th>J</th>
                                        <th>V</th>
                                        <th>S</th>
                                        <th>D</th>
                                    </tr>

                                    <tr>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                    </tr>

                                    <tr>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                    </tr>

                                    <tr>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                    </tr>

                                    <tr>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                    </tr>

                                    <tr>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                    </tr>

                                </table>

                            </div>


                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea" rows="15" placeholder="Votre message"></textarea>
                            </div>
                            <a href="#" class="btn-connexion">Envoyer</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
<?php  include "layouts/footer.php"; ?>