<?php include 'header_footer/header.php' ?>
<?php dump($_POST) ?>

   <?php if ($errors) : ?>
      <?php foreach ($errors as $err) : ?>
         <div class="error error-message"><?=$err?></div>
      <?php endforeach ?>
   <?php endif ?>

   <?php if ($success AND !$errors) : ?>
      <div class="success success-message"><?=$success?></div>
   <?php endif ?>

   <!-- sign up & sing in  Start-->
   <div class="btn-group">
      <button class="sign-up-toggle btn active">sign up</button><!--
   --><button class="sign-in-toggle btn">sign in</button>
      <?php if ($_SESSION['user_id']) : ?>
         <a href="?page=account">disconnect</a>
      <?php endif ?>
   </div>
   <!-- End -->

   <!-- sing up ( register ) Start -->
   <div id='signUp' class="login hide">
      <button class="sign-up-toggle login__close"><i class="fas fa-times"></i></button>

      <form action="" method="post">
         <div class="login__field">
            <input class="login__input" type="text" name="sign_up[username]" id="upUser" required>
            <label class="login__label" for="upUser">Username</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="email" name="sign_up[email]" id="upEmail" required>
            <label class="login__label" for="upEmail">Email</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="password" name="sign_up[password]" id="upPassword" required>
            <label class="login__label" for="upPassword">Password</label>
         </div>

         <button class="btn" name="sign_up[submit]" value="send" type="submit">sign up</button>
      </form>
   </div>
   <!-- End -->

   <!-- sing in ( login ) Start -->
   <div id='signIn' class="login hide">
      <button class="sign-in-toggle login__close"><i class="fas fa-times"></i></button>

      <form action="" method="post">

         <div class="login__field">
            <input class="login__input" type="email" name="sign_in[email]" id="inEmail" required>
            <label class="login__label" for="inEmail">Email</label>
         </div>

         <div class="login__field">
            <input class="login__input" type="password" name="sign_in[password]" id="inPassword" required>
            <label class="login__label" for="inPassword">Password</label>
         </div>

         <button class="btn" name="sign_in[submit]" value="send" type="submit">sign in</button>
      </form>
   </div>
   <!-- End -->

<?php include 'header_footer/footer.php' ?>