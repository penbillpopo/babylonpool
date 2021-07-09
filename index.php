<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/index.css">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<div id="headBanner">
		<div class="swiperbox">		
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('./img/index/index-0.jpg');"></div>
					<div class="swiper-slide" style="background-image: url('./img/index/index-0.jpg');"></div>
					<div class="swiper-slide" style="background-image: url('./img/index/index-0.jpg');"></div>
					<div class="swiper-slide" style="background-image: url('./img/index/index-0.jpg');"></div>
				</div>
				<div class="navBox w1200">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="paginationBox">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="productField">
		<div class="waveArea">
			<div class="container w1200">
				<div class="titleBox">
					<h4 class="title">國際級水上樂園總體規劃&nbsp</h4>
					<h4 class="title">/&nbsp細部設計&nbsp</h4>
					<h4 class="title">/&nbsp設備提供&nbsp</h4>
					<h4 class="title">/&nbsp責任施工&nbsp</h4>
					<h4 class="title">/&nbsp售後服務</h4>
				</div>
				<div class="swiperbox">		
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<a class="swiper-slide swiper-lazy" href="#">
								<img src="./img/index/s1.png" alt="">
								<p class="text">造浪設備</p>
							</a>		
							<a class="swiper-slide swiper-lazy" href="#">
								<img src="./img/index/s2.png" alt="">
								<p class="text">漂流河規劃</p>
							</a>		
							<a class="swiper-slide swiper-lazy" href="#">
								<img src="./img/index/s3.png" alt="">
								<p class="text">FLOWRIDER</p>
							</a>		
							<a class="swiper-slide swiper-lazy" href="#">
								<img src="./img/index/s4.png" alt="">
								<p class="text">滑水道設備</p>
							</a>		
						</div>
					</div>
					<div class="navBox">
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="surfArea">
			<div class="container w1200">
				<div class="titleBox reveal_left">
					<p class="subText">Company video</p>
					<h3 class="text">公司影片</h3>
					<h6 class="watch">觀看形象影片→</h6>
				</div>
				<div class="videoBox">
					<div class="surfImg reveal_surfing">
						<button class="playBtn"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="caseField">
		<div class="container w1200">
			<div class="titleBox reveal_right">
				<p class="subText">Completed case</p>
				<h3 class="text">完工案例</h3>
			</div>
			<div class="caseBox">
				<a class="case reveal_right" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/1.png');"></div>
					</div>
					<h5 class="text">六福村六福水上樂園</h5>
				</a>
				<a class="case reveal_right_d200" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/2.png');"></div>
					</div>
					<h5 class="text">Life of PI 少年ＰＩ的奇幻漂流</h5>
				</a>
				<a class="case reveal_right_d400" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/3.png');"></div>
					</div>
					<h5 class="text">ＡＤＧ美國水上樂園實績</h5>
				</a>
				<a class="case reveal_right_d600" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/4.png');"></div>
					</div>
					<h5 class="text">菲律賓ＡＱＵＡ ＰＬＡＮＥＴ WATERPARK</h5>
				</a>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
<script src="./js/index.js"></script>
</html>

