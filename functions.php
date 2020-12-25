<?php

/*****************
 * functions.php *
 *****************/
 
  include "config.php";
  
  if (!isset($_GET["page"])) {
    $_GET["page"] = "0001";
  }
  
  $pages = NULL;	// array of pages
  $notfound = false;
  
  function scan_dir ($path) {
    if ($dir = opendir($path)) {
      while (true == ($pages []= readdir($dir))); // end of loop!
      closedir($dir);
      sort($pages);
    }
    
    return $pages;
  }
  
  function show_image ($page, $size="full") {    
	    if ($size == "full") {	  
		    if (file_exists($filename = "./"
			    .$GLOBALS["cfg_imgpath"]
			    .$GLOBALS["cfg_prefix"]
			    .$page
			    .$GLOBALS["cfg_imgext"])){
			echo "<img src=".$filename." />";
			$notfound = false;
		    } else {
			echo $filename;
			echo "<img src=".$GLOBALS["cfg_404img"]." />";
			$notfound = true;
		    }
	    } elseif ($size == "thumbnail") {
		    if (file_exists($filename = "./"
			    .$GLOBALS["cfg_thumbpath"]
			    .$GLOBALS["cfg_prefix"]
			    .$page
			    .$GLOBALS["cfg_imgext"])){
			echo "<img src=".$filename." />";
			$notfound = false;
		    } else {
			/*
			echo $filename;
			echo "<img src=".$GLOBALS["cfg_404img"]." />";
			$notfound = true;
			 */
		    }
	    }
  }
 
// turn_page generates a link to a neighbouring page
// a positive direction will result in a link to the neighbouring with the bigger number ("newer")
// a negative will result in a link to the smaller number ("older") 
  function turn_page ($current_page, $direction) {
    $prefix_length = strlen($GLOBALS["cfg_prefix"]);
    $suffix_length = strlen($GLOBALS["cfg_imgext"]);
    
    if ($direction >= 0) {
      $direction = 1;
    } else {
      $direction = -1;
    }
  
    $pages = scan_dir ("./".$GLOBALS["cfg_imgpath"]);
    $key = array_search($GLOBALS["cfg_prefix"].$current_page.$GLOBALS["cfg_imgext"], $pages);
    $page = substr ($pages[$key+$direction], $prefix_length, -$suffix_length);
    
    //VAR_DUMP($pages[$key+1]);
    if ($pages[$key+$direction]!=NULL) {
      echo '<a href="'.$GLOBALS["cfg_url"].'?page='.$page.'">'.$page.'</a>';
    } else {
      echo "";
    }
  }

// generate a static flattr button
  function show_flattr_btn () {
    echo '<a href="https://flattr.com/submit/auto?user_id=' .
    $GLOBALS["cfg_flattr_user"] .
    '&url=' .
    $GLOBALS["cfg_url"].'?page='.$_GET["page"] .
    '&title=' .
    str_replace(" ", "%20", $GLOBALS["cfg_title"]) .
    '%20Seite%20' .
    $_GET["page"] .
    '&description=' .
    str_replace(" ","%20",$GLOBALS["cfg_description"]) .
    '%20Seite%20' .
    $_GET["page"] .
    '&language=' .
    $GLOBALS["cfg_language"] .
    '&tags=' .
    $GLOBALS["cfg_flattr_tags"] .
    '&hidden=1&category=images">' .
    '<img src="https://api.flattr.com/button/flattr-badge-large.png" alt="Flattr our API Documentation" />' .
    '</a>';
  }
  
/* function update_rss NOT IN USE (maybe someday)

  function update_rss ($num_pages) {
    // read imgdir
    $pages = scan_dir($GLOBALS["cfg_imgpath"]);
    // if rss file doesn't exist: create.
    
    // write rss file with as many as $num_pages
    
  }
