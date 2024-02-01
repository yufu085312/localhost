<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
            <title></title>
        </meta>
    </head>
    <body>
        <?php

            //１〜１０までループ
            for ($cnt = 1; $cnt <= 10; $cnt++) {
                print $cnt;
                if ($cnt <= 5) {
                    //　変数値が5以下なら🔴マークを追加
                    print "🔴";
                }
                elseif ($cnt <= 8) {
                    //　5以下ではないが８以下なら🟥マークを追加
                    print "🟥";
                }
                else {
                    //いずれの条件にも一致しない場合
                    print "🔻";
                }
                print "<br>";
            }

        ?>
    </body>
</html>