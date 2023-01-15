<?php

class DBFacade
{


   public function connect()
   {

      $conn = new mysqli("localhost", "root", "root", "login");
      if ($conn == false)
         die("\n >> Database not connected successfully ...");
      return $conn;
   }

   function checkValidAccount($account)
   {

      $username = $account->getUsername();
      $password = $account->getPassword();

      $query = "SELECT * FROM credential WHERE registration = '$username' AND password = '$password'";
      $results = mysqli_query($this->connect(), $query);

      //if (mysqli_num_rows($results) > 0) {
         $row = mysqli_fetch_row($results);

         $query1 = "SELECT * FROM students WHERE registration = '$row[0]'";
         $results1 = mysqli_query($this->connect(), $query1);
         $row2 = mysqli_fetch_row($results1);
         return $row2[0];
      return -1;
   }
}
?>