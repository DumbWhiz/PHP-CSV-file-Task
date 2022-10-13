<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $genders = $_POST['genders'];
    $country = $_POST['country'];

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