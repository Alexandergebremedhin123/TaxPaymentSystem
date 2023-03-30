<?php 

    $rowsperpage = 5;

    $totalpages = ceil($numrows / $rowsperpage);

    if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   
       $currentpage = (int) $_GET['currentpage'];
    } else {
    
       $currentpage = 1;
    } 


    if ($currentpage > $totalpages) {
      
       $currentpage = $totalpages;
    } 

    if ($currentpage < 1) {

       $currentpage = 1;
    }

 
    $offset = ($currentpage - 1) * $rowsperpage;

 ?>