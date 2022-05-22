<?php
$users = [
    [
        'name' => 'Pera',
        'last_name' => 'Peric',
        'age' => '20',
    ],
    [
        'name' => 'Mitar',
        'last_name' => 'Mitrovic',
        'age' => '30',
    ],
    [
        'name' => 'Sasa',
        'last_name' => 'Ristic',
        'age' => '25',
    ]
    ];


function search_users($users,$searchContent="") {
    foreach($users as  $user) {
        foreach ($user as  $value){ 
            if (str_contains($value,$searchContent)) {
               print_r($user);
            }  
    } 
}
};
print_r (search_users($users,"Pera"));
echo "<br>";
print_r (search_users($users,"ic"));


?>