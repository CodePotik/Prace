<!DOCTYPE html>
<html>
<head>
    <title >Strona serwisowa</title>
    <link rel="stylesheet" href="mystyle.css">
    
</head>
  
<body>
      

    <header>
        <div class="head1">Serwis Samochodowy</div>
    </header>
      

    <nav class="menu">
        <a href="index.php?p=dodaj_klienta">dodaj klienta</a>
        <a href="index.php?p=dodaj_samochod">dodaj samochod</a>
        <a href="index.php?p=dodaj_czesci">dodaj czesci</a>
        <a href="index.php?p=dodaj_naprawy">dodaj naprawy</a>
        <a href="index.php?p=dodaj_mechanika">dodaj mechanika</a>
        <a href="index.php?p=index">Log Off</a>
        
        
       
        
      </nav>
      

    <main class = "body_sec">
        <section id="Content">
            <h3>Wstaw jakiś obraz</h3>
            <?php

            if (isset($_GET['p'])&& $_GET['p'] != '')
            {
            $p = $_GET['p'];
            include("podstrony/" . $p . '.php');

            } else {
                echo '<h2>Witamy na stronie głownej</h2>';


            }



        

            ?>

        </section>
      </main>
      

    <footer></footer>
</body>
</html>