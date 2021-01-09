
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


footer {
    width: 100%;
    margin-top: 1.5rem;
}

footer .footer-info {
    width: 100%;
    text-align: center;
    background-color: #777777;
    color: white;
    font-family: var(--jost);
    padding: 2rem 0;
}

footer .footer-info h1 {
    font-size: 2.5rem;
    color:white;
}

footer .footer-info p {
    font-size: 1rem;
}

footer .copyright {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #494949;
    color: white;
    font-family: var(--poppins);
    padding: 1rem 2rem;
}

footer .copyright ul {
    display: flex;

}

footer .copyright ul li {
    list-style-type: none;
    margin: 0 .5rem;
    color: #fd6b6b;
}

footer .copyright ul li:nth-child(even) {
    color: #0ab3a3;
}
</style>

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