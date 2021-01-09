
<html><head>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&family=Montserrat:wght@400;700;900&family=Pacifico&family=Playfair+Display:wght@400;700;900&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head></html>

<style>

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


    .navbar {
    width:100%;
    display: grid;
    background-color: white;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    box-shadow: 0px 15px 10px -15px rgba(17, 17, 17, 0.35);
    margin-bottom: 4rem;
}

.navbar .logo {
    padding: 1rem 2rem;
}

.navbar .logo h1 {
    font-size: 3rem;
    font-family: var(--montserrat);
    font-weight: 700;
    text-transform: uppercase;
    color: #0ab3a3;
}

.navbar .logo p {
    font-size: 1rem;
    font-weight: 400;
    color: #494949;
    font-family: var(--jost);

}

.navbar .list {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.navbar .list li {
    list-style-type: none;
    position: relative;
    display : flex;
    align-items: center;
}

.navbar .list  span{
    font-size: 2rem;
    align-self: center;
    
}

.navbar .list li a {
    text-decoration: none;
    font-size: 1.2rem;
    font-family: var(--poppins);
    color: grey;
    margin: 0 4rem;
    cursor: pointer;
    position: relative;
}

.navbar .list li a:nth-child(1)::before {
    content: "HOME";
    position: absolute;
    bottom: -50%;
    left: 50%;
    font-size: .7rem;
    transform: translateX(-50%);
    background: #fd6b6b;
    color: white;
    font-family: var(--jost);
    padding: 0 .5rem;
}


</style>


<div class="navbar">
            <div class="logo"> 
                <h1> M&H <h1> 
                <p> Mandeep & Harita's Online Store </p>
            </div>

            <div class="list">
                    <li><a href="index.php">  <span class="material-icons">home</span> </a></li>
                  
                 
            </div>
       
       </div>




      