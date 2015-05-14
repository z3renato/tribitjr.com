<!DOCTYPE html>
<html lang="en">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tribit Jr.</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/personalStyleSheet.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="imagens/logo_tribit.ico" type="image/x-icon"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("a").click(function (event) {
                    event.preventDefault();
                    linkLocation = this.href;
                    $("body").fadeOut(1000, redirectPage);
                });

                function redirectPage() {
                    window.location = linkLocation;
                }

            });
        </script>

    </head>

    <body class="fadeIn" >



        <?php
        include "cabecalho.php";
        ?>

      
        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <center>A empresa júnior</center>
                    </h1>
                    <div align="justify">
                        <p>A Tribit Jr., empresa júnior de Ciência da Computação da Universidade Federal de Alfenas, atua no mercado de Alfenas e região prestando serviços de desenvolvimento e consultoria em TI.</p>
                        <p>Constitui-se exclusivamente por alunos de graduação em Ciência da Computação da Universidade, o que lhe proporciona um contato constante com as tradicionais teorias científicas, bem como com as inovações da área, garantindo, assim, um ambiente dinâmico e empreendedor no desenvolvimento de novos talentos.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><center>Serviços</center></h2>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="imagens/dev-1.jpg" alt="">
                        <div class="caption">
                            <h3><small>SISTEMAS WEB PERSONALIZADOS</small>
                                <br>
                            </h3>
                            <p>Criamos seu site de acordo com o seu desejo. Faça um orçamento conosco.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="imagens/ti06.jpg" alt="">
                        <div class="caption">
                            <h3><small>DESENVOLVIMENTO DE SOFTWARE</small>
                                <br> 
                            </h3>
                            <p>Desenvolvimento com tecnologias atuais para melhorar o gerenciamento de sua empresa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="imagens/hands_keyboard-750x450.jpg" alt="">
                        <div class="caption">
                            <h3><small>DESENVOLVIMENTO DE WEBSITES</small>
                                <br>
                            </h3>
                            <p>A melhor forma de divulgar sua empresa. Agende um horário conosco.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-4 col-md-offset-2">
                    <div class="thumbnail">
                        <img class="img-responsive" src="imagens/consultoria.jpg" alt="">
                        <div class="caption">
                            <h3><small>CONSULTORIA</small>
                                <br>
                            </h3>
                            <p>Identificamos a real necessidade da sua empresa.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="imagens/treinamento.jpg" alt="">
                        <div class="caption">
                            <h3><small>TREINAMENTO</small>
                                <br>
                            </h3>
                            <p>Oferecemos treinamento em diversas linguagens.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Parceiros -->
            <div class="row" align='center'>
                <div class="col-lg-12">
                    <h2 class="page-header">
                        <center>Parceiros</center>
                    </h2>
                    <div class="col-md-2">
                        <figure class="">
                            <a href="http://www.unifal-mg.edu.br" target="_blank">
                                <img src="img/parceiros/unifal.jpg" alt="" class="img-thumbnail">

                            </a>

                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="">
                            <a href="http://www.unifal-mg.edu.br/i9unifal/" target="_blank">
                                <img src="img/parceiros/i9.jpg" alt="" class="img-thumbnail">

                            </a>

                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="">
                            <a href="http://www.farmalfenasjr.com.br" target="_blank">
                                <img src="img/parceiros/farma.jpg" alt="" class="img-thumbnail">

                            </a>

                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure  >
                            <a href="http://bcc.unifal-mg.edu.br/lpd" target="_blank">
                                <img src="img/parceiros/lpd.jpg" alt="" class="img-thumbnail">

                            </a>

                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure >
                            <a href="http://www.biotecinova.com.br" target="_blank">
                                <img src="img/parceiros/biotec.jpg" alt="" class="img-thumbnail">

                            </a>

                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure >
                            <a href="http://www.brasiljunior.org.br/site/" target="_blank">
                                <img src="img/parceiros/brasil.jpg" alt="" class="img-thumbnail" >

                            </a>

                        </figure>
                    </div>

                </div>
            </div>
            <!-- /.row parceiros -->
        </div>
        <hr>

        <!-- Footer -->


        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Custom JavaScript-->
        <script src=”jquery.mobile.custom.min.js”></script> 

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });</script>

        <!--Script to Swipe Carousel -->
        <script>
            $(document).ready(function () {
                $("#myCarousel").swiperight(function () {
                    $("#myCarousel").carousel('prev');
                });
                $("#myCarousel").swipeleft(function () {
                    $("#myCarousel").carousel('next');
                });
            });
        </script> 



        <?php
        include "rodape.php";
        ?>
    </body>

</html>