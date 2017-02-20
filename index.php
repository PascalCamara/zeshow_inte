<?php  include "layouts/header.php"; ?>

    <style>
        .index-artiste .row:hover {
            background-color: #c3c3c3;
            transition: all 1s;
            cursor: pointer;
        }
    </style>

    <div class="jom-index" id="jom-index">
        <div class="container">
            <form action="" class="form-index">
                <input type="text" placeholder="Mots clés" class="element-form-index">
                <input type="text" placeholder="Villen Code postal" class="element-form-index">
                <a class="btn-search" href="#">Rechercher</a>
            </form>
        </div>
    </div>

    <div class="section" style="background-color: #e6e6e6;">

        <div class="container">
            <p class="h2">Ils font appel à nos services</p>

            <div class="row" style="margin-top: 65px;
    display: inline-block;
    text-align: center;
    width: 100%;">
                <div class="item-service">
                </div>
                <div class="item-service">
                </div>
                <div class="item-service">
                </div>
                <div class="item-service">
                </div>
            </div>
        </div>


    </div>



    <div class="section">

        <div class="sec-header">
            <p class="h3">Parcourez nos offres selon les métiers</p>
        </div>
        <div class="sec-item">
            <p class="sec-p">Artistes de cirque</p>
            <p class="sec-plus">+</p>
        </div>
        <div class="sec-item">
            <p class="sec-p">Chanteur/euse</p>
            <p class="sec-plus">+</p>
        </div>
        <div class="sec-item">
            <p class="sec-p">Comédien/ne</p>
            <p class="sec-plus">+</p>
        </div>
        <div class="sec-item">
            <p class="sec-p">Danceur/seuse</p>
            <p class="sec-plus">+</p>
        </div>
        <div class="sec-item">
            <p class="sec-p">Musicien/ne</p>
            <p class="sec-plus">+</p>
        </div>

    </div>


    <div class="section index-artiste container">

        <div class="row">

            <div class="col-md-4 col-sm-12">
                <img src="./img/acount.png" alt="">
            </div>

            <div class="col-md-8 col-sm-12">
                <p class="h4">
                    Nom Prénom
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8 col-sm-12">
                <p class="h4">
                    Nom Prénom
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
            </div>

            <div class="col-md-4 col-sm-12">
                <img src="./img/acount.png" alt="">
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-12">
                <img src="./img/acount.png" alt="">
            </div>

            <div class="col-md-8 col-sm-12">
                <p class="h4">
                    Nom Prénom
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
            </div>
        </div>
    </div>


    <script>
        document.querySelector(".index-artiste .row").addEventListener("click", function() {
            var url = "http://" + window.location.host + "" + window.location.pathname + "artiste.php";
            console.log(url);
            window.location.href = url;
        });
    </script>
<?php  include "layouts/footer.php"; ?>