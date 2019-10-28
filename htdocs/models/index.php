<?php
   /* ## Validate User Input ## */

   function string_validation (string $input) {
      $regex = '/^[A-Za-z0-9_-]{3,50}$/';
      $input = trim($input);

      if (preg_match($regex, $input) === 1) {
         return true;
      }
      return false;
   }

   function email_validation (string $input) {
      $input = trim($input);

      if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
         return true;
      }
      return false;
   }

   function password_validation (string $input) {
      $regex = '/^[\S]{3,50}$/';
      $input = trim($input);

      if (preg_match($regex, $input) === 1) {
         return true;
      }
      return false;
   }

   function url_validation (string $input) {
      $input = trim($input);

      if (filter_var($input, FILTER_VALIDATE_URL)) {
         return true;
      }
      return false;
   }

   /* ## SQL Query ## */

   function add_user (object $dbh ,string $username, string $email, string $password): void {
      $hash = password_hash($password, PASSWORD_DEFAULT);

      $stmt = $dbh->prepare("INSERT INTO student (username, email, password) VALUES ('$username', '$email', '$hash')");

      if ($stmt) $valid = $stmt->execute();
      else { 
         throw new Exception("Error: Bad request", 1);
         return;
      }

      if ($valid) $stmt->fetch();
      else throw new Exception("Error: Could not create this user, this email probably already exists", 2);
   }








   function login_user (object $dbh, string $email, string $password): void {
      $stmt = $dbh->prepare("SELECT id, username, password FROM student WHERE email = '$email'");

      var_dump($stmt);

      if ($stmt) {
         $valid = $stmt->execute();
      }
      else {
         throw new Exception("Error: Bad request", 1);
         return;
      }

      var_dump($valid);

      if ($valid) {
         $data = $stmt->fetch();
      }
      else {
         throw new Exception("Error: Could not execute request", 2);
         return;
      }

      var_dump($data);

      $verfiy = password_verify($password, $data['password']);

      var_dump($verfiy);

      if ($verfiy) {
         $_SESSION['user_id'] = $data['id'];
      }
      else throw new Exception("Error: Processing Request", 3);    
   }









   function modify_user (): void {
      // modify user
   }

   /* ## Utility ## */

   function dump($var): void {
      echo '<pre>';
      print_r($var);
      echo '</pre>';
   }

?>