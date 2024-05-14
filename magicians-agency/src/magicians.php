<?php
include_once "header.php";
?>

<h2>Choose from our superb variety of magicians</h2>

<div>
    <?php
    $magicians = scandir("./magicians");
    foreach ($magicians as $magician) {
        if ($magician == "." or $magician == "..") continue;

        $name = explode("magic", $magician)[0];
        $path = "/magicians/" . $magician;

        echo
        "<div>
            <h3>$name</h3>
            <img src='$path' class='magician-image'/>
        </div>";
    }
    ?>
</div>
