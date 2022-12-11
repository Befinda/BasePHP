<?php
$title = "Главная страница - страница обо мне";
$header = "Информация обо мне";
$year = 2018;

$content = file_get_contents("site.html");
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ header }}", $header, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;
