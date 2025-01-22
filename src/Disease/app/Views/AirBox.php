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
                        <h2>PM2.5週趨勢</h2>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">疾病模型</a></li>
                            <li class="breadcrumb-item active">PM2.5週趨勢</li>
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
                                            <h2>空汙趨勢圖</h2>
                                            <div id="imageShow">
                                                <!-- <img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div id="airBoxResult" class="col-sm-12 col-xl-12">
                                    <!-- <div class="card m-b-30">
                                        <div class="card-body">
                                            test-word
                                        </div>
                                    </div> -->
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
    $(document).ready(function () {
        $('#Input_data_disease').on('submit', function (even) {
            even.preventDefault();
            var inputText;
            document.getElementById("airBoxResult").innerHTML = "";
            document.getElementById("imageShow").innerHTML = "";
            address = document.getElementById("address").value.replaceAll(' ', '');
            var timestamp = Date.now()	
            Disease_ID = 122;
            let timerInterval
                    Swal.fire({
                        title: '模型運算中!',
                        html: '剩餘 <b></b> %',
                        timer: 3000,
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                                    b.textContent = Math.round(Swal.getTimerLeft()/3000*100)
                                if(document.getElementById("imageShow").innerHTML != ""){
                                    clearInterval(timerInterval)
                                    Swal.close();
                            }
                        }, 100)},
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
                url: "<?php echo base_url('AirBox/GetResult')?>",
                method: "post",
                dataType: "json",
                headers: {
                    '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
                },
                data: {
                        "address": address,
                },
                success: function (result) {
                            console.log(result)
                            res = result[0].replaceAll('~', '<br>');
                            document.getElementById("airBoxResult").innerHTML =
                                "<div class='card m-b-30'> <div class='card-body'> <h8>" + res + "</h8> </div> </div>";
                            
                            document.getElementById("imageShow").innerHTML =
                                "<img src='<?php echo base_url('airBox/getFigOne')?>?ver=" + timestamp + "'  width='100%'/> <br> <br> <img src='<?php echo base_url('airBox/getFigTwo')?>?ver=" + timestamp + "'  width='100%'/>";
                }
                        /*,
                        error: function (data) {
                            document.getElementById('alertify-error').click();
                        }*/
                });
            });
            
        });
</script>

</html>
