<?php
require_once './classes/sendmessage.php';
require_once './classes/Telas.php';
require_once './lib/phpmailer/class.phpmailer.php';

$m = filter_input(INPUT_GET, "m");
$a = filter_input(INPUT_GET, "a");

$t = new Telas();

switch ($a){
    case "h":
        $home = "class='active'";
        $galeria = "";
        $contato = "";
        break;
    case "g":
        $home = "";
        $galeria = "class='active'";
        $contato = "";
        break;
    case "c":
        $home = "";
        $galeria = "";
        $contato = "class='active'";
        break;
    
    default:
        $home = "class='active'";
        $galeria = "";
        $contato = "";
        break;
        
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Renata Neumann - Psicóloga e Psicopedagoga. Atendimento a adultos e crianças.">
        <meta name="author" content="Michel Pereira">
        <meta name="keywords" content="renata neumann psicóloga psicopedagoga atendimento psicológico crianças adultos consultório vila isabel">
        <meta name="robots" content="renata, neumann, psicóloga, psicopedagoga, atendimento, psicológico, crianças, adultos, vila isabel, vila, isabel, consultório">
        <meta name="googlebot" content="renata, neumann, psicóloga, psicopedagoga, atendimento, psicológico, crianças, adultos, vila isabel, vila, isabel, consultório">
        <title>Renata Neumann - Psicóloga</title>
        <link rel="shortcut icon" href="images/icon_renata.ico">        

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="color/default.css" rel="stylesheet">
        
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/prettify.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/screen.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>


    </head><!--/head-->
    <!--"-->
    <body data-spy="scroll" data-target=".navbar-custom">

        <!--<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>-->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php" style="background-color: #fff; height: 165px;">

                    <?php
                        $t->imagemLogo();
                    ?>

                    </a>
                </div>

                <i class="fa fa-whatsapp"></i>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php echo $home; ?>><a href="index.php">Home</a></li>
                        <li <?php echo $galeria; ?>><a href="#">Serviços</a></li>
                        <li <?php echo $contato; ?>><a href="#">Contato</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

                        <?php
                        switch ($m) {

                            default:
                                echo "<section id='intro' class='intro'>";
                                $t->telaInicial();
                                echo "</section>";
                                break;
                            case "home":
                                echo "<section id='intro' class='intro'>";
                                $t->telaInicial();
                                echo "</section>";
                                break;
                            case "galeria":
                                echo "<section id='galeria' class=''>";
                                $t->telaGaleria();
                                echo "</section>";
                                break;
                            case "contato":
                                echo "<section id='contact' class='contato'>";
                                echo "<div id='contatoFundo'>";
                                echo "  <div id='contact-us' class='parallax'>";
                                echo "      <div class='container'>";
                                echo "          <div class='row'>";
                                $t->telaContato();
                                echo "          </div>";
                                echo "      </div>";
                                echo "  </div>";
                                echo "</div>";
                                echo "</section>";
                                break;
                        }
                        ?>
      

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <!--<script type="text/javascript" src="js/wow.min.js"></script>-->
        <!--<script type="text/javascript" src="js/mousescroll.js"></script>-->
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <!--<script type="text/javascript" src="js/jquery.countTo.js"></script>-->
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

        <script>
            function ativaMensagem() {
                document.getElementById('sucesso').style.display = "none";
                document.getElementById('erro').style.display = "none";
                document.getElementById('mensagem').style.display = "block";
            }

        </script>
              

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75005756-1', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>