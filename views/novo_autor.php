<!--<script>
$(document).on('submit', '#novo-autor', function() {
    $.post('./controllers/novo_autor.php', $(this).serialize(), function(data) {
        $(".result").html(data);
    });

    return false;

});
</script>-->
<?php
require_once('controllers/AutorController.php');
if (isset($_POST['nome'])) {
	$autorCont = new AutorController();
	$autorCont->adicionarAutor();
}	
?>

<div class="row">
	<div class="col-sm-6">
		<form id="novo-autor" action="" method="post">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
			</div>
			<button type="submit" class="btn btn-default">OK</button>
		</form>
	</div>
</div>