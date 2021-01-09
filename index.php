
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M&H Market</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&family=Montserrat:wght@400;700;900&family=Pacifico&family=Playfair+Display:wght@400;700;900&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<?php 
 session_start();  
 include("connection.php");
 error_reporting(0);
 $fetchEmail = $_SESSION["email"];
 $Query = "SELECT * FROM users WHERE Email = '$fetchEmail' ";
 $data = mysqli_query($connection, $Query);
 $result = mysqli_fetch_assoc($data);
?>


<body>

     <div class="webarea">

     <!-- navbar start here  -->

       <div class="navbar">
            <div class="logo"> 
                <h1> M&H <h1> 
                <p> Mandeep & Harita's Online Store </p>
            </div>

            <div class="list">
                    <li><a href="">HOME</a></li>
                    <li><a  onclick="fruits()">FRUITS</a></li>
                    <li><a  onclick="vegetables()">VEGETABLES</a></li>
                    <li><a  onclick="juices()">JUICES</a></li>
                    <?php include("header.php") ?>
            </div>
       
       </div>

    <!-- display banner image  -->

    <div class="banner">
        <p class= "wc-php"> WELCOME <span>  <?php if (isset($_SESSION["email"])){ echo $result['name']; } else {echo "GUEST";}    ?>  </span> </p>
        <h1>Fresh & Delicious</h1>
        <p>20% off on all orders </p>
        <button> Order Now </button>
    </div>


     <!-- product gallery for shopping  -->
     <!-- fruits gallery  -->

     <div class="products">

        <h1> Fresh in store </h1>
        <p id="fruits"> #<span>Fruits</span>. <p> 

     </div>

     <div class="product-gallery">


         <!-- product no.1 apple  -->
         <div class="card">
             <div class="card-image"> 
                 <img src="images/apple1.png" alt="apple"> 
             </div>
             <div class="card-text">
                 <div class="card-info">
                  <h1> Apple </h1> 
                  <p> Price : $5 </p>
                  </div>
                  <div class="card-cart">
                       <span class="material-icons"> add_box </span> <p> Add to cart </p>
                  </div>
             </div>
         </div>

          
         <!-- product no. 2 orange  -->
         <div class="card">
             <div class="card-image"> 
                 <img src="images/orange.png" alt="orange"> 
             </div>
             <div class="card-text">
                 <div class="card-info">
                  <h1> Orange </h1> 
                  <p> Price : $8 </p>
                  </div>
                  <div class="card-cart">
                       <span class="material-icons"> add_box </span> <p> Add to cart </p>
                  </div>
             </div>
         </div>


         <!-- product no. 3 banana  -->
         <div class="card">
             <div class="card-image"> 
                 <img src="images/banana.png" alt="banana"> 
             </div>
             <div class="card-text">
                 <div class="card-info">
                  <h1> Banana </h1> 
                  <p> Price : $7 </p>
                  </div>
                  <div class="card-cart">
                       <span class="material-icons"> add_box </span> <p> Add to cart </p>
                  </div>
             </div>
         </div>

        
         <!-- product no. 4 mango  -->
         <div class="card">
             <div class="card-image"> 
                 <img src="images/mango.png" alt="mango"> 
             </div>
             <div class="card-text">
                 <div class="card-info">
                  <h1> Mango </h1> 
                  <p> Price : $4 </p>
                  </div>
                  <div class="card-cart">
                       <span class="material-icons"> add_box </span> <p> Add to cart </p>
                  </div>
             </div>
         </div>

     </div>

     <!-- ------------product gallery for VEGETABLES---------------- -->

     <div class="vegeies">
          <p id= "vegetables"> #<span>Vegetables</span>. <p>      
     </div>

     <div class="product-gallery">


<!-- product no.5  red peeper -->
<div class="card">
    <div class="card-image"> 
        <img src="images/red-pepper.png" alt="red pepper"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> R-Peeper </h1> 
         <p> Price : $9 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>

 
<!-- product no. 6 yellow peeper  -->
<div class="card">
    <div class="card-image"> 
        <img src="images/yellow-pepper.png" alt="yellow pepper"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Y-Pepper </h1> 
         <p> Price : $6 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>


<!-- product no. 7 pumpkin  -->
<div class="card">
    <div class="card-image"> 
        <img src="images/pumpkin.png" alt="pumpkin"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Pumpkin </h1> 
         <p> Price : $10 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>


<!-- product no. 8 tomato  -->
<div class="card">
    <div class="card-image"> 
        <img src="images/tomato.png" alt="tomato"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Tamato </h1> 
         <p> Price : $9 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>

</div>


 <!-- -------------------Juice section ----------------------------- -->

 <div class="juices">
          <p id="juices"> #<span>juices</span>. <p>      
     </div>


     <div class="product-gallery">


<!-- product no.9  milkshake -->
<div class="card">
    <div class="card-image"> 
        <img src="images/milkshake.png" alt="milkshake"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Milkshake </h1> 
         <p> Price : $15 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>

 
<!-- product no. 10 Berry  -->
<div class="card">
    <div class="card-image"> 
        <img src="images/berry.png" alt="berry"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Berry </h1> 
         <p> Price : $20 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>


<!-- product no. 11 orange juice -->
<div class="card">
    <div class="card-image"> 
        <img src="images/orange-juice.png" alt="orange juice"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Orange </h1> 
         <p> Price : $10 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>


<!-- product no. 12 smoothie  -->
<div class="card">
    <div class="card-image"> 
        <img src="images/smoothie.png" alt="smoothie"> 
    </div>
    <div class="card-text">
        <div class="card-info">
         <h1> Smoothie </h1> 
         <p> Price : $20 </p>
         </div>
         <div class="card-cart">
              <span class="material-icons"> add_box </span> <p> Add to cart </p>
         </div>
    </div>
</div>

</div>


 <!-- ----------------------------footer--------------------------------------- -->

 <footer>
     <div class="footer-info">
            <h1> M&H </h1>
            <p> Mandeep & Harita's online Store </p>
     </div>
     <div class="copyright">
         <p>Copyright 2020 </p>
         <ul>
             <li>Facebook</li>
             <li>Instagram</li>
             <li>Linkedin</li>
         </ul>
     </div>
 </footer>


    
     
     
     
     
     </div>


     <!-- ----------------move to top icon ---------------------------------------------------------------------------  -->

     <span class="material-icons moveIcon" id="movetotop" onclick="moveToTop()">keyboard_arrow_up  </span>

     <script>
        //script to show and hide the move to top button
        window.onscroll = function(){abc()};

        function abc() {
            if (window.pageYOffset > 250)
            document.getElementById("movetotop").style.opacity="1";

            else {
            document.getElementById("movetotop").style.opacity="0";
            }
        }

    </script>

    <script>
    // move to top button function

    function moveToTop() {

                window.scroll({
                top: 0,
                left:0,
                behavior: "smooth",
            })
        };  
                
    </script>


 <!---------------------------- scroll into view ------------------------------------------------------------------------------->

   <script>

         

         function fruits() {
            document.getElementById("fruits").scrollIntoView ({    
            behavior: "smooth"
            })
        }

        function vegetables() {
            document.getElementById("vegetables").scrollIntoView ({       
            behavior: "smooth"
            })
        }

        function juices() {
            document.getElementById("juices").scrollIntoView ({     
            behavior: "smooth"
            })
        }

    </script>  
 
</body>
</html>


<?php include('scrollbar.php') ?>