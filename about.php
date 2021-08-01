<?php
	$headTitle = '關於巴比倫';
	$headSubTitle = 'about';
	$currentPage = '';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		switch($id){
			case 1:
				$currentPage = '關於我們';
				break;
			case 2:
				$currentPage = '服務項目';
				break;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/sample.css?version=<?php echo time();?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div class="pageContainer">
		<div class="w1200">
			<?php
				if(isset($id)){
					include('./page/about/about-'.$id.'.php');
				}				
			?>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

