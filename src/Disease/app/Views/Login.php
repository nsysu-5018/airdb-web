<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <?php echo view("basic/Head") ?>
    <?php echo view("basic/Cssload") ?>
</head>

<body class="auth-body-bg">
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">
    
            <div class="card-body">
                <h5 class="font-18 text-center">空汙預測門診登入</h5>
    
                <form class="form-horizontal m-t-30" action="Login" method="POST">
    
                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>帳號</label>
                            <input class="form-control" type="text" name="account" required="" placeholder="Account">
                        </div>
                    </div>
    
                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>密碼</label>
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
    
                    <div class="form-group mb-3 text-center mt-3">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 btn-block btn-lg waves-effect waves-light" type="submit">登入</button>
                        </div>
                    </div>
    
                    <div class="form-group mb-3 row mt-4 mb-0">
                        <div class="col-sm-7">
                            <!--<a href="recoverpw" class="text-muted"><i class="fa fa-lock me-2"></i> 忘記密碼？</a>-->
                        </div>
                        <div class="col-sm-5 text-end">
                            <a href="Register" class="text-muted">新增帳號</a>
                        </div>
                    </div>
                    <?= csrf_field() ?>
                </form>
            </div>
    
        </div>
    </div>

    <?php echo view("basic/Js") ?>

    <script>
        result = '<?= $result ?? "" ?>';
        if (result == 'NON_ACTIVATED')
        {
            Swal.fire({
                title: '帳號尚未開通',
                text: '請洽管理員開通帳號',
                icon: 'error'
            });
        }
        else if (result == 'INCORRECT_PASSWORD')
        {
            Swal.fire({
                title: '帳號密碼錯誤',
                text: '請重新輸入',
                icon: 'error'
            });
        }
        else if (result == 'NO_ACCOUNT')
        {
            Swal.fire({
                title: '帳號尚未註冊',
                text: '請點擊下方「新增帳號」!!',
                icon: 'error'
            });
        }
    </script>
</body>

</html>