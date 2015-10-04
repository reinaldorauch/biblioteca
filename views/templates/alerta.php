<?php

if ((array_key_exists('tipo', $data) && (array_key_exists('msg', $data)))) {
	switch($data['tipo']) {
		case 'danger':
			echo '<div class="alert alert-danger alert-dismissible" role="alert">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-label"Close"><span aria-hidden="true">&times;</span></button>';
			echo htmlspecialchars($data['msg']);
			echo '</div>';
	}
}

?>