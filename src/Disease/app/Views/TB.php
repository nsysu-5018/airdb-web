<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("basic/Head") ?>
    <?php echo view("basic/Cssload") ?>

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Top Bar Start -->
        <?php echo view("basic/Topbar") ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php echo view("basic/Leftbar") ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <!-- Start content -->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <h2>肺結核預測模型</h2>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">疾病模型</a></li>
                            <li class="breadcrumb-item active">肺結核預測模型</li>
                        </ol>
                    </div>
                    <div class="row" id="test1">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form id="Input_data_disease" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h2>輸入資料</h2>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">注意：</span>請確認是否輸入正確。
                                            </p>
                                            <div class="m-b-30">
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">地址</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="address" id="address" placeholder="高雄市鼓山區中山大學" id="example-text-input" required="required" >
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">病歷編號</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Disease_ID" id="Disease_ID" placeholder="1" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙回推天數</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="EMA_Days" id="EMA_Days" placeholder="30" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙基準日</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" name="Based_Day" id="Based_Day" id="example-text-input" required="required" >
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">年齡</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="Age" id="Age" placeholder="40" id="example-text-input" required="required" >
                                                    </div>
                                                </div>
<!--
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">\u76f8\u95dc\u75be\u75c5\u8cc7\u65995</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease5" id="Input_data_disease5" placeholder="5" id="example-text-input">
                                                    </div>
                                                </div>
-->

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">性別</label>
                                                    <div class="col-sm-10">
                                                    <select class="form-control" id="Sex">
                                                        <option selected>男</option>
                                                        <option>女</option>
                                                    </select>
                                                    </div>
                                                </div>
<!--
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">\u76f8\u95dc\u75be\u75c5\u8cc7\u65996</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease6" id="Input_data_disease6" placeholder="5" id="example-text-input">
                                                    </div>
                                                </div>
-->
                                                <br>

                                                <p style="font-size:20px;">相關疾病勾選</p>

                                                <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">提醒：</span>如無以下疾病，無須勾選。
                                                </p>
                                                <div id="inputCheckbox">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" id="butsave" class="btn btn-primary waves-effect waves-light">進行預測</button>
                                                <br>
                                                <p id="VideoInfo" style="font-size: 20px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div id="yoloresultText" class="card-body">
                                            <h2>預測結果</h2>
                                            <p id="epoch" style='font-size:50px; font-weight:bold;'></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div id="airresultText" class="card-body">
                                            <h2>空汙數值</h2>
                                            <div class="row mb-3">
                                                <label for="CO" class="col-sm-2 col-form-label col-form-label-lg">CO</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="CO" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="O3" class="col-sm-2 col-form-label col-form-label-lg">O3</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="O3" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="NO" class="col-sm-2 col-form-label col-form-label-lg">NO</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="NO" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="SO2" class="col-sm-2 col-form-label col-form-label-lg">SO2</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="SO2" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="NO2" class="col-sm-2 col-form-label col-form-label-lg">NO2</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="NO2" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="NOx" class="col-sm-2 col-form-label col-form-label-lg">NOx</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="NOx" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="PM2_5" class="col-sm-2 col-form-label col-form-label-lg">PM2.5</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="PM2_5" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="PM10" class="col-sm-2 col-form-label col-form-label-lg">PM10</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="PM10" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <?php echo view("basic/Footer") ?>
        </div>
        <!-- END wrapper -->

        <?php echo view("basic/Js") ?>

        <script type="text/javascript">
            getAllName("<?php echo base_url('TB/getAllName')?>", '#inputCheckbox');

            $('#Input_data_disease').on('submit', (even) => {
                even.preventDefault();

                address = $("#address").val().replaceAll(' ', '');
                Disease_ID = $("#Disease_ID").val().replaceAll(' ', '');
                EMA_Days = $("#EMA_Days").val();
                Based_Day = $("#Based_Day").val();
                Age = $("#Age").val();
                Sex = $("#Sex").val();
                if (Sex == "\u7537")
                {
                    Sex = 1;
                }
                else
                {
                    Sex = 0;
                }
                
                if(address == ''){
                    Swal.fire({
                        title: '錯誤',
                        text: '你沒有填寫「地址」',
                        icon: 'warning'
                    });
                    return;
                }
                else if(Disease_ID == ''){
                    Swal.fire({
                        title: '錯誤',
                        text: '你沒有填寫「病歷編號」',
                        icon: 'warning'
                    });
                    return;
                }
                else if(EMA_Days == ''){
                    Swal.fire({
                        title: '錯誤',
                        text: '你沒有填寫「空汙回推天數」',
                        icon: 'warning'
                    });
                    return;
                }
                else if(Based_Day == ''){
                    Swal.fire({
                        title: '錯誤',
                        text: '你沒有填寫「空汙基準日」',
                        icon: 'warning'
                    });
                    return;
                }
                else if(Age == ''){
                    Swal.fire({
                        title: '錯誤',
                        text: '你沒有填寫「年齡」',
                        icon: 'warning'
                    });
                    return;
                }

                $('#epoch').text('');
                $('#CO').val('');
                $('#O3').val('');
                $('#NO').val('');
                $('#SO2').val('');
                $('#NO2').val('');
                $('#NOx').val('');
                $('#PM2_5').val('');
                $('#PM10').val('');

                Swal.fire({
                    title: '模型運算中...',
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    didOpen: () => {
                        Swal.showLoading();

                        checkAllName("<?php echo base_url('TB/getAllName')?>", (selected_disease) => {
                            air_data = null;
                            $.ajax({
                                url: "<?php echo base_url('TB/FetchAQI') ?>",
                                method: "post",
                                dataType: "json",
                                headers: {
                                    '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
                                },
                                data: {
                                    addr: address,
                                    date: Based_Day, 
                                    period: EMA_Days,
                                },
                                success: (result) => {
                                    if (result['detail'])
                                    {
                                        $('#epoch').css('color', 'red');
                                        $('#epoch').text('ERROR!');
                                        Swal.fire({
                                            title: '錯誤',
                                            html: '讀取空污數據時發生錯誤<br/>錯誤訊息：' + result['detail'],
                                            icon: 'error'
                                        });
                                        return;
                                    }

                                    air_data = result;

                                    $('#CO').val(air_data["co"]);
                                    if (air_data["co"] >= 9.4)
                                    {
                                        $('#CO').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#CO').css('color', '#00DB00');
                                    }

                                    $('#O3').val(air_data["o3"]);
                                    if (air_data["o3"] >= 70)
                                    {
                                        $('#O3').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#O3').css('color', '#00DB00');
                                    }

                                    $('#NO').val(air_data["no"]);
                                    if (air_data["no"] >= 360)
                                    {
                                        $('#NO').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#NO').css('color', '#00DB00');
                                    }

                                    $('#SO2').val(air_data["so2"]);
                                    if (air_data["so2"] >= 75)
                                    {
                                        $('#SO2').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#SO2').css('color', '#00DB00');
                                    }

                                    $('#NO2').val(air_data["no2"]);
                                    if (air_data["no2"] >= 100)
                                    {
                                        $('#NO2').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#NO2').css('color', '#00DB00');
                                    }

                                    $('#NOx').val(air_data["nox"]);
                                    if (air_data["nox"] >= 360)
                                    {
                                        $('#NOx').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#NOx').css('color', '#00DB00');
                                    }

                                    $('#PM2_5').val(air_data["pm2.5"]);
                                    if (air_data["pm2.5"] >= 35.4)
                                    {
                                        $('#PM2_5').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#PM2_5').css('color', '#00DB00');
                                    }

                                    $('#PM10').val(air_data["pm10"]);
                                    if (air_data["pm10"] >= 100)
                                    {
                                        $('#PM10').css('color', 'red');
                                    }
                                    else
                                    {
                                        $('#PM10').css('color', '#00DB00');
                                    }

                                    ml_data = {
                                        "sex": Number(Sex),
                                        "age": Number(Age),
                                        "address": address,
                                        "id": Disease_ID,
                                        "date": Based_Day,
                                        "dis_list": selected_disease,
                                        "air_data": air_data,
                                    }
                                    ml_data_json = JSON.stringify(ml_data);

                                    $.ajax({
                                        url: "<?php echo base_url('TB/GetResult')?>",
                                        method: "post",
                                        dataType: "json",
                                        headers: {
                                            '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
                                        },
                                        data:{
                                            ml_data:ml_data_json,
                                        },
                                        success: function (result) {
                                            res = Number(result);
                                            
                                            $("#epoch").text(parseFloat(res).toFixed(3) + "%");
                                            if (res >= 50)
                                            {
                                                $("#epoch").css('color', 'red');
                                            } else
                                            {
                                                $("#epoch").css('color', '#00DB00');
                                            }

                                            Swal.close();
                                        },
                                        error: () => {
                                            $('#epoch').css('color', 'red');
                                            $('#epoch').text('ERROR!');
                                            Swal.fire({
                                                title: '錯誤',
                                                html: '獲取模型結果時發生錯誤',
                                                icon: 'error'
                                            });
                                            return;
                                        }
                                    });
                                },
                                error: () => {
                                    $('#epoch').css('color', 'red');
                                    $('#epoch').text('ERROR!');
                                    Swal.fire({
                                        title: '錯誤',
                                        html: '讀取空污數據時發生錯誤',
                                        icon: 'error'
                                    });
                                    return;
                                }
                            })
                        }, () => {
                            $('#epoch').css('color', 'red');
                            $('#epoch').text('ERROR!');
                            Swal.fire({
                                title: '錯誤',
                                html: '檢查共病數據時發生錯誤',
                                icon: 'error'
                            });
                            return;
                        });
                    }
                });
            });
        </script>
</body>

</html>

