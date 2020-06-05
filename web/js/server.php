<?php
class WebSocketServer1{
    const Subscribe_Echo='echo';
    const Subscribe_Kline='kline';
    public $dataFile=__DIR__.'/data';
    public $dataFile2=__DIR__.'/1min_data';
    public $dataFile3=__DIR__.'/5min_data';
    public $dataFile4=__DIR__.'/15min_data';
    public $dataFile5=__DIR__.'/30min_data';
    public $dataFile6=__DIR__.'/1hour_data';
    public $dataFile7=__DIR__.'/1day_data';

    public $dataFile8=__DIR__.'/1min_2_data';
    public $dataFile9=__DIR__.'/5min_2_data';
    public $dataFile10=__DIR__.'/15min_2_data';
    public $dataFile11=__DIR__.'/30min_2_data';
    public $dataFile12=__DIR__.'/1hour_2_data';
    public $dataFile13=__DIR__.'/1day_2_data';
    public $dataNow=__DIR__.'/now_data';

    protected $_server;
    private $pdo;


    public function __construct()
    {
        $this->_server=new Swoole\WebSocket\Server("0.0.0.0", 9996);
        $this->_server->on('WorkerStart',[$this,'workerStart']);
        $this->_server->on('message',[$this,'message']);
        $this->_server->on('open',[$this,'open']);
        $this->_server->on('close',[$this,'close']);

        $data=[
            'users'=>[],
            'subscribes'=>[]
        ];
        file_put_contents($this->dataFile,json_encode($data));
    }

    public function getData(){
        return json_decode(file_get_contents($this->dataFile),true);
    }
    public function getnowData(){
        return json_decode(file_get_contents($this->dataNow),true);
    }
    public function get1minData(){
        return json_decode(file_get_contents($this->dataFile2),true);
    }
    public function get5minData(){
        return json_decode(file_get_contents($this->dataFile3),true);
    }
    public function get15minData(){
        return json_decode(file_get_contents($this->dataFile4),true);
    }
    public function get30minData(){
        return json_decode(file_get_contents($this->dataFile5),true);
    }
    public function get1hourData(){
        return json_decode(file_get_contents($this->dataFile6),true);
    }
    public function get1dayData(){
        return json_decode(file_get_contents($this->dataFile7),true);
    }
    public function get1minData_2(){
        return json_decode(file_get_contents($this->dataFile8),true);
    }
    public function get5minData_2(){
        return json_decode(file_get_contents($this->dataFile9),true);
    }
    public function get15minData_2(){
        return json_decode(file_get_contents($this->dataFile10),true);
    }
    public function get30minData_2(){
        return json_decode(file_get_contents($this->dataFile11),true);
    }
    public function get1hourData_2(){
        return json_decode(file_get_contents($this->dataFile12),true);
    }
    public function get1dayData_2(){
        return json_decode(file_get_contents($this->dataFile13),true);
    }

    public function setData($data){
        file_put_contents($this->dataFile,json_encode($data));
    }

    public function addUser($worker_id,$fd){
        $data=$this->getData();
        $data['users'][$worker_id][$fd]=[
        ];
        $this->setData($data);
    }

    public function subscribe($type,$worker_id,$fd,$uid,$platformname){
        $data=$this->getData();
        //{"users":[{"1":[]}],"subscribes":{"echo":{"0":[1],"uid":["161"]}}}

        if($type == self::Subscribe_Echo){
            $data['subscribes'][$type][$worker_id]['fd'][]=$fd;
            $data['subscribes'][$type][$worker_id]['uid'][]=$uid;
            $data['subscribes'][$type][$worker_id]['pfn'][]=$platformname;
        }else{
            $data['subscribes'][$type][$worker_id]['fd'][]=$fd;
            $data['subscribes'][$type][$worker_id]['uid'][]=$uid;
        }


        //{"users":[{"1":[]}],"subscribes":{"echo":{"0":[1,2],"uid":["161,180"]}}}
        $this->setData($data);
    }

    public function unSubscribe($type,$worker_id,$fd,$uid,$pfn){
        $data=$this->getData();
        if(empty($data['subscribes'][$type][$worker_id])){
            return;
        }
//        $findIndex=array_search($fd,$data['subscribes'][$type][$worker_id]['fd']);
////        array_splice($data['subscribes'][$type][$worker_id]['fd'][],$findIndex,1);
////        $findIndex1=array_search($fd,$data['subscribes'][$type][$worker_id]['uid']);
////        array_splice($data['subscribes'][$type][$worker_id]['uid'][],$findIndex1,1);
////        $this->setData($data);
        if($type == self::Subscribe_Echo){
            $findIndex=array_search($fd,$data['subscribes'][$type][$worker_id]['fd']);
            $findIndex1=array_search($uid,$data['subscribes'][$type][$worker_id]['uid']);
            $findIndex2=array_search($pfn,$data['subscribes'][$type][$worker_id]['pfn']);
            array_splice($data['subscribes'][$type][$worker_id],$findIndex,1);
            array_splice($data['subscribes'][$type][$worker_id],$findIndex1,1);
            array_splice($data['subscribes'][$type][$worker_id],$findIndex2,1);
            $this->setData($data);
        }else{
            $findIndex=array_search($fd,$data['subscribes'][$type][$worker_id]['fd']);
            $findIndex1=array_search($uid,$data['subscribes'][$type][$worker_id]['uid']);
            array_splice($data['subscribes'][$type][$worker_id],$findIndex,1);
            array_splice($data['subscribes'][$type][$worker_id],$findIndex1,1);
            $this->setData($data);
        }


    }

    public function remUser($worker_id,$fd){
        $data=$this->getData();
        unset($data['users'][$worker_id][$fd]);
        $this->setData($data);
    }

    public function tickHandle(Swoole\WebSocket\Server $serv , $worker_id){
        $data=$this->getData();
        //{"users":[{"1":[]}],"subscribes":{"echo":{"0":[1,2],"uid":["161,180"]}}}
        if(!empty($data['subscribes'][self::Subscribe_Echo][$worker_id])){
            $queue=$data['subscribes'][self::Subscribe_Echo][$worker_id]['fd'];
            $queue1=$data['subscribes'][self::Subscribe_Echo][$worker_id]['uid'];
            $queue2=$data['subscribes'][self::Subscribe_Echo][$worker_id]['pfn'];
            //$queue = [1,2]
            //$queue1=$data['subscribes'][self::Subscribe_Echo][$worker_id]['uid'];
            // echo $queue;
            $res_arr1 = $this->getnowData();




            for($i=0;$i<count($queue);$i++){
                $pdo_ = null;
                switch ($queue2[$i]){
                    case 'bitbox':
                        $pdo_ = new PDO("mysql:host=futuresnew.cwd70uyoqwnq.ap-southeast-1.rds.amazonaws.com;dbname=zb", "root", "6w0addsp2seo3uq77v0h");
                        $pdo_->query("set names utf8;");
                        break;
                    default:
                        $pdo_ = new PDO("mysql:host=futuresnew.cwd70uyoqwnq.ap-southeast-1.rds.amazonaws.com;dbname=futures", "root", "6w0addsp2seo3uq77v0h");
                        $pdo_->query("set names utf8;");
                        break;
                }
               $sql = 'SELECT * FROM tx_userinfo WHERE uid = :uid';
               $stmt = $pdo_->prepare($sql);
               $stmt->bindParam (":uid", $queue1[$i]);
               $stmt->execute();
               $res = $stmt->fetch(PDO::FETCH_ASSOC);
               $ostaus = 0;
               $sql1 = 'SELECT * FROM tx_order WHERE uid = :uid and ostaus = :ostaus ORDER BY oid DESC';
               $stmt1 = $pdo_->prepare($sql1);
               $stmt1->bindParam (":uid", $queue1[$i]);
               $stmt1->bindParam (":ostaus", $ostaus);
               $stmt1->execute();
               $res1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
               for($j=0;$j<count($res1);$j++) {

                   //$res_1 = $res1[$j];
                   $sell = $res1[$j]['buytime'] + $res1[$j]['endprofit'] -time();
                   if ($sell > 0) {
                       $res1[$j]['sec'] = $sell."s";
                   } else {
                       $res1[$j]['sec'] = '结算中...';
                   }
                   $res1[$j]['buytime'] = date('Y-m-d H:i:s',$res1[$j]['buytime']);
               }
               $ostaus1 = 1;
               $limit =20;
               $sql2 = 'SELECT * FROM tx_order WHERE uid = :uid and ostaus = :ostaus ORDER BY oid DESC LIMIT '.$limit;
                $stmt2 = $pdo_->prepare($sql2);
               $stmt2->bindParam (":uid", $queue1[$i]);
               $stmt2->bindParam (":ostaus", $ostaus1);
               //$stmt2->bindParam (":limit", $limit);
               $stmt2->execute();
               $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                for($k=0;$k<count($res2);$k++) {
                    $res2[$k]['buytime'] = date('Y-m-d H:i:s',$res2[$k]['buytime']);
                    $res2[$k]['ploss'] = $res2[$k]['fee']+$res2[$k]['ploss']-$res2[$k]['sx_fee'];
                }
                //echo "user ID:".$queue1[$i]."\n";
               $res_arr= array('type'=>"now",'price'=>$res_arr1,'usermoney'=>$res['usermoney'],'order_now'=>$res1,'order_all'=>$res2,'pfn'=>$queue2[$i]);
               //echo json_encode($res_1);
               //$res_arr= array('type'=>"now",'price'=>$res_arr1);
               $serv->push($queue[$i],json_encode($res_arr));
            }
        }
        if(!empty($data['subscribes'][self::Subscribe_Kline][$worker_id])){
            $queue=$data['subscribes'][self::Subscribe_Kline][$worker_id];
            //$queue = [1,2]


        }




    }


    public function workerStart(Swoole\WebSocket\Server $serv , $worker_id){

        Swoole\Timer::tick(1000,function() use($serv,$worker_id){
            $this->tickHandle($serv , $worker_id);
        });
    }

    public function message(Swoole\WebSocket\Server $serv, $frame){

        $json=json_decode($frame->data,true);

        if($json['subscribe']==self::Subscribe_Echo){
            $this->subscribe(self::Subscribe_Echo,$serv->worker_id,$frame->fd,$json['id'],$json['platformname']);
            //echo "pfn :".$json['platformname'];
        }
        if($json['subscribe']==self::Subscribe_Kline){
            $this->subscribe(self::Subscribe_Kline,$serv->worker_id,$frame->fd,$json['pid'],'');

            if($json['type']==null){
                $type = "1";
            }else{
                $type = $json['type'];
            }
            $sql = 'SELECT * FROM tx_productinfo WHERE pid = :pid';
            $pdo_ = null;
            echo "platformname:".$json['platformname'];
            switch ($json['platformname']){
                case 'bitbox':
                    $pdo_ = new PDO("mysql:host=futuresnew.cwd70uyoqwnq.ap-southeast-1.rds.amazonaws.com;dbname=zb", "root", "6w0addsp2seo3uq77v0h");
                    $pdo_->query("set names utf8;");
                    break;
                default:
                    $pdo_ = new PDO("mysql:host=futuresnew.cwd70uyoqwnq.ap-southeast-1.rds.amazonaws.com;dbname=futures", "root", "6w0addsp2seo3uq77v0h");
                    $pdo_->query("set names utf8;");
                    break;
            }

            $stmt = $pdo_->prepare($sql);
            $stmt->bindParam (":pid", $json['pid']);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $protime = mb_split(",",$res['protime']);
            $proscale = mb_split(",",$res['proscale']);

            for($i=0;$i<count($protime);$i++){
              $protime[$i] = $protime[$i] * 60;
            }

            $productinfo = array('protime' => $protime,'proscale' => $proscale);
            echo "pid: ".$json['pid']."timetype".$json['timetype']."type:".$type."\n";
            if($type == "1"){
                if($json['pid']!="" || $json['timetype'] !=""){
                    switch ($json['timetype']){
                        case '1M':
                            $res_arr1 = $this->get1minData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '5M':
                            $res_arr1 = $this->get5minData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '15M':
                            $res_arr1 = $this->get15minData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '30M':
                            $res_arr1 = $this->get30minData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '1H':
                            $res_arr1 = $this->get1hourData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '1D':
                            $res_arr1 = $this->get1dayData();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                    }
                }
            }else{

                if($json['pid']!="" || $json['timetype'] !=""){
                    switch ($json['timetype']){
                        case '1M':
                            $res_arr1 = $this->get1minData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '5M':
                            $res_arr1 = $this->get5minData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '15M':
                            $res_arr1 = $this->get15minData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '30M':
                            $res_arr1 = $this->get30minData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '1H':
                            $res_arr1 = $this->get1hourData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                        case '1D':
                            $res_arr1 = $this->get1dayData_2();
                            $res_arr= array('type'=>"Kline",'min'=>$res_arr1[$json['pid']],'product'=>$productinfo);
                            break;
                    }
                }
            }





            $serv->push($frame->fd,json_encode($res_arr));
        }
    }

    public function open(Swoole\WebSocket\Server $serv, $request){
        $this->addUser($serv->worker_id,$request->fd);
        //$this->update();
    }



    public function close(Swoole\WebSocket\Server $serv, $fd , $uid,$pfn){
       $this->remUser($serv->worker_id,$fd);
       $this->unSubscribe(self::Subscribe_Echo,$serv->worker_id,$fd,$uid,$pfn);
        $this->unSubscribe(self::Subscribe_Kline,$serv->worker_id,$fd,$uid);
    }

    public function start(){
        $this->_server->start();
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
}

$webSocketServer=new WebSocketServer1();
$webSocketServer->start();
