<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ToyTalkConsole</title>
        <meta http-equiv="content-language" content="ja"/>
        <?php include(__DIR__."/css.php") ?>
    </head>
    <body>
        <?php include(__DIR__."/header.php") ?>
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h2>ToyTalk管理コンソールへようこそ!</h2>
                    <p>各種設定を行うことができます。</p>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <b>Toyの設定</b>
                    </div>
                    <div class="panel-body">
                        アクセストークンの設定などの設定が行えます。<p></p>
                        <a class="btn btn-primary" href="/ToyTalkConsole/toy/edit.php">Toyの設定画面へアクセスする</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <b>ファセットのカスタマイズ</b>
                    </div>
                    <div class="panel-body">
                        追加したファセットのカスタマイズを行うことが出来ます。<p></p>
                        <a class="btn btn-primary" href="/ToyTalkConsole/facet/index.php">ファセットのカスタマイズ画面へアクセスする</a>
                    </div>
                </div>
            </div>
            
            TODO フォームからボタン押下時に処理をする
            TODO 別ページに遷移
        </div>
        <?php include(__DIR__."/footer.php") ?>
        <?php include(__DIR__."/js.php") ?>
    </body>
</html>
