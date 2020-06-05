/*登入標籤*/
$(function () {
        $('#contents section[id!="login"]').hide();
        $("a").click(function () {
                $("#contents section").hide();
                $($(this).attr("href")).show();
                $(".current").removeClass("current");
                $(this).addClass("current");
                return false;
        });
});