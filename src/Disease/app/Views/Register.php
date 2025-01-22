<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <?php echo view("basic/Head")?>
    <?php echo view("basic/Cssload") ?>
</head>

<body class="auth-body-bg">
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <h5 class="font-size-18 text-center">空汙預測門診註冊</h5>

                <form class="form-horizontal m-t-30" action="Register" method="POST">

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>部門單位</label>
                            <input class="form-control" type="text" name="department" required="" placeholder="部門單位">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>帳號</label>
                            <input class="form-control" type="text" name="account" required="" placeholder="帳號">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>密碼</label>
                            <input class="form-control" type="password" name="password" required="" placeholder="密碼">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>再次輸入密碼</label>
                            <input class="form-control" type="password" name="password_again" required="" placeholder="再次輸入密碼">
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg w-100 waves-effect waves-light" type="submit">註冊</button>
                        </div>
                    </div>

                    <div class="form-group mb-0 row">
                        <div class="col-12 mt-3 text-center">
                            <a href="Login" class="text-muted">已經有帳號了？</a>
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
        if (result == 'PASSWORD_NOMATCH')
        {
            swal.fire({
                title: '密碼不一致！',
                text: '請再次輸入密碼',
                icon: 'error'
            });
        }
        else if (result == 'ACCOUNT_EXISTED')
        {
            swal.fire({
                title: '帳號已被註冊！',
                text: '請重新註冊帳號',
                icon: 'error'
            });
        }
        else if (result == 'SUCCESS')
        {
            swal.fire({
                title: 'Good Job!',
                text: '註冊成功!',
                icon: 'success'
            }).then(function() {
                window.location = "Login";
            });
        }
    </script>
</body>

</html>