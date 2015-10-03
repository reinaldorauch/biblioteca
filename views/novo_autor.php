<script>
$(document).on('submit', '#novo-autor', function() {
    $.post('./controllers/novo_autor.php', $(this).serialize(), function(data) {
        $(".result").html(data);
    });

    return false;

});
</script>

<form id="novo-autor" action="./controllers/novo_autor.php" method="post">
	<div class="form-group">
		 <label for="nome">Nome</label>
		 <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
	</div>
	<button type="submit" class="btn btn-default">OK</button>
</form>