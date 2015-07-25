<?php
    require("variables.php");
    include("test/template/index/head.php");
    
    echo "<title>$name</title></head>";
    
    include("test/template/index/description.php");
    
    foreach($description as $p){
        echo "<p>$p</p>";
    };
    
    echo "</li>";
    
    $dir = glob("screenshots/*.png");
    sort($dir);
    foreach($dir as $file ){
      $x += 1;
    }
    
    if($x > 0){
        include("test/template/index/screenshots.php");
    } else{
        echo "</ul>";
    }
    
    if(count($changelog) > 0){
        include("test/template/index/changelog.php");
        
        foreach($changelog as $c){
            echo "<p>$c</p>";
        }
        echo "</li></ul>";
    }
    
    if(strlen($devText) > 1){
        include("test/template/index/devLink.php");
        echo "<a class=\"devLink\" target=\"_blank\" href=\"$devLink\">$devText</a></li></ul>";
    }
    
    include("test/template/index/footer.php");
?>
