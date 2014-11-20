<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
  include "functions.php";
?>
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
  <head>
    <meta http-equiv="Content-Type" content="<?php echo $GLOBALS["cfg_httpequiv"];?>" />
    <meta name="author-personal" content="<?php echo $GLOBALS["cfg_authorpersonal"];?>" />
    <meta name="author-mail" content="<?php echo $GLOBALS["cfg_authormail"];?>" />
    <meta name="description" content="<?php echo $GLOBALS["cfg_description"];?>" />
    <meta name="language" content="<?php echo $GLOBALS["cfg_language"];?>" />
    <meta name="robots" content="<?php echo $GLOBALS["cfg_robots"];?>" />
	
    <title><?php echo $GLOBALS["cfg_title"]." Seite ".$_GET["page"];?></title>
	
    <link rel="icon" type="xage/vnd.microsoft.icon" href="./favicon.ico" />
    <link rel="stylesheet" href="default.css" type="text/css" media="screen, projection" />
    <link rel="image_src" href="<?php echo $GLOBALS["cfg_url"].$GLOBALS["cfg_imgpath"].$GLOBALS["cfg_prefix"].$_GET["page"].$GLOBALS["cfg_imgext"];?>" />
  </head>
  <body>