<?php
	$id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/facility.css">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">水樂園設施</h2>
					<h6 class="subTitle">Water park facilities</h6>
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

