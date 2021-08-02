<?php
	$headTitle = '聯絡我們';
	$headSubTitle = 'Contact Us';
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/contact.css?version=<?php echo time();?>">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div id="contact" class="pageContainer">
		<div class="w1200">
			<div class="headField">
				<div class="titleBox">
					<h2 class="title">聯絡我們</h2>
					<h6 class="subTitle">Contact Us</h6>
				</div>
			</div>
			<div class="contentField">
				<!--改為前端發信-->
				<!-- <form id="contactForm" class="formBox" method="post" action="contact_b.php"> -->
				<form id="contactForm" class="formBox">
					<div class="infoTxt">
						<p class="top">
							歡迎您的蒞臨及瀏覽本公司的網站，如果您對於本公司的產品需要更詳盡的說明時，
							請撥打我們的服務專線，我們將竭誠為您服務:
						</p>
						<h5 class='phone'>服務專線: 04-2708-2772</h5>
						<p class="bottom">
							您也可以將您的需求內容填入以下表單傳送給我們，我們將會儘速與您聯絡，
							期待與您的互動交流及提供您最優質專業的服務。
						</p>
					</div>
					<div class="rowBox">
						<div class="row">
							<p class='rowName'>個人公司或名稱</p>
							<input id="company" name="company" type="text">
						</div>
						<div class="row">
							<p class='rowName'>聯絡人</p>
							<input id="name" name="name"  type="text">
						</div>
						<div class="row">
							<p class='rowName'>聯絡電話</p>
							<input id="phone" name="phone"  type="text">
						</div>
						<div class="row">
							<p class='rowName'>E-mail</p>
							<input id="email" name="email"  type="email">
						</div>
						<div class="row">
							<p class='rowName'>地址</p>
							<input id="address" name="address"  type="text">
						</div>
						<div class="row">
							<p class='rowName'>您最有興趣的產品</p>
							<input id="interest" name="interest"  type="text">
						</div>
						<div class="row">
							<p class='rowName'>給我們的留言</p>
							<textarea id="message" name="message"></textarea>
						</div>
					</div>
					<div class="buttonBox">
						<button id="submitBtn" class="btn" type="submit">
							<p class="text">送出</p>
						</button>
						<button id="clearBtn" class="btn pale" type="button">
							<p class="text">清除</p>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="./js/contact.js?version=<?php echo time();?>"></script>
</html>

