<?php
if (isset($_POST['search'])){
    $searchTerm = $_POST['search'];
    $pages = array('index.php','bemutatkozas.html','festmeny-restauralas.html','grafika.html','mozaik.html','olajfestmenyek.html','butor.html','mese.html','ajandektargyak.html','kedvencek.html','kapcsolat.html'); //Webpage array

    foreach($pages as $page){
        $content = file_get_contents($page);
      /*   if(strpos($content,$searchTerm) !== false){
            echo "<p>Találat a(z) $page oldalon</p>";
        } */
        if(preg_match_all("/\b$searchTerm\b/i",$content,$matches)){
            echo "<h2>Találatok a(z) $page oldalon:</h2>";
            echo"<ul>";
            foreach($matches[0]as $match){
                echo "<li><a href='$page'>$match</a></li>";
            }
            echo"</ul>";
        }
    }
} 
?>