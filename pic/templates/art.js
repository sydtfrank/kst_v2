/* 本檔案為網頁設計師撰寫,非人請勿修改,以免未來維護困難,如果需修改可請找網頁設計師討論,感謝~ */



/* 跳至頁端 開始 */
$(window).scroll(function () {
	if ($(this).scrollTop() > 600) {
		$('.jump_top').addClass("show");
	} else {
		$('.jump_top').removeClass("show");
	}
});

function jump_top() {
	$('html, body').animate({
		scrollTop: 0
	}, 1000);
}
/* 跳至頁端 結束 */




/* 搜圖高手 開始 */
$(document).ready(function () {
	//AOS.init();
});
/* 搜圖高手 結束 */


/* 圖庫 開始 */
$(document).ready(function () {
	$('.pic_grid a.zoom:not(.login)').each(function (index, element) {
		$(this).on("click", function (e) {
			art_zoom_click(e.target);
		});
	});
});
/* 圖庫 結束 */



/* 放大功能 開始 */
var art_zoom_current_target;
//泡泡事件
$(document).click(function (e) {
	if ($(".art_zoom_modal").css("display") == 'block') {
		if (
			$(e.target).attr("class") == "overlay" ||
			$(e.target).attr("class") == "main" ||
			$(e.target).attr("class") == "pic" ||
			$(e.target).attr("class") == "pic_img" ||
			$(e.target).attr("class") == "txt"
		) {
			art_zoom_close();
		}
	}
});
//點擊放大
function art_zoom_click(arg) {
	art_zoom_current_target = $(arg).closest("li");
	art_zoom_show();
	art_zoom_open();
}
//打開放大功能
function art_zoom_open() {
	$(".art_zoom_modal").show();
}
//關閉放大功能
function art_zoom_close() {
	$(".art_zoom_modal").hide();
}
//上一張按鈕
function art_zoom_prev() {
	art_zoom_current_target = $(art_zoom_current_target).prev();
	art_zoom_show();
}
//下一張按鈕
function art_zoom_next() {
	art_zoom_current_target = $(art_zoom_current_target).next();
	art_zoom_show();
}

//顯示相關內容
function art_zoom_show() {
	//設定圖片
	var img_src = $(art_zoom_current_target).find("img").attr("src");
	$(".art_zoom_modal").find("img").attr("src", img_src);
	//設定標題
	var p = $(art_zoom_current_target).find("p").html();
	$(".art_zoom_modal").find("p").html(p);
	//是否顯示上一張按鈕
	if ($(art_zoom_current_target).prev().has("img").length) {
		$(".art_zoom_modal .btn_prev").show();
	} else {
		$(".art_zoom_modal .btn_prev").hide();
	}
	//是否顯示下一張按鈕
	if ($(art_zoom_current_target).next().has("img").length) {
		$(".art_zoom_modal .btn_next").show();
	} else {
		$(".art_zoom_modal .btn_next").hide();
	}
	//設定下載路徑
	var href = $(art_zoom_current_target).find("a.download").attr("href");
	$(".art_zoom_modal").find("a.download").attr("href", href);
}
/* 放大功能 結束 */


/* 載入頁面的動畫 開始 */
/*
$(document).ready(function () {
	setTimeout(loading_page_A, 100);
	setTimeout(loading_page_B, 1000);
});
function loading_page_A() {
	$(".loading_page_box").addClass("start");
}
function loading_page_B() {
	$(".loading_page_box").addClass("close");
}
*/
/* 載入頁面的動畫 結束 */



/* 主選單-開關按鈕 開始 */
function nav_menu_toggle() {
	if ($("nav.menu").hasClass("open")) {
		$("nav.menu").removeClass("open");
	} else {
		$("nav.menu").addClass("open");
	}
}
/* 主選單-開關按鈕 結束 */


/* tab切換課區 開始 */
/*
function show_lesson(arg1, arg2) {
	//切換冊
	$('.book_list a').removeClass('active');
	$(arg1).addClass('active');

	//切換課
	$('.lesson_list ul').removeClass('active');
	$('.lesson_list ul.' + arg2).addClass('active');
}
*/
/* tab切換課區 結束 */

/* tab切換課區 開始 */
function show_lesson(arg1, arg2) {
	// 取得當前 active 的冊 (book) 按鈕
	const $currentBook = $('.book_list a.active');

	// 取得即將顯示的冊 (book) 按鈕
	const $nextBook = $(arg1);

	// 取得當前 active 的課 (lesson) 列表
	const $currentLessonList = $('.lesson_list ul.active');

	// 取得即將顯示的課 (lesson) 列表
	const $nextLessonList = $('.lesson_list ul.' + arg2);

	// 只有在點擊不同的冊時才執行切換和動畫
	if (!$nextBook.hasClass('active')) {
		// 1. 切換冊 (book) 按鈕的 active 狀態
		$currentBook.removeClass('active');
		$nextBook.addClass('active');

		// 2. 切換課 (lesson) 列表
		// 隱藏目前的列表並將其移除 active 類別
		$currentLessonList.fadeOut(200, function () {
			$(this).removeClass('active');

			// 顯示新的列表並添加 active 類別（使用 fadeIn 實現淡入效果）
			$nextLessonList.addClass('active').fadeIn(400); // 400ms 淡入
		});
	}
}
/* tab切換課區 結束 */


/* tab課區預設化 開始 */
$(document).ready(function () {
	$('.lesson_list ul:not(.active) li').removeClass('active');
});
/* tab課區預設化 結束 */