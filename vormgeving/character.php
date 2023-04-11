<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Bowser</h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
</header>
<?php
    require 'connect.php';
    foreach ($conn->query($stmt) as $result) {
?> 
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $result['avatar']; ?>">
            <div class="stats" style="background-color: <?php echo $result['color']; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $result['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $result['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $result['defense']; ?></li>
                </ul>
                <ul class="gear">
                    <?php if($result['weapon'] != ''){?>
                    <li><b>Weapon</b>: <?php echo $result['weapon']; ?></li>
                    <?php }?>
                    <?php if($result['armor'] != ''){?>
                    <li><b>Armor</b>: <?php echo $result['armor']; ?></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?php echo $result['bio']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php }?>
<footer>&copy; Mike Minheere 2023</footer>
</body>
</html>