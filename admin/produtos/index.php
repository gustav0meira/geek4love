<?php include_once('../../app/externalItens.php'); ?>
<?php include_once('../../app/varsConfig.php'); ?>
<?php include_once('../../app/varsLayout.php'); ?>
<?php include_once('../../app/leftbarAdmin.php'); ?>
<?php include_once('../../css/varsLayout.php'); ?>
<?php include_once('../../app/sql.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Geek4Love</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="row">
		<div class="col-sm">
			<!-- <h2 class="header align">Produtos</h2> -->
		</div>
		<div class="col-sm">
			<button class="add align right"><i class="fa-solid fa-plus"></i>ㅤAdicionar Produto</button>
		</div>
	</div>
	<div class="module">
	    <table id="myTable">
	        <thead style="display: none !important;">
	            <tr>
	                <th>imagem</th>
	                <th>nome</th>
	                <th>descrição</th>
	                <th>preço</th>
	            </tr>
	        </thead>
	        <tbody>
			<?php
			$sql = "SELECT * FROM produtos WHERE status = 'ativo'";
			$result = $conn->query($sql);

			while ($dado = $result->fetch_assoc()) {
			    // Consulta à tabela 'imagens' para obter a imagem principal
			    $imagem_sql = "SELECT caminho FROM imagens WHERE product_id = {$dado['id']} AND tipo = 'principal'";
			    $imagem_result = $conn->query($imagem_sql);
			    $imagem = $imagem_result->fetch_assoc()['caminho'];

			    // Restante do código
			    ?>
			    <tr>
			        <td>
			            <?php if ($imagem) { ?>
			                <img class="product_image" src="<?php echo $appLocal ?>/assets/produtos/<?php echo $imagem ?>">
			            <?php } else { ?>
			                <img class="product_image" src="<?php echo $appLocal ?>/assets/produtos/sem-imagem.jpg">
			            <?php } ?>
			        </td>
			        <td><label class="product_name"><?php echo $dado['nome'] ?></label></td>
			        <td style="width: 150px;"><center><label class="product_preco">R$ <?php echo $dado['preco_venda'] ?></label></center></td>
			        <td><label class="product_descricao"><?php $descricao_truncada = (strlen($dado['descricao']) > 100) ? substr($dado['descricao'], 0, 100) . '...' : $dado['descricao']; echo $descricao_truncada; ?></label></td>
			    </tr>
			    <?php
			}
			?>
	        </tbody>
	    </table>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        // Alterando o idioma da tabela para Português
        language: {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar:ㅤ",
            "oPaginate": {
                "sNext": '<i style="font-size: 10px !important;" class="fa-solid fa-angle-right"></i>',
                "sPrevious": '<i style="font-size: 10px !important;" class="fa-solid fa-angle-left"></i>',
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },

        // Habilitando ordenação por colunas
        columnDefs: [
            { orderable: true, targets: '_all' }
        ],

        // Definindo número de registros por página
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todos"]],

        // Habilitando pesquisa na tabela
        searching: true,

        // Definindo tema
        theme: 'bootstrap'
    });
});
</script>
</html>