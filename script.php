<?php
$a[] = "fjollaz@gmail.com";
$a[] = "puhizad@gmail.com";
$a[] = "rrezartas@gmail.com";
$a[] = "dianaf@gmail.com";
$a[] = "evam@studentet.uni-pr.edu";
$a[] = "fionaa@gmail.com";
$a[] = "artanb@outlook.com";
$a[] = "granitah@gmail.com";
$a[] = "donjetab@studentet.uni-pr.edu";
$a[] = "mjedrab@studentet.uni-pr.edu";
$a[] = "qendresab@gmail.com";
$a[] = "lindal@outlook.com";
$a[] = "ninaz@outlook.com";
$a[] = "amandat@gmail.com";
$a[] = "butrints@outlook.com";
$a[] = "leartg@outlook.com";
$a[] = "triml@gmail.com";
$a[] = "taulantz@outlook.com";
$a[] = "leked@outlook.com";
$a[] = "zgjimv@gmail.com";
$a[] = "arturd@outlook.com";
$a[] = "lisp@outlook.com";
$a[] = "jonir@gmail.com";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $email) {
        if (stristr($q, substr($email, 0, $len))) {
            if ($hint === "") {
                $hint = $email;
            } else {
                $hint .= ", $email";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>
