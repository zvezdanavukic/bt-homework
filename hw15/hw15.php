<?php
//First assignment
$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
print_r($hwArray);
//a)
if (!in_array("Zvezdana",$hwArray)) {
    array_push($hwArray, 'Zvezdana') . "<br>";
    print_r($hwArray);
} else {
    print_r($hwArray);
}
echo "<br>";

//b)
$inserted = "Mladjan";
if (!in_array($inserted,$hwArray)) {
    array_splice($hwArray,2,0,$inserted);
    print_r($hwArray);
} else {
    print_r($hwArray);
}
echo "<br>";

//c)
echo count($hwArray);
echo "<br>";

//d)
if (!in_array("Marko",$hwArray)) {
    array_unshift($hwArray, 'Marko') . "<br>";
    print_r($hwArray);
} else {
    print_r($hwArray);
}
echo "<br>";

//e)
unset ($hwArray[6]);
$array2 = array_values($hwArray);
print_r ($array2);
echo "<br>";

//f)
print_r(array_unique($array2));
echo "<br>";
print_r (array_values((array_unique($array2))));
echo "<br>";

//Second assignment

$theData = array (
    array ( 'name' => 'Pera',
    'last_name' => 'Peric',
    'age' => '28',
    'gender' => 'male',
    'avg_rating' => 7.5,
    'married' => true,
    'courses' => ['Laravel', 'PHP', 'jQuery']
),
    
 array ( 'name' => 'Milena',
 'last_name' => 'Mitic',
 'age' => '30',
 'gender' => 'female',
 'avg_rating' => 9.5,
 'married' => true,
 'courses' => ['HTML', 'CSS', 'JS']
),
array ( 'name' => 'Zoran',
    'last_name' => 'Vasic',
    'age' => '35',
    'gender' => 'male',
    'avg_rating' => 7.0,
    'married' => false,
    'courses' => ['React', 'Angular', 'Vue.js']
),
 array ( 'name' => 'Zorica',
    'last_name' => 'Filpovic',
    'age' => '40',
    'gender' => 'female',
    'avg_rating' => 8.3,
    'married' => false,
    'courses' => ['Pyton', 'Java', 'C#']
),
 array ( 'name' => 'Filip',
    'last_name' => 'Stojanovic',
    'age' => '20',
    'gender' => 'male',
    'avg_rating' => 9.0,
    'married' => true,
    'courses' => ['MySQL', 'MariaDB', 'MS SQL']
),
);

foreach ($theData as $data => $value) {
    echo $value['name'] . " " .$value['last_name'] . " ima " . $value['age'] . " godina i ";

if ($value['married'] == true && $value['gender'] == 'male' )
{
     echo $bracniStatus= " ozenjen je ";
}
elseif ($value['married'] == false && $value['gender'] =='male'){
    echo $bracniStatus = " nije ozenjen ";
}
elseif ( $value['married'] == true && $value['gender'] == 'female') {
    echo $bracniStatus = " udata je ";
} elseif ($value['married'] == false && $value['gender'] == 'female')
 {
    echo $bracniStatus = " nije udata";
}
$courses = implode(" , ",$value['courses']);
echo  "." . "Ima prosecnu ocenu ". $value['avg_rating'] . ", a kurseve koje trenutno slusa su: " . $courses . "." . "<br>" ;
}
?>