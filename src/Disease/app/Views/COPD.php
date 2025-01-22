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
                    <h2>慢性阻塞性肺病預測模型</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">疾病模型</a></li>
                        <li class="breadcrumb-item active">慢性阻塞性肺病預測模型</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>選擇預測模型</h2>
                                <hr/>
                                <div class="row">
                                    <div class="form-group form-check col">
                                        <input type="radio" class="form-check-input" name="model" id="model_14" disabled>
                                        <label class="form-check-label" for="model_14">14天預測模型</label>
                                    </div>
                                    <div class="form-group form-check col">
                                        <input type="radio" class="form-check-input" name="model" id="model_60" checked>
                                        <label class="form-check-label" for="model_60">60天預測模型</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>病人基本資料</h2>
                                <hr/>
                                <div class="row mb-3">
                                    <label for="basic_age" class="col-sm-3 col-form-label">年齡</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_age">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="basic_sex" class="col-sm-3 col-form-label">性別</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_sex">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="basic_re_ADM_TIME" class="col-sm-3 col-form-label">re_ADM_TIME</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_re_ADM_TIME">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="basic_BED_DAY" class="col-sm-3 col-form-label">BED_DAY</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_BED_DAY">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="basic_avg_COPD_reADM_days" class="col-sm-3 col-form-label">avg_COPD_reADM_days</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_avg_COPD_reADM_days">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="basic_avg_BED_DAY" class="col-sm-3 col-form-label">avg_BED_DAY</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" id="basic_avg_BED_DAY">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2>相關疾病勾選</h2>
                                <p style="font-size:20px;">
                                    <span style="color:red;font-size:20px;font-weight:bold;">提醒：</span>如無以下疾病，無須勾選。
                                </p>
                                <div id="inputCheckbox"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>空汙數據</h2>
                                <hr/>
                                <div class="row mb-3">
                                    <label for="aqi_address" class="col-sm-2 col-form-label">地址</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="aqi_address" id="aqi_address" value="高雄市小港區">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_based_Day" class="col-sm-2 col-form-label">空汙基準日</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="date" name="aqi_based_Day" id="aqi_based_Day" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_EMA_Days" class="col-sm-2 col-form-label">空汙回推天數</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="number" name="aqi_EMA_Days" id="aqi_EMA_Days" value="30" required>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-primary" id="btn_load_aqi">載入數據</button>
                                </div>
                                <hr/>
                                <div class="row mb-3">
                                    <label for="aqi_CO" class="col-sm-2 col-form-label-lg">CO</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_CO" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_O3" class="col-sm-2 col-form-label-lg">O3</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_O3" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_SO2" class="col-sm-2 col-form-label-lg">SO2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_SO2" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_NO" class="col-sm-2 col-form-label-lg">NO</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_NO" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_NO2" class="col-sm-2 col-form-label-lg">NO2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_NO2" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_NOx" class="col-sm-2 col-form-label-lg">NOx</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_NOx" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_PM2_5" class="col-sm-2 col-form-label-lg">PM2.5</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_PM2_5" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="aqi_PM10" class="col-sm-2 col-form-label-lg">PM10</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" id="aqi_PM10" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>藥物</h2>
                                <hr/>
                                <div class="row">
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_1DL30">
                                        <label class="form-check-label" for="medicine_1DL30">1DL30</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_1MEPTI">
                                        <label class="form-check-label" for="medicine_1MEPTI">1MEPTI</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_1PHYLL">
                                        <label class="form-check-label" for="medicine_1PHYLL">1PHYLL</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_1PREDN">
                                        <label class="form-check-label" for="medicine_1PREDN">1PREDN</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_1PROPH">
                                        <label class="form-check-label" for="medicine_1PROPH">1PROPH</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3ALVES">
                                        <label class="form-check-label" for="medicine_3ALVES">3ALVES</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3ANORO">
                                        <label class="form-check-label" for="medicine_3ANORO">3ANORO</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3INCRU">
                                        <label class="form-check-label" for="medicine_3INCRU">3INCRU</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3RELV2">
                                        <label class="form-check-label" for="medicine_3RELV2">3RELV2</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3RELVA">
                                        <label class="form-check-label" for="medicine_3RELVA">3RELVA</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3SPI25">
                                        <label class="form-check-label" for="medicine_3SPI25">3SPI25</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3SPIOL">
                                        <label class="form-check-label" for="medicine_3SPIOL">3SPIOL</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3SR160">
                                        <label class="form-check-label" for="medicine_3SR160">3SR160</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3TRELE">
                                        <label class="form-check-label" for="medicine_3TRELE">3TRELE</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="medicine_3VENTO">
                                        <label class="form-check-label" for="medicine_3VENTO">3VENTO</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2>疫苗</h2>
                                <hr/>
                                <div class="row">
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PNEU0">
                                        <label class="form-check-label" for="vaccine_2PNEU0">2PNEU0</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PNEUM">
                                        <label class="form-check-label" for="vaccine_2PNEUM">2PNEUM</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PRE13">
                                        <label class="form-check-label" for="vaccine_2PRE13">2PRE13</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2PRE30">
                                        <label class="form-check-label" for="vaccine_2PRE30">2PRE30</label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="checkbox" id="vaccine_2SYNFL">
                                        <label class="form-check-label" for="vaccine_2SYNFL">2SYNFL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>抽血</h2>
                                <hr/>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_WBC" class="col-sm-6 col-form-label">WBC</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_WBC" id="Input_data_WBC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_HGB" class="col-sm-6 col-form-label">HGB</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_HGB" id="Input_data_HGB">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_HCT" class="col-sm-6 col-form-label">HCT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_HCT" id="Input_data_HCT">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_hsCRP" class="col-sm-6 col-form-label">hsCRP(CRP)</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_hsCRP" id="Input_data_hsCRP">
                                                <input class="form-control" type="hidden" name="Input_data_CRP" id="Input_data_CRP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Lactate" class="col-sm-6 col-form-label">Lactate</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Lactate" id="Input_data_Lactate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_sO2c" class="col-sm-6 col-form-label">%sO2c</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_sO2c" id="Input_data_sO2c">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_O2SAT" class="col-sm-6 col-form-label">O2SAT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_O2SAT" id="Input_data_O2SAT">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_TCO2" class="col-sm-6 col-form-label">TCO2</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_TCO2" id="Input_data_TCO2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_pCO2" class="col-sm-6 col-form-label">pCO2</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_pCO2" id="Input_data_pCO2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_BNP" class="col-sm-6 col-form-label">BNP</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_BNP" id="Input_data_BNP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_D-Dimer" class="col-sm-6 col-form-label">D-Dimer</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_D-Dimer" id="Input_data_D-Dimer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_CK" class="col-sm-6 col-form-label">CK</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_CK" id="Input_data_CK">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_CK-MB" class="col-sm-6 col-form-label">CK-MB</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_CK-MB" id="Input_data_CK-MB">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Tropo-I" class="col-sm-6 col-form-label">Tropo-I</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Tropo-I" id="Input_data_Tropo-I">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_TP" class="col-sm-6 col-form-label">TP</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_TP" id="Input_data_TP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_ALB" class="col-sm-6 col-form-label">ALB</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_ALB" id="Input_data_ALB">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_GPT" class="col-sm-6 col-form-label">GPT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_GPT" id="Input_data_GPT">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_T-BIL" class="col-sm-6 col-form-label">T-BIL</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_T-BIL" id="Input_data_T-BIL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_BUN" class="col-sm-6 col-form-label">BUN</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_BUN" id="Input_data_BUN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_CRTN" class="col-sm-6 col-form-label">CRTN</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_CRTN" id="Input_data_CRTN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Ca" class="col-sm-6 col-form-label">Ca++</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Ca" id="Input_data_Ca">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_K" class="col-sm-6 col-form-label">K</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_K" id="Input_data_K">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Mg" class="col-sm-6 col-form-label">Mg</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Mg" id="Input_data_Mg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_GLU" class="col-sm-6 col-form-label">GLU(Sugar)</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_GLU" id="Input_data_GLU">
                                                <input class="form-control" type="hidden" name="Input_data_Suger" id="Input_data_Suger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_HbA1C" class="col-sm-6 col-form-label">HbA1C</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_HbA1C" id="Input_data_HbA1C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_HDL-C" class="col-sm-6 col-form-label">HDL-C</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_HDL-C" id="Input_data_HDL-C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_LDL-C" class="col-sm-6 col-form-label">LDL-C</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_LDL-C" id="Input_data_LDL-C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_T-CHO" class="col-sm-6 col-form-label">T-CHO</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_T-CHO" id="Input_data_T-CHO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_TG" class="col-sm-6 col-form-label">TG</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_TG" id="Input_data_TG">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Cortisol" class="col-sm-6 col-form-label">Cortisol</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Cortisol" id="Input_data_Cortisol">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_T3" class="col-sm-6 col-form-label">T3</label>
                                            <div class="col-sm-6">
                                            <input class="form-control" type="text" name="Input_data_T3" id="Input_data_T3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_T4" class="col-sm-6 col-form-label">T4</label>
                                            <div class="col-sm-6">
                                            <input class="form-control" type="text" name="Input_data_T4" id="Input_data_T4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_TSH" class="col-sm-6 col-form-label">TSH</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_TSH" id="Input_data_TSH">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_IgE" class="col-sm-6 col-form-label">IgE</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_IgE" id="Input_data_IgE">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Mite_DF" class="col-sm-6 col-form-label">Mite DF</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Mite_DF" id="Input_data_Mite_DF">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Mite_far" class="col-sm-6 col-form-label">Mite/far</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Mite_far" id="Input_data_Mite_far">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_house_dust" class="col-sm-6 col-form-label">家塵</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_house_dust" id="Input_data_house_dust">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_Theophy" class="col-sm-6 col-form-label">Theophy</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_Theophy" id="Input_data_Theophy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_CEA" class="col-sm-6 col-form-label">CEA</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" name="Input_data_CEA" id="Input_data_CEA">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row mb-3">
                                            <label for="Input_data_SCC" class="col-sm-6 col-form-label">SCC</label>
                                            <div class="col-sm-6">
                                            <input class="form-control" type="text" name="Input_data_SCC" id="Input_data_SCC">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" id="btn_predict" class="btn btn-primary btn-lg waves-effect waves-light">進行預測</button>
                </div>
                <hr/>
                <div class="row">
                    <div class="col">
                        <h2>預測結果</h2>
                        <p id="epoch" style='font-size:50px; font-weight:bold;'></p>
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
        getAllName("<?php echo base_url('COPD/getAllName')?>", '#inputCheckbox');

        $('#btn_load_aqi').on('click', () => {
            addr = $('#aqi_address').val();
            date = $('#aqi_based_Day').val();
            period = $('#aqi_EMA_Days').val();
            if(addr == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「地址」',
                    icon: 'warning'
                });
                return;
            }
            else if(date == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「空汙基準日」',
                    icon: 'warning'
                });
                return;
            }
            else if(period == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「空汙回推天數」',
                    icon: 'warning'
                });
                return;
            }
            else
            {
                Swal.fire({
                    title: '讀取空污數據中...',
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    didOpen: () => {
                        Swal.showLoading();
                        $.ajax({
                            url: "<?php echo base_url('COPD/FetchAQI') ?>",
                            method: "post",
                            dataType: "json",
                            headers: {
                                '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
                            },
                            data: {
                                addr: $('#aqi_address').val(),
                                date: $('#aqi_based_Day').val(), 
                                period: $('#aqi_EMA_Days').val(),
                            },
                            success: (result) => {
                                if (result['detail'])
                                {
                                    Swal.fire({
                                        title: '錯誤',
                                        html: '伺服器回傳了錯誤訊息！<br/>錯誤訊息：' + result['detail'],
                                        icon: 'error'
                                    });
                                    return;
                                }
                                else
                                {
                                    air_data = result;
                                    $('#aqi_CO').val(air_data["co"]);
                                    $('#aqi_O3').val(air_data["o3"]);
                                    $('#aqi_SO2').val(air_data["so2"]);
                                    $('#aqi_NO').val(air_data["no"]);
                                    $('#aqi_NO2').val(air_data["no2"]);
                                    $('#aqi_NOx').val(air_data["nox"]);
                                    $('#aqi_PM2_5').val(air_data["pm2.5"]);
                                    $('#aqi_PM10').val(air_data["pm10"]);
                                    Swal.close();
                                }
                            },
                            error: (xhr) => {
                                Swal.fire({
                                    title: '錯誤',
                                    html: '讀取空污數據時發生錯誤',
                                    icon: 'error'
                                });
                            }
                        });
                    }
                });
            }
        })

        $('#btn_predict').on('click', () => {
            addr = $('#aqi_address').val();
            date = $('#aqi_based_Day').val();
            period = $('#aqi_EMA_Days').val();

            if(addr == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「地址」',
                    icon: 'warning'
                });
                return;
            }
            else if(date == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「空汙基準日」',
                    icon: 'warning'
                });
                return;
            }
            else if(period == ''){
                Swal.fire({
                    title: '錯誤',
                    text: '你沒有填寫「空汙回推天數」',
                    icon: 'warning'
                });
                return;
            }
            else
            {
                Swal.fire({
                    title: '模型運算中...',
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    didOpen: () => {
                        Swal.showLoading();

                        checkAllName("<?php echo base_url('COPD/getAllName')?>", (selected_disease) => {
                            air_data = null;
                            $.ajax({
                                url: "<?php echo base_url('COPD/FetchAQI') ?>",
                                method: "post",
                                dataType: "json",
                                headers: {
                                    '<?= csrf_header() ?>': '<?= csrf_hash() ?>',
                                },
                                data: {
                                    addr: addr,
                                    date: date, 
                                    period: period,
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
                                    $('#aqi_CO').val(air_data["co"]);
                                    $('#aqi_O3').val(air_data["o3"]);
                                    $('#aqi_SO2').val(air_data["so2"]);
                                    $('#aqi_NO').val(air_data["no"]);
                                    $('#aqi_NO2').val(air_data["no2"]);
                                    $('#aqi_NOx').val(air_data["nox"]);
                                    $('#aqi_PM2_5').val(air_data["pm2.5"]);
                                    $('#aqi_PM10').val(air_data["pm10"]);

                                    ml_data = {
                                        sO2c: $('#Input_data_sO2c').val(),
                                        dis_list: selected_disease,
                                    }
                                    ml_data_json = JSON.stringify(ml_data);

                                    $.ajax({
                                        url: "<?php echo base_url('COPD/GetResult')?>",
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
            }
        });
    </script>
</body>

</html>