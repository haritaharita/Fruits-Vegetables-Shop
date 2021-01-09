
   <?php 
        if (isset($_SESSION['email'])) {
    ?>
        <li><a href="cart.php" class="php-cart">  CART </a> </li>
        <li><a href="logout.php" class="php-logout">  LOGOUT </a> </li>

   
      <?php
            } else {
     ?>
            <li><a href="signup.php" class="php-cart">  REGISTER </a> </li>
            <li><a href="login-direct.php" class="php-logout">  SIGN-IN </a> </li>

        
      <?php
            } 
       ?>