<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/contact.css">
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
				<form class="formBox">
					<div class="infoTxt">
						<p class="top">
							歡迎您的蒞臨及瀏覽本公司的網站，如果您對於本公司的產品需要更詳盡的說明時，
							請撥打我們的服務專線，我們將竭誠為您服務:
						</p>
						<p class='phone'>服務專線 : 04-2708-2772</p>
						<p class="bottom">
							您也可以將您的需求內容填入以下表單傳送給我們，我們將會儘速與您聯絡，
							期待與您的互動交流及提供您最優質專業的服務。
						</p>
					</div>
					<div class="rowBox">
						<div class="row">
							<label for="company">個人公司或名稱</label>
							<input id="company" name="company" type="text">
						</div>
						<div class="row">
							<label for="name">聯絡人</label>
							<input id="name" name="name"  type="text">
						</div>
						<div class="row">
							<label for="phone">聯絡電話</label>
							<input id="phone" name="phone"  type="text">
						</div>
						<div class="row">
							<label for="email">E-mail</label>
							<input id="email" name="email"  type="email">
						</div>
						<div class="row">
							<label for="address">地址</label>
							<input id="address" name="address"  type="text">
						</div>
						<div class="row">
							<label for="interest">您最有興趣的產品</label>
							<input id="interest" name="interest"  type="text">
						</div>
						<div class="row">
							<label for="message">給我們的留言</label>
							<textarea id="message" name="message"></textarea>
						</div>
					</div>
					<div class="buttonBox">
						<button id="clearBtn" class="btn">
							<p class="text">送出</p>
						</button>
						<button id="submitBtn" class="btn pale">
							<p class="text">清除</p>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<?php include('./common/footer.php') ?>
</html>

