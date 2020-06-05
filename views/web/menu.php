<div class="page-wrap d-flex align-items-start">
    <div class="sidemenu">
        <div class="side__member d-block d-lg-none mx-auto">
            <div class="side__member__name d-flex align-items-center justify-content-center">
                <div class="pic mr-2"><img src="/images/icons/icon-member.svg" alt=""></div>
                <div class="name mt-1"><?= $userinfo->username;?></div>
            </div>
            <div class="balance d-flex flex-wrap justify-content-center align-items-center">
                <div class="text">余额</div>
                <div class="number" id="user_money"><?= $userinfo->usermoney;?></div>
                <div class="text">元</div>
            </div>
            <a class="btn__deposit pointer" href="<?php  echo yii\helpers\Url::to(['web/member/deposit']) ?>"><span class="icon__deposit fas fa-plus"></span><span>充值</span></a>
        </div>
        <nav class="mainnav">
            <div class="mainnav__item mainnav__item"><a
                    class="mainnav__link mainnav__link--current d-flex align-items-center justify-content-center d-lg-block text-center"
                    href="<?php  echo yii\helpers\Url::to(['web/index/index']) ?>"><img class="mainnav__icon" src="/images/icons/icon-chart.svg" alt=""><img
                        class="mainnav__icon mainnav__icon--hover" src="/images/icons/icon-chart-hover.svg"
                        alt="">
                    <div class="text">交易首页</div>
                </a></div>
            <div class="mainnav__item"><a
                    class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                    href="https://ssl.pop800.com/chat/685907"><img class="mainnav__icon" src="/images/icons/icon-customer-center.svg"
                        alt=""><img class="mainnav__icon mainnav__icon--hover"
                        src="/images/icons/icon-customer-center-hover.svg" alt="">
                    <div class="text">客服中心</div>
                </a></div>
            <div class="mainnav__item"><a
                    class="mainnav__link d-flex align-items-center justify-content-center d-lg-block text-center"
                    href="<?php  echo yii\helpers\Url::to(['web/member/index']) ?>"><img class="mainnav__icon" src="/images/icons/icon-user.svg"
                        alt=""><img class="mainnav__icon mainnav__icon--hover"
                        src="/images/icons/icon-user-hover.svg" alt="">
                    <div class="text">会员中心</div>
                </a></div>
        </nav>
    </div>
