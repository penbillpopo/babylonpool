<?php
	$about_active = ($headTitle=='關於巴比倫')?'active':'';
	$newsList_active = ($headTitle=='最新消息')?'active':'';
	$plan_active = ($headTitle=='規劃設計')?'active':'';
	$facilityList_active = ($headTitle=='水樂園設施')?'active':'';
	$works_active = ($headTitle=='完工案例')?'active':'';
	$contact_active = ($headTitle=='聯絡我們')?'active':'';
?>
<footer id="footer">
	<div class="navField">
		<div id="pagetop<?php if(isset($isIndex) && $isIndex) echo 'Index';?>">
			<div class="content">
				<div class="arrow"></div>		
				<p class="text">TOP</p>
			</div>
		</div>
		<div class="navBox">
			<a href="about.php" class="navBtn <?php echo $about_active;?>">
				<p>關於巴比倫</p>
			</a>
			<a href="newsList.php" class="navBtn <?php echo $newsList_active;?>">
				<p>最新消息</p>
			</a>
			<a href="plan.php" class="navBtn <?php echo $plan_active;?>">
				<p>規劃設計</p>
			</a>
			<a href="facilityList.php" class="navBtn <?php echo $facilityList_active;?>">
				<p>水樂園設施</p>
			</a>
			<a href="#" class="navBtn <?php echo $works_active;?>">
				<p>完工案例</p>
			</a>
			<a href="contact.php" class="navBtn <?php echo $contact_active;?>">
				<p>聯絡我們</p>
			</a>
		</div>
	</div>
	<div class="contentbox w1200">
		<div class="left">
			<div class="logoBox">
				<img src="./img/logo.png" alt="">
				<div class="text">
					<h4>巴比倫</h4>
					<small>Babylon pool systems</small>
				</div>
			</div>
			<small class='copy'>版權所有 © BABYLON POOL SYSTEMS CO.,LTD.</small>
			<small class='design'>Design by Seraphm</small>
		</div>
		<div class="right">
			<small>
				台中市西屯區河南路二段262號5F之1
			</small>
			<div class="contact">
				<a href="tel:04-27082772">
					<small>TEL : 04-27082772</small>	
				</a>
				<small>FAX : 04-27082775</small>	
			</div>
			<small>
				<a href="mailto:service@babylon.tw">E-mail : service@babylon.tw</a>
			</small>
			<div class="share">
				<a href="#">
					<img src="./img/icon/fb.png" alt="">
				</a>
				<a href="#">
					<img src="./img/icon/line.png" alt="">
				</a>
			</div>
		</div>
	</div>
	
</footer>