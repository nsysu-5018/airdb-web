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
                        <h2>空汙平均</h2>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">疾病模型</a></li>
                            <li class="breadcrumb-item active">空汙平均</li>
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
                                                        <input class="form-control" type="text" name="address" id="address" placeholder="高雄市鼓山區中山大學" id="example-text-input" required="required">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙回推天數</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" name="EMA_Days" id="EMA_Days" placeholder="30" id="example-text-input" required="required">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">空汙基準日</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="date" name="Based_Day" id="Based_Day" id="example-text-input" required="required">
                                                    </div>
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


</body>

<script type="text/javascript">
    // Set aqi_based_Day to day before today
    day = new Date();
    day.setDate(day.getDate() - 1);
    day_str = day.toISOString().split('T')[0]
    $('#Based_Day').val(day_str);
    aqi_max_day = new Date(day_str);

    $('#Input_data_disease').on('submit', function (even) {
        even.preventDefault();
        // Check date input
        date = $('#Based_Day').val();
        aqi_input_day = new Date(date);
        if (aqi_input_day > aqi_max_day)
        {
            Swal.fire({
                title: '錯誤',
                html: '「空汙基準日」輸入錯誤<br/>可輸入的最大值為 ' + day_str,
                icon: 'warning'
            });
            return;
        }

        $('#CO').val('');
        $('#O3').val('');
        $('#NO').val('');
        $('#SO2').val('');
        $('#NO2').val('');
        $('#NOx').val('');
        $('#PM2_5').val('');
        $('#PM10').val('');
        
        address = $('#address').val().replaceAll(' ', '');
        EMA_Days = $('#EMA_Days').val();
        Based_Day = $('#Based_Day').val();
        if(address == '')
        {
            Swal.fire({
                title: '錯誤',
                text: '你沒有填寫「地址」',
                icon: 'warning'
            });
            return;
        }
        else if(EMA_Days == '')
        {
            Swal.fire({
                title: '錯誤',
                text: '你沒有填寫「空汙回推天數」',
                icon: 'warning'
            });
            return;
        }
        else if(Based_Day == '')
        {
            Swal.fire({
                title: '錯誤',
                text: '你沒有填寫「空汙基準日」',
                icon: 'warning'
            });
            return;
        }

        Swal.fire({
            title: '空汙運算中!',
            html: '剩餘 <b></b> %',
            timer: 3000,
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Math.round(Swal.getTimerLeft()/3000*100);
                if($('#CO').val() != '')
                {
                    clearInterval(timerInterval)
                    Swal.close();
                }
            }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
            }
        })

        $.ajax({
            url: "<?php echo base_url('AirMA/FetchAQI') ?>",
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
            success: function (result) {
                if (result['detail'])
                {
                    Swal.fire({
                        title: '錯誤',
                        html: '伺服器回傳了錯誤訊息！<br/>錯誤訊息：' + result['detail'],
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
            },
            error: function (xhr) {
                Swal.fire({
                    title: '錯誤',
                    text: '發生未預期的錯誤，請再試一次',
                    icon: 'error'
                });
            }
        });
    });
</script>

</html>
