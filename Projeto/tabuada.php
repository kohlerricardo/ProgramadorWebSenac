 <?php include 'layout/header.php' ?> 
     <a href="http://localhost/programadorWebSenac/Projeto/header.php">
 <main class="container">
     <?php
        $tab = $_GET['tabuada'];
        for($i=1;$i<=10;$i++){
            echo "<div> $tab x $i = " . $tab*$i ."</div>";
        }

?>
     </main>
<?php include 'layout/footer.php' ?>