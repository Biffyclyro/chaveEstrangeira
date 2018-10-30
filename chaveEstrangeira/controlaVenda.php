<?php 
	include 'crudVendas.php';

	$opcao=$_GET['opcao'];

	if($opcao=='tirarSelecao'){
		$codigoProduto=$_GET['codigo'];
		excluirVenda(1, $codigoProduto);
		header("Location: produtosSelecionados.php");
	}
	else if($opcao=='selecionar'){
		$codigoProduto=$_GET['codigo'];
		inserirVenda(1, $codigoProduto);
		header("Location: produtos.php");
	}



?>