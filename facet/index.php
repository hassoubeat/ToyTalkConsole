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
                <h4>ファセットカスタマイズ画面へようこそ!</h4>
                <p>ユーザによってカスタマイズが可能なファセットの一覧を以下に表示しています。</p>
                <a class="btn btn-primary">トップ画面に戻る</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ファセット名</th><th>カスタマイズページ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach(glob("./editview/*.php") as $file){
                            echo "<tr>";
                            if(is_file($file)){
                                $facetName = pathinfo($file, PATHINFO_FILENAME);
                                $facetEditViewPhp = pathinfo($file, PATHINFO_BASENAME);
                                echo "<td>";
                                echo htmlspecialchars($facetName);
                                echo "</td>";
                                echo "<td>";
                                $facetEditViewPhpURL = "/ToyTalkConsole/facet/edit.php?facetName=".$facetEditViewPhp;
                                echo '<a href="'.$facetEditViewPhpURL.'">'.$facetEditViewPhp.'</a>';
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php include __DIR__."/../footer.php" ?>
    </body>
</html>
