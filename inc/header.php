<?php 
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fred's Photos</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/ICTPRG505/styles/reset.css">
    <link rel="stylesheet" type="text/css" href="/ICTPRG505/styles/style.css">
    
    <!-- Icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Google Font - Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- JavaScript Functions-->
    <script src="/ICTPRG505/js/functions.js"></script>

    
</head>

<body>

    <header>
    
        <nav>
            <a id="title" href="/ICTPRG505/index.php">Fred's Photos and Images</a>
            <ul>
                <li class="toggle moon"><a href="#"><i class="fas fa-moon"></i></a></li>
                <li class="toggle sun"><a href="#" ><i class="fas fa-sun"></i></a></li>
                <li><a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="/ICTPRG505/index.php">HOME</a></li>
                <li class="dropdown">
                    <a 
                        class="dropButton 
                        <?= ($activePage == 'portrait'|| $activePage == 'nature' || $activePage == 'sporting' || $activePage == 'events') ? 'active':''; ?>" 
                        href="#">GALLERY
                    </a>
                    <ul >
                        <li><a href="/ICTPRG505/portrait.php">PORTRAIT</a></li>
                        <li><a href="/ICTPRG505/nature.php">NATURE</a></li>
                        <li><a href="/ICTPRG505/sporting.php">SPORTING</a></li>
                        <li><a href="/ICTPRG505/events.php">EVENTS</a></li>
                    </ul>
                </li>
                <li><a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="/ICTPRG505/contact.php">CONTACT</a></li>
            </ul>
            <button class="hamburger">&#9776;</button>
            <button class="cross">&#735;</button>
        </nav>
        
        

    </header>
      
    <div class="menu">
        <ul>
            <li><a href="/ICTPRG505/index.php">HOME</a></li>
            <li class="dropdown">
                <a class="dropButton" href="#">GALLERY</a>
                <ul >
                    <li><a href="/ICTPRG505/portrait.php">PORTRAIT</a></li>
                    <li><a href="/ICTPRG505/nature.php">NATURE</a></li>
                    <li><a href="/ICTPRG505/sporting.php">SPORTING</a></li>
                    <li><a href="/ICTPRG505/events.php">EVENTS</a></li>
                </ul>
            </li>
            <li><a href="/ICTPRG505/contact.php">CONTACT</a></li>
        </ul>
    </div>