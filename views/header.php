<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<header id="header" class="header">
            <style>
                .txt{
                    width: 50%;
                    vertical-align: middle;
                    padding-left: 20px;
                }
                .withdraw{
                    width: 7%;
                    height: 7%;
                    align: left;
                }
            </style>


            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="https://zb.objkss.cc/index.php?r=admin%2Fusermanagement%2Fcash">
                            <button type="button" class="btn m-l-10 m-b-10">
                                <i class="fa fa-credit-card"></i>
                                <span style="height: 25px">提現申請</span>
                                <span style="border-radius: 50%;height:25px;width: 25px;display:inline-block;background-color: #ff0000;"><span id="withdraw_span" style="color:#ffffff; height: 10px;line-height: 10px;">0</span></span>
                            </button>
                        </a>
                    </div>
                </div>




            </div>

        </header>


        <script>
            function withdrawCount() {
                $.ajax({
                    url: "index.php?r=web%2Fapi%2Fwithdrawcount",   //存取Json的网址
                    // url: "http://objkss.cc/index.php?r=admin%2Fusermanagement%2Fcash",   //存取Json的网址

                    type: "get",
                    cache: false,
                    success: function (data) {
                        //console.log("數量:"+data);
                        document.getElementById("withdraw_span").innerHTML = "";
                        document.getElementById("withdraw_span").innerHTML = data;
                    }

                });
            }
            setInterval("withdrawCount()","1000");


        </script>