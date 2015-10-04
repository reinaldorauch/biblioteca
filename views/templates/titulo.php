<?php

if (array_key_exists('titulo', $data)) {
	echo '<div class="page-header">';
	echo '<div class="container">';
	if (array_key_exists('subtitulo', $data))
		echo '<h1>' . $data['titulo'] . ' <small>' . $data['subtitulo'] . '</small></h1>';
	else
		echo '<h1>' . $data['titulo'] . '</h1>';
	echo '</div>';
	echo '</div>';
}

?>