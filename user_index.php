<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー管理</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">TODO登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">TODO一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">USER登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">USER管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">ログアウト</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="username">NAME</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="deadline">ID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="deadline">PASSWORD</label>
            <input type="password" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <label for="deadline">ユーザー種別（一般:0，管理者:1）</label>
            <input type="text" class="form-control" id="kanri_flg" name="kanri_flg">
        </div>
        <div class="form-group">
            <label for="deadline">状態（アクティブ:0，非アクティブ:1）</label>
            <input type="text" class="form-control" id="life_flg" name="life_flg">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>