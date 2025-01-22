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
                        <h2>阿茲海默症預測模型</h2>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">疾病模型</a></li>
                            <li class="breadcrumb-item active">阿茲海默症預測模型</li>
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
                                                        <input class="form-control" type="text" name="address" id="address" placeholder="高雄市鼓山區中山大學" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">相關疾病資料1</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease1" id="Input_data_disease1" placeholder="1" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">相關疾病資料2</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease2" id="Input_data_disease2" placeholder="2" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">相關疾病資料3</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease3" id="Input_data_disease3" placeholder="3" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">相關疾病資料4</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease4" id="Input_data_disease4" placeholder="4" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">相關疾病資料5</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="Input_data_disease5" id="Input_data_disease5" placeholder="5" id="example-text-input">
                                                    </div>
                                                </div>
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
    getAllName("<?php echo base_url('Alzheimer/getAllName')?>", '#inputCheckbox');

    $(document).ready(function () {
        $('#Input_data_disease').on('submit', function (even) {
            even.preventDefault();
            var inputTextselect = "";
            var inputText;
            $.ajax({
                url: "<?php echo base_url('Alzheimer/getAllName')?>",
                method: "post",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    swal(
                        'Good Job！',
                        '辨識中',
                        'success'
                    )
                    var Return_data = JSON.parse(data);
                    for (var i = 0; i < Return_data.length; i++) {
                        var DiseaseName = document.getElementById(Return_data[i]);

                        if (DiseaseName.checked == true) {
                            inputTextselect += (Return_data[i] + "~");
                        }
                    }
                    var inputSelect = inputTextselect.substring(0, inputTextselect.length - 1);
                    // console.log(inputSelect);
                    Input_data_disease1 = document.getElementById("Input_data_disease1").value;
                    Input_data_disease2 = document.getElementById("Input_data_disease2").value;
                    Input_data_disease3 = document.getElementById("Input_data_disease3").value;
                    Input_data_disease4 = document.getElementById("Input_data_disease4").value;
                    Input_data_disease5 = document.getElementById("Input_data_disease5").value;

                    $.ajax({
                        url: "<?php echo base_url('Alzheimer/ml_Model')?>",
                        method: "post",
                        dataType: "json",
                        data: {
                            "inputTextselect": inputSelect,
                            "Input_data_disease1": Input_data_disease1,
                            "Input_data_disease2": Input_data_disease2,
                            "Input_data_disease3": Input_data_disease3,
                            "Input_data_disease4": Input_data_disease4,
                            "Input_data_disease5": Input_data_disease5
                        },
                        success: function (data) {

                            if (data[0] >= 80) {
                                document.getElementById("epoch").style.color = "#00DB00";
                                document.getElementById("epoch").innerHTML = data[0]+"%";
                            }else{
                                document.getElementById("epoch").style.color = "red";
                                document.getElementById("epoch").innerHTML = data[0]+"%";
                            }


                        },
                        error: function (data) {
                            document.getElementById('alertify-error').click();
                        }
                    });
                }
            });
        });
    });
</script>

</html>