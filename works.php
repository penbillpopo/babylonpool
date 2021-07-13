<?php
	$headTitle = '完工案例';
	$headSubTitle = 'Works';
	$currentPage = '';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		switch($id){
			case 1:
				$currentPage = '六福村六福水樂園';
				break;
			case 2:
				$currentPage = '少年PI的奇幻漂流造浪池';
				break;
		}
	}
	if(isset($_GET['subId'])) {
		$subId = $_GET['subId'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/sample.css">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">完工案例</h2>
					<h6 class="subTitle">Works</h6>
				</div>
				<div class="bread">
					<p class="text">首頁 / <?php echo $headTitle?> / <?php echo $currentPage ?></p>
				</div>
			</div>
			<div class="contentField">
				<?php
					if(isset($id)&&isset($subId)){
						include('./page/works/works-'.$id.'-'.$subId.'.php');
					}else if(isset($id)){
						include('./page/works/works-'.$id.'.php');
					}					
				?>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

