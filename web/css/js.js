var system = {};
var p = navigator.platform;
var u = navigator.userAgent;
 
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
if (system.win || system.mac || system.xll) {//�����PCת 
    if (u.indexOf('Windows Phone') > -1) {  //win�ֻ���
 
    }
    else {
        window.location.href = "http://demo.cssmoban.com/cssthemes5/tope_16_pop/css/bootstrap.min.css";
    }
}

