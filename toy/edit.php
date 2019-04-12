<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP TEST</title>
        <meta http-equiv="content-language" content="ja"/>
        <?php include __DIR__."/../css.php" ?>
    </head>
    <body>
        <?php include __DIR__."/../js.php" ?>
        <script type="text/javascript">
            $(window).load(function () {
                // ナビゲーションバーのactiveを変更
                $("#toy").addClass("active");
            });
            
            function editComplete () {
                $.toast({
                    heading: "変更が完了しました。",
                    text: "ToyTalkの再起動を行って下さい。",
                    showHideTransition: "slide",
                    icon: "info",
                    bgColor: "#375a7f",
                    position: "bottom-right",
                    stack: "1"
                });
            }
            
        </script>
        <?php include __DIR__."/../header.php" ?>
        <?php
//            $filename = "/Users/hassoubeat/apache_php/test.properties";
            $filename = "/usr/bin/toytalk/properties/toytalk.properties";
            $propertyArray = parse_ini_file($filename); 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if ($_POST["accessToken"]) $propertyArray["AccessToken"] = $_POST["accessToken"];
                if ($_POST["eventFetchInterval"]) $propertyArray["EventFetchInterval"] = $_POST["eventFetchInterval"];
                if ($_POST["eventFetchTerm"]) $propertyArray["EventFetchTerm"] = $_POST["eventFetchTerm"];
                try {
                    $fp = fopen($filename, 'w');
                    foreach ($propertyArray as $k => $i) fputs($fp, "$k=$i\n");
                    fclose($fp);
                    print '<script type="text/javascript">editComplete();</script>';
                } catch (Exception $ex) {
                    echo TEST;
                }
                
            }
        ?>
        <div class="container">
            <form method="post" action="edit.php">
                <div class="form-group">
                    <label>アクセストークン : ToyManagerのToyのステータス画面で確認できるアクセストークンを入力してください。</label>
                    <input class="form-control" type="text" name="accessToken" value="<?php print $propertyArray["AccessToken"] ?>">
                </div>
                <div class="form-group">
                    <label>イベント取得間隔 : ToyManagerに対してイベント情報を取得しにいく間隔を設定します。</label><br>
                    <select name="eventFetchInterval">
                        <option value="5" <?php if ($propertyArray["EventFetchInterval"] === "5") echo selected; ?>>5分間隔</option>
                        <option value="10" <?php if ($propertyArray["EventFetchInterval"] === "10") echo selected; ?>>10分間隔</option>
                        <option value="15" <?php if ($propertyArray["EventFetchInterval"] === "15") echo selected; ?>>15分間隔</option>
                        <option value="20" <?php if ($propertyArray["EventFetchInterval"] === "20") echo selected; ?>>20分間隔</option>
                        <option value="25" <?php if ($propertyArray["EventFetchInterval"] === "25") echo selected; ?>>25分間隔</option>
                        <option value="30" <?php if ($propertyArray["EventFetchInterval"] === "30") echo selected; ?>>30分間隔</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>イベント取得期間 : ToyManagerに対して一回のイベント取得で何日先までのイベントを取得するかを設定します。<span id="event-fetch-term-help" class="glyphicon glyphicon-question-sign"></span></label><br>
                    <select name="eventFetchTerm">
                        <option value="5" <?php if ($propertyArray["EventFetchTerm"] === "5") echo selected; ?>>5日先まで</option>
                        <option value="10" <?php if ($propertyArray["EventFetchTerm"] === "10") echo selected; ?>>10日先まで</option>
                        <option value="15" <?php if ($propertyArray["EventFetchTerm"] === "15") echo selected; ?>>15日先まで</option>
                        <option value="20" <?php if ($propertyArray["EventFetchTerm"] === "20") echo selected; ?>>20日先まで</option>
                        <option value="25" <?php if ($propertyArray["EventFetchTerm"] === "25") echo selected; ?>>25日先まで</option>
                        <option value="30" <?php if ($propertyArray["EventFetchTerm"] === "30") echo selected; ?>>30日先まで</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" value="変更">
            </form>
        </div>
        <?php include __DIR__."/../footer.php" ?>
    </body>
</html>
