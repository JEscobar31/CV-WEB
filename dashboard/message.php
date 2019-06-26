    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Page Admin</a>
                </div>

                <!-- Top Navigation: Right Menu -->
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>Deconnexion <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="../login.php">
                                    <i class="fa fa-user"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>

                <!-- Sidebar -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">

                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="dashboard.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="inform.html" class="active"><i class="fa fa-address-card-o"></i> Informations</a>
                            </li>
                            <li>
                                <a href="stat.html" class="active"><i class="fa fa-info"></i> Statistiques</a>
                            </li>
                            <li>
                                <a href="message.html" class="active"><i class="fa fa-comments fa-fw"></i> Message</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Message :</h1>
                        </div>
                    </div>
                    <?php
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=id9387769_sitecv;charset=utf8', 'id9387769_jeremy', 'jeremy');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM formulaire');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
                    <table class="table table-striped table-dark">
                        <tr>
                            <th>Nom</th>
                            <th>Objet</th>
                            <th>Message</th>
                        </tr>

                        <tr>
                            <td><?php echo $donnees['name']; ?><br /></td>
                            <td><?php echo $donnees['object']; ?><br /></td>
                            <td><?php echo $donnees['message']; ?> <br /></td>

                        </tr>

                    </table>
                    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
                </div>
            </div>

        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>

    </html>