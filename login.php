<?php
include("connection.php");
error_reporting(0);
session_start();
?>

<style>

@import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&family=Montserrat:wght@400;700;900&family=Pacifico&family=Playfair+Display:wght@400;700;900&family=Poppins:wght@400;700;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --jost: 'Jost', sans-serif;
    --montserrat: 'Montserrat', sans-serif;
    --pacifico: 'Pacifico', cursive;
    --playfair: 'Playfair Display', serif;
    --poppins: 'Poppins', sans-serif;
}

body {
    background-color: #E6E9ED;
}

.webarea {
    width: 90%;
    background-color: white;
    margin: 0 auto;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.webarea .message {
    font-family: var(--montserrat);
    background: #62ddbd;
    border-radius:5px;
}

.webarea .message h1 {
    color : green;
    font-size : .8rem;
    font-weight: 400;
    padding: 1rem 2rem;
}

form{
    display:flex;
    flex-direction:column;
    width:350px;
    margin:2rem auto;
   
}

form label{
    font-size:1.2rem;
    font-weight:400;
    color:#494949;
    font-family:var(--jost);
}

form input{
    font-size:.8rem;
    line-height:2rem;
    border:none;
    border-bottom:1px solid #494949;
    margin-bottom:1.5rem;
    font-family:var(--montserrat);
}

form .submit{
    border:none;
    background-color:#fd6b6b;
    color:white;
    text-transform:uppercase;
    width:150px;
    align-self:center;
    padding:.5rem;
    border-radius:10px;
    cursor: pointer;
}

form input:focus{
    outline:none;
}

form input:required{
    box-shadow:none;
}

</style>



<?php

        if (isset($_POST["submit"])) {
            $eMail = $_POST["email"];
            $passWord = $_POST["password"];

            $Query = "SELECT * FROM users WHERE Email = '$eMail' && Password = '$passWord' ";

            $data = mysqli_query($connection, $Query);

            $total = mysqli_num_rows($data);

            if ($total==1) {

                $_SESSION["email"] = $eMail;

                header("location:index.php");

            }
            else {
                header("location:login-failed.php");
            }
        }


?>

<body>

    <div class="webarea">

    <?php include("navbar.php"); ?>

        <div class="message"><h1> Registeration Sucessfull. Login to your account here</h1></div>

        <form action="" method="POST" autocomplete ="off">

            <label for="username">Email</label>
            <input type="email" id="username" name="email" placeholder="Enter registered Email" required>


            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Type your password" required>

          

            <input type="submit" class="submit" value="Login" name="submit">

</form>

<?php include("footer.php"); ?>
</div>






</body>
</html>

<?php include('scrollbar.php') ?>