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
        <link href="css/ekko-lightbox.min.css" rel="stylesheet">

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
                        <a class="navbar-brand" href="index.php">Tribit Jr.</a>
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
                    <h1 class="page-header">Eventos
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index">Home</a>
                        </li>
                        <li class="active">Eventos</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <h2>Realizados</h2>
            <div class="row">
                <div class="col-md-4 img-portfolio">
                    <div class="thumbnail">
                        <a href="img/eventos/work-empreender.jpg" 
                           data-toggle="lightbox" 
                           data-title="Workshop de Empreendedorismo" 
                           data-footer="13/07/2013">
                            <img class="img-responsive img-hover" src="img/eventos/miniempreendedorismo.png" alt="" >
                        </a>
                        <h3>
                            Workshop Empreendedorismo
                        </h3>
                        <p>13/07/2013</p>
                    </div>
                </div>

                <div class="col-md-4 img-portfolio">
                    <div class="thumbnail">
                        <a href="img/eventos/mini-php.jpg"
                           data-toggle="lightbox"
                           data-title="Minicurso de PHP"
                           data-footer="04/06/2013 até 11/06/2013">
                            <img class="img-responsive img-hover" src="img/eventos/miniphp.png" alt="" >
                        </a>
                        <h3>
                            Minicurso de PHP
                        </h3>
                        <p>04/06/2013 até 11/06/2013</p>
                    </div>
                </div>
                <div class="col-md-4 img-portfolio">
                    <div class="thumbnail">
                        <a href="img/eventos/mini-xhtml-jquery.jpg" 
                           data-toggle="lightbox" 
                           data-title="Minicurso de XHTML e jQUERY" 
                           data-footer="02/03/2013 até 10/03/2013">
                            <img class="img-responsive img-hover" src="img/eventos/phpnovo.png" alt="" >
                        </a>
                        <h3>
                            Minicurso de XHTML e jQUERY
                        </h3>
                        <p>02/03/2013 até 10/03/2013</p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Row -->

            <!-- Projects Row ->
            <div class="row">
                <div class="col-md-4 img-portfolio">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="portfolio-item.php">Projeto</a>
                    </h3>
                    <p>Descrição do Projeto.</p>
                </div>
                <div class="col-md-4 img-portfolio">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="portfolio-item.php">Projeto</a>
                    </h3>
                    <p>Descrição do Projeto.</p>
                </div>
                <div class="col-md-4 img-portfolio">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                    </a>
                    <h3>
                        <a href="portfolio-item.php">Projeto</a>
                    </h3>
                    <p>Descrição do Projeto.</p>
                </div>
            </div>
             /.row -->

            <hr>

            <!-- Pagination
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li>
                            <a href="#">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
             /.row -->

            <hr>




        </div>
        <?php
        include "rodape.php";
        ?>
        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/ekko-lightbox.min.js"></script>

        <script>
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
    </body>

</html>