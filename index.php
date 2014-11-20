<?php
  include "header.php";
?>
  <div id="everything">
    <div id="content">
      <div id="navtop"><?php turn_page($_GET["page"], 1); echo "\t".$_GET["page"]."\t"; turn_page($_GET["page"], -1);?></div>
      <div id="page"><?php show_page($_GET["page"]);?></div>
      <div id="social">
	<?php show_flattr_btn();?>
      </div>
    </div>
   </div>
  </body>
</html>