<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ToyTalkConsole</title>
        <meta http-equiv="content-language" content="ja"/>
        <?php include __DIR__."/../css.php" ?>
    </head>
    <body>
        <?php include __DIR__."/../js.php" ?>
        <script type="text/javascript">
            $(window).load(function () {
                // ナビゲーションバーのactiveを変更
                $("#facet").addClass("active");
            });
        </script>
        <?php include __DIR__."/../header.php" ?>
        <div class="container">
            <div class="well">
                <h4><?php echo pathinfo($_GET[facetName], PATHINFO_FILENAME)?>ファセット：ユーザカスタマイズ画面へようこそ!</h4>
                <p>ユーザによってカスタマイズが可能なパラメータを編集してください。</p>
                <a class="btn btn-primary" href="./index.php">ファセット一覧に戻る</a>
            </div>
            <?php include __DIR__."/editview/".$_GET[facetName] ?>
        </div>
        <?php include __DIR__."/../footer.php" ?>
    </body>
</html>
