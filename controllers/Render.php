<?php

/**
 * Renderiza um template.
 */
class Render {
	
	/**
	 * Renderiza um template.
	 * @param string $template Template para ser renderizado.
	 * @param array $data Argumentos opcionais de cada template.
	 */
	public static function renderTemplate($template, $data = []) {
		$path = $template . '.php';
		if (file_exists($path)) {
			extract($data);
			require($path);
    	}
	}
	
}

?>