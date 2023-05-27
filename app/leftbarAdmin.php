<style>
	body{
		margin: 0px !important;
	}
	div.leftbarAdmin{
		background: #00538F;
		height: 100vh;
		width: 16vw;
		position: fixed;
		top: 0;
		left: 0;
	}
	div.barAdmin{
		padding: 20px;
		font-family: Poppins;
		font-weight: 300;
		color: #fff;
		font-size: 14px;
	}
	.adminLogo{
		width: 70%;
		margin-top: 20px;
		text-align: center;
		margin-bottom: 20px;
	}
	hr{
		color: #FFFFFF30;
	}
	.linkAdmin{
		color: white;
		padding: 20px;
		background: #FFFFFF10;
		border-radius: 15px;
		font-weight: 300;
		margin-bottom: 10px;
		cursor: pointer !important;
		transition: all 300ms;
	}
	.linkAdmin:hover{
		background: #FFFFFF20;
	}
	.linkAdmin label{
		cursor: pointer !important;
	}
	.linkProfile{
		background: white;
		padding: 10px;
		border-radius: 15px;
	}
	.profilePicture{
		width: 40px;
		height: 40px;
		background-size: cover !important;
		background-position: center center !important;
		float: right;
	}
	.name_profilePicture{
		color: #000000;
		float: left;
	}
</style>

<div class="leftbarAdmin">
	<div class="barAdmin">
		<div class="logo">
			<center>
				<img class="adminLogo" src="<?php echo $appLocal ?>/assets/logoWhite.png">
				<hr>
				<div class="linkProfile">
					<div class="row">
						<div class="col-4">
							<center>	
								<div style="background: url('https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg');" class="profilePicture"></div>
							</center>
						</div>
						<div class="col-sm">
							<label class="name_profilePicture align">Gustavo</label>
						</div>
					</div>
				</div>
				<hr>
			</center>
		</div>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/pedidos/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-chart-pie align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">Pedidos</label>
					</div>
				</div>
			</div>
		</a>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/produtos/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-bag-shopping align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">Produtos</label>
					</div>
				</div>
			</div>
		</a>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-image align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">Banners</label>
					</div>
				</div>
			</div>
		</a>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-user-tag align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">Usuários</label>
					</div>
				</div>
			</div>
		</a>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-boxes-stacked align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">Estoque</label>
					</div>
				</div>
			</div>
		</a>

		<!-- link -->
		<a href="<?php echo $appLocal ?>/admin/">
			<div class="linkAdmin">
				<div class="row">
					<div style="text-align: center;" class="col-4">
						<i class="fa-solid fa-chart-pie align"></i>
					</div>
					<div class="col-sm">
						<label class="title_linkAdmin">DRE</label>
					</div>
				</div>
			</div>
		</a>

	</div>
</div>