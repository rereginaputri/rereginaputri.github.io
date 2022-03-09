<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=divece-width, initial-scale=1.0">
    <title>From Login Cafe</title>
    <link href="<?= base_url()?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('msg')?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('login')?>"method="post">
                        <div class="card shadow mb-3 border-left-primary align-text-center">
                            <h3 class="card-title">form login</h3>
                            <div class="card-body">
                                <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">login</button>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>