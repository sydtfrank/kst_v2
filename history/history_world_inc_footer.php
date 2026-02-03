<!-- 頁尾 開始 -->
<footer>
	<div class="inner">
		<section>
			<p>康軒文教事業 版權所有© 2024 Kang Hsuan Educational Publishing Corp. All Rights Reserved.</p>
		</section>
	</div>
</footer>
<!-- 頁尾 結束 -->


<!-- 跳至頁端 開始 -->
<button class="jump_top" onClick="jump_top()"></button>
<!-- 跳至頁端 結束 -->


<!-- 導航區 開始 -->
<div class="nav_box">
	<div><img src="templates/images/menu_03.svg"></div>
	<a href="history_world.php#1">上古時期</a>
	<a href="history_world.php#2">中古時期</a>
	<a href="history_world.php#3">近代時期</a>
	<a href="history_world.php#4">現代時期</a>
	<button type="button" onclick="nav_btn()"></button>
</div>
<!-- 導航區 結束 -->


<!-- 預載圖片 開始 -->
<div style="display: none;">
	<img src="templates/images/border_top_01_d46c36.svg">
	<img src="templates/images/border_top_02_d46c36.svg">
	<img src="templates/images/border_top_03_d46c36.svg">
	<img src="templates/images/border_bottom_01_d46c36.svg">
	<img src="templates/images/border_bottom_02_d46c36.svg">
	<img src="templates/images/border_bottom_03_d46c36.svg">
	<img src="templates/images/menu_01_d46c36.svg">
	<img src="templates/images/menu_02_d46c36.svg">
	<img src="templates/images/menu_03_d46c36.svg">
</div>
<!-- 預載圖片 結束 -->


<script src="templates/jquery-3.7.1.min.js"></script>
<script src="templates/aos/aos.js"></script>
<script src="templates/art.js"></script>

<script>
/* 動態插入上方圖 開始 */
$(document).ready(function () {
	//世界史
	if ($("body.history_world").length) {
		var new_html = '';
		new_html += '<div class="L"><img src="templates/images/world_top_bg_1.png"></div>';
		new_html += '<div class="M"><img src="templates/images/world_top_bg_2.png"></div>';
		new_html += '<div class="S"><img src="templates/images/world_top_bg_3.png"></div>';
		$(".top_pic").html(new_html);
	}
});
/* 動態插入上方圖 結束 */
</script>