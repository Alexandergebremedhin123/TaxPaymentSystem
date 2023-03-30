<?php
       $range = 3;
echo "<div class=\"col-md-offset-5\">";
       if ($currentpage > 1) {
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><span class=\"badge badge-custom-primary\">FIRST</a> ";
          $prevpage = $currentpage - 1;
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><span class=\"badge badge-custom-primary\">PREVIOUS</a> ";
       } 

           for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
              if (($x > 0) && ($x <= $totalpages)) {
             if ($x == $currentpage) {
                echo " [<b><span class=\"badge badge-custom-success\">$x</b>] ";
             } else {
                echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'><span class=\"badge badge-custom-primary\">$x</a> ";
             } 
          }  
      }        
       if ($currentpage != $totalpages && $totalpages!=0 && $totalpages<=5) {
          $nextpage = $currentpage + 1;
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><span class=\"badge badge-custom-primary\">NEXT</a> ";
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'><span class=\"badge badge-custom-primary\">LAST</a> ";
       } 
echo "</div>";
 ?>
