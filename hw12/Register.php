<?php

$name = $_GET["name"];
$lastname = $_GET["lastname"];
$gender = $_GET["gender"];
$email = $_GET["email"];
$password = $_GET["password"];
$r_password = $_GET["r_password"];
$courses = $_GET["courses"];
$gen = "";


if ( $gender == "male") {
    echo $gen = "Postovani, ";
}
else if ($gender == "female") {
    echo $gen = "Postovana, ";

}


if (!empty($name && $lastname && $gender && $email && $password  && $r_password)) {
    echo  "" . $name . $lastname ;
    echo "<br>";
    echo "Uspesno ste se registrovali na nasem sajtu <br>";
    echo "Vas username je: " . $email. "<br>"; 
    echo "Vasa lozinka je: " . $password. "<br>"; 
    echo "Vasa ponovljena lozinka je: " . $r_password. "<br>"; ; 

}
else {
    echo "Niste popunili sva obavezna polja.";
}


if (isset($courses)) {
    echo "Vasi odabrani kursevi su: <br>";
    echo implode(",", $courses);
} else {
    echo "Niste izabrali zeljeni kurs. ";
}
?>


