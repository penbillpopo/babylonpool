<?php
	$headTitle = '水樂園設施';
	$headSubTitle = 'Water Park Facilities';
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/sample.css?version=&lt;?php echo time(); ?&gt;">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div class="sampleList pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">水樂園設施</h2>
					<h6 class="subTitle">Water park facilities</h6>
				</div>
			</div>
			<div class="contentField">
                <div class="facilityBox">
                    <a class="item" href="facility.php?id=1">
                        <div class="bg" style="background-image: url('./img/common/facility_01.png');"></div>
                        <h2 class="text">造浪設備</h2>
                    </a>
                    <a class="item" href="facility.php?id=2">
                        <div class="bg" style="background-image: url('./img/common/facility_02.png');"></div>
                        <h2 class="text">過濾設備</h2>
                    </a>
                    <a class="item" href="facility.php?id=3">
                        <div class="bg" style="background-image: url('./img/common/facility_03.png');"></div>
                        <h2 class="text">FLOWRIDER®</h2>
                    </a>
                    <a class="item" href="facility.php?id=4">
                        <div class="bg" style="background-image: url('./img/common/facility_04.png');"></div>
                        <h2 class="text">漂流河規劃</h2>
                    </a>
                    <a class="item" href="#">
                        <div class="bg" style="background-image: url('./img/common/facility_05.png');"></div>
                        <h2 class="text">兒童區規劃</h2>
                    </a>
                    <a class="item" href="#">
                        <div class="bg" style="background-image: url('./img/common/facility_06.png');"></div>
                        <h2 class="text">互動水屋</h2>
                    </a>
                    <a class="item" href="#">
                        <div class="bg" style="background-image: url('./img/common/facility_07.png');"></div>
                        <h2 class="text">滑水道設備</h2>
                    </a>
                    <a class="item" href="#">
                        <div class="bg" style="background-image: url('./img/common/facility_08.png');"></div>
                        <h2 class="text">過山車設備</h2>
                    </a>
                    <a class="item" href="#">
                        <div class="bg" style="background-image: url('./img/common/facility_09.png');"></div>
                        <h2 class="text">升降式地板</h2>
                    </a>
                </div>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

