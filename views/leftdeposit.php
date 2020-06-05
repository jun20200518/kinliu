<div class="marketSelectMenu">
    <nav>
        <img class="marketSelectMenuButton" src="img/personal.svg" alt="" />
    </nav>
    <div class="wrapper">
        <div class="marketSelectMenu__content">
            <div class="leftlogo">
            <img style="width: : 45px; margin-bottom: 20px" src="img/logo/bbx_logo_blue.svg"/>
            </div>
            <div class="userCenterMenu__header" style="width: 100%;justify-content: space-between;align-items: flex-end;">
                <div style="display: flex; align-items: flex-end;">
                    <img style="width: 40px; margin-right: 10px" src="img/personal.svg" alt="" />
                    <div><?= $userinfo->username;?></div>
                </div>
                <div class="credit" style="font-size: 0.7rem; color: #122e8a;">
                    <span>信用评分</span>
                    <span><?= $userinfo->fraction;?></span>
                </div>
            </div>


            <div class="userCenterMenu__balance" style="width: 100%">
                <div>¥<?= $userinfo->usermoney;?></div>

            </div>
            <div class="userCenterMenu__buttons">

                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/member/deposit']) ?>" class="btn userCenterMenu__buttons__chargeButton">
                        <img src="img/recharge.svg" alt="" />
                        <div>帐户充值</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/member/withdraw']) ?>" class="btn userCenterMenu__buttons__withdrawButton">
                        <img src="img/account.svg" alt="" />
                        <div>帐户提现</div>
                    </a>
                </div>


                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/index/index']) ?>" class="btn">
                        <img src="img/home.svg" alt="" />
                        <div>交易首页</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="<?php echo $pop ?>" class="btn">
                        <img src="img/service.svg" alt="" />
                        <div>线上客服</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/member/withdrawrecord']) ?>" class="btn">
                        <img src="img/records.svg" alt="" />
                        <div>提现记录</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/member/fundrecord']) ?>" class="btn">
                        <img src="img/teaching.svg" alt="" />
                        <div>资金流水</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="<?php  echo yii\helpers\Url::to(['web/member/personalinfo']) ?>" class="btn">
                        <img src="img/information.svg" alt="" />
                        <div>修改密码</div>
                    </a>
                </div>

                <!-- <div class="btn_shadow">
                    <a href="javascript:;" class="btn">
                        <img src="img/funds.svg" alt="" />
                        <div>储值教学</div>
                    </a>
                </div>
                <div class="btn_shadow">
                    <a href="javascript:;" class="btn">
                        <img src="img/rule.svg" alt="" />
                        <div>交易规则</div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <a href="<?php  echo yii\helpers\Url::to(['web/member/logout']) ?>" class="btn userCenterMenu__logoutButton">
        <img src="img/Signout.svg" alt="" />
        <div>帐户登出</div>
    </a>
</div>
