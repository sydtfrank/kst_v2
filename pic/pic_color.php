<?php include("pic_inc_head.php"); ?>

<body class="pic_color">

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
							<a href="pic_color.php" class="active">課習彩圖</a>
						</li>
						<li>
							<a href="pic_bw.php">課習灰階</a>
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
								<a href="pic_color.php" class="active">地理</a>
							</li>
							<li class="nav_history">
								<a href="pic_color.php">歷史</a>
							</li>
							<li class="nav_society">
								<a href="pic_color.php">公民與社會</a>
							</li>
						</ul>
					</div>
					<div class="col">
						<form method="post" onSubmit="return form_send();" action="pic_color_result.php">
							<div class="query_box">
								<div><input type="text" class="v_01" placeholder="請輸入關鍵字"></div>
								<div><button type="submit">搜尋</button></div>
							</div>
						</form>
					</div>
				</section>
				<section>
					<div class="book_list">
						<span>第</span>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_1')" class="active">1</a>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_2')">2</a>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_3')">3</a>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_4')">4</a>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_5')">5</a>
						<a href="javascript:void(0);" onclick="show_lesson(this, 'book_6')">6</a>
						<span>冊</span>
					</div>

					<div class="lesson_list">
						<ul class="book_1 active">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
						<ul class="book_2">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
						<ul class="book_3">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
						<ul class="book_4">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
						<ul class="book_5">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
						<ul class="book_6">
							<li class="active"><a href="pic_color.php">第1課</a></li>
							<li><a href="pic_color.php">第2課</a></li>
							<li><a href="pic_color.php">第3課</a></li>
							<li><a href="pic_color.php">第4課</a></li>
							<li><a href="pic_color.php">第5課</a></li>
							<li><a href="pic_color.php">第6課</a></li>
						</ul>
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
			<div class="pic_cat_title">第2冊 - 第1課</div>
			<!-- 分類標題 結束 -->

			<!-- 圖庫 開始 -->
			<ul class="pic_grid">
				<li>
					<!-- 未登入範例 開始 -->
					<section>
						<img src="storage/01-同治年間日本侵臺路線圖.jpg">
						<p>01-同治年間日本侵臺路線圖</p>
						<div>
							<a class="download login" href="https://ac.knsh.com.tw/oauth/authorize?response_type=code&client_id=1001&redirect_uri=https://945cloud.knsh.com.tw/&scope=name%20role">下載</a>
							<a href="https://ac.knsh.com.tw/oauth/authorize?response_type=code&client_id=1001&redirect_uri=https://945cloud.knsh.com.tw/&scope=name%20role" class="zoom login">放大</a>
						</div>
					</section>
					<!-- 未登入範例 結束 -->
				</li>
				<li>
					<!-- 已登入範例 開始 -->
					<section>
						<img src="storage/01-臺灣西部重要河川分布圖.jpg">
						<p>01-臺灣西部重要河川分布圖</p>
						<div>
							<a class="download" download href="storage/01-臺灣西部重要河川分布圖.jpg">下載</a>
							<a href="javascript:void(0);" class="zoom">放大</a>
						</div>
					</section>
					<!-- 已登入範例 結束 -->
				</li>
				<li>
					<section>
						<img src="storage/01-臺灣東部史前文化的漫畫.jpg">
						<p>01-臺灣東部史前文化的漫畫</p>
						<div><a class="download" download href="storage/01-臺灣東部史前文化的漫畫.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/01-鄭成功時期臺灣行政區劃圖.jpg">
						<p>01-鄭成功時期臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/01-鄭成功時期臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/02-史前文化人類生活想像圖.jpg">
						<p>02-史前文化人類生活想像圖</p>
						<div><a class="download" download href="storage/02-史前文化人類生活想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/02-清領前期對臺政策示意圖.jpg">
						<p>02-清領前期對臺政策示意圖</p>
						<div><a class="download" download href="storage/02-清領前期對臺政策示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/02-荷治時期熱蘭遮城形勢圖.jpg">
						<p>02-荷治時期熱蘭遮城形勢圖</p>
						<div><a class="download" download href="storage/02-荷治時期熱蘭遮城形勢圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/02-鄭經時期臺灣行政區劃圖.jpg">
						<p>02-鄭經時期臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/02-鄭經時期臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/03-十七世紀荷蘭到亞洲航海的路線圖.jpg">
						<p>03-十七世紀荷蘭到亞洲航海的路線圖</p>
						<div><a class="download" download href="storage/03-十七世紀荷蘭到亞洲航海的路線圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/03-康熙23年臺灣行政區劃圖.jpg">
						<p>03-康熙23年臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/03-康熙23年臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/03-臺灣重要史前文化分布圖.jpg">
						<p>03-臺灣重要史前文化分布圖</p>
						<div><a class="download" download href="storage/03-臺灣重要史前文化分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/04-十九世紀平埔族分布圖.jpg">
						<p>04-十九世紀平埔族分布圖</p>
						<div><a class="download" download href="storage/04-十九世紀平埔族分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/04-荷蘭文和新港文對照的新約聖經.jpg">
						<p>04-荷蘭文和新港文對照的新約聖經</p>
						<div><a class="download" download href="storage/04-荷蘭文和新港文對照的新約聖經.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/04-雍正5年臺灣行政區劃圖.jpg">
						<p>04-雍正5年臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/04-雍正5年臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/04-鄭成功出兵攻打鹿耳門路線圖.jpg">
						<p>04-鄭成功出兵攻打鹿耳門路線圖</p>
						<div><a class="download" download href="storage/04-鄭成功出兵攻打鹿耳門路線圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/05-泉郊會館外觀圖.jpg">
						<p>05-泉郊會館外觀圖</p>
						<div><a class="download" download href="storage/05-泉郊會館外觀圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/05-嘉慶17年臺灣行政區劃圖.jpg">
						<p>05-嘉慶17年臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/05-嘉慶17年臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/05-鄭氏時期軍屯分布圖.jpg">
						<p>05-鄭氏時期軍屯分布圖</p>
						<div><a class="download" download href="storage/05-鄭氏時期軍屯分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/06-十七世紀歐洲國家在亞洲的據點分布圖.jpg">
						<p>06-十七世紀歐洲國家在亞洲的據點分布圖</p>
						<div><a class="download" download href="storage/06-十七世紀歐洲國家在亞洲的據點分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/06-光緒元年臺灣行政區劃圖.jpg">
						<p>06-光緒元年臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/06-光緒元年臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/06-新石器時代製作陶器想像圖.jpg">
						<p>06-新石器時代製作陶器想像圖</p>
						<div><a class="download" download href="storage/06-新石器時代製作陶器想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/06-鄭成功出兵攻臺路線圖.jpg">
						<p>06-鄭成功出兵攻臺路線圖</p>
						<div><a class="download" download href="storage/06-鄭成功出兵攻臺路線圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/07-光緒13年臺灣行政區劃圖.jpg">
						<p>07-光緒13年臺灣行政區劃圖</p>
						<div><a class="download" download href="storage/07-光緒13年臺灣行政區劃圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/07-荷蘭在巴達維亞對外貿易圖.jpg">
						<p>07-荷蘭在巴達維亞對外貿易圖</p>
						<div><a class="download" download href="storage/07-荷蘭在巴達維亞對外貿易圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/07-渡臺禁令想像圖.jpg">
						<p>07-渡臺禁令想像圖</p>
						<div><a class="download" download href="storage/07-渡臺禁令想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/07-鄭經出兵中國大陸路線圖.jpg">
						<p>07-鄭經出兵中國大陸路線圖</p>
						<div><a class="download" download href="storage/07-鄭經出兵中國大陸路線圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/07-舊石器時代打擊石器想像圖.jpg">
						<p>07-舊石器時代打擊石器想像圖</p>
						<div><a class="download" download href="storage/07-舊石器時代打擊石器想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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
						<img src="storage/09-東南亞地圖.jpg">
						<p>09-東南亞地圖</p>
						<div><a class="download" download href="storage/09-東南亞地圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/09-原住民名稱演變表.jpg">
						<p>09-原住民名稱演變表</p>
						<div><a class="download" download href="storage/09-原住民名稱演變表.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/09-劉銘傳在臺建設示意圖.jpg">
						<p>09-劉銘傳在臺建設示意圖</p>
						<div><a class="download" download href="storage/09-劉銘傳在臺建設示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/09-鄭氏時期教育機構.jpg">
						<p>09-鄭氏時期教育機構</p>
						<div><a class="download" download href="storage/09-鄭氏時期教育機構.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/10-南島語族分布圖.jpg">
						<p>10-南島語族分布圖</p>
						<div><a class="download" download href="storage/10-南島語族分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/10-荷治時期城堡分布圖.jpg">
						<p>10-荷治時期城堡分布圖</p>
						<div><a class="download" download href="storage/10-荷治時期城堡分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section><img src="storage/10-鄭氏時期的對外貿易示意圖.jpg">
						<p>10-鄭氏時期的對外貿易示意圖</p>
						<div><a class="download" download href="storage/10-鄭氏時期的對外貿易示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section><img src="storage/11- 十三行文化生活環境想像圖.jpg">
						<p>11- 十三行文化生活環境想像圖</p>
						<div><a class="download" download href="storage/11- 十三行文化生活環境想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/11-郭懷一事件爆發原因示意圖.jpg">
						<p>11-郭懷一事件爆發原因示意圖</p>
						<div><a class="download" download href="storage/11-郭懷一事件爆發原因示意圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/12-十六世紀以後海商活動範圍圖.jpg">
						<p>12-十六世紀以後海商活動範圍圖</p>
						<div><a class="download" download href="storage/12-十六世紀以後海商活動範圍圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/12-卑南文化生活環境想像圖.jpg">
						<p>12-卑南文化生活環境想像圖</p>
						<div><a class="download" download href="storage/12-卑南文化生活環境想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/13-十七世紀歐洲國家在亞洲的貿易據點圖.jpg">
						<p>13-十七世紀歐洲國家在亞洲的貿易據點圖</p>
						<div><a class="download" download href="storage/13-十七世紀歐洲國家在亞洲的貿易據點圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/13-史前人類在海蝕洞生活想像圖.jpg">
						<p>13-史前人類在海蝕洞生活想像圖</p>
						<div><a class="download" download href="storage/13-史前人類在海蝕洞生活想像圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/14-荷治時期臺灣對外貿易圖.jpg">
						<p>14-荷治時期臺灣對外貿易圖</p>
						<div><a class="download" download href="storage/14-荷治時期臺灣對外貿易圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/14-新石器時代重要遺址分布圖.jpg">
						<p>14-新石器時代重要遺址分布圖</p>
						<div><a class="download" download href="storage/14-新石器時代重要遺址分布圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
					</section>
				</li>
				<li>
					<section>
						<img src="storage/15-荷蘭與西班牙在臺勢力範圍圖.jpg">
						<p>15-荷蘭與西班牙在臺勢力範圍圖</p>
						<div><a class="download" download href="storage/15-荷蘭與西班牙在臺勢力範圍圖.jpg">下載</a><a href="javascript:void(0);" class="zoom">放大</a></div>
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