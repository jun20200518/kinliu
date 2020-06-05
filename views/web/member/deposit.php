<!DOCTYPE html>
<html lang="en">

<?php
set_include_path("/data/htdocs/zb/views/");
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="style/reset.css" />
  <link rel="stylesheet" href="style/all.css" />
  <link rel="stylesheet" href="style/accout.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>

  <div class="blurMask"></div>
  <header>
    <!-- 导览列 -->
    <nav class="mainNav">
      <div class="marketSelectMenuButton">
        <img src="img/personal.svg" alt="" />
      </div>
      <a href="<?php  echo yii\helpers\Url::to(['web/index/index1']) ?>">
        <img class="mainLogo"  src="img/logo/bbx_logo_fff.svg" alt="" />
      </a>
      <div >
        <img src="img/none.svg" alt="" />
      </div>
    </nav>
  </header>
  <!-- 表单 -->
  <div class="wrapper">
    <div id="main">
      <div class="user">
        <img src="img/personal.svg">
        <span class="font2"><?= $userinfo->username;?></span class="font2">
        <div class="money">
          <span>¥<?=$userinfo->usermoney;?></span>

        </div>
      </div>

        <div class="rmb">
            <span class="font3">充值通道</span>
            <div class="rmbbtn">
                <a class="btn"><img style="width:100%; height:100%;" src="/img/wechat_b.svg" alt=""></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/alipay_b.svg" alt=""></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/upcash.svg"></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/yipay.svg"></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/wealth.svg"></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/paypal.svg"></a>
                <a class="btn"><img style="width:100%;height:100%;" src="/img/mastercard.svg" alt=""></a>
                <a class="btn" ><img style="width:100%;height:100%;" src="/img/visa.svg" alt=""></a>
            </div>
        </div>
        <div class="entermoney">
          <span class="font3">手动输入金额</span>
          <input type="number" id="input_number" placeholder="请输入充值金额">
        </div>
        <div class="gopay" >
            <button>前往支付</button>
        </div>

    </div>

      <!-- 左側選單 -->
      <?php include("leftdeposit.php"); ?>
      <!-- 右側選單 -->
      <?php include("rightdeposit.php"); ?>

  </div>

  <script src="js/buttonTrigger.js"></script>
  <div class="index_wrapper hide">
      <div class="index_wrapper_content">
          <div class="index_wrapper_prompt">
              <img style="height:300px;" src=" img/floor_index.svg" alt="">

              <div class="index_prompt_text">
                  <span class="index_prompt_title">客服</span>
                  <img style="width:40%" src="img/customer_service.svg" alt="">
                  <span class=\"index_prompt_message\"><?php echo $charge_title ?></span>
                  <!--                <a href=\"https://www.google.com/\" class=\"btn index_prompt_btn\" >点击联系客服</a>-->
                  <div style='display: flex; position:absolute;bottom:0;width: 100%'>
                      <a href="javascript::" class="btn index_prompt_btn" >取消</a>
                      <a href="<?php echo $pop ?>" class="btn index_prompt_btn" >点击联系客服</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

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
          width:50%;
          height:40px;
          color:#fff;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 1.2rem;
          background-image:url(img/money_index.svg),linear-gradient(to right, #f08218,  #f08218);
      }
  </style>
  <script >
      (function () {
          document.querySelector('.gopay button').addEventListener('click', e => {
              document.querySelector('.index_wrapper').classList.remove('hide')
          });
      })();

      (function () {
          document.querySelector('.index_prompt_text a.btn').addEventListener('click', e => {
              document.querySelector('.index_wrapper').classList.add('hide')
          });
      })();

  </script>


</body>

</html>
