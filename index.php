<?php
  include "header.php";
?>
  <div id="everything">
    <div id="content">
      <div id="navtop"><?php turn_page($_GET["page"], 1); echo "\t".$_GET["page"]."\t"; turn_page($_GET["page"], -1);?></div>
      <div id="page"><?php show_page($_GET["page"]);?></div>
      <div id="social">
	<a href="https://flattr.com/submit/auto?user_id=<?php echo $GLOBALS["cfg_flattr_user"];?>&url=<?php echo $GLOBALS["cfg_url"].'?page='.$_GET["page"];?>&title=<?php echo $GLOBALS["cfg_title"];?>%20Seite%20<?php echo $_GET["page"];?>&description=<?php echo $GLOBALS["cfg_title"];?>%20Seite%20<?php echo $_GET["page"];?>&language=de_DE&tags=comic,webcomic,illustration&hidden=1&category=images">
	<img src="https://api.flattr.com/button/flattr-badge-large.png" alt="Flattr our API Documentation" />
	</a>
      </div>
    </div>
   </div>
  </body>
</html>