<?php
  include "header.php";
?>
  <div id="everything">
    <div id="content">
    <div id="navtop">
    <?php
	turn_page($_GET["page"], 1, "yes");
	echo "\t".$_GET["page"]."\t";
	turn_page($_GET["page"], -1, "yes");
    ?></div>
      <div id="page"><?php show_image($_GET["page"]);?></div>
    </div>
   </div>
  </body>
</html>
