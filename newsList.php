<?php
	$headTitle = '最新消息';
	$headSubTitle = 'Hot News';
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/news.css?version=&lt;?php echo time(); ?&gt;">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div id="newsList" class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">最新消息</h2>
					<h6 class="subTitle">Hot News</h6>
				</div>
			</div>
			<div class="contentField">
				<div class="newsBox">
					<a class="news" href="news.php">
						<div class="img" style="background-image: url('./img/news/list_1.png');"></div>
						<div class="textArea">
							<h6 class='text'>在建工程-《菲律賓薄荷島WATERPARK》</h6>
							<h6 class='detail'>詳細消息 ></h6>
						</div>
					</a>
					<a class="news" href="news.php">
						<div class="img" style="background-image: url('./img/news/list_1.png');"></div>
						<div class="textArea">
							<h6 class='text'>在建工程-《菲律賓薄荷島WATERPARK》</h6>
							<h6 class='detail'>詳細消息 ></h6>
						</div>
					</a>
					<a class="news" href="news.php">
						<div class="img" style="background-image: url('./img/news/list_1.png');"></div>
						<div class="textArea">
							<h6 class='text'>在建工程-《菲律賓薄荷島WATERPARK》</h6>
							<h6 class='detail'>詳細消息 ></h6>
						</div>
					</a>
					<a class="news" href="news.php">
						<div class="img" style="background-image: url('./img/news/list_1.png');"></div>
						<div class="textArea">
							<h6 class='text'>在建工程-《菲律賓薄荷島WATERPARK》</h6>
							<h6 class='detail'>詳細消息 ></h6>
						</div>
					</a>
				</div>
				<div class="pagebtnbox">
					<a class="preBtn" href="#"></a>
					<a class="pageBtn active" href="#">1</a>
					<a class="pageBtn" href="#">2</a>
					<a class="pageBtn" href="#">3</a>
					<a class="pageBtn" href="#">4</a>
					<a class="pageBtn" href="#">5</a>
					<a class="nextBtn" href="#"></a>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

