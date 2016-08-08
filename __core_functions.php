<?php 

class Navbar {
  public static function GenerateMenu($items) {
    $html = "<ul class=\"nav navbar-nav navbar-right\">\n";
    foreach($items as $item) {

	  $html .= "\t<li>";
      $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
	  $html .= "\t</li>\n";      
    }

    $html .= "</ul>\n";
    return $html;
  }
};

class WithinNavbar {
  public static function GenerateMenu($items) {
    $html = "\n";
    foreach($items as $item) {

    $html .= "\t<li>";
      $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
    $html .= "\t</li>\n";      
    }

    $html .= "\n";
    return $html;
  }
};

?>