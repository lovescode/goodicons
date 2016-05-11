<?php 



	/**
	 * Which font icon am i?!
	 *
	 * Returns the most likely font icon based on the input provided... 
	 * 
	 * @param  string $icon             The icon you want
	 * @param  string $additional_class Any other classes you'd like to output
	 * @return string                   The <i> tag for the appropriate libaray
	 * 
	 */

	function icon($icon, $additional_class = null) {
		
		if (!$icon) return; 
		
		// Prepend a space
		if ($additional_class) $additional_class = ' ' . $additional_class; 
		
		// Font Awesome with correct prefix
		if (substr($icon, 0, 3) == 'fa ') 
			return '<i class="' . $icon . $additional_class . '"></i>'; 

		// Font awesome without the 'fa '
		else if (substr($icon, 0, 3) == 'fa-') 
			return '<i class="fa ' . $icon . $additional_class . '"></i>'; 

		// Google Material - e.g.: md-swap-horiz 
		// Note that Google Material prefers dashes
		else if (substr($icon, 0, 3) == 'md-') 
			return '<i class="material-icons' . $additional_class . '">'.
				str_replace(['md-', '-'], ['', '_'], $icon) . '</i>'; 

		// Default to font awesome because I use it everywhere... 
		else 
			return '<i class="fa fa-' . $icon . $additional_class . '"></i>'; 
		
		
	}
		