<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mystic Prestige Productions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Mystic Prestige Productions</h1>

    <div>
        <a href="/magicians.php">Magicians</a>
        <a href="/booking.php">Booking</a> <!-- env injection here by exploiting php sanitize cmd not working always -->
        <a href="/about.php">About</a>
    </div>

    <h2>Choose from our superb variety of magicians</h2>

    <div>
        <?php
        $magicians = scandir("./magicians");
        foreach ($magicians as $magician) {
            if ($magician == "." or $magician == "..") continue;

            $name = explode(".", $magician)[0];
            $path = "/magicians/" . $magician;

            echo
            "<div>
                <h3>$name</h3>
                <img src='$path' class='magician-image'/>
            </div>";
        }
        ?>
    </div>

</body>
</html>
