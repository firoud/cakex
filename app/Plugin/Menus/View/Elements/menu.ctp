<?php

  $links = $this->requestAction(
    'menus/links/getLinks/'. $menu_name
  );
  
    $this->Menu->render($links, $menu_name);
?>



