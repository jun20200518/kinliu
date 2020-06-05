<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php  echo yii\helpers\Url::to(['admin/index/index']) ?>"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php  echo yii\helpers\Url::to(['admin/index/index']) ?>"> <i class="menu-icon fa fa-dashboard"></i>后台首页</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-user"></i>用户管理</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/usermanagement/userlist']) ?>">客户列表</a></li>
                        <!--                                                        <li><a href="--><?php // echo yii\helpers\Url::to(['admin/usermanagement/myteam']) ?><!--">我的团队</a></li>-->
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/usermanagement/userprice']) ?>">上分列表</a></li>
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/usermanagement/cash']) ?>">提现列表</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/usermanagement/userinfo']) ?><!--">资料审核</a></li>-->
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/usermanagement/chongzhi']) ?>">手动充值</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/usermanagement/xiafen']) ?><!--">手动下分</a></li>-->
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/usermanagement/updatebank']) ?><!--">银行资讯修改</a></li>-->
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-btc"></i>产品管理</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/productmanagement/productlist']) ?>">产品列表</a></li>
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/productmanagement/productcpategory']) ?>">产品分类</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/productmanagement/risk']) ?><!--">风控管里</a></li>-->
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/productmanagement/huishou']) ?>">产品回收站</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-clipboard"></i>订单管理</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/ordermanagement/orderlist']) ?>">交易流水</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/ordermanagement/orderlog']) ?><!--">平仓记录</a></li>-->
                    </ul>
                </li>
                <!--                    <li class="menu-item-has-children dropdown">-->
                <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"-->
                <!--                            aria-expanded="false"> <i class="menu-icon fa fa-user-md"></i>代理商管理</a>-->
                <!--                        <ul class="sub-menu children dropdown-menu">-->
                <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/agentmanagement/vipuseradd']) ?><!--">添加代理商</a></li>-->
                <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/agentmanagement/userlist']) ?><!--">代理商列表</a></li>-->
                <!--                        </ul>-->
                <!--                    </li>-->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-jpy"></i>报表管理</a>
                    <ul class="sub-menu children dropdown-menu">
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/reportmanagement/allot']) ?><!--">红利报表</a></li>-->
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/reportmanagement/yongjin']) ?><!--">佣金报表</a></li>-->
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/reportmanagement/pricelist']) ?>">资金报表</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/reportmanagement/myprice']) ?><!--">个人报表</a></li>-->
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-clipboard"></i>参数设置</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/parametersettings/basicsettings']) ?>">基本设置</a></li>
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/parametersettings/proportion']) ?>">参数设置</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>系统设置</a>
                    <ul class="sub-menu children dropdown-menu">
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/systemsettings/adminadd']) ?><!--">添加管理员</a></li>-->
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/systemsettings/adminlist']) ?><!--">管理员列表</a></li>-->
                        <li><a href="<?php  echo yii\helpers\Url::to(['admin/systemsettings/banks']) ?>">提现银行卡</a></li>
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/systemsettings/setwx']) ?><!--">微信设置</a></li>-->
                        <!--                            <li><a href="--><?php // echo yii\helpers\Url::to(['admin/systemsettings/dbbase']) ?><!--">数据备份</a></li>-->
                        <li><a href="http://111.68.15.243/img/guizhe.html">交易规则</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="<?php  echo yii\helpers\Url::to(['admin/index/exit']) ?>"> <i class="menu-icon fa fa-sign-out"></i>退出</a>
                </li>

            </ul>
        </div>
    </nav>
</aside>
