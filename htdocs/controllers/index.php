<?php
   include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'index.php';

   /* ## Session ## */

   $errors = [];
   $success = '';

   /* ## Sign Up ## */

   $username = $_POST['sign_up']['username'];
   $email = $_POST['sign_up']['email'];
   $password = $_POST['sign_up']['password'];
   $submit = $_POST['sign_up']['submit'];

   $a = $username !== null ? string_validation($username) : null;
   $b = $email !== null ? email_validation($email) : null;
   $c = $password !== null ? password_validation($password) : null;
   $d = $submit === 'send' ? true : false;

   // var_dump($username, $email, $hash, $verfiy); 

   // echo "<br>a : ";
   // var_dump($a);
   // echo "<br>b : ";
   // var_dump($b);
   // echo "<br>a : ";
   // var_dump($c);
   // echo "<br>b : ";
   // var_dump($d);

   if ($a && $b && $c && $d) {
      try {
         add_user($connect, $username, $email, $password);
         $success = 'You have successfully subscribed';
      }
      catch (Exception $ex) {
         $errors[] = $ex->getMessage();
      }
   }

   /* ## Sign In ## */

   $email = $_POST['sign_in']['email'];
   $password = $_POST['sign_in']['password'];
   $submit = $_POST['sign_in']['submit'];

   $e = $email !== null ? email_validation($email) : null;
   $f = $password !== null ? password_validation($password) : null;
   $g = $submit === 'send' ? true : false;

   var_dump($email, $password, $submit); 

   echo "<br>e : ";
   var_dump($e);
   echo "<br>f : ";
   var_dump($f);
   echo "<br>g : ";
   var_dump($g);

   if ($e && $f && $g) {
      try {
         login_user($connect, $email, $password);
         $success = 'Successfully login';
         var_dump($_SESSION);
      }
      catch (Exception $ex) {
         $errors[] = $ex->getMessage();
      }
   }

   include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'index.php';
?>