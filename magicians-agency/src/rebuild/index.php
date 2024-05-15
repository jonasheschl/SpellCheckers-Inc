<?php
include_once "../header.php";

$pageName = str_replace([".", "/"], "", $_GET["page"]);
$pageString = file_get_contents("./$pageName.json");
$pageObject = json_decode($pageString);

if ($pageObject == null) {
    echo "<p>This page does not exist ):</p>";
    exit();
}

function interpret($section) {
    $content = null;

    switch ($section->type) {
        case "text":
            $content = $section->value;
            break;
        case "link":
            $content = file_get_contents($section->value);
            break;
    }

    return "<$section->tag>$content</$section->tag>";
}

echo "<div class='container my-8 text-center'/>";

foreach ($pageObject->sections as $section) {
    echo interpret($section);
}

echo "</div>";
