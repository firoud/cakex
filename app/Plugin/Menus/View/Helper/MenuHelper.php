<?php 

/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');

class MenuHelper extends AppHelper {
	
public function render($items = array(), $menu = '') {

	$output = '';
		
    if (count($items)) {
		
        echo "<ul class=\"menu\" id=\"" . $menu . "\">";
        foreach ($items as $item) {
			
		
		$check = Router::normalize($this->request->here) === Router::normalize($item['Link']['path']);
			
		$activeClass = $check ? ' current-menu-item': '';	


            echo '<li id="menu-item-'.$item['Link']['id'].'" class="menu-item' . $activeClass . '">';
			echo '<a title="' . $item['Link']['description'] . '" href="' . $item['Link']['path'] . '">' . $item['Link']['title'] . '</a>';
			
			
            if (count($item['children'])) {
				
				
                $this->render($item['children']);
            }
			
			
            echo '</li>';
        }
        echo '</ul>';
		
    	}
	

	
	} 
	
	
	
	
	
} // class




?>