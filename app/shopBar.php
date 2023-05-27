<style>

	.shopBar{
		padding: 35px;
		background: #00538F;
		font-family: Poppins !important;
		font-weight: 300 !important;
	}

	.logo{
		color: white;
		width: 150px;
	}

	input[type=search]{
		width: 100%;
		padding: 0px;
		background: transparent;
		border: none;
	}

	.search button{
		width: 100%;
		background: transparent;
	}

	.search{
		background: white;
		border-radius: 15px;
		padding: 10px;
	}

	.user{
		padding: 10px;
		background: white;
		border-radius: 100%;
		width: 40px;
		height: 40px;
		text-align: center !important;
		margin-left: 30px;
		color: #00538F;
	}

	.fa-magnifying-glass{
		color: #00538F;
	}

	.shopCart{
		color: white;
	}

	.shopCategory{
		background: #02497a;
	}

	.shopCategory .category{
		color: white;
		padding: 15px;
		border-bottom: 2px solid transparent;
		font-size: 14px;
		transition: all 300ms;
		margin-right: 30px;
		cursor: pointer;
	}

	.shopCategory .category:hover{
		border-color: white !important;
	}

	.shopCategory i{
		margin-right: 10px;
		color: white;
		font-size: 13px;
	}

	.assignatureClub,
	.assignatureClub i{
		background: white;
		border: none !important;
		border-radius: 15px;
		padding: 7px !important;
		color: #004E70 !important;
		font-weight: 400 !important;
		padding-right: 20px !important;
		padding-left: 10px !important;
	}

	.assignatureClub i{
		padding-right: 0px !important;
	}

</style>

<div class="shopBar">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<img class="logo align" src="assets/logoWhite.png">
			</div>
			<div class="col-4">
				<div class="search align">
					<div class="row">
						<div class="col-10">
							<input type="search" class="align" name="pesquisar">
						</div>
						<div class="col-2">
							<button class="noButton align"><i class="fa-solid fa-magnifying-glass"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="user align right">
					<i class="fa-solid fa-user-ninja align"></i>
				</div>
				<div class="shopCart align right">
					<i class="fa-solid fa-cart-shopping"></i>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shopCategory">
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="align">
					<?php
					$consulta = "SELECT * FROM categorias WHERE hidden != 'yes' ";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?> 
					<a href="<?php echo $dado['url'] ?>"><label class="category"><?php echo $dado['icone'] ?> <?php echo $dado['nome'] ?></label></a>
					<?php } ?>
					<!-- <a href="#"><label class="category assignatureClub"><i class="fa-brands fa-d-and-d"></i> Clube de Assinaturas</label></a> -->
				</div>
			</div>
		</div>
	</div>
</div>