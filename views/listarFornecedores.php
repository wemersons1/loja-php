<table border = "1">
	<tr>
		<th>Produtos</th>
		<th>Preço</th>
		<th>Imagem</th>
		<th>Descrição</th>
	</tr>
	<tr>
		<?php foreach ($data[1] as $dados){
		?>

			<td><?php echo $dados['nome'];	?></td>
			<td><?php echo $dados['imagem'];	?></td>
			<td><?php echo $dados['descricao'];	?></td>
			<td><?php echo $dados['site'];	?></td>
		

	</tr>
	<?php } ?>
</table>
