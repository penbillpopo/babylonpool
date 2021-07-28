<?php
	$headTitle = '水樂園設施';
	$headSubTitle = 'Water Park Facilities';
	$currentPage = '';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		switch($id){
			case 1:
				$currentPage = '造浪設備';
				break;
			case 2:
				$currentPage = '過濾設備';
				break;
			case 3:
				$currentPage = 'FLOWRIDER®';
				break;
			case 4:
				$currentPage = '漂流河規劃';
				break;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/sample.css?version=<?php echo time();?>">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title"><?php echo $headTitle?></h2>
					<h6 class="subTitle"><?php echo $headSubTitle?></h6>
				</div>
				<div class="bread">
					<p class="text">首頁 / <?php echo $headTitle?> / <?php echo $currentPage ?></p>
				</div>
			</div>
			<div class="contentField">
				<?php include('./page/facility/facility-'.$id.'.php') ?>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

