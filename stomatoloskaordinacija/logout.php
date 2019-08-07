<?php
    session_start();// pocetak sessije
    session_destroy(); // unistavamo sessiju
    header("location: index.php"); // salje korisnika na lokaciju login.html(vraca na ponovno logovanje)
?>

