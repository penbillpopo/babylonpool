<?php
	$headTitle = '最新消息';
	$headSubTitle = 'Hot News';
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/news.css">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div id="news" class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">最新消息</h2>
					<h6 class="subTitle">Hot News</h6>
				</div>
			</div>
			<div class="contentField">
				<div class="newsHead">
					<h5 class="title">
						在建工程-《菲律賓薄荷島WATERPARK》
					</h5>
				</div>
				<div class="BackEditArea">
					<p>
						2018年為菲律賓業主JPARK ISLAND RESORT & WATERPARK<br>
						總體規劃薄荷島水樂園，2019年開始細部設計，目前設備陸續製造出口中。
					</p>
					<img src="./img/news/news_1.png" alt="">
				</div>
				<a class="backBtn" href="newsList.php">
					<p class="text">
						返回上一頁
					</p>
				</a>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

