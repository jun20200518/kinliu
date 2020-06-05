<?php
header("Content-Type:text/html; charset=utf-8");
error_reporting(0);


class Runprice{
    /**
     * @var WebSocketClient
     */

    public $min ="";
    public function curlfun($url, $params = array(), $method = 'GET')
    {

        $header = array();
        $opts = array(CURLOPT_TIMEOUT => 10, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_HTTPHEADER => $header);

        /* 根据请求类型设置特定参数 */
        switch (strtoupper($method)) {
            case 'GET' :
                $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
                $opts[CURLOPT_URL] = substr($opts[CURLOPT_URL],0,-1);

                break;
            case 'POST' :
                //判断是否传输文件
                $params = http_build_query($params);
                $opts[CURLOPT_URL] = $url;
                $opts[CURLOPT_POST] = 1;
                $opts[CURLOPT_POSTFIELDS] = $params;
                break;
            default :

        }

        /* 初始化并执行curl请求 */
        $ch = curl_init();
        curl_setopt_array($ch, $opts);
        $data = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if($error){
            $data = null;
        }

        return $data;

    }
    public function fengkong($price,$low,$top)
    {

        $point_low = $low;
        $point_top = $top;

        $FloatLength = $this->getFloatLength($point_top);
        $jishu_rand = pow(10,$FloatLength);
        $point_low = $point_low * $jishu_rand;
        $point_top = $point_top * $jishu_rand;
        $rand = rand($point_low,$point_top)/$jishu_rand;

        $_new_rand = rand(0,10);
        if($_new_rand % 2 == 0){
            $price = $price + $rand;
        }else{
            $price = $price - $rand;
        }
        return $price;
    }
    public function getFloatLength($num) {
        $count = 0;

        $temp = explode ( '.', $num );

        if (sizeof ( $temp ) > 1) {
            $decimal = end ( $temp );
            $count = strlen ( $decimal );
        }

        return $count;
    }
    public function actionGetnowprice(){
        $data = json_decode(file_get_contents(__DIR__."/now_data"),true);
        $servername = "futuresnew.cwd70uyoqwnq.ap-southeast-1.rds.amazonaws.com";
        $username = "root";
        $password = "6w0addsp2seo3uq77v0h";
        $dbname = "futures";
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        mysqli_query("SET names 'utf8'");
        // Check connection
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        $sql = 'SELECT * FROM tx_productinfo WHERE isopen = 1';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                //echo "procode:".$row['procode']."<br>";
                switch ($row['procode']){
                    case 'ltc':
                        $this->Getapivirtual($row);
                        //echo "procode:".$row['procode']."<br>";
                        break;
                    case 'eth':
                        $this->Getapivirtual($row);
                        //echo "procode:".$row['procode']."<br>";
                        break;
                    case 'btc':
                        $this->Getapivirtual($row);
                        //echo "procode:".$row['procode']."<br>";
                        break;
                    default:
                        $this->Getapicoin($row);
                        //echo "procode:".$row['procode']."<br>";
                        break;

                }
            }
        }else{
            echo "0 结果";
        }
    }
    public function Getapicoin($row){
        $nowtime = time();
        $interval = 1;
        $datalen = 1;
        $data = null;
        $year = date('Y_n_j', time());
        $data = json_decode(file_get_contents(__DIR__."/now_data"),true);
        if ($interval == '1440') {
            $geturl = "http://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_" . $row['procode'] . "$year=/NewForexService.getDayKLine?symbol=" . $row['procode'] . "&_=$year";
        } else {
            $geturl = "http://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_" . $row['procode'] . "_" . $interval . "_$nowtime=/NewForexService.getMinKline?symbol=" . $row['procode'] . "&scale=" . $interval . "&datalen=" . $datalen;
        }
        //echo "url:".$geturl."<br>";
        $html = $this->curlfun($geturl);
        if ($interval == '1440') {
            $_arr = explode('("', $html);
            if (!isset($_arr[1])) {
                return;
            }
            $_str = substr($_arr[1], 1, -4);
            $_data_arr = explode(',|', $_str);

        } else {
            $_arr = explode('[', $html);
            if (!isset($_arr[1])) {
                return;
            }
            $_str = substr($_arr[1], 1, -3);
            $_data_arr = explode('},{', $_str);

        }
        $num = 1;
        $_count = count($_data_arr);
        $_data_arr = array_slice($_data_arr, $_count - $num, $_count);


        foreach ($_data_arr as $k => $v) {

            $_son_arr = explode(',', $v);

            if ($interval == 'd') {
                $res_arr[] = array(
                    substr($_son_arr[0], 5),
                    $_son_arr[1],
                    $_son_arr[4],
                    $_son_arr[2],
                    $_son_arr[3],

                );
                $res_arr[] = array('time'=>substr($_son_arr[0], 5),'open'=>$_son_arr[1],'high'=>$_son_arr[4],'low'=>$_son_arr[2],'close'=>$_son_arr[3]);
                $data[$pid] = $res_arr;
                file_put_contents(__DIR__."/now_data",json_encode($data));
            } else {
                $_time = strtotime(substr($_son_arr[0], 3, -1));
                if (in_array($interval, array(1, 5)) && isset($_kline[$_time])) {
                    $_h = $_kline[$_time]['updata'];
                    $_l = $_kline[$_time]['downdata'];
                    $_o = $_kline[$_time]['opendata'];
                    $_c = $_kline[$_time]['closdata'];
                } else {
                    $_h = substr($_son_arr[3], 3, -1);
                    $_l = substr($_son_arr[2], 3, -1);
                    $_o = substr($_son_arr[1], 3, -1);
                    $_c = substr($_son_arr[4], 3, -1);
                }


                $ticker['ptitle'] = $row['ptitle'];
                $ticker['time'] = $_time+28800;
                $ticker['tpye'] = 'price';
                $ticker['open'] = $_o;
                $ticker['high'] = $_h;
                $ticker['low'] = $_l;
                $ticker['close'] = $this->fengkong($_c,$row['point_low'],$row['point_top']);
                echo $ticker['time'];
                //$res_arr[] = array('date'=>$strtotime,'buy'=>$_o,'high'=>$_h,'low'=>$_l,'close'=>$_c);


            }
            //
        }
        //echo "data".json_encode($ticker)."<br>";
        $data[$row['pid']] = $ticker;
        file_put_contents(__DIR__."/now_data",json_encode($data));
        //echo("/now_data".$pid."寫入成功"."\n");
        echo("/now_data,產品:".$row['pid']."寫入成功"."\n");
    }

    public function Getapivirtual($row){
        $data = json_decode(file_get_contents(__DIR__."/now_data"),true);
        $geturl = "http://api.zb.live/data/v1/kline?market=".$row['procode']."_usdt&type=1min&size=1";
        //echo("url: ".$geturl."\n");
        $html = file_get_contents($geturl);
        $html = substr($html,25,-22);
        $_data_arr = explode('],[',$html);
        foreach ($_data_arr as $k => $v) {
            $_son_arr = explode(',', $v);
            $d =$_son_arr[0]/1000;
            $close =$this->fengkong($_son_arr[4],$row['point_low'],$row['point_top']);
            $res_arr = array('time'=>$d+28800,'open'=>$_son_arr[1],'high'=>$_son_arr[2],'low'=>$_son_arr[3],'close'=>$close,'ptitle'=>$row['ptitle'],'type'=>'price');
            //JSON陣列[產品名稱] 設定成新的K線值

        }
          $data[$row['pid']] = $res_arr;



            file_put_contents(__DIR__."/now_data",json_encode($data));
            echo("/now_data,產品:".$row['pid']."寫入成功"."\n");
            //echo "Now: ".json_encode($data);

      }
    }





$run=new Runprice();
set_time_limit(0);//程序执行时间无限制
$sleep_time = 1;//多长时间执行一次
while(TRUE) {
    //file_put_contents("log.log",$msg,FILE_APPEND);//记录日志
    $run->actionGetnowprice();
    sleep($sleep_time);//等待时间，进行下一次操作。
}

?>
