<?php
	$headTitle = '規劃設計';
	$headSubTitle = 'Planning';
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href="./css/plan.css?version=&lt;?php echo time(); ?&gt;">
	<?php include('./common/load.php') ?>
</head>
	<?php include('./common/navbar.php') ?>
<body>
	<?php include('./component/headBanner.php') ?>
	<div id="plan" class="pageContainer">
        <div class="headField w1200">
            <div class="titleBox">
                <h2 class="title">規劃設計</h2>
                <h6 class="subTitle">Planning</h6>
            </div>
        </div>
        <div class="contentField">
            <div class="tabBox w1200">
                <button class="tab" data-id="waterPark">
                    <h4 class='text'>水樂園總體規劃</h4>
                </button>
                <button class="tab" data-id="detailDesign">
                    <h4 class='text'>細部設計</h4>
                </button>
                <button class="tab" data-id="installFacility">
                    <h4 class='text'>設備安裝</h4>
                </button>
                <button class="tab" data-id="soldService">
                    <h4 class='text'>售後服務</h4>
                </button>
            </div>
            <div id="waterPark" class="introBox blue">
                <div class="textArea w1200">
                    <div class="textBox">
                        <h3 class="title">水樂園總體規劃</h3>
                        <p class="text">
                            <span>水樂園總體規劃由美國ADG公司設計部執行,其規劃順序:</span><br>
                            <strong>1.需要確定規劃項目的性質和主題</strong><br>
                            <strong>2.將周圍環境和建設水元素融入項目中</strong><br>
                            <strong>3.注重生態環境和人文景觀</strong><br>
                            <strong>4.逐步進行建設，功能區域化</strong><br>
                            <strong>5.讓遊客感受到戲水的樂趣。</strong><br>
                            <span>以水為主體，提供大型綜合性娛樂活動。</span><br>
                            <span>現代的水上樂園除功能與遊樂設施多樣化外且結合飯店，</span><br>
                            <span>搭配一泊二食及飯店休閒設施，將遊客入園時間拉長，</span><br>
                            <span>營運項目設置以建立獨特的創新設施和多功能娛樂項目。</span>
                        </p>
                    </div>
                </div>
                <img src="./img/plan/intro-1.png" alt="">
            </div>
            <div id="detailDesign" class="introBox reverse">
                <div class="textArea w1200">
                    <div class="textBox">
                        <h3 class="title">細部設計</h3>
                        <div class="text">
                            <p>
                                總體規劃由美國ADG公司設計部執行，
                                細部設計是由我們和美國ADG公司設計部一起繪製，
                                我們都有豐富的設計經驗，除了要考慮到設施與設備的多元化以外，
                                可以根據客戶的需求，考量因素，建立獨特的水上樂園。
                                近年來，大多數水上樂園往往擁有大型組合設備，
                                在施工過程中的細節是需要認真注意結構之間的良好穩定性與配套措施，
                                成熟技術，重視細節，才能避免事故發生。
                                此外，考慮到團體家庭消費，營造商應設有適合幼童和老年人的設備。
                                對於水上樂園設備，確切的文件審核，測試和檢查並且按照操作說明正確使用，
                                以確保遊客的安全。
                            </p>
                        </div>
                    </div>
                </div>
                <img src="./img/plan/intro-2.png" alt="">
                <div class="flag">
                    <p class="text">菲律賓AQUA PLANET WATERPARK全區總配置圖</p>
                </div>
            </div>
            <div id="installFacility" class="installBox">
                <div class="textArea">
                    <div class="textBox">
                        <h3 class="title">設備安裝</h3>
                        <p class="text">
                            對於水上樂園設施，我們為客戶提供說明與指導，按照每一項設備規範逐一安裝，<br>
                            並注意每一個環節的安裝服務，安裝完成後進行調試，之後呈報業主進行查驗，<br>
                            以便日後業主開始營運並定期維護，完成後移交業主，開源使用。<br>
                            設備都會定期進行維護及安全檢查，以確保水上樂園營運時的品質。
                        </p>
                    </div>
                </div>
                <div class="imgArea w1920">
                    <div class="longImg" style="background-image:url('./img/plan/install-1.png');"></div>
                    <div class="squareBox">
                        <div class="img mobile" style="background-image:url('./img/plan/install-1.png');"></div>
                        <div class="img" style="background-image:url('./img/plan/install-2.png');"></div>
                        <div class="img" style="background-image:url('./img/plan/install-3.png');"></div>
                        <div class="img" style="background-image:url('./img/plan/install-4.png');"></div>
                        <div class="img" style="background-image:url('./img/plan/install-5.png');"></div>
                        <div class="img mobile" style="background-image:url('./img/plan/install-6.png');"></div>
                    </div>
                    <div class="longImg" style="background-image:url('./img/plan/install-6.png');"></div>
                </div>
            </div>
            <div id="soldService" class="serviceBox">
                <div class="textArea">
                    <div class="textBox">
                        <h3 class="title">售後服務</h3>
                        <p class="text">
                            我們提供水上樂園設備性能測試與評估，設施保護和對於營運五年以上之水上樂園，<br>
                            我們也提供滑道整體翻新工程規劃，包含創新顏色變更，緊急設備維護和零件更換諮詢和培訓，<br>
                            完成後令水上樂園煥然一新，以增加來客數並使遊客停留時間增長。
                        </p>
                    </div>
                </div>
                <div class="imgArea w1920">
                    <div class="img" style="background-image:url('./img/plan/service.png');"></div>
                </div>
            </div>
        </div>
	</div>
</body>
<?php include('./common/footer.php') ?>
<script src="./js/plan.js?version=&lt;?php echo time(); ?&gt;"></script>
</html>

