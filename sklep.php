<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<header>
    <div id="hl">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div id="hr">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="blank">soki</a></li>
        </ol>
    </div>
</header>
<main>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'dane2');
    $query = mysqli_query($conn, "SELECT nazwa,ilosc,opis,cena,zdjecie from produkty WHERE rodzaje_id=1 or rodzaje_id=2");
    foreach ($query as $block) {
        echo "<div id='product-block'>";
        echo "<img src=" . $block['zdjecie'] . ">";
        echo "<h5>" . $block['nazwa'] . "</h5>";
        echo "<p> opis: " . $block['opis'] . "</p>";
        echo "<p> na stanie: " . $block['ilosc'] . "</p>";
        echo "<h2>" . $block['cena'] . " zł</h2>";
        echo "</div>";
    }
    mysqli_close($conn);
    ?>
</main>
<footer>
    <form action="sklep.php" method="post">
        <label for="nazwa">Nazwa</label>
        <input type="text" name="nazwa">
        <label for="nazwa">Cena</label>
        <input type="number" name="cena">
        <input type="submit" value="Dodaj produkt">
    </form>
    Stronę wykonał: Stanisław Fiedoruk 4J
</footer>
<?php
?>

<body>

</body>

</html>