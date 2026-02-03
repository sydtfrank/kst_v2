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
	}, 800);
}
/* 跳至頁端 結束 */




/* 歷史時間軸 開始 */
$(document).ready(function () {
	AOS.init();
});
/* 歷史時間軸 結束 */



/* 導航區 開始 */
$(window).scroll(function () {
	if ($(this).scrollTop() > 350) {
		$('.nav_box').addClass("show");
	} else {
		$('.nav_box').removeClass("show");
	}
});

function nav_btn() {
	$(".nav_box").toggleClass("open");
}
/* 導航區 結束 */

/* active效果導航區 -- 開始 */
//觀察員A
var observer_A = new IntersectionObserver(function (entries, observer) {
	//處理工作
	var current_txt = null;
	entries.forEach(function (entry) {
		if (entry.isIntersecting) {
			//目標元素進入viewport時
			//$(entry.target).addClass("come");
			current_txt = $(entry.target).find("th span").text();
			//
			$(".nav_box a").removeClass("active");
			$(".nav_box a").each(function () {
				if (current_txt == $(this).text()) {
					$(this).addClass("active");
				}
			});
		} else {
			//目標元素離開viewport時
			//$(entry.target).removeClass("come");
		}
	})
	//
}, {
	//相關設定
	threshold: 0, //1值:viewport內、0.5值:viewport中間、0值:viewport外。
	rootMargin: "-10% 0px -90% 0px",
});

var timeline_trs = document.querySelectorAll('.timeline table tr');
timeline_trs.forEach(
	function (t) {
		observer_A.observe(t);
	}
);

/* active效果導航區 -- 結束 */



/* 載入頁面的動畫 開始 */
//$(window).load(function(){
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
/* 載入頁面的動畫 結束 */






/* 取得網址參數 開始 */
function __getURL(url, param) {
	var rtn = false;
	var arr = new Array();
	var arrParam = new Array();
	//
	arr = url.split("?");
	if (arr.length == 2) {
		arr = arr[1].split("&");
		for (var i = 0; i < arr.length; i++) {
			arrParam = arr[i].split("=");
			if (param == arrParam[0]) {
				rtn = decodeURIComponent(arrParam[1]);
				break;
			}
		}
	}
	return rtn;
}
/* 取得網址參數 結束 */
