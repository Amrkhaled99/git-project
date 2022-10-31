
<?php


  // Start connection


    // $email= $_POST['_email'];
    // $username= $_POST["_username"];
    // $password= $_POST["_password"]; 

      
    //   $query=  "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email','$username','$password' )";
    

    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
      echo 'We don\'t have mysqli!!!';
  } else {
      echo 'Phew we have it!';
  }
mysqli_connect();





  

    // $co = mysqli_connect("localhost", "root","","portfolio_dp");

    // $selectQuery=  "Select * from users";



    //   $q= mysqli_query($co,$selectQuery);

    //     $result= mysqli_fetch_assoc($q);


    //       foreach ($result as $key => $value) {
    //         # code...
    //       }

  
  