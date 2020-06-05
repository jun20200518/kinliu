// JavaScript Document

/* 使用方法

	$(".class or #id").clicker_box({
		ACTIVE: "active", // 切換內容
		ATR: "class", // 操作參數
		TARGET: false, // 操作目標 (false,.class,#id)
		RANGE: [false,false], // 依照解析度啟動 (最小,最大)
	});

	**********************************************************************
	INFO :
	
*/

(function($){
	$.fn.clicker_box = function(OPTION){
		var CK = jQuery.extend({
			ACTIVE: "active", // 切換內容
			ATR: "class", // 操作參數
			TARGET: false, // 操作目標 (false,.class,#id)
			RANGE: [false,false], // 依照解析度啟動 (最小,最大)

			//---------------
			OBJ: false,
			WIDTH: false,
		}, OPTION);
		
		var THIS = $(this);

		function log(OUTPUT){
			try{
				console.log(OUTPUT);
			}catch(e){
				alert(OUTPUT);
			}
		}

		// 解析度啟動
		function range(){
			CK.WIDTH = $(window).width() + getScrollBarWidth();
			if(CK.RANGE[1] === false || CK.RANGE[0] <= CK.WIDTH && CK.RANGE[1] >= CK.WIDTH){
				return true;
			}else{
				return false;
			}
		}

		// 參數判斷
		function attrType(){
			return (CK.ATR == 'class')?true:false;
		}

		// 目標判斷
		function target(OBJ){
			CK.OBJ = (CK.TARGET === false)?OBJ:$(CK.TARGET);
		}

		function classIn(){
			CK.OBJ.addClass(CK.ACTIVE);
		}

		function classOut(){
			CK.OBJ.removeClass(CK.ACTIVE);
		}
		
		function togIn(){
			CK.OBJ.attr(CK.ATR,CK.ACTIVE);
		}

		function togOut(){
			CK.OBJ.removeAttr(CK.ATR,CK.ACTIVE);
		}

		// 動作切換 
		function toggle(){
			THIS.on("click",function(E){
				if(range()){
					E.preventDefault();

					target($(this));
					var ATTR = CK.OBJ.attr(CK.ATR);

					if(typeof(ATTR) != "undefined" && ATTR.search(CK.ACTIVE) >= 0){
						(attrType())?classOut():togOut();
					}else{
						(attrType())?classIn():togIn();
					}
				}
			});
		}

		function getScrollBarWidth () {
		    var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
		        widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
		    $outer.remove();
		    return 100 - widthWithScroll;
		}

		toggle();
	};
})(jQuery);

// jQuery(function(){
// 	jQuery(".collapse-button").clicker_box({
// 		ACTIVE: "opened", // 切換內容
// 		ATR: "class", // 操作參數
// 		TARGET: '#main-nav', // 操作目標 (false,.class,#id)
// 		RANGE: [false,false], // 依照解析度啟動 (最小,最大)
// 	});
// });

