<?php
    $routing = array(
        "article" => "views/view_article.php"
    );
    if(!empty($routing[$_GET["page"]])) {
        $page = $routing[$_GET["page"]];
    } else {
        $page = "views/errors/error_404.php";
    }
   
    include($page);
?>
