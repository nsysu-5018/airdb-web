<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("basic/Head") ?>
    <?php echo view("basic/Cssload") ?>
    <?php echo view("basic/Js") ?>

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
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h2>機器學習模型模板</h2>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">影片管理</li>
                                    <li class="breadcrumb-item">匯入影片</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->
                    <div class="row">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form id="form_img" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h2>匯入影片</h2>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">注意：</span>匯入影片，僅支援mp4、avi、mov、wmv、flv、3gp、dar。
                                            </p>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">檔名格式：</span>檔名請依照以下兩格式進行設定，(1)20220726_01.mp4、(2)5_2022-07-26_001843.mp4。
                                            </p>
                                            <div class="m-b-30">
                                                <div class="fallback">
                                                    <input class="btn btn-outline-primary waves-effect waves-light" name="ActivityFile[]" id="ActivityFile" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;margin-right: 10px;">
                                            <br>
                                            <div>
                                                <p style="font-size:30px;margin-right: 10px;">鏡頭：</p>
                                            </div>
                                            <div style="margin-right: 20px;">
                                                <select id="Camera" name="Camera" class="form-control form-control-lg">
                                                    <!-- <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option> -->
                                                    <!-- <?php for ($i = 1; $i <= 25; $i++) : ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php endfor; ?> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" id="butsave" class="btn btn-primary waves-effect waves-light">送出</button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">取消</button>
                                                <br>
                                                <p id="VideoInfo" style="font-size: 20px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                    <p id="VideoImageState" style="font-size: 20px;margin-top:20px;font-weight:bold;color:red;"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form id="form_File_img" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h2>匯入資料夾路徑</h2>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">注意：</span>匯入影片，僅支援mp4、avi、mov、wmv、flv、3gp、dar。
                                            </p>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">檔名格式：</span>檔名請依照以下兩格式進行設定，(1)20220726_01.mp4、(2)5_2022-07-26_001843.mp4。
                                            </p>
                                            <div class="m-b-30">
                                                <div class="fallback">
                                                    <input class="btn btn-outline-primary waves-effect waves-light" name="ActivityFile[]" id="ActivityFile" type="file" multiple="multiple" webkitdirectory="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;margin-right: 10px;">
                                            <br>
                                            <div>
                                                <p style="font-size:30px;margin-right: 10px;">鏡頭：</p>
                                            </div>
                                            <div style="margin-right: 20px;">
                                                <select id="Camera1" name="Camera1" class="form-control form-control-lg">
                                                    <!-- <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" id="butsave" class="btn btn-primary waves-effect waves-light">送出</button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">取消</button>
                                                <br>
                                                <p id="VideoInfo" style="font-size: 20px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                    <p id="VideoImageState" style="font-size: 20px;margin-top:20px;font-weight:bold;color:red;"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <form id="form_File_URL" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <h2>匯入URL(網址)</h2>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">注意：</span>匯入影片，僅支援mp4、avi、mov、wmv、flv、3gp、dar。
                                            </p>
                                            <p style="font-size:20px;"><span style="color:red;font-size:20px;font-weight:bold;">檔名格式：</span>檔名請依照以下兩格式進行設定，(1)20220726_01.mp4、(2)5_2022-07-26_001843.mp4。
                                            </p>
                                            <div class="m-b-30">
                                                <div class="fallback">
                                                    <input class="btn btn-outline-primary waves-effect waves-light" name="URLText" id="URLText" type="text" size="36">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;margin-right: 10px;">
                                            <br>
                                            <div>
                                                <p style="font-size:30px;margin-right: 10px;">鏡頭：</p>
                                            </div>
                                            <div style="margin-right: 20px;">
                                                <select id="Camera2" name="Camera2" class="form-control form-control-lg">
                                                    <!-- <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" id="butsave" class="btn btn-primary waves-effect waves-light">送出</button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">取消</button>
                                                <br>
                                                <p id="VideoInfo" style="font-size: 20px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                    <p id="VideoImageState" style="font-size: 20px;margin-top:20px;font-weight:bold;color:red;"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xl-12 card-body">
                            <div class="card m-b-30">
                                <div id="imageG" class="card-body">
                                    <h2>影片清單</h2>
                                    <table id="example" class="table table-striped table-bordered" style="text-align: center;font-size: 23px;"></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo view("basic/Footer") ?>
        </div>
    </div>
    <!-- END wrapper -->




</body>

<script type="text/javascript">
    // get_Session();
    // function get_Session(){
    // 	$.ajax({
    // 		url: "<?php echo base_url('Index/getSession')?>",
    // 		method: "post",
    // 		contentType: false,
    // 		cache: false,
    // 		processData: false,
    // 		success: function (data) {
    // 			var Return_data = JSON.parse(data);
    // 			console.log(Return_data);
    // 		},
    // 		error: function (data) {

    // 		}
    // 	});
    // }

    Set_Select();

    function Set_Select() {
        $.ajax({
            url: "<?php echo base_url('Index/SetSelect')?>",
            method: "post",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                var Return_data = JSON.parse(data);

                var select_Camera = document.getElementById('Camera');
                var select_Camera1 = document.getElementById('Camera1');
                var select_Camera2 = document.getElementById('Camera2');
                for (let i = 0; i < Return_data.length; i++) {
                    var opt = document.createElement('option');
                    opt.value = i + 1;
                    opt.innerHTML = Return_data[i];
                    select_Camera.appendChild(opt);

                    var opt1 = document.createElement('option');
                    opt1.value = i + 1;
                    opt1.innerHTML = Return_data[i];
                    select_Camera1.appendChild(opt1);

                    var opt2 = document.createElement('option');
                    opt2.value = i + 1;
                    opt2.innerHTML = Return_data[i];
                    select_Camera2.appendChild(opt2);
                }
            },
            error: function (data) {

            }
        });
    }





    Video_List();
    $(document).ready(function () {
        $('#form_img').on('submit', function (even) {
            even.preventDefault();
            var Camera = document.getElementById("Camera");
            var Camera_value = Camera.value;
            var Camera_text = Camera.options[Camera.selectedIndex].text;
            var Camera = document.getElementById("Camera");
            var Fileid = document.getElementById("ActivityFile");
            var Fileid_split = (Fileid.files[0].name).split(".");
            var FileName = Fileid_split[0];
            var FileName_Extension = Fileid_split[1];
            console.log(FileName_Extension);
            var chackFile_Extension = true;
            if (FileName_Extension == "mp4" || FileName_Extension == "dar" || FileName_Extension == "3gp" || FileName_Extension == "avi" || FileName_Extension == "mov" || FileName_Extension == "wmv" || FileName_Extension == "flv") {
                chackFile_Extension = false;
            }
            try {
                var reg = /^[\u4E00-\u9FA5]+$/
                var FileName_Check = FileName.split("_");
                // if(reg.test(FileName)){
                // 	swal(
                // 		'失敗',
                // 		'影片檔名格式不符!',
                // 		'error'
                // 	);
                // 	$("#ActivityFile").val("");
                // }else 
                if (FileName_Check.length > 3) {
                    swal(
                        '失敗',
                        '影片檔名格式不符!',
                        'error'
                    );
                    $("#ActivityFile").val("");
                } else if (chackFile_Extension) {
                    swal(
                        '失敗',
                        '影片格式不符!',
                        'error'
                    );
                    $("#ActivityFile").val("");
                } else if (ActivityFile == 0) {
                    alert("請上傳影片");
                } else {
                    $.ajax({
                        url: "<?php echo base_url('Index/do_upload')?>",
                        method: "post",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            swal(
                                'Good Job！',
                                '上傳成功',
                                'success'
                            )
                            $("#ActivityFile").val("");
                            var Return_data = JSON.parse(data);
                            // var result =
                            // 	"<br><span style='color:blue;font-weight:bold;'>檔案資訊</span><br>檔案名稱：" +
                            // 	Return_data.file_name + "<br>檔案格式：" + Return_data.file_ext +
                            // 	"<br>檔案大小：" + (Return_data.file_size / 1024.0).toFixed(2) +
                            // 	"(MB)";
                            // $('#VideoInfo').html(result);
                            var Update_fileName = Return_data.file_name;
                            VideoToImage(Camera_value, Update_fileName);
                            setTimeout(function () {
                                Video_List();
                            }, 5000);
                        },
                        error: function (data) {
                            document.getElementById('alertify-error').click();
                        }
                    });
                }
            } catch (e) {
                swal(
                    '失敗',
                    '請匯入影片!',
                    'error'
                );
            }
        });
    });



    $(document).ready(function () {
        $('#form_File_img').on('submit', function (even) {
            even.preventDefault();
            // console.log(event.target[0].files);
            let files = event.target[0].files;
            // for (let i=0; i<files.length; i++) {
            // 	console.log(files[i].name);
            // };
            var Camera = document.getElementById("Camera1");
            var Camera_value = Camera.value;
            var Camera_text = Camera.options[Camera.selectedIndex].text;
            var chackFile = false;
            var chackFile_Extension = 0;
            for (let i = 0; i < files.length; i++) {
                var Fileid_split = (files[i].name).split(".");
                var FileName = Fileid_split[0];
                var FileName_Extension = Fileid_split[1];
                var reg = /^[\u4E00-\u9FA5]+$/
                var FileName_Check = FileName.split("_");
                if (FileName_Check.length > 3) {
                    chackFile = true;
                }

                // if(reg.test(FileName)){
                // 	chackFile = true;
                // }else 
                if (FileName_Extension == "mp4" || FileName_Extension == "dar" || FileName_Extension == "3gp" || FileName_Extension == "avi" || FileName_Extension == "mov" || FileName_Extension == "wmv" || FileName_Extension == "flv") {
                    chackFile_Extension += 1;
                }
            };

            try {
                // console.log(chackFile_Extension);
                if (chackFile) {
                    swal(
                        '失敗',
                        '影片檔名格式不符!',
                        'error'
                    );
                } else if (chackFile_Extension != files.length) {
                    swal(
                        '失敗',
                        '影片格式不符!',
                        'error'
                    );
                } else if (ActivityFile == 0) {
                    alert("請上傳影片");
                } else {
                    $.ajax({
                        url: "<?php echo base_url('Index/do_upload2')?>",
                        method: "post",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            swal(
                                'Good Job！',
                                '上傳成功',
                                'success'
                            )
                            $("#ActivityFile").val("");
                            console.log(files[0].name);
                            for (let i = 0; i <= files.length; i++) {
                                VideoToImage(Camera_value, files[i].name);
                            };
                            setTimeout(function () {
                                Video_List();
                            }, 5000);
                        },
                        error: function (data) {
                            document.getElementById('alertify-error').click();
                        }
                    });
                }
            } catch (e) {
                console.log(e);
                swal(
                    '失敗',
                    '請匯入影片!',
                    'error'
                );
            }
        });
    });



    $(document).ready(function () {
        $('#form_File_URL').on('submit', function (even) {
            even.preventDefault();
            var URLText = document.getElementById("URLText");
            var URLText_Value = URLText.value;
            var Camera = document.getElementById("Camera2");
            var Camera_value = Camera.value;
            var Camera_text = Camera.options[Camera.selectedIndex].text;
            try {
                var URLText_Value_Check = URLText_Value.split(".");
                // var ActivityFile = document.getElementById('ActivityFile');
                // var fileName = ActivityFile.files[0].name;
                if (URLText_Value == 0) {
                    swal(
                        '失敗',
                        '請上傳影片網址!',
                        'error'
                    );
                } else if (URLText_Value_Check.length <= 4) {
                    swal(
                        '失敗',
                        '影片檔名格式不符!',
                        'error'
                    );
                } else {
                    $.ajax({
                        url: "<?php echo base_url('Index/VideoURL')?>",
                        method: "post",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            var Return_data = JSON.parse(data);
                            if (Return_data[1] == "ok") {
                                swal(
                                    'Good Job！',
                                    '上傳成功',
                                    'success'
                                )
                                $("#URLText").val("");

                                var Update_fileName = Return_data[0];
                                console.log(Update_fileName);
                                VideoToImage(Camera_value, Update_fileName);
                                setTimeout(function () {
                                    Video_List();
                                }, 5000);
                            } else {
                                swal('錯誤！', 'URL(網址)錯誤!', 'error');
                            }

                        },
                        error: function (data) {
                            document.getElementById('alertify-error').click();
                        }
                    });
                }
            } catch (e) {
                swal(
                    '失敗',
                    '請匯入影片!',
                    'error'
                );
            }
        });
    });

    function VideoToImage(Camera_value, Update_fileName) {
        $('#VideoImageState').html("正在解析!!");
        //console.log(Camera_value);
        //console.log(Update_fileName);
        $.ajax({
            url: "<?php echo base_url('Index/VideoToImage')?>",
            type: "post",
            dataType: "json",
            data: {
                "Camera_value": Camera_value,
                "Update_fileName": Update_fileName
            },
            success: function (data) {
                $('#VideoImageState').html("解析完成!!");
                // var Return_data = JSON.parse(data);
                // var Count = parseInt(Return_data[2]);
                // console.log(Return_data);

                Detection(Camera_value, Update_fileName);
            },
            error: function (o) {}
        });
    }

    function Detection(Camera_value, Update_fileName) {
        var Update_fileName_Split = Update_fileName.split(".");
        var filename = Update_fileName_Split[0];
        var filename_extension = Update_fileName_Split[1];
        var Arg1 = Camera_value + "~" + filename;

        console.log(Arg1);
        console.log(filename_extension);
        $.ajax({
            url: "<?php echo base_url('Index/Detection')?>",
            type: "post",
            dataType: "json",
            data: {
                "Camera_value": Arg1,
                "Update_fileName": filename_extension
            },
            success: function (data) {
                //console.log(data);
                Video_List();
                // var Return_data = JSON.parse(data);
                // var Count = parseInt(Return_data[1]);
                // if(Count>5){
                // 	for (let i = 1; i < Count+1; i++) {
                // 		// document.getElementById("imageG").innerHTML+="<div class='gallery'><a target='_blank' href='VideoToImage/Image_Complete/"+Return_data1[0]+"/"+i+".jpg"+"'><img id='myImg' class='zoom' src='VideoToImage/Image_Complete/"+Return_data1[0]+"/"+i+".jpg"+"' alt='Mountains' width='600' height='400'></a><div class='desc'>"+i+".jpg"+"</div></div>";
                // 		document.getElementById("imageG").innerHTML+="<div class='gallery'><a target='_blank' href='VideoToImage/Image_Complete/"+FileName+"/"+i+".jpg"+"'><img id='myImg' class='zoom' src='VideoToImage/Image_Complete/"+FileName+"-1"+"/"+i+".jpg"+"' alt='Mountains' width='600' height='400'></a><div class='desc'>"+i+".jpg"+"</div></div>";
                // 	}
                // 	$('#VideoImageState').html("辨識完成!!");
                // }
            },
            error: function (o) {
                console.log(o);
            }
        });
    }

    function Video_List() {
        var CCTVname = [];
        $.ajax({
            url: "<?php echo base_url('Index/SetSelect')?>",
            method: "post",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                var Return_data = JSON.parse(data);
                for (let i = 0; i < Return_data.length; i++) {
                    CCTVname.push(Return_data[i]);
                }
            },
            error: function (data) {

            }
        });




        $.ajax({
            url: "<?php echo base_url('Index/Video_List')?>",
            method: "post",
            success: function (data) {
                var Return_data = JSON.parse(data);
                var dataSet = [];
                var FileName_C = [];
                Complete();
                //console.log(Return_data);
                try{
                    for (let i = 0; i < parseInt(Return_data.length); i++) {
                        var FileNameSplit = Return_data[i].split("/");
                        var FileName = FileNameSplit[3].split(".");
                        isfileText = "<b style='color:green'>上傳完成!!</b>";
                        var videoinfo = FileNameSplit[5].split("#");
                        var videoinfoText = "<p>" + "影片解析度：" + videoinfo[0] + "<br><br>" + "影片長度：" + videoinfo[1] + "秒" + "<br><br>" + "檔案大小：" + videoinfo[2] + "MB" + "</p>"
                        let CCTVname_Text = CCTVname[parseInt(FileNameSplit[2]) - 1];
                        dataSet.push([CCTVname_Text, FileNameSplit[3],
                            "<img id='myImg' class='zoom' src='VideoToImage/Image/" + FileNameSplit[2] +
                            "/" + FileName[0] + "/" + FileNameSplit[4] + ".jpg" +
                            "'alt='Error!!' width='300px' height='200px'><img>", videoinfoText, isfileText,
                            "<button id='alertify-error' onclick='Video_Delete(" + "\"" + Return_data[i] +
                            "\"" + ")' class='btn btn-primary waves-effect waves-light' >刪除</button>"
                        ]);
                    }
                }catch(err) {
                    console.log(err);
                }

                $('#example').DataTable({
                    "pageLength": 10,
                    language: {
                        "processing": "處理中...",
                        "loadingRecords": "載入中...",
                        "lengthMenu": "顯示 _MENU_ 項結果",
                        "zeroRecords": "沒有符合的結果",
                        "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                        "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
                        "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                        "infoPostFix": "",
                        "search": "搜尋:",
                        "paginate": {
                            "previous": "上一頁",
                            "next": "下一頁",
                            "first": "第一頁",
                            "last": "最後一頁"
                        }
                    },
                    bDestroy: true,
                    data: dataSet,
                    columns: [{
                            title: "鏡頭",
                            width: "10%"
                        },
                        {
                            title: "影片名稱",
                            width: "10%"
                        },
                        {
                            title: "影片封面",
                            width: "10%"
                        },
                        {
                            title: "影片資訊",
                            width: "10%"
                        },
                        {
                            title: "狀態",
                            width: "10%"
                        },
                        {
                            title: "編輯",
                            width: "10%"
                        },

                    ],
                    pagingType: "full_numbers"
                });
            },
            error: function (o) {
                console.log(o);
            }
        });
    }

    function Video_Delete(FileName) {
        swal({
            title: '您確定要刪除嗎?',
            text: '將無法復原刪除影像！',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '刪除！',
            cancelButtonText: '取消',
        }).then(function (value) {
            console.log(value.value);
            if (value.value) {
                $.ajax({
                    url: "<?php echo base_url('Index/Video_Delete')?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        "Filename": FileName
                    },
                    success: function (data) {
                        console.log(data);
                        Video_List();
                    },
                    error: function (o) {
                        console.log(o);
                    }
                });
                swal(
                    '刪除！',
                    '已完成刪除',
                    'success'
                );
            } else {
                swal(
                    '取消！',
                    '已取消',
                    'error'
                );
            }
        });
    }

    function Complete() {
        var Return_data;
        $.ajax({
            url: "<?php echo base_url('Index/Complete')?>",
            type: "post",
            async: false,
            success: function (data) {
                Return_data = JSON.parse(data);
                all = Return_data;
            },
            error: function (o) {

            }
        });
        return Return_data;
    }



    function out() {
        $.ajax({
            url: "<?php echo base_url('Index/out')?>",
            type: "post",
            async: false,
            success: function (data) {
                window.location.href = 'Login';
            },
            error: function (o) {

            }
        });
    }

</script>

</html>