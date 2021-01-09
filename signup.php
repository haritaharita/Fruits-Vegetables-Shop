<?php
include("connection.php");
// error_reporting(0);
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

form{
    display:flex;
    flex-direction:column;
    width:350px;
    margin: 0 auto;
}

form label{
    font-size:1rem;
    font-weight:400;
    color:#494949;
    font-family:var(--jost);
}

form input{
    font-size:.8rem;
    line-height:1.5rem;
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

.webarea h1 {
    font-family: var(--jost);
    font-size : 1rem;
    color : #fd6b6b;
}

</style>

<?php

      
        if (isset($_POST["submit"])) {


            $Name = $_POST["name"];
            $Email = $_POST["email"];
            $Password = $_POST["password"];
            $City = $_POST["city"];
    
             

                // store in variable
                $query = "INSERT INTO users VALUES('$Name' , '$Email' , '$Password' , '$City')";

                $data =  mysqli_query($connection, $query);

                if ($data) {
                    echo  header("location:login.php") ;
                }
            } else  ?>
        
 

<body>

    <div class="webarea">

    <?php include("navbar.php"); ?>

        <form action="" method="POST" autocomplete ="off">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Choose a password" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Type city name" required><br><br>

            <input type="submit" class="submit" value="Submit" name="submit">

</form>

          <?php   
               {
                    echo  "<h1> ALL FEILDS REQUIRED</h1>";
               }    
           ?>



<?php include("footer.php"); ?>

</div>
</body>


<?php include('scrollbar.php') ?>

