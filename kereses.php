<!-- 
if (isset($_POST['search'])){
    $searchTerm = $_POST['search'];
    $pages = array('index.php','bemutatkozas.html','festmeny-restauralas.html','grafika.html','mozaik.html','olajfestmenyek.html','butor.html','mese.html','ajandektargyak.html','kedvencek.html','kapcsolat.html'); //Webpage array

    foreach($pages as $page){
        $content = file_get_contents($page);
      /*   if(strpos($content,$searchTerm) !== false){
            echo "<p>Találat a(z) $page oldalon</p>";
        } */
        if(preg_match_all("/\b$searchTerm\b/i",$content,$matches)){
            echo "<h2>Összesen: $totalMatches találat a(z) $page oldalon:. count($matches[0]) .</h2>";
            echo"<ul>";
            foreach($matches[0]as $match){
                echo "<li><a href='$page'>$match</a></li>";
            }
            echo"</ul>";
            echo "<style> 
            body {
                background-color:#5bc0de ; } ul{list-style-type:none;}
        </style>";
        $totalMatches +=count($matches[0]);
        
        }
    }
}  -->
<?php
if (isset($_POST['search'])){
    $searchTerm = $_POST['search'];
    $pages = array('index.php','bemutatkozas.html','festmeny-restauralas.html','grafika.html','mozaik.html','olajfestmenyek.html','butor.html','mese.html','ajandektargyak.html','kedvencek.html','kapcsolat.html'); //Weboldalak tömbje

    foreach($pages as $page){
        $content = file_get_contents($page);
        $totalMatches = 0; // A találatok összes számának nullázása minden egyes oldalra
        if(preg_match_all("/\b$searchTerm\b/i",$content,$matches)){
            echo "<h2>Összesen: " . count($matches[0]) . " találat a(z) $page oldalon:</h2>";
            echo"<ul>";
            foreach($matches[0] as $match){
                echo "<li><a href='$page'>$match</a></li>";
            }
            echo"</ul>";
            echo "<style> 
            body {
                background-color:#5bc0de ; } ul{list-style-type:none;}
        </style>";
            $totalMatches = count($matches[0]);
        }
    }
}
?>

