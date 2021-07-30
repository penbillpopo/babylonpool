<?php
	$isIndex = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
	<link rel="stylesheet" href="./css/index.css?version=<?php echo time();?>">
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
				<div class="navBox">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="paginationBox">
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="waveField">
		<div class="container w1200">
			<div class="titleBox">
				<h4 class="title">國際級水上樂園總體規劃 / 細部設計 / 設備提供 / 責任施工 / 售後服務</h4>
			</div>
			<div class="swiperbox">		
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<a class="swiper-slide" href="#">
							<div class="imgFrame">
								<div class="img" style="background-image: url('./img/index/s1.png');"></div>
							</div>
							<p class="text">造浪設備</p>
						</a>		
						<a class="swiper-slide" href="#">
							<div class="imgFrame">
								<div class="img" style="background-image: url('./img/index/s2.png');"></div>
							</div>
							<p class="text">漂流河規劃</p>
						</a>		
						<a class="swiper-slide" href="#">
							<div class="imgFrame">
								<div class="img" style="background-image: url('./img/index/s3.png');"></div>
							</div>
							<p class="text">FLOWRIDER</p>
						</a>		
						<a class="swiper-slide" href="#">
							<div class="imgFrame">
								<div class="img" style="background-image: url('./img/index/s4.png');"></div>
							</div>
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
	<div id="surfField">
		<div class="container w1200">
			<div class="titleBox reveal_left">
				<p class="subText">Company video</p>
				<h1 class="text">公司影片</h1>
				<h6 class="watch">觀看形象影片→</h6>
			</div>
			<div class="videoBox">
				<div class="surfImg reveal_surfing">
					<a id="videoBox" class="playBtn"
						href="https://www.youtube.com/watch?v=JzkV6Z9pOFo"
						data-fancybox 
						>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="caseField">
		<div class="container w1200">
			<div class="titleBox reveal_right">
				<p class="subText">Completed case</p>
				<h1 class="text">完工案例</h1>
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
					<h5 class="text">Life of PI 少年PI的奇幻漂流</h5>
				</a>
				<a class="case reveal_right_d400" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/3.png');"></div>
					</div>
					<h5 class="text">ADG美國水上樂園實績</h5>
				</a>
				<a class="case reveal_right_d600" href="#">
					<div class="imgFrame">
						<div class="img" style="background-image:url('./img/index/4.png');"></div>
					</div>
					<h5 class="text">菲律賓AQUA PLANET WATERPARK</h5>
				</a>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="./js/index.js?version=<?php echo time();?>"></script>
</html>

