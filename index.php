<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Клиника №1 ЛаЛин</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/fav.png" type="image/png">
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--     <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script> -->

    <script>    
        $(function () {
            $('#carousel-main-screen').carousel();
            $('#carousel-gallery-mob').carousel();

            $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });
            $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });

            $('[data-toggle="tooltip"]').tooltip();
            
            // Выделение цветом нужной страницы
            var location = window.location.href;  
            $('.menu-wrapper a').each(function () {  
                var link = $(this).attr('href');
                if (location == link) { 
                    $(this).addClass('change-color');                
                }
            }); 
            // Конец. Выделение цветом нужной страницы 

        });
    </script>
    <style>
        body {
          padding-right: 0 !important;     
        }
        @font-face {
            font-family: "OpenSansCondensedLight";
            src: url("fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>

</head>
<body>

<?php require_once 'header.php'; ?> 
<?php require_once 'modals.php'; ?> 

<div id="carousel-main-screen" class="carousel slide visible-md-block visible-lg-block" data-ride="carousel">    
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-main-screen" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-main-screen" data-slide-to="1"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="imgs/slide-02.png" alt="">
            <div class="carousel-caption">
                <h2>Забота о красоте</h2>
                <span class="bold">Полный комплекс услуг по косметологии</span><br>
                <span>
                      — инъекционная косметология<br>
                      — коррекция фигуры<br>
                      — лазерная косметология<br>
                      — удаление новообразований кожи<br>
                      — эпиляция<br>
                      — эстетическая косметология
                </span>
            </div>
        </div>
        <div class="item">
            <img src="imgs/slide-01.png" alt="">
            <div class="carousel-caption">
                <h2>Забота о главном</h2>
                <span>Клиника №1 ЛаЛин специализируется на эстетической (терапевтической) медицине. Приоритетным направлением клиники является <span class="bold">лазерная косметология</span>.</span>
            </div>
        </div>              
    </div>
  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-main-screen" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-main-screen" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<h1 class="main-header visible-xs-block visible-sm-block">Полный комплекс услуг по косметологии</h1>
<div class="container-fluid visible-xs-block visible-sm-block">
    <div class="main-screen-mob row">
        <div class="col-md-12">
            <div class="main-screen-wrap text-center">
                <img src="imgs/main-screen-mob.jpg" height="120" alt="">
            </div>
            <div class="services-list-mob">
                <div class="services-text-wrap">
                    <span>• инъекционная косметология<br>
                    • коррекция фигуры<br>
                    • лазерная косметология<br>
                    • удаление новообразований кожи<br>
                    • эпиляция<br>
                    • эстетическая косметология
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid we-moved">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center"><span class="attention-text">Внимание!</span> Мы <a href="#">переехали</a> на новый адрес: г. Ростов-на-Дону, ул. 1-я Круговая, 91.</h3>
        </div>
    </div>
</div>

<div class="container-fluid action-top">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center"><span class="action-text">АКЦИЯ!</span> Спешите успеть!</h3>
        </div>
    </div>
</div>

<div class="container-fluid action-main-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="action-items-wrap">test Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nobis distinctio inventore earum consequatur fuga tempore, maiores saepe eos architecto debitis at provident enim consequuntur odio neque deleniti doloribus, reiciendis.</div>
            <img src="imgs/action-bg.jpg" alt="" width="100%">
        </div>
    </div>
</div>

<div class="container-fluid action-bottom">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">АКЦИЯ ОГРАНИЧЕНА</h3>
        </div>
    </div>
</div>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque dignissimos quisquam maxime aliquid porro ullam quas, fugiat vitae rerum inventore blanditiis atque est obcaecati a veniam assumenda dolor excepturi. Eligendi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptate officiis eveniet aliquid adipisci commodi minima debitis molestiae corrupti harum ipsum similique deserunt dignissimos possimus nulla, cupiditate nobis, dolorum veniam!</div>



 <?php // require_once 'footer.php'; ?> 