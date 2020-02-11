<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
<?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i");

    if($time > "06:00" && $time < "12:00"){
        $img = "images/morning.png";
        $say = "Goede morgen!";
    }
    elseif($time > "12:00" && $time < "18:00"){
        $img = "images/afternoon.png";
        $say = "Goede middag!";
    }
    elseif($time > "18:00"){
        $img = "images/evening.png";
        $say = "Goede avond!";
    }
    elseif($time > "0:00"){
        $img = "images/night.png";
        $say = "Goede nacht!";
    }
?>

<div>
    <img id ="wholePage" src=<?= $img?>>
    <p id="good"><?= $say ?></p>
    <p id="time">het is nu <?= $time ?></p>
</div>