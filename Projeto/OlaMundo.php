<html>
    <head>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
    </head>
<body>
   
     <main class="container">
        <?php
    for($i=1;$i<=10;$i++){
    ?>
    <a href="http://localhost/Projeto/tabuada.php?tabuada=<?= $i?>">Tabuada do <?= $i?> </a> <br>
    <?php
    }
    ?>
     </main>
</body>
</html>