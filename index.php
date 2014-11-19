<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lockan</title>
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="landing/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="landing/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="landing/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="#index">Lockan</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#index">Ingresar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Reportar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="tienda.php">Tienda</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header id="index">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="landing/img/logolockan3.gif" alt="">
                </div>
            </div>
        </div>
    </header>
 <!-- About Section -->
    <section class="ingresar" id="ingresar">
        <div class="text-center">
            <?php include ("loginheader.php"); ?>
        </div>
    </section>
     <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>¿Encontraste una mascota?</h3>
                    <span class="skills">Ingresa su número de ID</span>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 center-block">
                    <form class="form-signin" role="form">
                        <input type="text" class="form-control" placeholder="Ingresar ID" id="idtag" required autofocus>
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" id="reportar" type="submit">Reportar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="membresia">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Comó Funciona?</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-sm-6 col-md-6 text-center">
                        <a href="registrar.php"><img class="img-responsive" src="landing/img/como01.png" alt=""></a>
                    </div>
                    <div class="col-sm-6 col-md-6 text-center">
                        <a href="tienda.php"><img class="img-responsive" src="landing/img/como02.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-sm-6 col-md-6 text-center">
                        <a href="#index"><img class="img-responsive" src="landing/img/como03.png" alt=""></a>
                    </div>
                    <div class="col-sm-6 col-md-6 text-center">
                        <a href="faq.php"><img class="img-responsive" src="landing/img/como04.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     

       <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Lockan 2014 | <a href="avisodeprivacidad.php">Avisos de Privacidad</a> | <a href="politicasdeventa.php">Politicas de Venta</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery Version 1.11.0 -->
    <script src="landing/js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="landing/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="landing/js/classie.js"></script>
    <script src="landing/js/cbpAnimatedHeader.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="landing/js/jqBootstrapValidation.js"></script>
    <script src="landing/js/contact_me.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="landing/js/freelancer.js"></script>
    <script type="text/javascript">
    $(function(){
        $("#reportar").click(function(){
            var idtag = $("#idtag").val();
            var url = 'pet.php?id='+idtag;
            window.location = url;
        });
    });
    $(function(){
        $("#micuenta").click(function(){
            var url = 'admin/index.php';
            window.location = url;
        });
    });
    $(function(){
        $("#salir").click(function(){
            var url = 'admin/logout.php';
            window.location = url;
        });
    });
    $(function(){
        $("#conectar").click(function(){
            var mail = $("#email").val();
            var pass = $("#password").val();
            var url = 'admin/log.php?mail='+mail+'&pass='+pass;
            window.location = url;
        });
    });
    $(function(){
        $("#registrar").click(function(){
            var url = 'registrar.php';
            window.location = url;
        });
    });
</script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46422821-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
