<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'] . "<br>";
    $email = $_POST['email'] . "<br>";
    $password = $_POST['password'] . "<br>";
    $genders = $_POST['genders'] . "<br>";
    $country = $_POST['country'] . "<br>";

    $data = [$name, $email, $password, $genders, $country];
    
    $file = fopen ('../CSV/userdata.csv', 'a');
    fputcsv ($file, $data);
    print_r ($data);
    fclose ($file);
    ;

} else{
    echo "no data";
}

?>