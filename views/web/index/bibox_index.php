<?php
$session = Yii::$app->session;
$uid = $session['id'];
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
        <img class="cc" src="./img/bibox_lonind.svg" />
        <img class="b" src="./img/bibox_an.svg" />
    </div>
</div>
<div class="buyblurMask"></div>
<div class="blurMask"></div>

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
                比特币
            </div>

            <div class="priceSummary__category">
                <h3 class="priceSummary__category__title price_text">最高价</h3>
                <span class="priceSummary__category__price price_num">11971.0</span>
            </div>
            <div class="priceSummary__category">
                <h3 class="priceSummary__category__title price_text">最低价</h3>
                <span class="priceSummary__category__price price_num"
                >11689.31</span
                >
            </div>
            <div class="priceSummary__category priceSummary_now">
                <h3 class="priceSummary__category__title price_text">现价</h3>
                <span class="priceSummary__category__price price_num_now"
                >1863.475</span
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
                            <img src="img/arrow.svg" alt="" />
                        </div>
                        <div class="th">
                            <span>最高价</span>
                            <img src="img/arrow.svg" alt="" />
                        </div>
                        <div class="th">
                            <span>最低价</span>
                            <img src="img/arrow.svg" alt="" />
                        </div>
                        <div class="th">
                            <span>现价</span>
                            <img src="img/arrow.svg" alt="" />
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
                    <a class="btn chartChanger active" data-chartSeries="lineSeries">
                        <img src="img/curve.svg" alt="" />
                    </a>
                    <a class="btn chartChanger" data-chartSeries="candleSeries">
                        <img src="img/beeline.svg" alt="" />
                    </a>
                </div>
                <div class="controlButtons_period dropdown ">
                  <a
                          href="javascript:;"
                          class="dropdown-toggle btn"
                          data-toggle="dropdown"
                          style="height: 20px"
                  >
                      <span> 1S </span>
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
    var uid = <?php echo $uid?>
</script>

<script src="js/entryAnimate.js"></script>
<script src="js/buttonTrigger.js"></script>
<script src="js/chart.js"></script>
</body>
</html>
