<?php 
	include 'conexaoBD.php';

	function mostrarProdutosSelecionados($codCliente){
		conectar();
		$resultado=query("SELECT CODIGOPRODUTO, DESCRICAO FROM PRODUTO, VENDA WHERE VENDA.CODIGOCLI = $codCliente AND VENDA.CODIGOPROD = PRODUTO.CODIGOPRODUTO");
		fechar();
		return $resultado;
	}

	function excluirVenda($codigoCliente, $codigoProduto){
		conectar();
		query("DELETE FROM venda WHERE codigoCli = $codigoCliente AND codigoProd=$codigoProduto");
		fechar();
	}

	function mostrarProdutos($codCliente){
		conectar();
		$resultado=query("SELECT CODIGOPRODUTO, DESCRICAO FROM PRODUTO, VENDA
								WHERE PRODUTO.CODIGOPRODUTO NOT IN (SELECT CODIGOPRODUTO
											FROM PRODUTO, VENDA
												WHERE VENDA.CODIGOCLI = $codCliente 
													AND VENDA.CODIGOPROD = PRODUTO.CODIGOPRODUTO)");
		fechar();
		return $resultado;
	}

	function inserirVenda($codigoCliente, $codigoProduto){
		conectar();
		query("INSERT INTO venda (codCli, codigoProd) VALUES ($codigoCliente, $codigoProduto)");
		fechar();
	}


?>