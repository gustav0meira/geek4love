<?php include_once('app/varsConfig.php'); ?>
<?php include_once('app/varsLayout.php'); ?>
<?php include_once('app/externalItens.php'); ?>
<?php include_once('app/sql.php'); ?>
<?php include_once('app/shopBar.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop | Geek4Love</title>

	<link rel="icon" type="image/x-icon" href="assets/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/home.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner">
					<div class="slider">
						<img src="assets/banners/entre-no-jogo.webp" alt="Entre no Jogo! - Descubra nossos produtos incríveis para gamers: consoles, jogos, periféricos e muito mais. Seu próximo level começa aqui!">
						<img src="assets/banners/entre-no-jogo.webp" alt="Entre no Jogo! - Descubra nossos produtos incríveis para gamers: consoles, jogos, periféricos e muito mais. Seu próximo level começa aqui!">
						<img src="assets/banners/entre-no-jogo.webp" alt="Entre no Jogo! - Descubra nossos produtos incríveis para gamers: consoles, jogos, periféricos e muito mais. Seu próximo level começa aqui!">
						<img src="assets/banners/entre-no-jogo.webp" alt="Entre no Jogo! - Descubra nossos produtos incríveis para gamers: consoles, jogos, periféricos e muito mais. Seu próximo level começa aqui!">
					</div>
					<div class="dots"></div>
				</div>
			</div>
		</div>
		<div style="padding: 35px;" class="row">
			<div class="col-sm">
				<div class="bottomBanner">
					<div class="row">
						<div style="text-align: center !important;" class="col-3">
							<i class="fa-solid fa-truck align"></i>
						</div>
						<div class="col-sm">
							<label class="titleBottomBanner">Frete Grátis!</label><br>
							<label class="descriptionBottomBanner">Acima de R$ 99,90 em compras!</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="bottomBanner">
					<div class="row">
						<div style="text-align: center !important;" class="col-3">
							<i class="fa-solid fa-shield-halved align"></i>
						</div>
						<div class="col-sm">
							<label class="titleBottomBanner">Compra Segura!</label>
							<label class="descriptionBottomBanner">Compra garantida com selo E-bit.</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="bottomBanner">
					<div class="row">
						<div style="text-align: center !important;" class="col-3">
							<i class="fa-solid fa-dolly align"></i>
						</div>
						<div class="col-sm">
							<label class="titleBottomBanner">Envio Rápido!</label>
							<label class="descriptionBottomBanner">Envio em até 24h após a compra.</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="bottomBanner">
					<div class="row">
						<div style="text-align: center !important;" class="col-3">
							<i class="fa-solid fa-headset align"></i>
						</div>
						<div class="col-sm">
							<label class="titleBottomBanner">Suporte Rápido!</label>
							<label class="descriptionBottomBanner">Suporte rápido e fácil.</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center>
					<h1 class="header_category">novidades para você</h1>
					<hr class="header_category">
				</center>
				<div class="carousel">
					<?php
					$consulta = "SELECT * FROM produtos WHERE status = 'ativo' AND destaque != 'no'";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?> 
					<!-- produto -->
					<div class="produto">
						<center>
							<!-- imagem TODO -->
							<?php 
							$imagem_sql = "SELECT caminho FROM imagens WHERE product_id = {$dado['id']} AND tipo = 'principal'";
							$imagem_result = $conn->query($imagem_sql);
							$imagem = $imagem_result->fetch_assoc()['caminho'];

							?>
							<div style="background: url('<?php echo $appLocal ?>/assets/produtos/<?php echo $imagem ?>');" class="image_product"></div>
							<h1 class="title_product"><?php echo $dado['nome']; ?></h1>
							<p class="priece_product">R$ <?php echo number_format($dado['preco_venda'], 2, ',', '.'); ?></p>
							<p class="payOption_product">Por R$ <?php $preco_pix = $dado['preco_venda'] - $dado['desconto']; echo number_format($preco_pix, 2, ',', '.'); ?> no PIX</p>
							<button class="addCart"><i class="fa-solid fa-bag-shopping"></i>ㅤAdicionar ao Carrinho</button>
						</center>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center>
					<h1 class="header_category">sucesso de vendas</h1>
					<hr class="header_category">
				</center>
				<div class="carousel">
					<?php
					$consulta = "SELECT * FROM produtos WHERE status = 'ativo'";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?> 
					<!-- produto -->
					<div class="produto">
						<center>
							<!-- imagem TODO -->
							<?php 
							$imagem_sql = "SELECT caminho FROM imagens WHERE product_id = {$dado['id']} AND tipo = 'principal'";
							$imagem_result = $conn->query($imagem_sql);
							$imagem = $imagem_result->fetch_assoc()['caminho'];

							?>
							<div style="background: url('<?php echo $appLocal ?>/assets/produtos/<?php echo $imagem ?>');" class="image_product"></div>
							<h1 class="title_product"><?php echo $dado['nome']; ?></h1>
							<p class="priece_product">R$ <?php echo number_format($dado['preco_venda'], 2, ',', '.'); ?></p>
							<p class="payOption_product">Por R$ <?php $preco_pix = $dado['preco_venda'] - $dado['desconto']; echo number_format($preco_pix, 2, ',', '.'); ?> no PIX</p>
							<button class="addCart"><i class="fa-solid fa-bag-shopping"></i>ㅤAdicionar ao Carrinho</button>
						</center>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div style="background: url('assets/banners/minibanner.png');" class="miniBanner"></div>
			</div>
			<div class="col-6">
				<div style="background: url('assets/banners/minibanner.png');" class="miniBanner"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center>
					<h1 class="header_category">novidades para você</h1>
					<hr class="header_category">
				</center>
				<div class="carousel">
					<?php
					$consulta = "SELECT * FROM produtos WHERE status = 'ativo'";
					$con = $conn->query($consulta) or die($conn->error);
					while($dado = $con->fetch_array()) { ?> 
					<!-- produto -->
					<div class="produto">
						<center>
							<!-- imagem TODO -->
							<?php 
							$imagem_sql = "SELECT caminho FROM imagens WHERE product_id = {$dado['id']} AND tipo = 'principal'";
							$imagem_result = $conn->query($imagem_sql);
							$imagem = $imagem_result->fetch_assoc()['caminho'];
							?>
							<div style="background: url('<?php echo $appLocal ?>/assets/produtos/<?php echo $imagem ?>');" class="image_product"></div>
							<h1 class="title_product"><?php echo $dado['nome']; ?></h1>
							<p class="priece_product">R$ <?php echo number_format($dado['preco_venda'], 2, ',', '.'); ?></p>
							<p class="payOption_product">Por R$ <?php $preco_pix = $dado['preco_venda'] - $dado['desconto']; echo number_format($preco_pix, 2, ',', '.'); ?> no PIX</p>
							<button class="addCart"><i class="fa-solid fa-bag-shopping"></i>ㅤAdicionar ao Carrinho</button>
						</center>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<center>
						<h1 class="header_category">nosso blog</h1>
						<hr class="header_category">
					</center>
				</div>
				<div class="col-3">
					<div class="postBlog">
						<div style="background: url('assets/blog/capa-blog-01.png');" class="photo_postBlog"></div>
						<div class="texts">
							<label class="title_postBlog">Explorando os Recursos Inovadores do Controle do PlayStation 5 [...]</label>
							<p class="description_postBlog">Descubra a incrível imersão e interatividade que o controle de PS5 oferece! Neste post, exploramos os recursos inovadores desse controle revolucionário, que eleve...</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="postBlog">
						<div style="background: url('assets/blog/capa-blog-01.png');" class="photo_postBlog"></div>
						<div class="texts">
							<label class="title_postBlog">Explorando os Recursos Inovadores do Controle do PlayStation 5 [...]</label>
							<p class="description_postBlog">Descubra a incrível imersão e interatividade que o controle de PS5 oferece! Neste post, exploramos os recursos inovadores desse controle revolucionário, que eleve...</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="postBlog">
						<div style="background: url('assets/blog/capa-blog-01.png');" class="photo_postBlog"></div>
						<div class="texts">
							<label class="title_postBlog">Explorando os Recursos Inovadores do Controle do PlayStation 5 [...]</label>
							<p class="description_postBlog">Descubra a incrível imersão e interatividade que o controle de PS5 oferece! Neste post, exploramos os recursos inovadores desse controle revolucionário, que eleve...</p>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="postBlog">
						<div style="background: url('assets/blog/capa-blog-01.png');" class="photo_postBlog"></div>
						<div class="texts">
							<label class="title_postBlog">Explorando os Recursos Inovadores do Controle do PlayStation 5 [...]</label>
							<p class="description_postBlog">Descubra a incrível imersão e interatividade que o controle de PS5 oferece! Neste post, exploramos os recursos inovadores desse controle revolucionário, que eleve...</p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<center>
						<button class="blog_verMais">Ver Mais</button>
					</center>
				</div>
			</div>
		</div>
	</div>

	<!-- baseboard -->
	<div class="newslater">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="align">
						<h2>Cadastre-se e receba ofertas exclusivas!</h2>
						<p>Seja sempre o primeiro a receber nossas novidades, cadastre-se, é grátis!</p>
					</div>
				</div>
				<div class="col-6">
					<div class="newslatter align">
						<input required placeholder="aqui o seu melhor e-mail..." type="email" name="newslatter">
						<button><i class="fa-solid fa-angle-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="baseboard">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<label class="titleBaseboard">Institucional</label><br>
					<a href="#"><label class="linkBaseboard">Quem somos?</label></a><br>
					<a href="#"><label class="linkBaseboard">Como comprar</label></a><br>
					<a href="#"><label class="linkBaseboard">Segurança</label></a><br>
					<a href="#"><label class="linkBaseboard">Envio</label></a><br>
					<a href="#"><label class="linkBaseboard">Pagamento</label></a><br>
					<a href="#"><label class="linkBaseboard">Tempo de Garantia</label></a><br>
					<a href="#"><label class="linkBaseboard">Notícias</label></a><br>
					<a href="#"><label class="linkBaseboard">Fale Conosco</label></a><br>
				</div>
				<div class="col-sm">
					<label class="titleBaseboard">Fale Conosco</label><br>
					<a href="#"><label class="linkBaseboard">contato@geek4love.com.br</label></a><br>
					<a href="#"><label class="linkBaseboard">Atendimento de segunda à sexta <br>14h às 19h; Sábado - 8h às 12h</label></a><br>
					<div class="socialIcons">
						<i class="fa-brands fa-instagram"></i>
						<i class="fa-brands fa-facebook-f"></i>
						<i class="fa-brands fa-youtube"></i>
						<i class="fa-brands fa-pinterest"></i>
					</div>
				</div>
				<div class="col-sm">
					<label class="titleBaseboard">Pagamento</label><br>
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqcartavisatraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqmastercardtraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqdinerstraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqamextraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqelotraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_pd_peqcartaohiper.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqcartaohiperit.png?f6f9401edda35199e5f4c2a3da122447"><br><br>
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqboletotraycheckout.png?f6f9401edda35199e5f4c2a3da122447">
					<img src="https://images.tcdn.com.br/commerce/assets/store/img/icons/formas_pagamento/pag_peqpix.png?f6f9401edda35199e5f4c2a3da122447">
				</div>
			</div>
		</div>
	</div>
	<div class="copy">
		<label>Desenvolvido com muito ☕ por <a href="#">Adabequis</a></label>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function() {
  $('.carousel').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
     prevArrow: '<button type="button" class="slick-prev" style="position: absolute; top: 50%; left: -60px; transform: translateY(-50%); z-index: 1; font-size: 20px; color: #fff; color: #00000050 !important; border: none; padding: 10px; cursor: pointer;"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next" style="position: absolute; top: 50%; right: -50px; transform: translateY(-50%); z-index: 1; font-size: 20px; color: #fff; color: #00000050 !important; border: none; padding: 10px; cursor: pointer;"><i class="fa-solid fa-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});

var banner = document.querySelector('.banner');
var images = banner.querySelectorAll('.slider img');
var dotsContainer = banner.querySelector('.dots');
var dots = [];

var currentIndex = 0;

function showImage(index) {
  // Esconde a imagem atual
  images[currentIndex].classList.remove('active');
  dots[currentIndex].classList.remove('active');

  // Atualiza o índice para a próxima imagem
  currentIndex = index;

  // Exibe a próxima imagem
  images[currentIndex].classList.add('active');
  dots[currentIndex].classList.add('active');
}

function createDot(index) {
  var dot = document.createElement('div');
  dot.classList.add('dot');
  if (index === 0) {
    dot.classList.add('active');
  }
  dot.addEventListener('click', function() {
    showImage(index);
  });
  return dot;
}

for (var i = 0; i < images.length; i++) {
  var dot = createDot(i);
  dotsContainer.appendChild(dot);
  dots.push(dot);
}

// Exibe a primeira imagem
images[currentIndex].classList.add('active');

// Inicia o intervalo para trocar as imagens a cada 3 segundos
setInterval(function() {
  var nextIndex = (currentIndex + 1) % images.length;
  showImage(nextIndex);
}, 5000);
</script>
</html>