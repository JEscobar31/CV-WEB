<h1 class="title-error">Page Erreur</h1>

<img src="/assets/images/404.jpg">

<?php

require_once 'dbconnect.php';

$email = $_GET['email'];
$pwd = $_GET['pwd'];

echo '<br>';

$my_query = '';

$my_query = "select * from Users where email = '$email' and pwd = '$pwd'";

$result = mysqli_query($connection, $my_query);

if (mysqli_num_rows($result) > 0) {
    //echo "Congrats, you are now logged in";
    echo "<script type='text/javascript'>document.location.replace('dashboard/dashboard.html');</script>";
} else {
    echo 'Email ou Mot de passe incorrect. Retourné à la page de connexion pour re-esseyer';
}
?>



