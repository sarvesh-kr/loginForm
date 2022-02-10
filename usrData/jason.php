<?php

    session_start();
    $_SESSION["username"] = $_POST['username'];
    header("Location:/personal/loginSystem/verifiedUser.php");

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $usrData = array();
            $usrData[] = array(
                'Name' => $_POST['username'],
                'Email' => $_POST['email'],
                'Password' => $_POST['password'],
                'Confirm Password' => $_POST['cPassword'],
            );
            return json_encode($usrData);
        }
          
        $name = $_POST['username'];

        if (is_dir($dir)){
            if ($dh = opendir($dir)){
              while (($file = readdir($dh)) !== false){
                echo "filename:" . $file . "<br>";
              }
              closedir($dh);
            }
          }

        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' file created';
            }
        else {
            echo 'There is some error';
        }
    }
?>