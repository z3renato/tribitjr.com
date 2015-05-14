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
                        <a class="navbar-brand" href="index">Tribit Jr.</a>
                    </div>
                     Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="about">Sobre Nós</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col">Portfólio</a>
                            </li>
                            
                            <li>
                                <a href="contact">Contato</a>
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
                    <h1 class="page-header">Contato
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index">Home</a>
                        </li>
                        <li class="active">Contato</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7428.4194524497625!2d-45.9845846!3d-21.420999999999964!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1409242496240"></iframe>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Onde nos encontrar?</h3>
                    <p>
                        Av. Jovino Fernandes Sales, 2600<br>Santa Clara - Alfenas/MG<br>Alfenas, MG 37130-000<br>Sala C312<br>
                    </p>
                    <p><i class="fa fa-envelope-o"></i> 
                        : <a href="mailto:contato@tribitjr.com">contato@tribitjr.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        : Segunda - Sexta: 8:00 - 18:00</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/tribitjr"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
<!--                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <!-- /.row -->

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <!--            <div class="row">
                            <div class="col-md-8">
                                <h3><center>Nos mande uma mensagem</center></h3>
                                <form name="sentMessage" id="contactForm" action="bin/contact_me.php" method="post">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Nome Completo</label>
                                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Número de Telefone</label>
                                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>E-Mail</label>
                                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Mensagem</label>
                                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                     For success/fail messages 
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
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

        <!-- Contact Form JavaScript -->
        <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

    </body>

</html>