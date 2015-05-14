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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="imagens/logo_tribit.ico" type="image/x-icon"/>

    </head>

    <body>

        <!-- Navigation -->
        <!--    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                     Brand and toggle get grouped for better mobile display 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Tribit Jr.</a>
                    </div>
                     Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="about.html">Sobre Nós</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Portfólio</a>
                            </li>
                            
                            <li>
                                <a href="contact.html">Contato</a>
                            </li>
                        </ul>
                    </div>
                     /.navbar-collapse 
                </div>
                 /.container 
            </nav>-->
        <?php
        include "cabecalho.php";
        ?>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Diga-me Bella
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index">Home</a>
                        </li>
                        <li><a href="portfolio-3-col">Portfólio</a>
                        </li>
                        <li class="active">Diga-me Bella</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive" src="imagens/portfolio/bella/bella1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="imagens/portfolio/bella/bella2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="imagens/portfolio/bella/bella3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Descrição</h3>
                    <p>Website para pré-cadastro em evento.</p>
                    <a href="http://digamebella.com" target="_blank">www.digamebella.com</a>
                    <h3>Detalhes</h3>
                    <ul>
                        <li>Controle de usuário</li>
                        <li>Área administrativa</li>
                        <li>Disponibilização de material</li>
                      
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
<!--            <div class="row">

                <div class="col-lg-12">
                    <h3 class="page-header">Projetos Relacionados</h3>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                    </a>
                </div>

            </div>-->
            <!-- /.row -->

            <hr>

            <!-- Footer -->


        </div>
        <?php
        include "rodape.php";
        ?>
        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>