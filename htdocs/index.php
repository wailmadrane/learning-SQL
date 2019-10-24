<?php
include 'header_footer/header.php';
include_once 'database/database.php';
?>

   <!-- sign up & sing in  Start-->
   <div class="btn-group">
      <button class="sign-up-toggle btn active">sign up</button><!--
   --><button class="sign-in-toggle btn">sign in</button>
   </div>
   <!-- End -->

   <!-- sing up ( register ) Start -->
   <div id='signUp' class="login hide">
      <button class="sign-up-toggle login__close"><i class="fas fa-times"></i></button>

      <form action="" method="post">
         <div class="login__field">
            <input class="login__input" type="text" name="user" id="user">
            <label class="login__label" for="user">Username</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="email" name="email" id="email">
            <label class="login__label" for="email">Email</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="password" name="password" id="password">
            <label class="login__label" for="password">Password</label>
         </div>

         <button class="btn" name="submit" value="send" type="submit">sign up</button>
      </form>
   </div>
   <!-- End -->

   <!-- sing in ( login ) Start -->
   <div id='signIn' class="login hide">
      <button class="sign-in-toggle login__close"><i class="fas fa-times"></i></button>

      <form action="" method="post">

         <div class="login__field">
            <input class="login__input" type="email" name="email" id="email">
            <label class="login__label" for="email">Email</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="password" name="password" id="password">
            <label class="login__label" for="password">Password</label>
         </div>

         <button class="btn" name="submit" value="send" type="submit">sign in</button>
      </form>
   </div>
   <!-- End -->

<?php include 'header_footer/footer.php' ?>