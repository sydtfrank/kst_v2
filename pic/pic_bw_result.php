<?php include("pic_inc_head.php"); ?>

<body class="pic_bw">

	<!-- 頁頂 開始 -->
	<top>
		<div class="inner">
			<section>
				<a href="pic_color.php"><img src="storage/pic_logo.png"></a>
			</section>
			<section>
				<nav class="menu">
					<ul>
						<li>
							<a href="pic_color.php">課習彩圖</a>
						</li>
						<li>
							<a href="pic_bw.php" class="active">課習灰階</a>
						</li>
						<li>
							<a href="pic_subject.php">出題圖片</a>
						</li>
						<li>
							<a href="map_main.php">空白地圖</a>
						</li>
					</ul>
				</nav>
				<button type="button" class="nav_menu_toggle" onClick="nav_menu_toggle();"><span>手機版選單 MoblieMenu</span></button>
			</section>
			<section>
				<!-- <a class="login_a">王大明，登出<a> -->
				<a class="login_a" href="https://ac.knsh.com.tw/oauth/authorize?response_type=code&client_id=1001&redirect_uri=https://945cloud.knsh.com.tw/&scope=name%20role">登入</a>
			</section>
		</div>
	</top>
	<!-- 頁頂 結束 -->

	<!-- 頁頭 開始 -->
	<header>
		<div class="inner">
			<!-- 功能 開始 -->
			<div class="func">
				<section>
					<div class="col">
						<ul class="cat_list">
							<li class="nav_geo">
								<a href="pic_bw.php">地理</a>
							</li>
							<li class="nav_history">
								<a href="pic_bw.php" class="active">歷史</a>
							</li>
							<li class="nav_society">
								<a href="pic_bw.php">公民與社會</a>
							</li>
						</ul>
					</div>
					<div class="col">
						<form method="post" onSubmit="return form_send();" action="pic_bw_result.php">
							<div class="query_box">
								<div><input type="text" class="v_01" placeholder="請輸入關鍵字" value="示意圖"></div>
								<div><button type="submit">搜尋</button></div>
							</div>
						</form>
					</div>
				</section>
			</div>
			<!-- 功能 結束 -->
		</div>
		<div class="inner">
			<!-- 上方背景圖片 開始 -->
			<div class="bg_top_item_box">
				<div class="bg_item_01">
					<img src="templates/images/bg_item_01.png">
				</div>
				<div class="bg_item_03">
					<img src="templates/images/bg_item_03.png">
				</div>
				<div class="bg_item_05">
					<img src="templates/images/bg_item_05.png">
				</div>
			</div>
			<!-- 上方背景圖片 結束 -->
		</div>
	</header>
	<!-- 頁頭 結束 -->

	<!-- wrapper 開始 -->
	<wrapper>
		<div class="inner">

			<!-- 分類標題 開始 -->
			<div class="pic_cat_title">查詢結果</div>
			<!-- 分類標題 結束 -->

			<!-- 圖庫 開始 -->
			<ul class="pic_grid">
				<li>
					<section>
						<img src="storage/02-清領前期對臺政策示意圖.jpg">
						<p>02-清領前期對臺政策示意圖</p>
						<div><a class="download" download href="storage/02-清領前期對臺政策示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/03-械鬥示意圖.jpg">
						<p>03-械鬥示意圖</p>
						<div><a class="download" download href="storage/03-械鬥示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/03-鄭氏時期的對外貿易示意圖.jpg">
						<p>03-鄭氏時期的對外貿易示意圖</p>
						<div><a class="download" download href="storage/03-鄭氏時期的對外貿易示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/04-漳泉械鬥示意圖.jpg">
						<p>04-漳泉械鬥示意圖</p>
						<div><a class="download" download href="storage/04-漳泉械鬥示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/05-金屬器文化示意圖.jpg">
						<p>05-金屬器文化示意圖</p>
						<div><a class="download" download href="storage/05-金屬器文化示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/05-荷蘭人治臺示意圖.jpg">
						<p>05-荷蘭人治臺示意圖</p>
						<div><a class="download" download href="storage/05-荷蘭人治臺示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/06-清代漢人移民臺灣示意圖.jpg">
						<p>06-清代漢人移民臺灣示意圖</p>
						<div><a class="download" download href="storage/06-清代漢人移民臺灣示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/08-文化層形成示意圖.jpg">
						<p>08-文化層形成示意圖</p>
						<div><a class="download" download href="storage/08-文化層形成示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/08-西班牙占領北臺灣示意圖.jpg">
						<p>08-西班牙占領北臺灣示意圖</p>
						<div><a class="download" download href="storage/08-西班牙占領北臺灣示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/08-沈葆楨在臺建設示意圖.jpg">
						<p>08-沈葆楨在臺建設示意圖</p>
						<div><a class="download" download href="storage/08-沈葆楨在臺建設示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/08-械鬥示意圖.jpg">
						<p>08-械鬥示意圖</p>
						<div><a class="download" download href="storage/08-械鬥示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/08-鄭氏時期的對外貿易示意圖.jpg">
						<p>08-鄭氏時期的對外貿易示意圖</p>
						<div><a class="download" download href="storage/08-鄭氏時期的對外貿易示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/09-劉銘傳在臺建設示意圖.jpg">
						<p>09-劉銘傳在臺建設示意圖</p>
						<div><a class="download" download href="storage/09-劉銘傳在臺建設示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
			</ul>
			<!-- 圖庫 結束 -->

		</div>
	</wrapper>
	<!-- wrapper 結束 -->


	<!-- 載入頁面的動畫 開始 -->
	<!--
	<div class="loading_page_box">
		<div class="img_box"><img src="templates/images/loading_page.gif"></div>
	</div>
	-->
	<!-- 載入頁面的動畫 結束 -->

	<?php include("pic_inc_footer.php"); ?>

	<script>
		$(document).ready(function() {
			//
		});

		function form_send() {
			if ($(".v_01").val() == "") {
				alert("請輸入關鍵字。");
				return false;
			}
		}
	</script>
</body>

</html>