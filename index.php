<?php
header( 'Content-Type: text/html; charset=utf-8' );
setlocale( LC_ALL, 'hu_HU.UTF8' );
session_start();
require_once './Database.php';
require_once './Kosar.php';
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = 'UTF-8'>
<title></title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin = 'anonymous'>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity = 'sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin = 'anonymous'></script>
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity = 'sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin = 'anonymous' referrerpolicy = 'no-referrer' />
<link rel = 'stylesheet' href = 'kosaras.css'/>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Termékeink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Termékek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kosár</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rendelés</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class = 'container row'>
<h1>Termékeink</h1>
<nav></nav>
<aside class = 'col-3'>

</aside>
<main class="col-auto">
    <?php
    $db->getAllTermekCards();
    ?>
</main>

</div>
<?php
// put your code here
?>
</body>
</html>
