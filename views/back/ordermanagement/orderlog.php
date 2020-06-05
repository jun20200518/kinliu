<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php

set_include_path("/data/htdocs/zb/views/");

?>

<head>
    <?php include("header-title.php"); ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div id="right-panel" class="right-panel">
        <?php include("header.php"); ?>
        <div class="content mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>平仓日志</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="get">
                                <div class="row">

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">用户名称</span>
                                            <input type="text" name="orderid" class="form-control" value=""
                                                placeholder="暱稱/姓名/手機號/編號">
                                        </div>
                                    </div>



                                    <div class="col-lg-6 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">平仓時間</span>
                                            <input type="text" id="datetimepicker" class="form-control"
                                                placeholder="點擊選擇時間" name="starttime" value="">
                                            <span class="input-group-addon" id="basic-addon1">至</span>
                                            <input type="text" id="datetimepicker_end" class="form-control"
                                                placeholder="點擊選擇時間" name="endtime" value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mar-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">盈亏</span>
                                            <select name="ostyle" id="" class="selectpicker show-tick form-control">
                                                <option value="">默認不選</option>
                                                <option value="1">盈利</option>
                                                <option value="2">亏损</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                正常搜索
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                搜索重复平仓订单
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary">搜索全部</button>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 table_scroll_bar">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">平仓记录</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table-export_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table-export"
                                                class="table table-striped table-bordered dataTable no-footer"
                                                role="grid" aria-describedby="bootstrap-data-table-export_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending">编号
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending">
                                                            用户ID</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending">订单ID
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">增加金额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">增加积分
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">平仓后馀额
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="bootstrap-data-table-export" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Salary: activate to sort column ascending">时间
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  <?php
                                                    for($i=0;$i<count($data);$i++)
                                                    {
                                                      echo "<tr role=\"row\" class=\"od\">";
                                                      echo "<td data-th=\"编号\">".$data[$i]->id."</td>";
                                                      echo "<td data-th=\"用户ID\">".$data[$i]->uid."</td>";
                                                      echo "<td data-th=\"订单ID\">".$data[$i]->oid."</td>";
                                                      echo "<td data-th=\"增加金额\">".$data[$i]->addprice."</td>";
                                                      echo "<td data-th=\"增加积分\">".$data[$i]->addpoint."</td>";
                                                      echo "<td data-th=\"平仓后馀额\">".$data[$i]->user_money."</td>";
                                                      echo "<td data-th=\"时间\">".date("Y-m-d H:i:s",$data[$i]->time)."</td>";
                                                      echo "</tr>";
                                                    }


                                                  ?>

                                                    <!-- <tr role="row" class="odd">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                ß        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td data-th="编号">183</td>
                                                        <td data-th="用户ID">85</td>
                                                        <td data-th="订单ID">3471</td>
                                                        <td data-th="增加金额">0.00</td>
                                                        <td data-th="增加积分">0.00</td>
                                                        <td data-th="平仓后馀额">11050.40</td>
                                                        <td data-th="时间">2019-09-24 15:09:24</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="row mt-3">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="bootstrap-data-table-export_info"
                                                role="status" aria-live="polite">显示页面 1 到 5 总共 57 页s</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="bootstrap-data-table-export_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="bootstrap-data-table-export_previous"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="0"
                                                            tabindex="0" class="page-link">上一页</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="2"
                                                            tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="3"
                                                            tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="4"
                                                            tabindex="0" class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="5"
                                                            tabindex="0" class="page-link">5</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="6"
                                                            tabindex="0" class="page-link">6</a></li>
                                                    <li class="paginate_button page-item next"
                                                        id="bootstrap-data-table-export_next"><a href="#"
                                                            aria-controls="bootstrap-data-table-export" data-dt-idx="7"
                                                            tabindex="0" class="page-link">下一页</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div>
    <?php include("footer-js.php"); ?>
</body>

</html>
