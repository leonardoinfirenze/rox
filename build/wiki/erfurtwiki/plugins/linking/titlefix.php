<?php

/*
   Current markup allows to use [Title | ForPageName] to create a link
   to a page, but use a different title. However other Wikis have the
   meaning swapped [PageName|title], and this often confuses people.

   Therefore this plugin provides an (unreliable) workaround, that checks
   for existing of a page which the name of either side of the dash |
   in square brackets, and then decides wich side contained the PageName
   and which the title.
*/



$ewiki_plugins["link_notfound"][] = "ewiki_linking_titlefix";


function ewiki_linking_titlefix(&$title, &$href, &$href2, &$type) {
   global $ewiki_links;
   $href_mod = str_replace("  "," ",$href);
   $href_mod = str_replace(' ','_',$href); // Edit 'Nov09: replace spaces with underscores
   
   $find = ewiki_db::FIND(array($href_mod));
   if ($find[$href_mod])
   {
      $str = '<a href="' . ewiki_script("", rawurlencode($href_mod)) . htmlentities($href2) . '">' . $title . '</a>';
      $type = array("wikipage", "title-swapped");
   }
   else
   {
       $str = '<span class="NotFound"><a href="' . ewiki_script("", rawurlencode($href_mod)) . htmlentities($href2) . '">' . $title . '</a></span>';
       $type = array("wikipage", "title-swapped");
   }
   return($str);

}


