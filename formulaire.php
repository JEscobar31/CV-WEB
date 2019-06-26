<?php
if(isset($_POST)) {
    $insertSql = 'INSERT INTO `formulaire` (`name`, `object`, `message`) VALUES ("'.$_POST['name'].'", "'.$_POST['object'].'", "'.$_POST['message'].'" )';
    $test = "SELECT * FROM `formulaire`";
    print(executeSQL($insertSql));
    echo'succes';
}


function executeSQL($sql) {
    echo $sql;
    $user = "id9387769_jeremy";
    $password = "jeremy";
    $db = "id9387769_sitecv";
    $host = "localhost";
    $port = 3306;

    $link = mysqli_init();
    $success = mysqli_real_connect(
        $link,
        $host,
        $user,
        $password,
        $db,
        $port
    );
$result = mysqli_query($link, $sql) or die ('Erreur SQL. Detail: '.mysqli_error($link));
    mysqli_close($link);

    

    return $result;
}
//header("Location: index.html");
?>