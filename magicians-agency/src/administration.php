<?php
include_once "header.php";
include_once "utils.php";
?>

<h1 class="text-center my-5">Administration</h1>

<h2>Add a magician</h2>
<form enctype="multipart/form-data" method="POST">
    <label for="inputName" class="form-label mt-3">Name</label>
    <input id="inputName" name="name" type="text" required class="form-control"/>
    <label for="inputMagician" class="form-label mt-3">Magician Image</label>
    <input id="inputMagician" name="magician" required type="file" class="form-control"/>
    <input type="submit" value="Add magician" class="form-control mt-3"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") exit();

if (!isset($_FILES["magician"])) {
    echo "<p>You must provide a magician image to upload magicians.</p>";
    exit();
}

if (!isset($_POST["name"])) {
    echo "<p>You must provide a name for your magician.</p>";
    exit();
}

$uploadFile = "./magicians/" . basename($_POST["name"]);

echo "<p>";
if (move_uploaded_file($_FILES["magician"]["tmp_name"], $uploadFile)) {
    echo "Magician successfully uploaded!";
} else {
    echo "Magician upload failed :(";
}
echo "</p>";
?>

