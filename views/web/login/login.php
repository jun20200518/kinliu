<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/axios.js"></script>
    <script src="js/script.js"></script>
</head>

<body >
<div id="header">
    <div class="logo">
        <img src="img/logo/bbx_logo_blue.svg" />
    </div>
</div>

<div id="main">
    <div id="tab1">
        <ul>
            <li>
                <a id="a1" href="#login" class="current" style="float: left;"
                >登入</a
                >
            </li>
            <li>
                <a id="a2" href="#registered">注册</a>
            </li>
            <li>
                <a id="a3" href="#forgetpw" style="float: right ;">忘记密码</a>
            </li>
        </ul>
        <div id="contents">
            <section id="login" class="content">
                <form style="margin-top:80px;">
                    <div class="frame">
                        <img src="img/phone.svg" />
                        <input
                                class="enter"
                                type="tel"
                                minlength="8"
                                maxlength="11"
                                name="account"
                                placeholder="请输入电话号码"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/pw.svg" />
                        <input
                                class="enter"
                                type="password"
                                name="password"
                                placeholder="请输入密码"
                                required
                        />
                    </div>
                    <button class="btn" type="submit">
                        <img src="img/login.svg" />登入
                    </button>
                </form>
            </section>

            <section id="registered" style="display: none;" class="content">
                <form>
                    <div class="frame">
                        <img src="img/entername.svg" />
                        <input
                                class="enter"
                                type="text"
                                name="name"
                                placeholder="请输入姓名"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/phone.svg" />
                        <input
                                class="enter"
                                name="phone"
                                type="tel"
                                minlength="8"
                                maxlength="11"
                                placeholder="请输入电话号码"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/pw.svg" />
                        <input
                                class="enter"
                                type="password"
                                name="password"
                                placeholder="请输入密码"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/pw.svg" />
                        <input
                                class="enter"
                                type="password"
                                name="repassword"
                                placeholder="再次确认密码"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/recommend.svg" />
                        <input
                                class="enter"
                                type="text"
                                name="recommend_code"
                                placeholder="推荐码(选填)"
                        />
                    </div>
                    <div class="get_verification">
                        <button class="recommend_btn">获取验证码 </button>
                        <div class="verification">

                            <input
                                    class="enter"
                                    type="text"
                                    name="verification_code"
                                    placeholder="请输入验证码"
                                    required
                            />

                        </div>
                    </div>
                    <button class="btn" type="submit">
                        <img src="img/submit.svg" />送出
                    </button>
                </form>
            </section>

            <section id="forgetpw" style="display: none;" class="content">
                <form style="margin-top:60px;">
                    <div class="frame">
                        <img src="img/phone.svg" />
                        <input
                                class="enter"
                                type="tel"
                                minlength="8"
                                maxlength="11"
                                name="phone"
                                placeholder="请输入电话号码"
                                required
                        />
                    </div>
                    <div class="get_verification">
                        <button class="recommend_btn" type="button">获取验证码 </button>
                        <div class="verification">

                            <input
                                    class="enter"
                                    type="text"
                                    name="verification_code"
                                    placeholder="请先输入验证码"
                                    required
                            />

                        </div>
                    </div>
                    <div class="frame">
                        <img src="img/pw.svg" />
                        <input
                                class="enter"
                                type="password"
                                name="password"
                                placeholder="请输入密码"
                                required
                        />
                    </div>
                    <div class="frame">
                        <img src="img/pw.svg" />
                        <input
                                class="enter"
                                type="password"
                                name="repassword"
                                placeholder="再次确认密码"
                                required
                        />
                    </div>


                    <button class="btn" type="submit">
                        <img src="img/submit.svg" />送出
                    </button>
                </form>
            </section>
        </div>
    </div>
</div>
<div id="footer"></div>

<script src="js/validation.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>
