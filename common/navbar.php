<?php
	$about_active = ($headTitle=='關於巴比倫')?'active':'';
	$newsList_active = ($headTitle=='最新消息')?'active':'';
	$plan_active = ($headTitle=='規劃設計')?'active':'';
	$facilityList_active = ($headTitle=='水樂園設施')?'active':'';
	$works_active = ($headTitle=='完工案例')?'active':'';
	$contact_active = ($headTitle=='聯絡我們')?'active':'';
?>
<div id="navbar">
	<div class="w1200 container">
		<a href="./index.php" class="logo">
			<img src="./img/header_logo.png" alt="">
		</a>
		<div class="navitem">
			<div class="nav hasSub <?php echo $about_active;?>">
				<p class='name'>關於巴比倫</p>
				<div class="secondNavItem">
					<a href="about.php?id=1" class="secondNav">
						<p class='name'>關於我們</p>
					</a>
					<a href="about.php?id=2" class="secondNav">
						<p class='name'>服務項目</p>
					</a>
				</div>
			</div>
			<a href="newsList.php" class="nav <?php echo $newsList_active;?>">
				<p class='name'>最新消息</p>
			</a>
			<a href="plan.php" class="nav <?php echo $plan_active;?>">
				<p class='name'>規劃設計</p>
			</a>
			<div class="nav hasSub <?php echo $facilityList_active;?>">
				<a class="pc" href="facilityList.php">
					<p class='name'>水樂園設施</p>
				</a>
				<div class="mobile">
					<p class='name'>水樂園設施</p>
				</div>
				<div class="secondNavItem">
					<a href="facility.php?id=1" class="secondNav">
						<p class='name'>造浪設備</p>
					</a>
					<a href="facility.php?id=2" class="secondNav">
						<p class='name'>過濾設備</p>
					</a>
					<a href="facility.php?id=3" class="secondNav">
						<p class='name'>ＦＬＯＷＲＩＤＥＲ®</p>
					</a>
					<a href="facility.php?id=4" class="secondNav">
						<p class='name'>漂流河規劃</p>
					</a>
					<a href="facility.php?id=5" class="secondNav">
						<p class='name'>兒童區規劃</p>
					</a>
					<a href="facility.php?id=6" class="secondNav">
						<p class='name'>互動水屋</p>
					</a>
					<div class="secondNav hasSub">
						<p class='name'>滑水道設備</p>
						<div class="thirdNavItem">
							<a href="facility.php?id=7&subId=1" class="thirdNav">
								<p class='name'>螺旋滑道</p>
							</a>
							<a href="facility.php?id=7&subId=2" class="thirdNav">
								<p class='name'>急速滑道</p>
							</a>
							<a href="facility.php?id=7&subId=3" class="thirdNav">
								<p class='name'>新滑水道</p>
							</a>
						</div>
					</div>
					<a href="facility.php?id=8" class="secondNav">
						<p class='name'>過山車設備</p>
					</a>
					<a href="facility.php?id=9" class="secondNav">
						<p class='name'>升降式地板</p>
					</a>
				</div>
			</div>
			<div class="nav hasSub <?php echo $works_active;?>">
				<p class='name'>完工案例</p>
				<div class="secondNavItem">
					<a href="works.php?id=1" class="secondNav">
						<p class='name'>六福村水樂園</p>
					</a>
					<div class="secondNav hasSub">
						<p class='name'>少年PI的奇幻漂流造浪池</p>
						<div class="thirdNavItem">
							<a href="works.php?id=2&subId=1" class="thirdNav">
								<p class='name'>造浪池簡介</p>
							</a>
							<a href="works.php?id=2&subId=2" class="thirdNav">
								<p class='name'>造浪池施工</p>
							</a>
							<a href="works.php?id=2&subId=3" class="thirdNav">
								<p class='name'>中台灣影視基地</p>
							</a>
							<a href="works.php?id=2&subId=4" class="thirdNav">
								<p class='name'>首映記者會＆媒體報導</p>
							</a>
						</div>
					</div>
					<a href="works.php?id=3" class="secondNav">
						<p class='name'>菲律賓AUQA PLANET WATERPARK</p>
					</a>
					<a href="works.php?id=4" class="secondNav">
						<p class='name'>AGD美國水上樂園實績</p>
					</a>
				</div>
			</div>
			<a href="contact.php" class="nav <?php echo $contact_active;?>">
				<p class='name'>聯絡我們</p>
			</a>
		</div>
	</div>
	<div id="hambuger" class="mobile">
		<input class="menu-btn" autocomplete="off" type="checkbox" id="menu-btn">
		<label class="menu-icon" for="menu-btn">
			<span class="navicon"></span>
		</label>
	</div>
	<div id="nav_blackfield"></div>
</div>
<div id="nav_gap"></div>
