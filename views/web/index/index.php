<?php
$session = Yii::$app->session;
$uid = $session['id'];
if($uid == null){
    unset($session['id']);
    header("Location:https://zb.objkss.cc/index.php?r=web/login/login");
}
set_include_path("/data/htdocs/zb/views/");
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8" />

    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="style/reset.css" />
    <link rel="stylesheet" href="style/all.css" />
    <link rel="stylesheet" href="style/animate.css" />
    <script src="js/axios.js"></script>
    <script src="js/lightweight-charts.standalone.production.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>

<body>
<!-- 開頭動畫 -->
<div class="anime">
    <div class="a">
        <style>
            .anime {
                display: flex;
                position: relative;
                z-index: 1000;

                align-items: center;
                height: 100%;
                background-image: linear-gradient(
                        0deg,
                        rgba(220, 231, 245, 0.8),
                        rgba(255, 255, 255, 0.8),
                        rgba(220, 231, 245, 0.8)
                ),
                url(../img/dash.svg),
                linear-gradient(
                        0deg,
                        rgba(220, 231, 245, 1),
                        rgba(255, 255, 255, 1),
                        rgba(220, 231, 245, 1)
                );
                background-size: cover;
            }
            .a {
                position: absolute;
                display: flex;
                left: 5%;
                align-items: center;
                animation: an 1s 1s linear forwards;
                width: 100px;
                /* height: 300px; */
            }
            .b {
                width: 150px;
            }
            .cc {
                width: 100px;
            }
            @keyframes an {
                0% {
                    position: absolute;
                    left: 5%;
                    transform: translateX(0%);
                }
                100% {
                    position: absolute;

                    left: 50%;
                    transform: translateX(-50%);
                }
            }
            @-webkit-keyframes an {
                0% {
                    left: 5%;
                    -webkit-transform: translateX(0%);
                    transform: translateX(0%);
                }
                100% {
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    transform: translateX(-50%);
                }
            }
        </style>
        <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0"
                y="0"
                class="aa"
                height="100px"
                viewBox="0 0 300 289"
                style="fill:#122e8a"
        >
            <g>
                <path
                        d="M203.75,70.37,144.7,36.24a20.59,20.59,0,0,1-9.55,5.51V110a20.64,20.64,0,0,1,14.71,25.49l59,34.13a20.6,20.6,0,0,1,9.55-5.52V95.86a20.64,20.64,0,0,1-14.71-25.49Zm25,25.49v68.28a20.62,20.62,0,1,1-19.85,34.41l-59,34.13a20.61,20.61,0,1,1-39.72,0l-59-34.13a20.61,20.61,0,1,1-19.85-34.41V95.86A20.62,20.62,0,1,1,51.09,61.45l59.05-34.13a20.61,20.61,0,1,1,39.72,0l59,34.13a20.61,20.61,0,1,1,19.85,34.41Zm-25,93.77a20.73,20.73,0,0,1,0-11L144.7,144.45a20.62,20.62,0,0,1-29.4,0l-59,34.13a20.73,20.73,0,0,1,0,11l59.05,34.13a20.62,20.62,0,0,1,29.4,0Zm-93.61-54.1A20.64,20.64,0,0,1,124.85,110V41.75a20.59,20.59,0,0,1-9.55-5.51l-59,34.13A20.64,20.64,0,0,1,41.54,95.86v68.28a20.6,20.6,0,0,1,9.55,5.52Z"
                />
                <animateTransform
                        begin="0.75s"
                        dur="1.5s"
                        attributeName="transform"
                        repeatCount="2"
                        type="rotate"
                        values="120,130,130;120,130,130;180,130,130;180,130,130;240,130,130;240,130,130;360,130,130"
                />
            </g>
        </svg>
        <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bounceOut"
                height="100px"
                x="0"
                y="0"
                viewBox="0 0 200 200"
        >
            <style>
                .bounceOut {
                    -webkit-animation: bounceOut 0.75s forwards;
                    animation: bounceOut 0.75s forwards;
                }
                @-webkit-keyframes bounceOut {
                    20% {
                        -webkit-transform: scale3d(0.9, 0.9, 0.9);
                        transform: scale3d(0.9, 0.9, 0.9);
                    }
                    50%,
                    55% {
                        opacity: 1;
                        -webkit-transform: scale3d(1.1, 1.1, 1.1);
                        transform: scale3d(1.1, 1.1, 1.1);
                    }
                    to {
                        opacity: 0;
                        -webkit-transform: scale3d(0.3, 0.3, 0.3);
                        transform: scale3d(0.3, 0.3, 0.3);
                    }
                }
                @keyframes bounceOut {
                    20% {
                        -webkit-transform: scale3d(0.9, 0.9, 0.9);
                        transform: scale3d(0.9, 0.9, 0.9);
                    }
                    50%,
                    55% {
                        opacity: 1;
                        -webkit-transform: scale3d(1.1, 1.1, 1.1);
                        transform: scale3d(1.1, 1.1, 1.1);
                    }
                    to {
                        opacity: 0;
                        -webkit-transform: scale3d(0.3, 0.3, 0.3);
                        transform: scale3d(0.3, 0.3, 0.3);
                    }
                }
            </style>
            <g id="box" fill="#122e8a">
                <path
                        d="M7.54,110.06A1.11,1.11,0,0,1,6.43,109V13.36a1.11,1.11,0,0,1,1.11-1.11l34.71,0c11.48,0,28.38,6.06,28.38,23.9,0,12.85-5,17.51-10.56,21.68,10.56,3.34,18.62,7.78,18.62,25.57,0,14.74-11.39,26.69-29.74,26.69ZM29.77,67.53a1.11,1.11,0,0,0-1.11,1.11V91.16a1.11,1.11,0,0,0,1.11,1.11c22.52,0,26.69-2.22,26.69-12.23S52.29,67.53,29.77,67.53ZM28.66,31.12V48.63a1.11,1.11,0,0,0,1.11,1.11c17.79,0,20.85-3.61,20.85-10S49.23,30,30.05,30h-.28A1.11,1.11,0,0,0,28.66,31.12Zm82,78.94h-20A1.11,1.11,0,0,1,89.53,109V41.68a1.11,1.11,0,0,1,1.11-1.11h20a1.12,1.12,0,0,1,1.12,1.11V109A1.12,1.12,0,0,1,110.65,110.06Zm-10-76.16h-.28C93.3,33.9,88.7,28.55,88.7,22c0-6.76,4.75-11.95,12-11.95s11.8,5.19,11.95,12C112.6,28.55,108,33.9,100.65,33.9Zm46.41,10.3a28.16,28.16,0,0,1,15.85-5c24.12,0,34.18,16.18,34.18,36.13S187,111.45,162.91,111.45a28.24,28.24,0,0,1-15.85-5h0l-5.85,3.46a1.13,1.13,0,0,1-.56.16H125.94a1.11,1.11,0,0,1-1.11-1.11V12.78a1.11,1.11,0,0,1,1.11-1.11h20a1.1,1.1,0,0,1,1.11,1.11Zm0,26.67v9.45a9.65,9.65,0,0,0,.56,3.61c1.46,5.44,6.89,9.73,13.62,9.73,10.19,0,16.4-6.7,16.4-18.35C177.64,65,172.36,57,161.24,57c-6.26,0-12.16,4.15-13.62,10A12.16,12.16,0,0,0,147.06,70.87ZM311.33,58.14l12.23-17.57h23.9L323.28,75.31l24.18,34.75h-23.9L311.33,92.49,299.1,110.06H275.19l24.19-34.75L275.19,40.57H299.1Z"
                />
                <g id="b" fill="#ee7730">
                    <path
                            d="M241.83,64.24l-2,7.94c2.24.56,9.16,2.85,10.28-1.65C251.3,65.85,244.07,64.8,241.83,64.24Z"
                    />
                    <path
                            d="M238.85,76.19,236.66,85c2.7.67,11,3.34,12.24-1.6C250.19,78.2,241.54,76.86,238.85,76.19Z"
                    />
                    <path
                            d="M241,39.18a36.14,36.14,0,1,0,36.13,36.13A36.13,36.13,0,0,0,241,39.18Zm17,31.43c-.52,3.53-2.48,5.23-5.08,5.83,3.57,1.86,5.39,4.71,3.66,9.65-2.15,6.13-7.25,6.65-14,5.37l-1.65,6.59-4-1,1.62-6.51c-1-.25-2.08-.52-3.17-.82l-1.63,6.54-4-1,1.65-6.61-2.84-.73-5.17-1.29,2-4.55s2.93.78,2.89.72a1.44,1.44,0,0,0,1.82-.95l2.6-10.42.42.1-.41-.13L234.56,64a2.13,2.13,0,0,0-1.86-2.32c.06,0-2.89-.72-2.89-.72l1.06-4.24,5.49,1.37v0l2.54.59,1.63-6.53,4,1-1.6,6.41c1.07.24,2.14.49,3.19.75l1.58-6.36,4,1L250,61.46C255,63.19,258.71,65.78,258,70.61Z"
                    />
                </g>
            </g>
        </svg>
    </div>
    <div
            style="width: 90%;
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0.8;
        "
    >
        <img src="img/cards.svg" alt="">
    </div>
</div>
<div class="buyblurMask"></div>
<div class="blurMask"></div>


<?php
if($userinfo->errstatus == "1"){
echo "<div class=\"index_wrapper\">
    <div class=\"index_wrapper_content\">
        <div class=\"index_wrapper_prompt\">
            <img style=\"height:300px;\" src=\" img/floor_index.svg\" alt=\"\">

            <div class=\"index_prompt_text\">
                <span class=\"index_prompt_title\">提示</span>
                <img style=\"width:40%\" src=\"img/abash_index.svg\" alt=\"\">
                <span class=\"index_prompt_message\">".$userinfo->errmsg."</span>
                <!--                <a href=\"https://www.google.com/\" class=\"btn index_prompt_btn\" >点击联系客服</a>-->
                <a href=\"javascript::\" class=\"btn index_prompt_btn\" >确认</a>
            </div>
        </div>
    </div>
</div>";
}else if($userinfo->errstatus == "2"){
echo "<div class=\"index_wrapper\">
    <div class=\"index_wrapper_content\">
        <div class=\"index_wrapper_prompt\">
            <img style=\"height:300px;\" src=\" img/floor_index.svg\" alt=\"\">

            <div class=\"index_prompt_text\">
                <span class=\"index_prompt_title\">警告</span>
                <img style=\"width:40%\" src=\"img/xx_index.svg\" alt=\"\">
                <span class=\"index_prompt_message\">".$userinfo->errmsg."</span>
                <!--                <a href=\"https://www.google.com/\" class=\"btn index_prompt_btn\" >点击联系客服</a>-->
                <a href=\"".$pop."\" class=\"btn index_prompt_btn\" >点击联系客服</a>
            </div>
        </div>
    </div>
</div>";
}
?>


<header>
    <!-- 導覽列 -->
    <nav class="mainNav">
        <div class="marketSelectMenuButton">
            <img src="img/personal.svg" alt="" />
        </div>
        <a href="<?php  echo yii\helpers\Url::to(['web/index/index1']) ?>">
            <img class="mainLogo" src="img/logo/bbx_logo_fff.svg" alt="" />
        </a>
        <div class="userCenterMenuButton">
            <img src="img/leftnav.svg" alt="" />
        </div>
    </nav>
</header>
<!-- 產品現價 -->
<div class="wrapper">
    <div class="priceSummary">
        <a class="btn">
            <div class=" priceSummary_now">

            </div>

            <div class="priceSummary__category">
                <h3 class="priceSummary__category__title price_text">最高价</h3>
                <span class="priceSummary__category__price price_num"></span>
            </div>
            <div class="priceSummary__category">
                <h3 class="priceSummary__category__title price_text">最低价</h3>
                <span class="priceSummary__category__price price_num"
                ></span
                >
            </div>
            <div class="priceSummary__category priceSummary_now">
                <h3 class="priceSummary__category__title priceSummary_now price_text">现价</h3>
                <span class="priceSummary__category__price price_num_now"
                ></span
                >
            </div>
            <div class="priceSummary__market">
                <img src="img/arrow.svg" alt="" />
            </div>
        </a>
    </div>
    <!-- 商品交易 -->
    <div class="marketModel">
        <div class="market_wrapper">
            <div class="market_content">
                <!-- <div class="market_buttons">
                <a href="javascript:;" class="btn active">全部</a>
                <a href="javascript:;" class="btn withIcon">
                  <img src="img/Solidstars.svg" alt="" />
                  最爱</a>
              </div> -->
                <div class="table">
                    <div class="thead">
                        <div class="th">
                            <span>币种</span>
                        </div>
                        <div class="th">
                            <span>最高价</span>
                        </div>
                        <div class="th">
                            <span>最低价</span>
                        </div>
                        <div class="th">
                            <span>现价</span>
                        </div>
                    </div>
                    <div class="price_wrapper">
                        <div class="tbody">

                            <?php

                            for($i=0;$i<count($productinfo);$i++){
                                echo "<div class=\"tr\" data-market=\"".$productinfo[$i]->pid."\">
                                <!-- <div class=\"td\">
                                <img src=\"img/Hollowstars.svg\" alt=\"\">
                              </div> -->
                                <div class=\"td_btc td \">
                                    <div class=\"td_flex\">

                                        <span>".$productinfo[$i]->ptitle."</span>
                                    </div>
                                </div>

                                <div class=\"td\">
                                    <span></span>
                                </div>

                                <div class=\"td\">
                                    <span></span>
                                </div>

                                <div class=\"td td_currentprice\">
                                    <span></span>
                                </div>
                            </div>";
                            }
                            ?>


                        </div>
                        <!-- <a class="market_nextPageButton triangle "></a> -->
                    </div>
                </div>
            </div>
            <div class="market_confirmButtons">
                <button href="javascript:;" class="market_confirmButtons_close">
                    关闭
                </button>
            </div>
        </div>
    </div>

    <main>
        <!-- 跑馬燈 -->
        <div class="newsTicker">
            <ul>
                <li>
                    <?php echo $announcement;?>
                </li>

            </ul>
        </div>
        <!-- 曲線直線控制按鈕 -->
        <div class="chartWrapper">
            <div class="controlButtons">
                <div class="controlButtons_chartChangePanel">
                    <a class="btn chartChanger active" data-chartSeries="candleSeries">
                        <img src="img/beeline.svg" alt="" />
                    </a>
                    <a class="btn chartChanger " data-chartSeries="lineSeries">
                        <img src="img/curve.svg" alt="" />
                    </a>

                </div>
                <div class="controlButtons_period dropdown ">
                  <a
                          href="javascript:;"
                          class="dropdown-toggle btn"
                          data-toggle="dropdown"
                          style="height: 20px"
                  >
                      <span> 1M </span>
                      <img    style="height: 20px"
                          src="img/arrow.svg" alt="" />
                  </a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li><a href="javascript:;" data-period="1S">1S</a></li>
                        <li><a href="javascript:;">1M</a></li>
                        <li><a href="javascript:;">5M</a></li>
                        <li><a href="javascript:;">15M</a></li>
                        <li><a href="javascript:;">30M</a></li>
                        <li><a href="javascript:;">1H</a></li>
                        <li><a href="javascript:;">1D</a></li>
                    </ul>
                </div>
            </div>
            <!-- K線 -->
            <div id="chartView"></div>
        </div>
    </main>

    <!-- 買賣確認視窗 -->
    <!-- <div class="finalConfirmModel">
    <div class="finalConfirmModel__wrapper">
      <div class="finalConfirmModel__header">
        <img src="img/personal.svg" alt="" />
        <div>使用者KK</div>
      </div>
      <div class="finalConfirmModel__balance">
        <div>余额</div>
        <div>888,888,888.00</div>
        <div>元</div>
      </div>
      <div class="finalConfirmModel__transitionDetail">
        <div class="finalConfirmModel__transitionDetail__market">
          <h2>比特币</h2>
        </div>
        <a href="javascript:;" class="btn">
          买涨1000
        </a>
        <div class="finalConfirmModel__transitionDetail__period">
          30s
        </div>
      </div>

      <div class="reminder">
        <label for="reminder">
          <svg class="checkIcon" viewBox="0 0 23.5 23.66">
            <style>
              .checkIcon {
                width: 40px;
                margin-right: 0.5rem;
              }

              .checkedBtn {
                stroke: white;
                stroke-width: 1px;
              }

              .checkMark {
                opacity: 0;
                stroke-dasharray: 0, 30;
                fill: none;
                stroke: #4484bd;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 3px;
              }

              .checked {
                animation: lineMove 1s forwards;
              }

              @keyframes lineMove {
                0% {
                  opacity: 1;
                  stroke-dasharray: 0, 30;
                }

                100% {
                  opacity: 1;
                  stroke-dasharray: 30, 30;
                }
              }

              .unchecked {
                animation: Move 1s forwards;
              }

              @keyframes Move {
                0% {
                  opacity: 1;
                  stroke-dasharray: 30, 30;
                }

                99% {
                  opacity: 1;
                  stroke-dasharray: 0, 30;
                }

                100% {
                  opacity: 0;
                  stroke-dasharray: 0, 30;
                }
              }
            </style>
            <circle class="checkedBtn" cx="11.08" cy="12.9" r="6.91" />
            <polyline class="checkMark" points="6.87 10.58 11.09 15.01 20.96 4.06" />
          </svg>
          <input type="checkbox" id="reminder" name="reminder" /> </label>不再提醒
      </div>
      <div class="finalConfirmModel__confirmButtons">
        <a href="javascript:;" class="btn finalConfirmModel__confirmButtons_cancel">取消</a>
        <a href="javascript:;" class="btn finalConfirmModel__confirmButtons_submit">确定</a>
      </div>
    </div>
  </div>
   -->
</div>
<!-- 右側選單 -->
<?php include("leftdeposit.php"); ?>

<!-- 左側選單 -->
<?php include("rightdeposit.php"); ?>

<!-- 買漲買跌標籤 -->
<div class="transitionButtons">
    <a data-buy="0" class="btn transitionButtons_down">
        <img src="img/up.svg" alt="" />
        买涨
    </a>
    <a data-buy="1" class="btn transitionButtons_up ">
        <img src="img/down.svg" alt="" />
        买跌
    </a>
</div>
<div class="tradingModel ">
    <div class="tradingModel__market">
        <div class="tradingModel__market_name">
            <span>aaa</span>
        </div>
        <span>现价</span>
        <div class="merchandise_price">11863.475</div>
    </div>
    <div class="tradingModel__option">
        <a class="btn" data-sec="0">
            <span class="tradingModel__option_time">30s</span>
            <span class="tradingModel__option_odds">收益60%</span>
        </a>
        <a class="btn" data-sec="1">
            <span class="tradingModel__option_time">60s</span>
            <span class="tradingModel__option_odds">收益70%</span>
        </a>
        <a class="btn" data-sec="2">
            <span class="tradingModel__option_time">90s</span>
            <span class="tradingModel__option_odds">收益80%</span>
        </a>
        <a class="btn" data-sec="3">
            <span class="tradingModel__option_time">180s</span>
            <span class="tradingModel__option_odds">收益90%</span>
        </a>
    </div>

    <div class="tradingModel__moneyOption">
        <h4>投资金额</h4>
        <div class="tradingModel__moneyOption_options">
            <a class="btn">¥100</a>
            <a class="btn">¥500</a>
            <a class="btn">¥600</a>
            <a class="btn">¥700</a>
            <a class="btn">¥800</a>
            <a class="btn">¥900</a>
            <a class="btn">¥1000</a>
            <a class="btn">¥2000</a>
            <a class="btn">¥5000</a>
            <a class="btn">¥10000</a>
        </div>
        <input min="100" type="number" placeholder="其他金额" />
        <div class="tradingModel__moneyOption__balance">
            <span>余额：¥888,888,888</span>
            <span>手续费：<?php echo $poundage;?>%</span>
        </div>
    </div>
    <div class="tradingModel__confirm">
        <a class=" disabled btn">买跌</a>
        <div class="tradingModel__confirm__expectation">
            <span>预期收益：¥0.00</span>
        </div>
    </div>
</div>
<script >



    var uid = <?php echo $uid?>;
    <?php
    if($userinfo->errstatus == "1"){
        echo "(function () {
        document.querySelector('.index_prompt_text a.btn').addEventListener('click', e => {
            fetch('https://zb.objkss.cc/index.php?r=web/webapi/cancelstatus&uid=".$uid."')
                .then(function(response) {
                    // 處理 response
                }).catch(function(err) {
                // 錯誤處理
            });
            document.querySelector('.index_wrapper').classList.add('hide')
        });
    })();";
    }else if($userinfo->errstatus == "2"){
        echo "(function () {
        document.querySelector('.index_prompt_text a.btn').addEventListener('click', e => {
            document.querySelector('.index_wrapper').classList.add('hide')
        });
    })();";
    }
    ?>
</script>

<style>
    .index_wrapper{
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 49;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .index_wrapper.hide{
        display:none;
    }
    .index_wrapper_content{
        width:100%;
        height:100%;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .index_wrapper_prompt{
        position:relative;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .index_prompt_text{
        position:absolute;
        top:0;
        width:100%;
        height: 100%;
        display:flex;
        flex-direction: column;
        align-items: center;
    }
    .index_prompt_title{
        font-size:2rem;
        margin:20px 0;
    }
    .index_prompt_message{
        font-size:1.2rem;
        margin:10px 0;
        text-align: center;

        line-height:1.5rem;
    }
    .index_prompt_btn{
        position:absolute;
        bottom:0;
        width:100%;
        height:40px;
        color:#fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.2rem;
        background-image:url(img/money_index.svg),linear-gradient(to right, #f08218,  #f08218);
    }
</style>

<script src="js/entryAnimate.js"></script>
<script src="js/buttonTrigger.js"></script>
<script src="js/chart.js"></script>
</body>
</html>
