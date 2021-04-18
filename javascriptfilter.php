<?php

//Get the raw html.
$jurl=trim($_GET["jurl"]);
$raw = file_get_contents($jurl);

//Note, if trickyness like decode detected then display empty.
if(empty(preg_match("#decode\\(#i", $raw))) {

//Kill anoying popups.
$raw=str_replace("alert(","isNull(",$raw);
$raw=str_replace("window.open","isNull",$raw);
$raw=str_replace("prompt(","isNull(",$raw);
$raw=str_replace("Confirm: (","isNull(",$raw);

//Echo the website html to the iframe.
echo $raw;

}

?>