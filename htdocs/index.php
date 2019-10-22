<?php include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<button>sign in</button>

<body>

   <div class="login">
      <button id="closeLogin" class="login__close">
         X
      </button>

      <form class="login__form" action="" method="post">
         <div>
            <label for="user">Username</label>
            <input type="text" name="user" id="user">
         </div>

         <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
         </div>

         <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
         </div>

         <button class="btn" name="submit" value="send" type="submit">Login</button>
      </form>
   </div>

</body>
</html>